<?php

class Admission_model extends CI_Model
{
	/**
	 *
	 * @author https://medikasolusidigital.com
	 */

	var $tableadmission = 'admission';
	var $tablemenu = 'menurme';
	var $tabledokter = 'master_karyawan';
	var $tablelantai = 'tbl_lantai';
	var $column_search_admission = array('admission.tgl_admit', 'p.no_rm', 'p.nama', 'lt.nama_lantai', 'ru.nama_ruangan', 'k.nama', 'bed.no_bad', 'dokter.nama', 'poli.name');
	var $column_search_menu = array('menurme.rm', 'menurme.isi');

	public function __construct()
	{
		parent::__construct();
		$this->postgres = $this->load->database('postgres', TRUE);
		date_default_timezone_set("Asia/Jakarta");
	}

	private function _get_datatables_query()
	{
		if ($this->input->post('tgl')) {
			$this->postgres->like('admission.tgl_admit', $this->input->post('tgl'));
		}
		if ($this->input->post('dokter')) {
			$this->postgres->like('dokter.nama', $this->input->post('dokter'));
		}
		if ($this->input->post('lantai')) {
			$this->postgres->like('lt.nama_lantai', $this->input->post('lantai'));
		}
		$this->postgres->select('admission.*, p.nama AS nama_pasien, lt.nama_lantai, ru.nama_ruangan, k.nama AS nama_jenis_pasien,bed.no_bad,dokter.nama as nama_dokter,poli.name as nama_poli, p.no_bpjs as no_bpjs');
		$this->postgres->from($this->tableadmission);
		$i = 0;
		foreach ($this->column_search_admission as $item) {
			if ($_POST['search']['value']) {
				if ($i === 0) {
					$this->postgres->group_start();
					$this->postgres->like($item, $_POST['search']['value']);
				} else {
					$this->postgres->or_like($item, $_POST['search']['value']);
				}
				if (count($this->column_search_admission) - 1 == $i)
					$this->postgres->group_end();
			}
			$i++;
		}
	}

	public function get_all_diagnosa($searchQuery, $limit, $offset)
	{
		$this->postgres->select('id, nama, code');
		$this->postgres->from('icd10new');

		if (!empty($searchQuery)) {
			$this->postgres->where('LOWER(nama) LIKE', '%' . strtolower($searchQuery) . '%');
			$this->postgres->or_where('LOWER(code) LIKE', '%' . strtolower($searchQuery) . '%');
		}

		$this->postgres->order_by('id', 'ASC');
		$this->postgres->limit($limit, $offset);

		return $this->postgres->get()->result();
	}

	public function count_all_diagnosa($searchQuery = null)
	{
		$this->postgres->from('icd10new');

		if (!empty($searchQuery)) {
			$this->postgres->like('nama', $searchQuery); // Search by 'nama' column
		}

		return $this->postgres->count_all_results();
	}

	// AMBIL CODE ICD 9
	public function get_all_diagnosa9($searchQuery, $limit, $offset)
	{
		$this->postgres->select('id, nama, code');
		$this->postgres->from('icd9cm');

		if (!empty($searchQuery)) {
			$this->postgres->where('LOWER(nama) LIKE', '%' . strtolower($searchQuery) . '%');
			$this->postgres->or_where('LOWER(code) LIKE', '%' . strtolower($searchQuery) . '%');
		}

		$this->postgres->order_by('id', 'ASC');
		$this->postgres->limit($limit, $offset);

		return $this->postgres->get()->result();
	}

	public function count_all_diagnosa9($searchQuery = null)
	{
		$this->postgres->from('icd9cm');

		if (!empty($searchQuery)) {
			$this->postgres->like('nama', $searchQuery); // Search by 'nama' column
		}

		return $this->postgres->count_all_results();
	}
	// AMBIL CODE ICD 9


	// new model
	// poli
	public function get_all_poli($searchQuery, $limit, $offset)
	{
		$this->postgres->select('id, name');
		$this->postgres->from('master_poly');

		if (!empty($searchQuery)) {
			$this->postgres->where('LOWER(name) LIKE', '%' . strtolower($searchQuery) . '%');
			$this->postgres->or_where('LOWER(code) LIKE', '%' . strtolower($searchQuery) . '%');
		}

		$this->postgres->order_by('id', 'ASC');
		$this->postgres->limit($limit, $offset);

		return $this->postgres->get()->result();
	}

	public function count_all_poli($searchQuery = null)
	{
		$this->postgres->from('master_poly');

		if (!empty($searchQuery)) {
			$this->postgres->like('name', $searchQuery); // Search by 'nama' column
		}

		return $this->postgres->count_all_results();
	}


	// ruangan
	public function get_all_ruangan($searchQuery, $limit, $offset)
	{
		$this->postgres->select('id_ruangan, nama_ruangan');
		$this->postgres->from('tbl_ruangan');

		if (!empty($searchQuery)) {
			$this->postgres->where('LOWER(nama_ruangan) LIKE', '%' . strtolower($searchQuery) . '%');
		}

		$this->postgres->order_by('id_ruangan', 'ASC');
		$this->postgres->limit($limit, $offset);

		return $this->postgres->get()->result();
	}

	public function count_all_ruangan($searchQuery = null)
	{
		$this->postgres->from('tbl_ruangan');

		if (!empty($searchQuery)) {
			$this->postgres->like('nama_ruangan', $searchQuery); // Search by 'nama' column
		}

		return $this->postgres->count_all_results();
	}


	// new model


	function get_datatables()
	{
		$this->postgres->select('admission.*, p.nama AS nama_pasien, lt.nama_lantai, ru.nama_ruangan, k.nama AS nama_jenis_pasien,bed.no_bad,dokter.nama as nama_dokter,poli.name as nama_poli, p.no_bpjs as no_bpjs');
		$this->postgres->join('master_pasien p', 'p.id = admission.id_pasien', 'left');
		$this->postgres->join('tbl_lantai lt', 'lt.id_lantai = admission.lantai', 'left');
		$this->postgres->join('tbl_ruangan ru', 'ru.id_ruangan = admission.ruang', 'left');
		$this->postgres->join('tbl_bad bed', 'bed.id_bad = admission.bad', 'left');
		$this->postgres->join('master_kategori_harga k', 'k.id = p.id_jenis_pasien', 'left');
		$this->postgres->join('master_karyawan dokter', 'dokter.id = admission.id_dokter', 'left');
		$this->postgres->join('master_poly poli', 'poli.id = admission.asal', 'left');
		$this->postgres->where('admission.admit_type', 1);
		$this->postgres->order_by('admission.tgl_admit', 'desc');
		$this->_get_datatables_query();
		if ($_POST['length'] != -1)
			$this->postgres->limit($_POST['length'], $_POST['start']);
		$query = $this->postgres->get();
		return $query->result();
	}

	public function count_filtered()
	{
		$this->postgres->select('admission.*, p.nama AS nama_pasien, lt.nama_lantai, ru.nama_ruangan, k.nama AS nama_jenis_pasien,bed.no_bad,dokter.nama as nama_dokter,poli.name as nama_poli, p.no_bpjs as no_bpjs');
		$this->postgres->join('master_pasien p', 'p.id = admission.id_pasien', 'left');
		$this->postgres->join('tbl_lantai lt', 'lt.id_lantai = admission.lantai', 'left');
		$this->postgres->join('tbl_ruangan ru', 'ru.id_ruangan = admission.ruang', 'left');
		$this->postgres->join('tbl_bad bed', 'bed.id_bad = admission.bad', 'left');
		$this->postgres->join('master_kategori_harga k', 'k.id = p.id_jenis_pasien', 'left');
		$this->postgres->join('master_karyawan dokter', 'dokter.id = admission.id_dokter', 'left');
		$this->postgres->join('master_poly poli', 'poli.id = admission.asal', 'left');
		$this->postgres->where('admission.admit_type', 1);
		$this->postgres->order_by('admission.tgl_admit', 'desc');
		$this->_get_datatables_query();
		$query = $this->postgres->get();
		return $query->num_rows();
	}

	public function count_all()
	{
		$this->postgres->select('admission.*, p.nama AS nama_pasien, lt.nama_lantai, ru.nama_ruangan, k.nama AS nama_jenis_pasien,bed.no_bad,dokter.nama as nama_dokter,poli.name as nama_poli, p.no_bpjs as no_bpjs');
		$this->postgres->join('master_pasien p', 'p.id = admission.id_pasien', 'left');
		$this->postgres->join('tbl_lantai lt', 'lt.id_lantai = admission.lantai', 'left');
		$this->postgres->join('tbl_ruangan ru', 'ru.id_ruangan = admission.ruang', 'left');
		$this->postgres->join('tbl_bad bed', 'bed.id_bad = admission.bad', 'left');
		$this->postgres->join('master_kategori_harga k', 'k.id = p.id_jenis_pasien', 'left');
		$this->postgres->join('master_karyawan dokter', 'dokter.id = admission.id_dokter', 'left');
		$this->postgres->join('master_poly poli', 'poli.id = admission.asal', 'left');
		$this->postgres->where('admission.admit_type', 1);
		$this->postgres->order_by('admission.tgl_admit', 'desc');
		$this->postgres->from($this->tableadmission);
		return $this->postgres->count_all_results();
	}

	/// MENU RME
	private function _get_datatables_query_menu()
	{
		$this->postgres->select('menurme.*, menurme.id_menu,menurme.rm,menurme.isi,menurme.link,menurme.status_aktif,rmebaru.nama_berkas');

		$this->postgres->from($this->tablemenu);
		$i = 0;
		foreach ($this->column_search_menu as $item) {
			if ($_POST['search']['value']) {
				if ($i === 0) {
					$this->postgres->group_start();
					$this->postgres->like($item, $_POST['search']['value']);
				} else {
					$this->postgres->or_like($item, $_POST['search']['value']);
				}
				if (count($this->column_search_menu) - 1 == $i)
					$this->postgres->group_end();
			}
			$i++;
		}
	}

	// INI
	function get_datatables_menu()
	{
		$this->postgres->select('menurme.*');
		$this->postgres->like('menurme.tipe', 1);
		$this->postgres->order_by('menurme.id_menu', 'asc');
		$this->postgres->from($this->tablemenu);
		return $this->postgres->get()->result();
	}

	function get_status_menu_by_kunjungan($idKunjungan)
	{
		$this->postgres->select('rmebaru.nama_berkas');
		$this->postgres->from('rmebaru');
		$this->postgres->where('rmebaru.status_aktif', 1);
		$this->postgres->where('rmebaru.id_kunjungan', $idKunjungan);
		return array_column($this->postgres->get()->result_array(), 'nama_berkas');
	}

	function get_filled_rm($idKunjungan)
	{
		$this->postgres->select('r.id, r.nama_berkas');
		$this->postgres->where('r.status_aktif', 1);
		$this->postgres->from('rmebaru r');
		$this->postgres->where('r.id_kunjungan', $idKunjungan);
		$this->postgres->join('menurme m', 'm.link = r.nama_berkas');
		$this->postgres->order_by('m.id_menu', 'asc');
		return $this->postgres->get()->result();
	}

	public function count_filtered_menu()
	{
		$this->postgres->select('menurme.*, menurme.id_menu,menurme.rm,menurme.isi,menurme.link,menurme.status_aktif,rmebaru.nama_berkas,rmebaru.id_kunjungan,rmebaru.status_aktif AS aktif');
		$this->postgres->join('rmebaru', 'rmebaru.nama_berkas = menurme.link AND rmebaru.status_aktif = 1', 'left');
		$this->postgres->where('menurme.status_aktif', 1);

		$this->postgres->group_by('menurme.id_menu,menurme.rm,menurme.isi,menurme.link,menurme.status_aktif,rmebaru.nama_berkas,rmebaru.id_kunjungan,rmebaru.status_aktif');
		$this->postgres->order_by('menurme.id_menu', 'asc');
		$this->_get_datatables_query_menu();
		$query = $this->postgres->get();
		return $query->num_rows();
	}

	public function count_all_menu()
	{
		$this->postgres->select('menurme.*, menurme.id_menu,menurme.rm,menurme.isi,menurme.link,menurme.status_aktif,rmebaru.nama_berkas,rmebaru.id_kunjungan,rmebaru.status_aktif AS aktif');
		$this->postgres->join('rmebaru', 'rmebaru.nama_berkas = menurme.link AND rmebaru.status_aktif = 1', 'left');
		$this->postgres->where('menurme.status_aktif', 1);

		$this->postgres->group_by('menurme.id_menu,menurme.rm,menurme.isi,menurme.link,menurme.status_aktif,rmebaru.nama_berkas,rmebaru.id_kunjungan,rmebaru.status_aktif');
		$this->postgres->order_by('menurme.id_menu', 'asc');
		$this->postgres->from($this->tablemenu);
		return $this->postgres->count_all_results();
	}

	// INI
	public function get_by_menu($link)
	{
		$this->postgres->select('*');
		$this->postgres->from($this->tablemenu);
		$this->postgres->where('link', $link);
		$this->postgres->where('status_aktif', 1);
		$query = $this->postgres->get();
		return $query->row();
	}

	/// MENU RME

	public function get_list_dokter()
	{
		$this->postgres->select('id,nama,id_jabatan');
		$this->postgres->where('id_jabatan', 1);
		$this->postgres->from($this->tabledokter);
		$this->postgres->order_by('nama', 'asc');
		$query = $this->postgres->get();
		$result = $query->result();
		$getdata = array();
		foreach ($result as $row) {
			$getdata[] = $row->nama;
		}
		return $getdata;
	}

	public function get_list_lantai()
	{
		$this->postgres->select('id_lantai,nama_lantai');
		$this->postgres->from($this->tablelantai);
		$this->postgres->order_by('id_lantai', 'asc');
		$query = $this->postgres->get();
		$result = $query->result();
		$getdata = array();
		foreach ($result as $row) {
			$getdata[] = $row->nama_lantai;
		}
		return $getdata;
	}

	function get_id_data($id)
	{
		$query = $this->postgres->query("SELECT admission.*,id_kunjungan,admit_type FROM admission 
			WHERE id_kunjungan='$id' AND admit_type=1 GROUP BY id LIMIT 1");
		return $query;
	}

	function get_id_data_rme($id, $link)
	{
		$query = $this->postgres->query("SELECT rmebaru.*,id_kunjungan FROM rmebaru 
			WHERE id_kunjungan='$id' AND nama_berkas='$link' AND status_aktif=1 GROUP BY id LIMIT 1");
		return $query;
	}

	function get_id_data_edit_rme($id, $link)
	{
		$query = $this->postgres->query("SELECT rmebaru.*,id,nama_berkas,id_kunjungan FROM rmebaru 
			WHERE id='$id' AND nama_berkas='$link' AND status_aktif=1 GROUP BY id LIMIT 1");
		return $query;
	}

	public function get_menu($link)
	{
		$this->postgres->from('menurme');
		$this->postgres->where('link', $link);
		$query = $this->postgres->get();
		if (count($query->result()) > 0) {
			return $query->row();
		}
	}

	public function get_edit_data($id_kunjungan)
	{
		$this->postgres->select('admission.*, p.nama AS nama_pasien, lt.nama_lantai, ru.nama_ruangan, k.nama AS nama_jenis_pasien,bed.no_bad,dokter.nama as nama_dokter,poli.name as nama_poli, p.nik, p.tanggal_lahir,p.no_bpjs as no_bpjs, pk.nama as nama_pekerjaan, jk.nama as jenkel, p.alamat, p.pendidikan_terakhir, agama.nama as nama_agama, p.no_handphone, dokter.path_ttd, suku.nama as nama_suku, penjamin.nama as nama_hub_pasien, penjamin.no_telepon as telp_hub_pasien, penjamin.alamat as alamat_hub_pasien, admission.tgl_admit as tgl_admit, transaksi.total as biaya, discharge.type as cara_pulang,kunj.waktu_input as waktu_input,
			hub_keluarga.nama as hubungan_keluarga');
		$this->postgres->from('admission');
		$this->postgres->join('master_pasien p', 'p.id = admission.id_pasien', 'left');
		$this->postgres->join('master_pasien_penjamin penjamin', 'p.id = CAST(penjamin.id_pasien AS BIGINT)', 'left');
		$this->postgres->join('tbl_lantai lt', 'lt.id_lantai = admission.lantai', 'left');
		$this->postgres->join('tbl_ruangan ru', 'ru.id_ruangan = admission.ruang', 'left');

		//// new ////////////
		$this->postgres->join('transaksi_invoice transaksi', 'CAST(transaksi.id_pasien AS INTEGER) = admission.id_pasien', 'left');
		$this->postgres->join('discharge discharge', 'discharge.no_rm = admission.no_rm', 'left');
		$this->postgres->join('kunjungan kunj', 'kunj.id_pasien = admission.id_pasien', 'left');
		$this->postgres->join('master_hubungan_keluarga hub_keluarga', 'hub_keluarga.id = penjamin.id_hubungan', 'left');
		//////////////////
		
		$this->postgres->join('tbl_bad bed', 'bed.id_bad = admission.bad', 'left');
		$this->postgres->join('master_kategori_harga k', 'k.id = p.id_jenis_pasien', 'left');
		$this->postgres->join('master_pekerjaan pk', 'CAST(pk.id AS VARCHAR) = p.id_pekerjaan', 'left');
		$this->postgres->join('master_suku suku', 'CAST(suku.id AS char) = p.id_suku', 'left');
		$this->postgres->join('master_agama agama', 'CAST(agama.id AS char) = p.id_agama', 'left');
		$this->postgres->join('master_jenkel jk', 'CAST(jk.id AS char) = p.jenkel', 'left');
		$this->postgres->join('master_karyawan dokter', 'dokter.id = admission.id_dokter', 'left');
		$this->postgres->join('master_poly poli', 'poli.id = admission.asal', 'left');
		$this->postgres->where('admission.admit_type', 1);
		$this->postgres->where('admission.id_kunjungan', $id_kunjungan);
		$query = $this->postgres->get();
		if (count($query->result()) > 0) {
			return $query->row();
		}
	}

	public function get_tampil_edit_data($id_kunjungan)
	{
		$this->postgres->select('admission.*, p.nama AS nama_pasien, lt.nama_lantai, ru.nama_ruangan, k.nama AS nama_jenis_pasien,bed.no_bad,dokter.nama as nama_dokter,poli.name as nama_poli, p.nik, p.tanggal_lahir,p.no_bpjs as no_bpjs, pk.nama as nama_pekerjaan, jk.nama as jenkel, p.alamat, agama.nama as nama_agama, p.no_handphone, dokter.path_ttd, suku.nama as nama_suku, penjamin.nama as nama_hub_pasien, penjamin.no_telepon as telp_hub_pasien, penjamin.alamat as alamat_hub_pasien,kunj.waktu_input as waktu_input, hub_keluarga.nama as hubungan_keluarga');
		$this->postgres->from('admission');
		$this->postgres->join('master_pasien p', 'p.id = admission.id_pasien', 'left');
		$this->postgres->join('master_pasien_penjamin penjamin', 'p.id = CAST(penjamin.id_pasien AS BIGINT)', 'left');
		//// new ////////////
		$this->postgres->join('transaksi_invoice transaksi', 'CAST(transaksi.id_pasien AS INTEGER) = admission.id_pasien', 'left');
		$this->postgres->join('discharge discharge', 'discharge.no_rm = admission.no_rm', 'left');
		$this->postgres->join('kunjungan kunj', 'kunj.id_pasien = admission.id_pasien', 'left');
		$this->postgres->join('master_hubungan_keluarga hub_keluarga', 'hub_keluarga.id = penjamin.id_hubungan', 'left');
		//////////////////
		$this->postgres->join('tbl_lantai lt', 'lt.id_lantai = admission.lantai', 'left');
		$this->postgres->join('tbl_ruangan ru', 'ru.id_ruangan = admission.ruang', 'left');
		$this->postgres->join('tbl_bad bed', 'bed.id_bad = admission.bad', 'left');
		$this->postgres->join('master_kategori_harga k', 'k.id = p.id_jenis_pasien', 'left');
		$this->postgres->join('master_pekerjaan pk', 'CAST(pk.id AS VARCHAR) = p.id_pekerjaan', 'left');
		$this->postgres->join('master_jenkel jk', 'CAST(jk.id AS char) = p.jenkel', 'left');
		$this->postgres->join('master_agama agama', 'CAST(agama.id AS char) = p.id_agama', 'left');
		$this->postgres->join('master_karyawan dokter', 'dokter.id = admission.id_dokter', 'left');
		$this->postgres->join('master_poly poli', 'poli.id = admission.asal', 'left');
		$this->postgres->where('admission.admit_type', 1);
		$this->postgres->where('admission.id_kunjungan', $id_kunjungan);
		$query = $this->postgres->get();
		if (count($query->result()) > 0) {
			return $query->row();
		}
	}

	public function get_by_id($id_urut_dokter)
	{
		$this->db->from($this->tableadmission);
		$this->db->where('id_urut_dokter', $id_urut_dokter);
		$query = $this->db->get();
		return $query->row();
	}

	function get_base_path_storage_qrcode()
	{
		$this->postgres->select('mu.link_asset');
		$this->postgres->from('master_unit mu');
		$this->postgres->where('mu.id', 2);
		return $this->postgres->get()->row();
	}

	function get_karyawan_by_level($level_user = null, $searchQuery = "")
	{
		$this->postgres->select('mk.id, mk.nama, mk.path_ttd');
		$this->postgres->from('master_karyawan mk');
		$this->postgres->join('auth_users au', 'au.id_karyawan = mk.id', 'left');

		if ($searchQuery) {
			$this->postgres->like('LOWER(mk.nama)', strtolower($searchQuery));
		}

		// Hanya filter level_user kalau diisi
		if (!is_null($level_user)) {
			$this->postgres->where('au.id_level', $level_user);
		}

		return $this->postgres->get()->result();
	}


	function get_karyawan_by_id($id)
	{
		$this->postgres->select('mk.id, mk.nama, mk.path_ttd');
		$this->postgres->from('master_karyawan mk');
		$this->postgres->where('mk.id', $id);
		return $this->postgres->get()->row();
	}
}
