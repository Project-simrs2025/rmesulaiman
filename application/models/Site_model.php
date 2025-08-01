
<?php

class Site_model extends CI_Model
{

	var $tableunit = 'master_unit';
	var $tablesettings = 'master_setting';
	public function __construct()
	{
		parent::__construct();
		$this->postgres = $this->load->database('postgres', TRUE);
		date_default_timezone_set("Asia/Jakarta");
	}

	public function get_unit_data()
	{
		$this->postgres->select('master_unit.*, alamat, prov.nama AS nama_prov, kab.nama AS nama_kab, kec.nama AS nama_kec, kel.nama AS nama_kel');
		$this->postgres->join('master_provinsi prov', 'prov.id = CAST(master_unit.id_provinsi AS INTEGER)', 'left');
		$this->postgres->join('master_kabupaten kab', 'kab.id = CAST(master_unit.id_kabupaten AS INTEGER)', 'left');
		$this->postgres->join('master_kecamatan kec', 'kec.id = CAST(master_unit.id_kecamatan AS INTEGER)', 'left');
		$this->postgres->join('master_kelurahan kel', 'kel.id = CAST(master_unit.id_kelurahan AS INTEGER)', 'left');
		$this->postgres->from($this->tableunit);
		$this->postgres->limit(1);
		$query = $this->postgres->get();


		if (!$query) {
			// Tangani kegagalan query, bisa dengan mencatat log error atau mengembalikan null
			log_message('error', 'Query gagal: ' . $this->postgres->last_query());
			return null;
		}

		// Jika query berhasil, cek jumlah barisnya
		if ($query->num_rows() > 0) {
			return $query->row_array();
		} else {
			return null;
		}
	}
	// public function get_settings_data()
	// {
	// 	$this->postgres->select('*');
	// 	$this->postgres->from($this->tablesettings);
	// 	$this->postgres->limit(1);
	// 	$query = $this->postgres->get();

	// 	// Periksa jika ada hasil query
	// 	if ($query->num_rows() > 0) {
	// 		return $query->row_array();  // Mengembalikan hasil dalam bentuk array
	// 	} else {
	// 		return null;  // Kembalikan null jika tidak ada hasil
	// 	}
	// }
	public function get_settings_data()
	{
		// Mengambil data dari master_setting dan bergabung dengan master_karyawan
		$this->postgres->select('ms.*, mk.path_ttd'); // memilih semua kolom dari master_setting dan path_ttd dari master_karyawan
		$this->postgres->from($this->tablesettings . ' ms'); // alias untuk master_setting
		$this->postgres->join('master_karyawan mk', 'ms.direktur LIKE mk.nama', 'left'); // JOIN dengan kondisi LIKE

		// Menambahkan kondisi agar meskipun tidak ada kecocokan pada mk.nama, tetap mendapatkan data dari master_setting
		$this->postgres->where('mk.nama LIKE', '%dr. Jhon Ryder Purba%'); // pencocokan nama direktur
		$this->postgres->or_where('mk.nama IS NULL'); // Jika tidak ada kecocokan, ambil data tetap

		$this->postgres->limit(1); // Membatasi hanya 1 baris hasil query

		$query = $this->postgres->get(); // Menjalankan query

		// Mengecek apakah ada hasil yang ditemukan
		if ($query->num_rows() > 0) {
			return $query->row_array(); // Mengembalikan hasil sebagai array
		} else {
			return null; // Jika tidak ada data yang ditemukan, mengembalikan null
		}
	}
}
