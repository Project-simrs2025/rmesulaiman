<?php

class Data_klaim_model extends CI_Model
{
    /**
     *
     * @author https://medikasolusidigital.com
     */

    var $tablekunjungan = 'kunjungan';
    var $column_search_kunjungan = array('p.no_rm', 'p.nama', 'kunjungan.waktu_input');
    var $tablermebaru = 'rmebaru';
    public function __construct()
    {
        parent::__construct();
        $this->postgres = $this->load->database('postgres', TRUE);
        date_default_timezone_set("Asia/Jakarta");
    }

    private function _get_datatables_query()
    {
        $tgl_awal = $this->input->post('tgl_awal');
        $tgl_akhir = $this->input->post('tgl_akhir');

        if ($tgl_awal && $tgl_akhir) {
            $this->postgres->where("SUBSTRING(kunjungan.waktu_input FROM 1 FOR 10) BETWEEN '{$tgl_awal}' AND '{$tgl_akhir}'");
        } elseif ($tgl_awal) {
            $this->postgres->where("SUBSTRING(kunjungan.waktu_input FROM 1 FOR 10) >= '{$tgl_awal}'");
        } elseif ($tgl_akhir) {
            $this->postgres->where("SUBSTRING(kunjungan.waktu_input FROM 1 FOR 10) <= '{$tgl_akhir}'");
        }


        $this->postgres->select('kunjungan.*, p.nama AS nama_pasien, p.no_rm');
        $this->postgres->join('master_pasien p', 'p.id = kunjungan.id_pasien', 'left');
        // $this->postgres->where("SUBSTRING(kunjungan.waktu_input FROM 1 FOR 4) =", date('2024'));
        $this->postgres->order_by('kunjungan.waktu_input', 'desc');
        $this->postgres->from($this->tablekunjungan);
        $i = 0;
        foreach ($this->column_search_kunjungan as $item) {
            if ($_POST['search']['value']) {
                if ($i === 0) {
                    $this->postgres->group_start();
                    $this->postgres->like($item, $_POST['search']['value']);
                } else {
                    $this->postgres->or_like($item, $_POST['search']['value']);
                }
                if (count($this->column_search_kunjungan) - 1 == $i)
                    $this->postgres->group_end();
            }
            $i++;
        }
    }


    public function get_datatables()
    {

        $this->_get_datatables_query();
        if ($_POST['length'] != -1)
            $this->postgres->limit($_POST['length'], $_POST['start']);
        $query = $this->postgres->get();
        return $query->result();
    }


    public function count_filtered()
    {

        $this->_get_datatables_query();
        $query = $this->postgres->get();
        return $query->num_rows();
    }

    public function count_all()
    {
        $this->postgres->from($this->tablekunjungan);
        $this->postgres->join('master_pasien p', 'p.id = kunjungan.id_pasien', 'left');
        $this->postgres->where("SUBSTRING(kunjungan.waktu_input FROM 1 FOR 4) =", date('Y'));

        return $this->postgres->count_all_results();
    }
    function get_id_kunjungan($id_kunjungan)
    {
        $sql = "SELECT id,no_sep,id_pasien FROM kunjungan WHERE id = ? LIMIT 1";
        $query = $this->postgres->query($sql, array($id_kunjungan));

        if (!$query) {
            // Logging error untuk debugging
            log_message('error', 'Query gagal dijalankan: ' . $this->postgres->last_query());
            return false;
        }

        return $query;
    }
    function get_pasien($id_pasien)
    {
        $sql = "SELECT id,no_rm,nama FROM master_pasien WHERE id = ? LIMIT 1";
        $query = $this->postgres->query($sql, array($id_pasien));

        if (!$query) {
            log_message('error', 'Query gagal dijalankan: ' . $this->postgres->last_query());
            return false;
        }

        return $query;
    }
    function get_data_dari($id_kunjungan)
    {
        $sql = "SELECT 
                    antrian.*, 
                    admission.admit_type,
                    admission.id_kunjungan AS admission_id_kunjungan, 
                    antrian.id_kunjungan AS antrian_id_kunjungan
                FROM antrian
                LEFT JOIN admission 
                    ON admission.id_kunjungan = antrian.id_kunjungan
                WHERE antrian.id_kunjungan = ?
                LIMIT 1";

        $query = $this->postgres->query($sql, array($id_kunjungan));
        return $query;
    }
    public function get_data_darirj($id_kunjungan)
    {
        $this->postgres->select('antrian.*, antrian.id_kunjungan,antrian.waktu_masuk,antrian.id_pasien,patient.nama AS nama_pasien, patient.no_rm AS no_rm, patient.nik AS nik, patient.pendidikan_terakhir, patient.alamat, patient.no_handphone, patient.tanggal_lahir, penjamin.nama AS nama_jenis_pasien, patient.no_bpjs as no_bpjs,k.nama as nama_dokter,k.path_ttd as path_ttd,poly.name AS nama_poli,antrian.id_poly AS poli_id,patient.id AS patien_id, jk.nama as jenkel, pk.nama as nama_pekerjaan, suku.nama as nama_suku, agama.nama as nama_agama, mprj.name AS cara_pulang, msep.klsrawat');
        $this->postgres->from('antrian');
        $this->postgres->join('master_pasien patient', 'patient.id = antrian.id_pasien', 'left');
        
        $this->postgres->join('kunjungan kun', 'kun.id = antrian.id_kunjungan', 'left');
        $this->postgres->join('master_sep msep', 'msep.no_sep = kun.no_sep', 'left');

        $this->postgres->join('master_kategori_harga penjamin', 'CAST(penjamin.id AS varchar) = CAST(antrian.id_kategori_harga AS varchar)', 'left');
        $this->postgres->join('master_jenkel jk', 'CAST(jk.id AS char) = patient.jenkel', 'left');
        $this->postgres->join('master_pekerjaan pk', 'CAST(pk.id AS VARCHAR) = patient.id_pekerjaan', 'left');
        $this->postgres->join('master_pulang_rawat_jalan mprj', 'CAST(mprj.id AS VARCHAR) = antrian.cara_pulang', 'left');
        $this->postgres->join('master_suku suku', 'CAST(suku.id AS char) = patient.id_suku', 'left');
        $this->postgres->join('master_agama agama', 'CAST(agama.id AS char) = patient.id_agama', 'left');
        $this->postgres->join('master_karyawan k', 'CAST(k.id AS varchar) = CAST(antrian.id_dokter AS varchar)', 'left');
        $this->postgres->join('master_poly poly', 'poly.id = antrian.id_poly', 'left');
        $this->postgres->where('antrian.id_kunjungan', $id_kunjungan);
        $this->postgres->limit(1);
        $query = $this->postgres->get();
        if (count($query->result()) > 0) {
            return $query->row();
        }
    }
    public function get_data_dariri($id_kunjungan)
    {
        $this->postgres->select('admission.*, p.nama AS nama_pasien, lt.nama_lantai, ru.nama_ruangan, k.nama AS nama_jenis_pasien,bed.no_bad,dokter.nama as nama_dokter,poli.name as nama_poli, p.nik, p.tanggal_lahir, pk.nama as nama_pekerjaan, jk.nama as jenkel, p.alamat, p.pendidikan_terakhir, agama.nama as nama_agama, p.no_handphone, dokter.path_ttd, suku.nama as nama_suku, penjamin.nama as nama_hub_pasien,penjamin.alamat as alamat_hub_pasien,penjamin.no_handphone as noHp_hub_pasien, hub.nama as hubungan_keluarga_pasien, kawin.nama as status_nikah, warga.nama as nama_bangsa, p.no_bpjs as no_bpjs, mprj.name AS cara_pulang, ant.cara_pulang, msep.klsrawat');
        $this->postgres->from('admission');
        $this->postgres->join('master_pasien p', 'p.id = admission.id_pasien', 'left');
        $this->postgres->join('antrian ant', 'CAST(ant.id_kunjungan AS INT) = admission.id_kunjungan', 'left');
        $this->postgres->join('kunjungan kun', 'kun.id = admission.id_kunjungan', 'left');
        $this->postgres->join('master_sep msep', 'msep.no_sep = kun.no_sep', 'left');
        $this->postgres->join('master_pulang_rawat_jalan mprj', 'CAST(mprj.id AS VARCHAR) = ant.cara_pulang', 'left');
        $this->postgres->join('master_pasien_penjamin penjamin', ' CAST(penjamin.id_pasien AS INT)= admission.id_pasien', 'left');
        $this->postgres->join('master_hubungan_keluarga hub', ' hub.id = penjamin.id_hubungan', 'left');
        $this->postgres->join('master_warga_negara warga', 'CAST(warga.id as CHAR) = p.id_warga_negara', 'left');
        $this->postgres->join('master_status_kawin kawin', ' CAST(kawin.id AS CHAR)= p.id_status_kawin', 'left');

        // $this->postgres->join('transaksi_invoice_detail trans', 'CAST(trans.id_kunjungan AS integer) = admission.id_kunjungan', 'left');

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
    public function get_total_harga_by_kunjungan($id_kunjungan)
    {
        $this->postgres->select('SUM(harga * kuantitas) AS total_harga');
        $this->postgres->from('transaksi_invoice_detail');
        $this->postgres->where('id_kunjungan', $id_kunjungan);
        $this->postgres->where('status_hapus', 'N');
        $query = $this->postgres->get();

        if ($query->num_rows() > 0) {
            return $query->row()->total_harga ?? 0;
        }

        return 0;
    }

    ////////////////////////////////////////////////////////////////////////////////////////////
    // MODEL RM 9 
    public function get_by_id($id_kunjungan, $berkas_klaim)
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
        $this->postgres->where('status_aktif', 1);
        $query = $this->postgres->get();

        // Jika data tidak ditemukan, log error dan return null
        if ($query->num_rows() == 0) {
            log_message('error', 'get_by_id: Data tidak ditemukan untuk ID: ' . $id_kunjungan);
            return null;
        }

        return $query->row();
    }
    // MODEL RM 9 
    ////////////////////////////////////////////////////////////////////////////////////////////



    function get_karyawan_by_nama($dokters)
    {
        $dokters = trim($dokters);
        $sql = "SELECT path_ttd FROM master_karyawan WHERE nama ILIKE ? LIMIT 1";
        $query = $this->postgres->query($sql, array("%$dokters%"));

        if ($query->num_rows() > 0) {
            $path = trim($query->row()->path_ttd);
            return !empty($path) ? $path : null;
        } else {
            return null;
        }
    }
    
    public function get_invoice_data($id_kunjungan)
    {

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
                        $nama_transaksi = "(" . $data->kode . ") " . $data->nama;
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
                            $nama_transaksi .= "<b>" . $row->nama . "</b><br>";
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
    public function get_radiologi_by_patient($id_kunjungan)
    {
        $this->postgres->select("r.id, r.id_kunjungan, r.id_radiologi, r.created_at, m.nama, h.title, h.note, 
                          h.image, h.image2, h.image3, h.image4, h.image5, h.image6");
        $this->postgres->from("pasien_radiologi r");
        $this->postgres->join("pasien_hasilradiologi h", "h.id_order = r.id", "left");
        $this->postgres->join("radio m", "m.id = r.id_radiologi", "left");
        $this->postgres->where("r.id_kunjungan", $id_kunjungan);
        $this->postgres->where("r.deleted", 'N');
        $this->postgres->order_by("r.created_at", "DESC");

        return $this->postgres->get()->result_array();
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

    public function get_sep_latest($no_sep)
    {
        $this->postgres->select('*');
        $this->postgres->from('master_sep');
        $this->postgres->where(['no_sep' => $no_sep, 'sts_hps' => 'N']);
        $this->postgres->order_by('id', 'DESC');
        $this->postgres->limit(1);
        return $this->postgres->get()->row_array();
    }

    public function get_sep_all($no_sep)
    {
        $this->postgres->select('*');
        $this->postgres->from('master_sep');
        $this->postgres->where(['no_sep' => $no_sep, 'sts_hps' => 'N']);
        return $this->postgres->get()->result_array();
    }

    public function get_sep_first($no_sep)
    {
        $this->postgres->select('*');
        $this->postgres->from('master_sep');
        $this->postgres->where(['no_sep' => $no_sep, 'sts_hps' => 'N']);
        $this->postgres->order_by('id', 'ASC');
        $this->postgres->limit(1);
        return $this->postgres->get()->row_array();
    }
}
