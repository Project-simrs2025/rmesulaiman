<?php

class Rme_model extends CI_Model
{
	/**
	 *
	 * @author https://medikasolusidigital.com
	 */

	var $tablerme = 'rmebaru';
	var $column_search_rme = array('mp.no_rm', 'mp.nama', 'adm.tgl_admit');

	public function __construct()
	{
		parent::__construct();
		$this->postgres = $this->load->database('postgres', TRUE);
		date_default_timezone_set("Asia/Jakarta");
		$this->load->helper('tanggal');
	}

	private function _get_datatables_query()
	{
		if ($this->input->post('nama_berkas')) {
			$this->postgres->like('rmebaru.nama_berkas', $this->input->post('nama_berkas'));
		}
		if ($this->input->post('id_pasien_rme')) {
			$this->postgres->like('rmebaru.id_pasien_rme', $this->input->post('id_pasien_rme'));
		}
		$this->postgres->select('rmebaru.*, mp.nama AS nama_pasien,  mp.no_rm, adm.tgl_admit');
		$this->postgres->from($this->tablerme);
		$i = 0;
		foreach ($this->column_search_rme as $item) {
			if ($_POST['search']['value']) {
				if ($i === 0) {
					$this->postgres->group_start();
					$this->postgres->like($item, $_POST['search']['value']);
				} else {
					$this->postgres->or_like($item, $_POST['search']['value']);
				}
				if (count($this->column_search_rme) - 1 == $i)
					$this->postgres->group_end();
			}
			$i++;
		}
	}

	function get_datatables()
	{
		$this->postgres->select('rmebaru.*, mp.nama AS nama_pasien,  mp.no_rm, adm.tgl_admit');
		$this->postgres->join('admission adm', 'adm.id_kunjungan = rmebaru.id_kunjungan', 'left');
		$this->postgres->join('master_pasien mp', 'mp.id = adm.id_pasien', 'left');
		$this->postgres->where('status_aktif', 1);
		$this->postgres->order_by('rmebaru.id', 'desc');
		$this->_get_datatables_query();
		if ($_POST['length'] != -1)
			$this->postgres->limit($_POST['length'], $_POST['start']);
		$query = $this->postgres->get();
		return $query->result();
	}

	public function count_filtered()
	{
		$this->postgres->select('rmebaru.*, mp.nama AS nama_pasien,  mp.no_rm, adm.tgl_admit');
		$this->postgres->join('admission adm', 'adm.id_kunjungan = rmebaru.id_kunjungan', 'left');
		$this->postgres->join('master_pasien mp', 'mp.id = adm.id_pasien', 'left');
		$this->postgres->where('status_aktif', 1);
		$this->postgres->order_by('rmebaru.id', 'desc');
		$this->_get_datatables_query();
		$query = $this->postgres->get();
		return $query->num_rows();
	}

	public function count_all()
	{
		$this->postgres->select('rmebaru.*, mp.nama AS nama_pasien,  mp.no_rm, adm.tgl_admit');
		$this->postgres->join('admission adm', 'adm.id_kunjungan = rmebaru.id_kunjungan', 'left');
		$this->postgres->join('master_pasien mp', 'mp.id = adm.id_pasien', 'left');
		$this->postgres->where('status_aktif', 1);
		$this->postgres->order_by('rmebaru.id', 'desc');
		$this->postgres->from($this->tablerme);
		return $this->postgres->count_all_results();
	}
	function getDataById($id)
	{
	    return $this->postgres
	        ->where('id', $id)
	        ->get($this->tablerme)
	        ->row_array();
	}

	function insertData($query)
	{
		return $this->postgres->insert($this->tablerme, $query);
	}
	function updateData($query, $id)
	{
		$this->postgres->where('id', $id);
		return $this->postgres->update($this->tablerme, $query);
	}

	public function update_entry($id_berkas, $data)
	{
		// 1. Ambil data lama dari database berdasarkan ID
		$data_lama = $this->postgres->get_where('rmebaru', ['id' => $id_berkas])->row_array();

		// 2. Cegah data lama hilang karena nilai kosong dari input baru
		foreach ($data as $key => $val) {
			// Jika nilai baru kosong, dan data lama ada, pertahankan data lama
			if ($val === '' && array_key_exists($key, $data_lama)) {
				$data[$key] = $data_lama[$key];
			}
		}

		// 3. Lakukan update ke database dengan data yang sudah disesuaikan
		return $this->postgres->update('rmebaru', $data, ['id' => $id_berkas]);
	}

	public function delete_entry($id_berkas, $data)
	{
		return $this->postgres->update('rmebaru', $data, array('id' => $id_berkas));
	}

	public function get_by_id($id)
	{
		// Cek apakah ID valid
		if (empty($id)) {
			log_message('error', 'get_by_id: ID yang diberikan kosong atau null.');
			return null;
		}

		$this->postgres->select('*'); // Ambil semua kolom
		$this->postgres->from($this->tablerme);
		$this->postgres->where('id', $id);
		$query = $this->postgres->get();

		// Jika data tidak ditemukan, log error dan return null
		if ($query->num_rows() == 0) {
			log_message('error', 'get_by_id: Data tidak ditemukan untuk ID: ' . $id);
			return null;
		}

		return $query->row();
	}
	////////////////////////////////////////////////////////////////////////////////////
	// UPDATE 09-06-2025 ZIKRY
	public function get_by_id_pastikan_add($id_kunjungan, $id_pasien, $nama_berkas, $status)
	{
	    return $this->postgres->get_where($this->tablerme, [
	        'id_kunjungan' => $id_kunjungan,
	        'id_pasien_rme' => $id_pasien,
	        'nama_berkas' => $nama_berkas,
	        'status_aktif' => $status
	    ])->row();
	}
	// UPDATE 09-06-2025 ZIKRY
	////////////////////////////////////////////////////////////////////////////////////


	public function get_by_kunjungan_berkas($id_kunjungan, $id_pasien, $nama_berkas)
	{
		$this->postgres->select('rmebaru.*');
		$this->postgres->from("rmebaru");
		$this->postgres->where('rmebaru.id_kunjungan', $id_kunjungan);
		$this->postgres->where('rmebaru.id_pasien_rme', $id_pasien);
		$this->postgres->where('rmebaru.nama_berkas', $nama_berkas);
		$this->postgres->where('rmebaru.status_aktif', 1);

		$query = $this->postgres->get();

		return $query->row();
	}

	public function get_by_pasien_berkas($id_pasien, $nama_berkas)
	{
		$this->postgres->select('rmebaru.*, adm.tgl_admit as waktu_admit');
		$this->postgres->from("rmebaru");
		$this->postgres->where('rmebaru.nama_berkas', $nama_berkas);
		$this->postgres->where('rmebaru.id_pasien_rme', $id_pasien);
		$this->postgres->where('rmebaru.status_aktif', 1);
		$this->postgres->where('adm.admit_type', 1);
		$this->postgres->join('admission adm', 'adm.id_kunjungan = rmebaru.id_kunjungan');

		$query = $this->postgres->get();

		return $query->result();
	}


	public function soft_delete($id)
	{
		$this->postgres->where('id', $id);
		return $this->postgres
			->update('rmebaru', ["status_aktif" => 0]);
	}

	// Menambahkan metode untuk mendapatkan path_ttd berdasarkan nama direktur
	public function get_karyawan_by_nama($nama)
	{
		// Menyusun query untuk mencari path_ttd berdasarkan nama karyawan (direktur)
		$this->postgres->select('path_ttd');
		$this->postgres->from('master_karyawan');  // Nama tabel karyawan
		$this->postgres->where('nama', $nama);  // Kondisi pencarian berdasarkan nama
		$query = $this->postgres->get();

		// Mengecek apakah ada hasil pencarian
		if ($query->num_rows() > 0) {
			return $query->row_array(); // Mengembalikan data pertama dalam bentuk array
		} else {
			return null;  // Jika tidak ditemukan, mengembalikan null
		}
	}
}
