<?php

class Antrian_model extends CI_Model
{
	/**
	 *
	 * @author https://medikasolusidigital.com
	 */

	var $tableantrian = 'antrian';
	var $tablemenu = 'menurme';
	var $tabledokter = 'master_karyawan';
	var $tablepoli = 'master_poly';
	var $column_search_antrian = array('patient.nama','patient.no_rm','penjamin.nama','k.nama','poly.name','antrian.waktu_masuk');
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
			$this->postgres->like('antrian.waktu_masuk', $this->input->post('tgl'));
		}
		if ($this->input->post('dokter')) {
			$this->postgres->like('k.nama', $this->input->post('dokter'));
		}
		if ($this->input->post('poli')) {
			$this->postgres->like('poly.name', $this->input->post('poli'));
		}
		$this->postgres->select('antrian.*, antrian.waktu_masuk, patient.nama AS patient_name, patient.no_rm AS patient_record, penjamin.nama AS penjamin_name,k.nama as dokter_name,poly.name AS poly_name,antrian.id_poly AS poli_id, patient.no_bpjs as no_bpjs');
		$this->postgres->from($this->tableantrian);
		$i = 0;
		foreach ($this->column_search_antrian as $item) {
			if ($_POST['search']['value']) {
				if ($i === 0) {
					$this->postgres->group_start();
					$this->postgres->like($item, $_POST['search']['value']);
				} else {
					$this->postgres->or_like($item, $_POST['search']['value']);
				}
				if (count($this->column_search_antrian) - 1 == $i)
					$this->postgres->group_end();
			}
			$i++;
		}
	}

	public function get_all_diagnosa($searchQuery, $limit, $offset)
	{
		$this->postgres->select('id, nama, code');
		$this->postgres->from('master_icd10');

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
		$this->postgres->from('master_icd10');

		if (!empty($searchQuery)) {
			$this->postgres->like('nama', $searchQuery); 
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

	function get_datatables()
	{
	    $this->postgres->select('antrian.*, antrian.waktu_masuk, patient.nama AS patient_name, patient.no_rm AS patient_record, penjamin.nama AS penjamin_name,k.nama as dokter_name,poly.name AS poly_name,antrian.id_poly AS poli_id, patient.no_bpjs as no_bpjs');
	    $this->postgres->join('master_pasien patient', 'patient.id = antrian.id_pasien', 'left');
	    $this->postgres->join('master_kategori_harga penjamin', 'CAST(penjamin.id AS varchar) = CAST(antrian.id_kategori_harga AS varchar)', 'left');
	    
	    $this->postgres->join('master_karyawan k', 'CAST(k.id AS varchar) = CAST(antrian.id_dokter AS varchar)', 'left');
	    
	    $this->postgres->join('master_poly poly', 'poly.id = antrian.id_poly', 'left');
	    $this->postgres->where('antrian.status_antrian', 'Y');
	    $this->postgres->where('antrian.status_aktif', 'Y');
	    $this->postgres->where('antrian.id_poly !=', '34');
	    $this->postgres->order_by('poly.name', 'asc'); 
		$this->postgres->order_by('antrian.waktu_masuk', 'desc');  
	    $this->_get_datatables_query();
	    if ($_POST['length'] != -1) {
	        $this->postgres->limit($_POST['length'], $_POST['start']);
	    }
	    $query = $this->postgres->get();
	    return $query->result();
	}

	public function count_filtered()
	{
		$this->postgres->select('antrian.*, antrian.waktu_masuk, patient.nama AS patient_name, patient.no_rm AS patient_record, penjamin.nama AS penjamin_name,k.nama as dokter_name,poly.name AS poly_name,antrian.id_poly AS poli_id');
		$this->postgres->join('master_pasien patient', 'patient.id = antrian.id_pasien', 'left');
		$this->postgres->join('master_kategori_harga penjamin', 'CAST(penjamin.id AS varchar) = CAST(antrian.id_kategori_harga AS varchar)', 'left');
	    
	    $this->postgres->join('master_karyawan k', 'CAST(k.id AS varchar) = CAST(antrian.id_dokter AS varchar)', 'left');
		$this->postgres->join('master_poly poly', 'poly.id = antrian.id_poly', 'left');
		// $this->postgres->join('master_panggilan cal', 'cal.id = patient.id_title::integer', 'left');
		// $this->postgres->join('master_prioritas_pasien priotitas', 'priotitas.id = antrian.id_prioritas::integer', 'left');
		$this->postgres->where('antrian.status_antrian', 'Y');
		$this->postgres->where('antrian.status_aktif', 'Y');
		$this->postgres->where('antrian.id_poly !=', '34');

		$this->postgres->order_by('poly.name', 'asc'); 
		$this->postgres->order_by('antrian.waktu_masuk', 'desc');  
		$this->_get_datatables_query();
		$query = $this->postgres->get();
		return $query->num_rows();
	}

	public function count_all()
	{
		$this->postgres->select('antrian.*, patient.nama AS patient_name, patient.no_rm AS patient_record, penjamin.nama AS penjamin_name,k.nama as dokter_name,poly.name AS poly_name,antrian.id_poly AS poli_id');
		$this->postgres->join('master_pasien patient', 'patient.id = antrian.id_pasien', 'left');
		$this->postgres->join('master_kategori_harga penjamin', 'CAST(penjamin.id AS varchar) = CAST(antrian.id_kategori_harga AS varchar)', 'left');
	    
	    $this->postgres->join('master_karyawan k', 'CAST(k.id AS varchar) = CAST(antrian.id_dokter AS varchar)', 'left');
		$this->postgres->join('master_poly poly', 'poly.id = antrian.id_poly', 'left');
		// $this->postgres->join('master_panggilan cal', 'cal.id = patient.id_title::integer', 'left');
		// $this->postgres->join('master_prioritas_pasien priotitas', 'priotitas.id = antrian.id_prioritas::integer', 'left');
		$this->postgres->where('antrian.status_antrian', 'Y');
		$this->postgres->where('antrian.status_aktif', 'Y');
		$this->postgres->where('antrian.id_poly !=', '34');

		$this->postgres->order_by('poly.name', 'asc'); 
		$this->postgres->order_by('antrian.waktu_masuk', 'desc');  
		$this->postgres->from($this->tableantrian);
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
		$this->postgres->like('menurme.tipe', 2);
		$this->postgres->order_by('menurme.id_menu', 'asc');
		$this->postgres->from($this->tablemenu);
		return $this->postgres->get()->result();
	}

	function get_status_menu_by_kunjungan($idKunjungan){
		$this->postgres->select('rmebaru.nama_berkas');
		$this->postgres->from('rmebaru');
		$this->postgres->where('rmebaru.status_aktif', 1);
		$this->postgres->where('rmebaru.id_kunjungan', $idKunjungan);
		return array_column($this->postgres->get()->result_array(), 'nama_berkas');
	}

	function get_filled_rm($idKunjungan){
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

	public function get_list_poli()
	{
		$this->postgres->select('id,name');
		$this->postgres->from($this->tablepoli);
		$this->postgres->where('id !=', '34');
		$this->postgres->order_by('id', 'asc');
		$query = $this->postgres->get();
		$result = $query->result();
		$getdata = array();
		foreach ($result as $row) {
			$getdata[] = $row->name;
		}
		return $getdata;
	}

	function get_id_data($id_kunjungan)
	{
		
		$query = $this->postgres->query("SELECT antrian.*,id_kunjungan,status_antrian,status_aktif FROM antrian 
			WHERE id_kunjungan='$id_kunjungan' AND status_antrian='Y' AND status_aktif='Y' GROUP BY id LIMIT 1");
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
	// SAMPAI PERUBAHAN MENU
	public function get_menu($link)
	{
		$this->postgres->from('menurme');
		$this->postgres->where('link', $link);
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
	public function get_edit_data($id_kunjungan)
	{
		$this->postgres->select('antrian.*, antrian.id_kunjungan,antrian.id_pasien,patient.nama AS nama_pasien, patient.no_rm AS no_rm, patient.nik AS nik, patient.pendidikan_terakhir, patient.alamat, patient.no_handphone, patient.tanggal_lahir, penjamin.nama AS nama_jenis_pasien,k.nama as nama_dokter,poly.name AS nama_poli,antrian.id_poly AS poli_id,patient.id AS patien_id, jk.nama as jenkel, pk.nama as nama_pekerjaan, suku.nama as nama_suku, agama.nama as nama_agama, penjamin_pasien.nama as nama_hub_pasien, penjamin_pasien.alamat as alamat_hub_pasien,antrian.waktu_masuk AS tgl_admit,penjamin_pasien.no_telepon as telp_hub_pasien, patient.no_bpjs as no_bpjs, sep.klsrawat as kelas, transaksi.total as biaya, dischar.type as cara_pulang, antrian.waktu_keluar as tgl_discharge');
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
		$this->postgres->where('antrian.status_antrian', 'Y');
		$this->postgres->where('antrian.status_aktif', 'Y');
		$this->postgres->where('antrian.id_kunjungan', $id_kunjungan);
		$this->postgres->limit(1);
		$query = $this->postgres->get();
		if (count($query->result()) > 0) {
			return $query->row();
		}
	}
	public function get_data_dariri($id_kunjungan)
    {
        $this->postgres->select('admission.*, p.nama AS nama_pasien, lt.nama_lantai, ru.nama_ruangan, k.nama AS nama_jenis_pasien,bed.no_bad,dokter.nama as nama_dokter,poli.name as nama_poli, p.nik, p.tanggal_lahir, pk.nama as nama_pekerjaan, jk.nama as jenkel, p.alamat, p.pendidikan_terakhir, agama.nama as nama_agama, p.no_handphone, dokter.path_ttd, suku.nama as nama_suku, penjamin.nama as nama_hub_pasien,penjamin.alamat as alamat_hub_pasien,penjamin.no_handphone as noHp_hub_pasien, hub.nama as hubungan_keluarga_pasien, kawin.nama as status_nikah, warga.nama as nama_bangsa');
        $this->postgres->from('admission');
        $this->postgres->join('master_pasien p', 'p.id = admission.id_pasien', 'left');
        $this->postgres->join('master_pasien_penjamin penjamin', ' CAST(penjamin.id_pasien AS INT)= admission.id_pasien', 'left');
        $this->postgres->join('master_hubungan_keluarga hub', ' hub.id = penjamin.id_hubungan', 'left');
        $this->postgres->join('master_warga_negara warga', 'CAST(warga.id as CHAR) = p.id_warga_negara', 'left');
        $this->postgres->join('master_status_kawin kawin', ' CAST(kawin.id AS CHAR)= p.id_status_kawin', 'left');

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

	function get_karyawan_by_level($level_user, $searchQuery)
	{
		$this->postgres->select('mk.id, mk.nama, mk.path_ttd');
		$this->postgres->from('master_karyawan mk');
		$this->postgres->join('auth_users au', 'au.id_karyawan = mk.id', 'left');
		if ($searchQuery) {
			$this->postgres->where('LOWER(mk.nama) LIKE', '%' . strtolower($searchQuery) . '%');
		}
		$this->postgres->where('au.id_level', $level_user);
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
