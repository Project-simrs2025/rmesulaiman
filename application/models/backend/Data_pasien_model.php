<?php

class Data_pasien_model extends CI_Model
{
	/**
	 *
	 * @author https://medikasolusidigital.com
	 */

	var $tablepasien = 'master_pasien';
	var $tablekunjungan = 'kunjungan';
	var $tabledokter = 'master_karyawan';
	var $tablepoli = 'master_poly';
	var $column_search_pasien = array('nama','no_rm');
	var $column_search_kunjungan = array('id', 'id_pasien', 'waktu_input');

	public function __construct()
	{
		parent::__construct();
		$this->postgres = $this->load->database('postgres', TRUE);
		date_default_timezone_set("Asia/Jakarta");
	}

	private function _get_datatables_query()
	{
		
		$this->postgres->from($this->tablepasien);
		$i = 0;
		foreach ($this->column_search_pasien as $item) {
			if ($_POST['search']['value']) {
				if ($i === 0) {
					$this->postgres->group_start();
					$this->postgres->like($item, $_POST['search']['value']);
				} else {
					$this->postgres->or_like($item, $_POST['search']['value']);
				}
				if (count($this->column_search_pasien) - 1 == $i)
					$this->postgres->group_end();
			}
			$i++;
		}
	}

	function get_datatables()
	{
	    $this->postgres->select('master_pasien.*, id, nama, no_rm, tanggal_lahir, alamat');
	    
	    $this->postgres->order_by('no_rm', 'asc'); 
	    $this->_get_datatables_query();
	    if ($_POST['length'] != -1) {
	        $this->postgres->limit($_POST['length'], $_POST['start']);
	    }
	    $query = $this->postgres->get();
	    return $query->result();
	}

	public function count_filtered()
	{
		$this->postgres->select('master_pasien.*, id, nama, no_rm, tanggal_lahir, alamat');
		$this->postgres->order_by('no_rm', 'asc'); 
		$this->_get_datatables_query();
		$query = $this->postgres->get();
		return $query->num_rows();
	}

	public function count_all()
	{
		$this->postgres->select('master_pasien.*, id, nama, no_rm, tanggal_lahir, alamat');
		$this->postgres->order_by('no_rm', 'asc'); 
		$this->postgres->from($this->tablepasien);
		return $this->postgres->count_all_results();
	}

	

	// HALAMAN DOWNLOAD
	function get_id_data($id_pasien)
	{
		
		$query = $this->postgres->query("SELECT master_pasien.*,no_rm,no_bpjs,nik,nama FROM master_pasien 
			WHERE id='$id_pasien' GROUP BY id LIMIT 1");
		return $query;
	}


	private function _get_datatables_query_kun()
	{
		
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

	function get_datatables_download($id_pasien)
	{
	    $this->postgres->select('kunjungan.*, 
    COALESCE(poli.name, poli2.name) AS nama_poli, COALESCE(dokter.nama, dokter2.nama) AS nama_dokter, 
    adm.id_dokter, adm.tgl_admit');
	    
	    $this->postgres->join('antrian at', 'at.id_kunjungan = kunjungan.id', 'left');
	    $this->postgres->join('admission adm', 'adm.id_kunjungan = kunjungan.id', 'left');
	    $this->postgres->join('master_poly poli', 'poli.id = adm.asal', 'left');
	    $this->postgres->join('master_poly poli2', 'poli2.id = at.id_poly', 'left'); // tambahan
	    
	    $this->postgres->join('master_karyawan dokter', 'dokter.id = adm.id_dokter', 'left');
	    $this->postgres->join('master_karyawan dokter2', 'CAST(dokter2.id as VARCHAR) = at.id_dokter', 'left');
	    $this->postgres->where('kunjungan.id_pasien', $id_pasien);
	    $this->postgres->order_by('kunjungan.id', 'desc'); 
	    $this->_get_datatables_query_kun();
	    
	    if ($_POST['length'] != -1) {
	        $this->postgres->limit($_POST['length'], $_POST['start']);
	    }
	    $query = $this->postgres->get();
	    return $query->result();
	}


	public function count_all_download($id_pasien)
	{
		$this->postgres->select('kunjungan.*, 
    COALESCE(poli.name, poli2.name) AS nama_poli, COALESCE(dokter.nama, dokter2.nama) AS nama_dokter, 
    adm.id_dokter, adm.tgl_admit');
		$this->postgres->join('antrian at', 'at.id_kunjungan = kunjungan.id', 'left');
		$this->postgres->join('admission adm', 'adm.id_kunjungan = kunjungan.id', 'left');
		$this->postgres->join('master_poly poli', 'poli.id = adm.asal', 'left');
		$this->postgres->join('master_poly poli2', 'poli2.id = at.id_poly', 'left');


	    
	    $this->postgres->join('master_karyawan dokter', 'dokter.id = adm.id_dokter', 'left');
	    $this->postgres->join('master_karyawan dokter2', 'CAST(dokter2.id as VARCHAR) = at.id_dokter', 'left');
		$this->postgres->where('kunjungan.id_pasien', $id_pasien);
	    $this->postgres->order_by('kunjungan.id', 'desc'); 
		$this->_get_datatables_query_kun();
		$query = $this->postgres->get();
		return $query->num_rows();
	}

	public function count_filtered_download($id_pasien)
	{
		$this->postgres->select('kunjungan.*, 
    COALESCE(poli.name, poli2.name) AS nama_poli, COALESCE(dokter.nama, dokter2.nama) AS nama_dokter, 
    adm.id_dokter, adm.tgl_admit');
		$this->postgres->join('antrian at', 'at.id_kunjungan = kunjungan.id', 'left');
		$this->postgres->join('admission adm', 'adm.id_kunjungan = kunjungan.id', 'left');
		$this->postgres->join('master_poly poli', 'poli.id = adm.asal', 'left');
		$this->postgres->join('master_poly poli2', 'poli2.id = at.id_poly', 'left');

	    $this->postgres->join('master_karyawan dokter', 'dokter.id = adm.id_dokter', 'left');
	    $this->postgres->join('master_karyawan dokter2', 'CAST(dokter2.id as VARCHAR) = at.id_dokter', 'left');
		$this->postgres->where('kunjungan.id_pasien', $id_pasien);
	    $this->postgres->order_by('kunjungan.id', 'desc'); 
		$this->postgres->from($this->tablekunjungan);
		return $this->postgres->count_all_results();
	}
	//////////////////////////////////////////////////////////////////////////////////////////
	// BATAS


    /////////////////////////////////////////////////////////////////////////////
    

	public function get_edit_data($id_pasien)
	{
		$this->postgres->select('master_pasien.*, master_pasien.nama AS nama_pasien, master_pasien.no_rm AS no_rm, master_pasien.nik, master_pasien.no_bpjs AS no_bpjs, master_pasien.pendidikan_terakhir, master_pasien.alamat, master_pasien.no_handphone, master_pasien.tanggal_lahir, master_pasien.id AS patien_id, jk.nama as jenkel, pk.nama as nama_pekerjaan, suku.nama as nama_suku, agama.nama as nama_agama');
		$this->postgres->from('master_pasien');
	    $this->postgres->join('master_jenkel jk', 'CAST(jk.id AS char) = master_pasien.jenkel', 'left');
	    $this->postgres->join('master_pekerjaan pk', 'CAST(pk.id AS VARCHAR) = master_pasien.id_pekerjaan', 'left');
		$this->postgres->join('master_suku suku', 'CAST(suku.id AS char) = master_pasien.id_suku', 'left');
		$this->postgres->join('master_agama agama', 'CAST(agama.id AS char) = master_pasien.id_agama', 'left');

		$this->postgres->where('master_pasien.id', $id_pasien);
		$this->postgres->limit(1);
		$query = $this->postgres->get();
		if (count($query->result()) > 0) {
			return $query->row();
		}
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


	
	public function get_edit_data2($id_kunjungan)
	{
		$this->postgres->select('admission.*, p.nama AS nama_pasien, lt.nama_lantai, ru.nama_ruangan, k.nama AS nama_jenis_pasien,bed.no_bad,dokter.nama as nama_dokter,poli.name as nama_poli, p.no_bpjs as no_bpjs, p.nik, p.tanggal_lahir, pk.nama as nama_pekerjaan, jk.nama as jenkel, p.alamat, p.pendidikan_terakhir, agama.nama as nama_agama, p.no_handphone, dokter.path_ttd, suku.nama as nama_suku, penjamin.nama as nama_hub_pasien, penjamin.no_telepon as telp_hub_pasien, penjamin.alamat as alamat_hub_pasien, hub_keluarga.nama as hubungan_keluarga');
		$this->postgres->from('admission');
		$this->postgres->join('master_pasien p', 'p.id = admission.id_pasien', 'left');
		$this->postgres->join(
			'master_pasien_penjamin penjamin',
			'p.id = CAST(penjamin.id_pasien AS BIGINT)',
			'left'
		);
		$this->postgres->join('master_hubungan_keluarga hub_keluarga', 'hub_keluarga.id = penjamin.id_hubungan', 'left');
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
	
	public function get_edit_data3($id_kunjungan)
	{
		$this->postgres->select('antrian.*, antrian.id_kunjungan,antrian.id_pasien,patient.nama AS nama_pasien, patient.no_rm AS no_rm, patient.nik AS nik, patient.pendidikan_terakhir, patient.alamat, patient.no_handphone, patient.tanggal_lahir, penjamin.nama AS nama_jenis_pasien,k.nama as nama_dokter,poly.name AS nama_poli,antrian.id_poly AS poli_id,patient.id AS patien_id, jk.nama as jenkel, pk.nama as nama_pekerjaan, suku.nama as nama_suku, agama.nama as nama_agama, penjamin_pasien.nama as nama_hub_pasien, penjamin_pasien.alamat as alamat_hub_pasien,antrian.waktu_masuk AS tgl_admit,penjamin_pasien.no_telepon as telp_hub_pasien, patient.no_bpjs as no_bpjs, sep.klsrawat as kelas, transaksi.total as biaya, dischar.type as cara_pulang, antrian.waktu_keluar as tgl_discharge,antrian.waktu_keluar as tanggal_keluar');
		$this->postgres->from('antrian');
		$this->postgres->join('master_pasien patient', 'patient.id = antrian.id_pasien', 'left');
		$this->postgres->join('master_pasien_penjamin penjamin_pasien', 'patient.id = CAST(penjamin_pasien.id_pasien AS BIGINT)', 'left');
		$this->postgres->join('master_kategori_harga penjamin', 'CAST(penjamin.id AS varchar) = CAST(antrian.id_kategori_harga AS varchar)', 'left');
		$this->postgres->join('kunjungan kunj', 'kunj.id = antrian.id_kunjungan', 'left');
		/////////////////// new ////////////////////////////////////////////////////////
		$this->postgres->join('master_sep sep', 'sep.no_sep = kunj.no_sep', 'left');
		$this->postgres->join('transaksi_invoice transaksi', 'CAST(transaksi.id_pasien as INTEGER) = antrian.id_pasien', 'left');
		$this->postgres->join('discharge dischar', 'dischar.id_pasien = antrian.id_pasien', 'left');
		/////////////////// new ////////////////////////////////////////////////////////
		$this->postgres->join('master_jenkel jk', 'CAST(jk.id AS char) = patient.jenkel', 'left');
		$this->postgres->join('master_pekerjaan pk', 'CAST(pk.id AS VARCHAR) = patient.id_pekerjaan', 'left');
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
	public function get_edit_data_pasien($id_kunjungan)
	{
		$this->postgres->select('admission.*, p.nama AS nama_pasien, lt.nama_lantai, ru.nama_ruangan, k.nama AS nama_jenis_pasien,bed.no_bad,dokter.nama as nama_dokter,poli.name as nama_poli, p.nik, p.tanggal_lahir,p.no_bpjs as no_bpjs, pk.nama as nama_pekerjaan, jk.nama as jenkel, p.alamat, p.pendidikan_terakhir, agama.nama as nama_agama, p.no_handphone, dokter.path_ttd, suku.nama as nama_suku, penjamin.nama as nama_hub_pasien, penjamin.no_telepon as telp_hub_pasien, penjamin.alamat as alamat_hub_pasien,kunj.waktu_input as waktu_input, hub_keluarga.nama as hubungan_keluarga');
		$this->postgres->from('admission');
		$this->postgres->join('master_pasien p', 'p.id = admission.id_pasien', 'left');
		$this->postgres->join('master_pasien_penjamin penjamin', 'p.id = CAST(penjamin.id_pasien AS BIGINT)', 'left');
		$this->postgres->join('master_hubungan_keluarga hub_keluarga', 'hub_keluarga.id = penjamin.id_hubungan', 'left');
		$this->postgres->join('tbl_lantai lt', 'lt.id_lantai = admission.lantai', 'left');
		$this->postgres->join('tbl_ruangan ru', 'ru.id_ruangan = admission.ruang', 'left');
		$this->postgres->join('tbl_bad bed', 'bed.id_bad = admission.bad', 'left');
		$this->postgres->join('master_kategori_harga k', 'k.id = p.id_jenis_pasien', 'left');
		$this->postgres->join('master_pekerjaan pk', 'CAST(pk.id AS VARCHAR) = p.id_pekerjaan', 'left');
		$this->postgres->join('kunjungan kunj', 'kunj.id_pasien = admission.id_pasien', 'left');

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
	public function get_edit_data_pasien_rj($id_kunjungan)
	{
		$this->postgres->select('antrian.*, antrian.id_kunjungan,antrian.waktu_masuk,antrian.id_pasien,patient.nama AS nama_pasien, patient.no_rm AS no_rm, patient.nik AS nik, patient.pendidikan_terakhir, patient.alamat, patient.no_handphone, patient.tanggal_lahir, penjamin.nama AS nama_jenis_pasien,k.nama as nama_dokter,poly.name AS nama_poli,antrian.id_poly AS poli_id,patient.id AS patien_id, jk.nama as jenkel, pk.nama as nama_pekerjaan, suku.nama as nama_suku, agama.nama as nama_agama, patient.no_bpjs as no_bpjs, a.tgl_admit as tgl_admit, penjamin_pasien.nama as nama_hub_pasien, penjamin_pasien.alamat as alamat_hub_pasien, penjamin_pasien.no_handphone as telp_hub_pasien');
		$this->postgres->from('antrian');
		$this->postgres->join('master_pasien patient', 'patient.id = antrian.id_pasien', 'left');
		$this->postgres->join('admission a', 'a.id_kunjungan = antrian.id_kunjungan', 'left');
		$this->postgres->join('master_kategori_harga penjamin', 'CAST(penjamin.id AS varchar) = CAST(antrian.id_kategori_harga AS varchar)', 'left');
		$this->postgres->join('master_pasien_penjamin penjamin_pasien', 'patient.id = CAST(penjamin_pasien.id_pasien AS BIGINT)', 'left');
	    $this->postgres->join('master_jenkel jk', 'CAST(jk.id AS char) = patient.jenkel', 'left');
	    $this->postgres->join('master_pekerjaan pk', 'CAST(pk.id AS VARCHAR) = patient.id_pekerjaan', 'left');
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
	// public function get_pdfrm8_html($id) {
    //     // Ambil data dan render view pdfrm8
    //     $data = [...]; // ambil data sesuai $id
    //     return $this->load->view('pdf/pdfrm8', $data, TRUE);
    // }

    // public function get_pdfrm9_html($id) {
    //     $data = [...]; // ambil data sesuai $id
    //     return $this->load->view('pdf/pdfrm9', $data, TRUE);
    // }

}
