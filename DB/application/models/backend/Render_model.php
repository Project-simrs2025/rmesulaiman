<?php
class Render_model extends CI_Model{
	
	var $tablermebaru = 'rmebaru';
	public function __construct()
	{
		parent::__construct();
		$this->postgres = $this->load->database('postgres', TRUE);
		date_default_timezone_set("Asia/Jakarta");
	}
	public function get_by_id_rm9($id_kunjungan,$berkas_klaim)
    {
        // Cek apakah ID valid
        if (empty($id_kunjungan)) {
            log_message('error', 'get_by_id: ID yang diberikan kosong atau null.');
            return null;
        }

        $this->postgres->select('*'); // Ambil semua kolom
        $this->postgres->from($this->tablermebaru);
        $this->postgres->where('id_kunjungan', $id_kunjungan);
        $this->postgres->where('nama_berkas', $berkas_klaim);
        $query = $this->postgres->get();

        // Jika data tidak ditemukan, log error dan return null
        if ($query->num_rows() == 0) {
            log_message('error', 'get_by_id: Data tidak ditemukan untuk ID: ' . $id_kunjungan);
            return null;
        }

        return $query->row();
    }
    public function get_by_id_rm2a($id_kunjungan,$berkas_klaim)
    {
        // Cek apakah ID valid
        if (empty($id_kunjungan)) {
            log_message('error', 'get_by_id: ID yang diberikan kosong atau null.');
            return null;
        }

        $this->postgres->select('*'); // Ambil semua kolom
        $this->postgres->from($this->tablermebaru);
        $this->postgres->where('id_kunjungan', $id_kunjungan);
        $this->postgres->where('nama_berkas', $berkas_klaim);
        $query = $this->postgres->get();

        // Jika data tidak ditemukan, log error dan return null
        if ($query->num_rows() == 0) {
            log_message('error', 'get_by_id: Data tidak ditemukan untuk ID: ' . $id_kunjungan);
            return null;
        }

        return $query->row();
    }
	public function get_edit_data($id_kunjungan)
	{
		$this->postgres->select('admission.*, p.nama AS nama_pasien, lt.nama_lantai, ru.nama_ruangan, k.nama AS nama_jenis_pasien,bed.no_bad,dokter.nama as nama_dokter,poli.name as nama_poli, p.nik, p.tanggal_lahir, pk.nama as nama_pekerjaan, jk.nama as jenkel, p.alamat, p.pendidikan_terakhir, agama.nama as nama_agama, p.no_handphone, dokter.path_ttd, suku.nama as nama_suku');
		$this->postgres->from('admission');
		$this->postgres->join('master_pasien p', 'p.id = admission.id_pasien', 'left');
		$this->postgres->join('tbl_lantai lt', 'lt.id_lantai = admission.lantai', 'left');
		$this->postgres->join('tbl_ruangan ru', 'ru.id_ruangan = admission.ruang', 'left');
		$this->postgres->join('tbl_bad bed', 'bed.id_bad = admission.bad', 'left');
		$this->postgres->join('master_kategori_harga k', 'k.id = p.id_jenis_pasien', 'left');
		$this->postgres->join('master_pekerjaan pk', 'CAST(pk.id AS VARCHAR) = p.id_pekerjaan', 'left');
		$this->postgres->join('master_suku suku', 'CAST(suku.id AS char) = p.id_suku', 'left');
		$this->postgres->join('master_agama agama', 'CAST(agama.id AS char) = p.id_agama', 'left');
		$this->postgres->join('master_jenkel jk', 'CAST(jk.id AS char) = p.jenkel', 'left');
		$this->postgres->join('master_karyawan dokter', 'dokter.id = admission.id_dokter', 'left');
		$this->postgres->join('master_poly poli', 'poli.id = admission.asal', 'left');
		$this->postgres->where('admission.id_kunjungan', $id_kunjungan);
		$query = $this->postgres->get();
		if (count($query->result()) > 0) {
			return $query->row();
		}
	}
	public function get_resep_by_kunjungan($id_kunjungan)
    {
        $sql = "SELECT 
                    pasien_resep.nama_brand, 
                    pasien_resep.qty, 
                    pasien_resep.dosis, 
                    pasien_resep.eticket_a,  
                    pasien_resep.eticket_b,
                    pasien_resep.eticket_c, 
                    pasien_resep.deskripsi_signa,
                    inv1.nama AS instruksi1_nama,
                    inv2.nama AS instruksi2_nama
                FROM pasien_resep
                JOIN master_pasien ON pasien_resep.id_pasien = master_pasien.id
                LEFT JOIN inv_intruksi_obat AS inv1 ON inv1.id = pasien_resep.instruksi1
                LEFT JOIN inv_intruksi_obat AS inv2 ON inv2.id = pasien_resep.instruksi2
                WHERE pasien_resep.id_kunjungan = ?
                  AND pasien_resep.status_hapus = 'N'";

        $query = $this->postgres->query($sql, array($id_kunjungan));
        return $query->result_array();
    }

    function get_karyawan_by_nama($dokters)
	{
		$sql = "SELECT path_ttd FROM master_karyawan WHERE nama ILIKE ? LIMIT 1";
		$query = $this->postgres->query($sql, array("%$dokters%"));

		if ($query->num_rows() > 0) {
			return $query->row()->path_ttd;
		} else {
			return null;
		}
	}


	public function get_invoice_data($id_kunjungan){

        // Mengambil data invoice dengan join kunjungan
        $sql = "SELECT DISTINCT t.no_invoice, ti.id_invoice
                FROM transaksi_invoice_detail ti 
                INNER JOIN lab_order no ON (no.id_transaksi_invoice_detail = ti.id)
                INNER JOIN transaksi_invoice t ON (t.id = ti.id_invoice)
                LEFT JOIN kunjungan k ON k.id = ti.id_kunjungan  -- JOIN Kunjungan
                WHERE ti.id_kunjungan = ? AND t.id_kunjungan = ?
                GROUP BY t.no_invoice, ti.id_invoice
                ORDER BY ti.id_invoice DESC";

        // Query untuk mengambil data invoice
        $query = $this->postgres->query($sql, array($id_kunjungan, $id_kunjungan));
        $invoice_data = [];

        // Iterasi untuk setiap invoice
        foreach ($query->result() as $invoice) {
            // Query untuk mengambil detail transaksi
            $details_sql = "SELECT ti.*, k.waktu_input AS tgl_kunjungan
                            FROM transaksi_invoice_detail ti 
                            LEFT JOIN kunjungan k ON k.id = ti.id_kunjungan  -- JOIN Kunjungan
                            WHERE ti.id_invoice = ? AND ti.id_kunjungan = ? 
                            AND ti.jenis IN('S', 'M', 'E', 'P', 'PT')
                            ORDER BY ti.waktu_input DESC";
            
            $details_query = $this->postgres->query($details_sql, array($invoice->id_invoice, $id_kunjungan));

            $detail_items = [];
            // Iterasi untuk setiap detail transaksi
            foreach ($details_query->result() as $detail) {
                $jenis = "";
                $nama_transaksi = "";

                // Menentukan jenis transaksi berdasarkan jenis
                switch ($detail->jenis) {
                    case 'E':
                        $data = $this->postgres->query("SELECT p.nama_paket FROM billing_paket p WHERE p.id = ?", [$detail->id_detail])->row();
                        $jenis = "MCU";
                        $nama_transaksi = $data->nama_paket ?? '';
                        break;
                    case 'S':
                        $data = $this->postgres->query("SELECT * FROM lab_analysis WHERE id = ?", [$detail->id_detail])->row();
                        $jenis = "SINGLE TEST";
                        $nama_transaksi = "(".$data->kode.") ".$data->nama;
                        break;
                    case 'M':
                        $data = $this->postgres->query("SELECT * FROM lab_analysis_group WHERE id = ?", [$detail->id_detail])->row();
                        $jenis = "Multiple Test";
                        $nama_transaksi = $data->nama;
                        break;
                    case 'P':
                        $data = $this->postgres->query("SELECT * FROM lab_analysis_paket WHERE id = ?", [$detail->id_detail])->row();
                        $jenis = "Paket";
                        $nama_transaksi = $data->nama;
                        break;
                    case 'PT':
                        $jenis = "Paket Test";
                        $nama_transaksi = "";

                        $paket_query = $this->postgres->query("SELECT p.nama, d.* 
                                                            FROM paket_test p 
                                                            INNER JOIN paket_test_detail d ON d.id_paket_test = p.id  
                                                            WHERE p.id = ? ORDER BY d.jenis ASC", [$detail->id_detail]);

                        foreach ($paket_query->result() as $row) {
                            $nama_transaksi .= "<b>".$row->nama."</b><br>";
                            if ($row->jenis == 'SINGLE_TEST') {
                                $lab = $this->postgres->query("SELECT * FROM lab_analysis WHERE id = ?", [$row->id_detail])->row();
                                $nama_transaksi .= $lab->nama . ' ' . $lab->kode . '<br>';
                            } elseif ($row->jenis == 'MULTI_TEST') {
                                $lab = $this->postgres->query("SELECT * FROM lab_analysis_group WHERE id = ?", [$row->id_detail])->row();
                                $nama_transaksi .= $lab->nama . '<br>';
                            }
                        }
                        break;
                }

                // Menambahkan detail transaksi ke dalam array
                $detail_items[] = [
                    'tanggal_input' => $detail->waktu_input,
                    'jenis' => $jenis,
                    'nama_transaksi' => $nama_transaksi,
                    'no_rm' => $detail->id_pasien,
                    'qty' => $detail->kuantitas,
                    'no_order' => $detail->no_order,
                    'id_invoice' => $detail->id_invoice,
                    'id_kunjungan' => $detail->id_kunjungan,
                    'tgl_kunjungan' => $detail->tgl_kunjungan,  // Menambahkan tanggal_kunjungan
                ];
            }

            // Menambahkan data invoice dan detail ke dalam array invoice_data
            $invoice_data[] = [
                'no_invoice' => $invoice->no_invoice,
                'details' => $detail_items
            ];
        }

        // Mengembalikan data invoice yang sudah dilengkapi dengan detail dan tanggal kunjungan
        return $invoice_data;
    }

}