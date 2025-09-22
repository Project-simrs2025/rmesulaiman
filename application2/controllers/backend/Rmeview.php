<?php

class Rmeview extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		error_reporting(0);
		// if ($this->session->userdata('logged') != TRUE) {
		// 	$url = base_url('login');
		// 	redirect($url);
		// };
		$this->load->model('Site_model', 'site_model');
		$this->load->model('backend/Data_pasien_model', 'data_pasien_model');
		$this->load->model('backend/Data_klaim_model', 'data_klaim_model');
		$this->load->model('backend/Admission_model', 'admission_model');
		$this->load->model('backend/Rme_model', 'rme_model');
		$this->load->model('backend/Antrian_model', 'antrian_model');
		$this->load->library('upload');
		$this->load->library('validation/RmeFormValidation');
		$this->load->helper('text');
		$this->load->helper('url');
		$this->load->helper('tanggal');
		$this->load->helper('count');
		$this->load->helper('download');
		date_default_timezone_set("Asia/Jakarta");
	}

	// TAMPILAN INDEX ANTRIAN
	public function index()
	{
		// AMBIL DATA UNIT
		$unit = $this->site_model->get_unit_data();
		$data['nama_prov'] = $unit['nama_prov'];
		$data['nama_kab'] = $unit['nama_kab'];
		$data['nama_kec'] = $unit['nama_kec'];
		$data['nama_kel'] = $unit['nama_kel'];
		$data['alamat'] = $unit['alamat'];
		// AMBIL DATA SETTINGS
		$getsettings = $this->site_model->get_settings_data();
		$data['site_title'] = $getsettings['nama'];
		$data['telepon'] = $getsettings['telepon'];
		$data['email'] = $getsettings['telepon'];
		$data['images'] = BASE_STORAGE . '/pmo/images/' . $getsettings['logo'];
		$data['site_favicon'] = BASE_STORAGE . '/pmo/images/' . $getsettings['logo'];
		$data['title'] = 'Data Pasien';

		
		$this->load->view('backend/menuhorizontal', $data);
		$this->load->view('backend/_partials/templatejs');
		$this->load->view('backend/v_data_pasien', $data);
	}


	function lihat($id)
	{
		// Inisialisasi data untuk digunakan dalam tampilan
		$data = [];
		$data['mode'] = 'lihat';

		// Ambil data unit
		$unit = $this->site_model->get_unit_data();
		$data['nama_prov'] = $unit['nama_prov'];
		$data['nama_kab'] = $unit['nama_kab'];
		$data['nama_kec'] = $unit['nama_kec'];
		$data['nama_kel'] = $unit['nama_kel'];
		$data['alamat'] = $unit['alamat'];
		$data['city_sign'] = $unit['nama_kab'];
		$data['lokasi'] = $unit['alamat'] . ', Kelurahan ' . $unit['nama_kel'] . ', Kecamatan ' . $unit['nama_kec'] . ', ' . $unit['nama_kab'] . ', ' . $unit['nama_prov'];

		// Ambil data settings
		$getsettings = $this->site_model->get_settings_data();
		$data['site_title'] = $getsettings['nama'];
		$data['telepon'] = $getsettings['telepon'];
		$data['email'] = $getsettings['email'];
		$data['images'] = BASE_STORAGE . '/pmo/images/' . $getsettings['logo'];
		$data['site_favicon'] = BASE_STORAGE . '/pmo/images/' . $getsettings['logo'];

		// Ambil data formulir berdasarkan ID
		$formData = $this->rme_model->get_by_id($id);

		$link = $formData->nama_berkas;
		$data['formData'] = $formData->data_json;
		$data['id_kunjungan'] = $formData->id_kunjungan;

		// Ambil data rekam medis
		$filledRM = $this->admission_model->get_filled_rm($data['id_kunjungan']);
		$filledRMLength = count($filledRM);
		$data['leftData'] = "";
		$data['rightData'] = "";

		$currentIndex = -1;
		for ($i = 0; $i < $filledRMLength; $i++) {
			if ($filledRM[$i]->id === $id) {
				$currentIndex = $i;
			}
		}

		if ($currentIndex > 0) {
			$data['leftData'] = $filledRM[$currentIndex - 1]->id;
		}
		if ($currentIndex < $filledRMLength - 1) {
			$data['rightData'] = $filledRM[$currentIndex + 1]->id;
		}

		$data['id'] = $formData->id;

		// Ambil data pasien
		$data['diagnosa'] = $this->admission_model->get_all_diagnosa('', 5, 0); // Menambahkan argumen yang diperlukan
		// DATA PASIEN
		$id_kunjungan = $formData->id_kunjungan;
		$get_id_konten = $this->data_klaim_model->get_data_dari($id_kunjungan);
		if ($get_id_konten->num_rows() > 0) {
			$id_poli = $get_id_konten->row()->id_poly;
			$admission_id_kunjungan = $get_id_konten->row()->admission_id_kunjungan;

			if ($admission_id_kunjungan == NULL) {
				// DATA DARI ANTRIAN
				$post = $this->data_pasien_model->get_edit_data3($id_kunjungan);
				$data['tgl_admit2'] = date($post->waktu_masuk);
				$data['tgl_admit'] = format_indo(date($post->waktu_masuk));
				$data['nama_pasien'] = $post->nama_pasien;
				$data['nik'] = $post->nik;
				$data['pendidikan_terakhir'] = $post->pendidikan_terakhir;
				$data['nama_pekerjaan'] = $post->nama_pekerjaan;
				$data['no_rm'] = $post->no_rm;
				$data['tgl_lahir'] = date('d / m / Y', strtotime($post->tanggal_lahir));
				$data['nama_suku'] = $post->nama_suku;
				$data['umur'] = countumur($post->tanggal_lahir);
				$data['jenkel'] = $post->jenkel;
				$data['alamatt'] = $post->alamat;
				$data['nama_agama'] = $post->nama_agama;
				$data['no_hp'] = $post->no_handphone;
				$data['nama_jenis_pasien'] = $post->nama_jenis_pasien;
				$data['nama_poli'] = $post->nama_poli;
				$data['nama_dokter'] = $post->nama_dokter;
				$data['tanggal_keluar'] = $post->waktu_keluar ? format_indo(date($post->waktu_keluar)) : "";
				// DATA DARI ANTRIAN

			} else {

				// DATA DARI ADMISSION
				$post = $this->data_klaim_model->get_data_dariri($id_kunjungan);
				$data['nama_pasien'] = $post->nama_pasien;
				$data['nik'] = $post->nik;
				$data['pendidikan_terakhir'] = $post->pendidikan_terakhir;
				$data['nama_pekerjaan'] = $post->nama_pekerjaan;
				$data['no_rm'] = $post->no_rm;
				$data['tgl_lahir'] = date('d / m / Y', strtotime($post->tanggal_lahir));
				$data['umur'] = countumur($post->tanggal_lahir);
				$data['jenkel'] = $post->jenkel;
				$data['alamatt'] = $post->alamat;
				$data['nama_suku'] = $post->nama_suku;
				$data['nama_agama'] = $post->nama_agama;
				$data['no_hp'] = $post->no_handphone;
				$data['tgl_admit2'] = $post->tgl_admit;
				$post->umur = countumur($post->tanggal_lahir);
				$data['tgl_admit'] = format_indo(date($post->tgl_admit));
				$data['tgl_discharge'] = $post->tgl_discharge ? format_indo(date($post->tgl_discharge)) : "";
				$data['nama_lantai'] = $post->nama_lantai;
				$data['nama_dokter'] = $post->nama_dokter;
				$data['nama_poli'] = $post->nama_poli;
				$data['nama_ruangan'] = $post->nama_ruangan;
				$data['no_bad'] = $post->no_bad;
				$data['nama_jenis_pasien'] = $post->nama_jenis_pasien;
				$data['kelas'] = $post->kelas;
				$data['lama'] = countme($post->tgl_admit);
				// DATA DARI ADMISSION
			}
		} else {
			redirect('backend/data_klaim');
		}
		

		// Ambil data level pengguna
		$levelUser = $this->session->all_userdata()['level'];
		if ($levelUser == 13) {
			$post->id_perawat = $this->session->all_userdata()['id'];
			$post->nama_perawat = $this->session->all_userdata()['name'];
		}

		$data['global_data'] = json_encode($post);
		$postmenu = $this->admission_model->get_menu($link);
		$data['title'] = $postmenu->isi;
		$data['namarm'] = $postmenu->rm;
		$data['link'] = $postmenu->link;

		// Mengubah format form data JSON jika ada image drawer
		$temp = json_decode($data['formData'], true);
		if (isset($temp['image_drawer'])) {
			foreach ($temp['image_drawer'] as $key => $value) {
				$temp['image_drawer'][$key] = json_decode($value, true);
			}
			$temp['image'] = $temp['image_drawer'];
			unset($temp['image_drawer']);
		}

		$data['formData'] = json_encode($temp, JSON_UNESCAPED_SLASHES);

		// Load tampilan
		$this->load->view('backend/menuhorizontalv', $data);
		$this->load->view('backend/_partials/templatejs');
		$this->load->view('backend/rme/commonv', $datatipe);
	}
	
	// TAMPILAN FORM RME
	function tambah($datamenus = [])
	{
		$link = $this->uri->segment(4);
		$id_kunjungan = $this->uri->segment(5);

		$exists = $this->rme_model->get_by_kunjungan_berkas($id_kunjungan, $id_pasien, $nama_berkas);
		if ($exists) {
			$this->session->set_flashdata('msg', 'doublekunjungan');
			redirect(site_url('backend/data_pasien/get_data_pasien_detail/' . $id_kunjungan));
			return;
		}

		$data['btn_submit'] = "Tambah";
		$unit = $this->site_model->get_unit_data();
		$data['nama_prov'] = $unit['nama_prov'];
		$data['nama_kab'] = $unit['nama_kab'];
		$data['nama_kec'] = $unit['nama_kec'];
		$data['nama_kel'] = $unit['nama_kel'];
		$data['alamat'] = $unit['alamat'];
		$data['city_sign'] = $unit['nama_kab'];
		$data['lokasi'] = $unit['alamat'] . ', Kelurahan ' . $unit['nama_kel'] . ', Kecamatan ' . $unit['nama_kec'] . ', ' . $unit['nama_kab'] . ', ' . $unit['nama_prov'];
		// AMBIL DATA SETTINGS
		$getsettings = $this->site_model->get_settings_data();
		$data['site_title'] = $getsettings['nama'];
		$data['telepon'] = $getsettings['telepon'];
		$data['email'] = $getsettings['telepon'];
		$data['images'] = BASE_STORAGE . '/pmo/images/' . $getsettings['logo'];
		$data['site_favicon'] = BASE_STORAGE . '/pmo/images/' . $getsettings['logo'];
		$data['id_kunjungan'] = $id_kunjungan;




		// DATA MENU
		log_message('debug', 'Nama Menu : ');
		$postmenu = $this->antrian_model->get_menu($link);
		$data['title'] = $postmenu->isi;
		$data['namarm'] = $postmenu->rm;
		$data['link'] = $postmenu->link;
		$datatipe['tipe'] = '3';

		// DATA MENU

		// DATA PASIEN
		$get_id_konten = $this->data_pasien_model->get_data_dari($id_kunjungan);
		$id_poli = $get_id_konten->row()->id_poly;  
		$admission_id_kunjungan = $get_id_konten->row()->admission_id_kunjungan; 

		if ($admission_id_kunjungan == NULL) {
			$post = $this->data_pasien_model->get_edit_data_pasien_rj($id_kunjungan);
			$data['id_pasien'] = $post->id_pasien;
			$id_pasien = $post->id_pasien;
			$data['nama_pasien'] = $post->nama_pasien;
			$data['nik'] = $post->nik;
			$linkpath = $site['linkpath'];
			$data['pendidikan_terakhir'] = $post->pendidikan_terakhir;
			$data['nama_pekerjaan'] = $post->nama_pekerjaan;
			$data['no_rm'] = $post->no_rm;
			$data['tgl_lahir'] = $post->tanggal_lahir;
			$data['umur'] = countumur($post->tanggal_lahir);
			$data['jenkel'] = $post->jenkel;
			//DATA KUNJUNGAN
			$data['waktu_input'] = $post->waktu_input;
			$data['alamatt'] = $post->alamat;
			$data['nama_agama'] = $post->nama_agama;
			$data['no_hp'] = $post->no_handphone;
			$data['no_bpjs'] = $post->no_bpjs;
			$data['tgl_admit2'] = $post->waktu_masuk;
			//DATA HUBUNGAN PASIEN
			$data['nama_hub_pasien'] = $post->nama_hub_pasien;
			$data['telp_hub_pasien'] = $post->telp_hub_pasien;
			$data['alamat_hub_pasien'] = $post->alamat_hub_pasien;
			$post->umur = countumur($post->tanggal_lahir);
			$data['tgl_admit'] = format_indo(date($post->waktu_masuk));
			$data['nama_dokter'] = $post->nama_dokter;
			$data['nama_poli'] = $post->nama_poli;
			$data['nama_jenis_pasien'] = $post->nama_jenis_pasien;
			$data['lama'] = countme($post->waktu_masuk);
			$datatipe['tipedp'] = '2';
		} else {
			// DATA DARI ADMISSION
			$post = $this->data_pasien_model->get_edit_data_pasien($id_kunjungan);
			$data['id_pasien'] = $post->id_pasien;
			$id_pasien = $post->id_pasien;
			$data['nama_pasien'] = $post->nama_pasien;
			$data['nik'] = $post->nik;
			$data['pendidikan_terakhir'] = $post->pendidikan_terakhir;
			$data['nama_pekerjaan'] = $post->nama_pekerjaan;
			$data['no_rm'] = $post->no_rm;
			$data['tgl_lahir'] = date('d / m / Y', strtotime($post->tanggal_lahir));
			$data['umur'] = countumur($post->tanggal_lahir);
			$data['jenkel'] = $post->jenkel;
			$data['alamatt'] = $post->alamat;
			$data['nama_suku'] = $post->nama_suku;
			$data['nama_agama'] = $post->nama_agama;
			$data['no_hp'] = $post->no_handphone;
			$data['tgl_admit2'] = $post->tgl_admit;
			$data['tgl_admit'] = format_indo(date($post->tgl_admit));
			$data['tgl_discharge'] = $post->tgl_discharge ? format_indo(date($post->tgl_discharge)) : "";
			$data['nama_lantai'] = $post->nama_lantai;
			$data['nama_dokter'] = $post->nama_dokter;
			$data['nama_poli'] = $post->nama_poli;
			$data['nama_ruangan'] = $post->nama_ruangan;
			$data['no_bad'] = $post->no_bad;
			$data['nama_jenis_pasien'] = $post->nama_jenis_pasien;
			$data['kelas'] = $post->kelas;
			$data['lama'] = countme($post->tgl_admit);
			$datatipe['tipedp'] = '1';
			// DATA DARI ADMISSION
		}

		$data['list_pasien'] = $this->antrian_model->get_all_pasien_penjamin($id_pasien);
		$levelUser = $this->session->all_userdata()['level'];
		if ($levelUser == 13) {
			$post->id_perawat = $this->session->all_userdata()['id'];
			$post->nama_perawat = $this->session->all_userdata()['name'];
		}

		$data['global_data'] = json_encode($post);

		$this->load->view('backend/menuhorizontalv', $data);
		$this->load->view('backend/_partials/templatejs');
		$this->load->view('backend/rme/commonaddv', $datatipe);
	}

	function onSubmitNathan()
	{
	    $nama_berkas = strtolower(htmlspecialchars($this->input->post('nama_berkas', TRUE), ENT_QUOTES));

	    if (!method_exists($this->rmeformvalidation, $nama_berkas)) {
	        $this->responseError([], "Berkas tidak ada");
	        return;
	    }

	    $payload = $this->input->post();
	    $isValid = $this->rmeformvalidation->$nama_berkas($payload);
	    if (!$isValid) {
	        $errors = $this->rmeformvalidation->getErrors();
	        $this->responseError($errors, "Validation failed");
	        return;
	    }

	    $id = isset($payload['data']["id"]) ? trim($payload['data']["id"]) : null;

	    // Tolak jika ada ID (berarti ini request update)
	    if (!empty($id)) {
	        $this->responseError([], "Update tidak diperbolehkan.");
	        return;
	    }

	    // pastikan tidak ada ID dalam data yang disimpan
	    unset($payload['data']["id"]);

	    $dataFinal = $payload['data'];

	    $query = [
	        'data_json' => json_encode($dataFinal),
	        'id_kunjungan' => htmlspecialchars($payload['id_kunjungan'], ENT_QUOTES),
	        'id_pasien_rme' => $payload['id_pasien'],
	        'nama_berkas' => htmlspecialchars($nama_berkas, ENT_QUOTES),
	        'status_aktif' => 1,
	    ];

	    $success = $this->rme_model->insertData($query);

	    if (!$success) {
	        $this->responseError([], "Gagal menambahkan ke database");
	        return;
	    }

	    // $this->session->set_flashdata('msg', "berhasil-tambah");
	    $this->responseOK($success);
	}

	function onSubmitNathanEdit()
	{
		$nama_berkas = strtolower(htmlspecialchars($this->input->post('nama_berkas', TRUE), ENT_QUOTES));

		if (!method_exists($this->rmeformvalidation, $nama_berkas)) {
			$this->responseError([], "Berkas tidak ada");
			return;
		}

		$payload = $this->input->post();

		//Mencari Validasi data tidak perlu pakai if, supaya logic tidak kompleks
		$isValid = $this->rmeformvalidation->$nama_berkas($payload);
		if (!$isValid) {
			$errors = $this->rmeformvalidation->getErrors();
			$this->responseError($errors, "Validation failed");
			return;
		}

		$id = $payload['data']["id"];
		unset($payload['data']["id"]);

		$query = [
			'data_json' => json_encode($payload['data'])
		];
		if ($id) {
			$queryEdit = [
				'id_kunjungan' => htmlspecialchars($payload['id_kunjungan'], ENT_QUOTES),
				'id_pasien_rme' => $payload['id_pasien'],
				'nama_berkas' => htmlspecialchars($nama_berkas, ENT_QUOTES),
				'status_aktif' => 1,
			];
			$query = array_merge($query, $queryEdit);
		}

		$success = $this->rme_model->updateData($query, $id);
		if (!$success) {
			$this->responseError([], "Failed to insert DB");
			return;
		}

		// $msgFlashData = "berhasil-ubah";
		// $this->session->set_flashdata('msg', $msgFlashData);
		$this->responseOK($success);
	}
	

	// TAMPILAN FORM EDIT RME
	function edit($id)
	{
		$data = [];

		$data['btn_submit'] = "Edit";
		$unit = $this->site_model->get_unit_data();
		$data['nama_prov'] = $unit['nama_prov'];
		$data['nama_kab'] = $unit['nama_kab'];
		$data['nama_kec'] = $unit['nama_kec'];
		$data['nama_kel'] = $unit['nama_kel'];
		$data['alamat'] = $unit['alamat'];
		$data['city_sign'] = $unit['nama_kab'];
		$data['lokasi'] = $unit['alamat'] . ', Kelurahan ' . $unit['nama_kel'] . ', Kecamatan ' . $unit['nama_kec'] . ', ' . $unit['nama_kab'] . ', ' . $unit['nama_prov'];
		// AMBIL DATA SETTINGS
		$getsettings = $this->site_model->get_settings_data();
		$data['site_title'] = $getsettings['nama'];
		$data['telepon'] = $getsettings['telepon'];
		$data['email'] = $getsettings['telepon'];
		$data['images'] = BASE_STORAGE . '/pmo/images/' . $getsettings['logo'];
		$data['site_favicon'] = BASE_STORAGE . '/pmo/images/' . $getsettings['logo'];


		$data['id_kunjungan'] = $id;


		$formData = $this->rme_model->get_by_id($id);
		$data['link'] = $formData->nama_berkas;
		$data['formData'] = $formData->data_json;
		$data['id_kunjungan'] = $formData->id_kunjungan;
		$data['id_pasien'] = $formData->id_pasien_rme;
		$data['id'] = $formData->id;

		log_message('debug', 'Nama Menu : ');
		$postmenu = $this->antrian_model->get_menu($data['link']);
		$data['title'] = $postmenu->isi;
		$data['namarm'] = $postmenu->rm;
		$datatipe['tipe'] = '3';
		$datatipe['tipedp'] = '1';
		$data['mode'] = 'edit'; // atau 'lihat'
		//DATA HUBUNGAN PASIEN
		$data['nama_hub_pasien'] = $post->nama_hub_pasien;
		$data['telp_hub_pasien'] = $post->telp_hub_pasien;
		$data['alamat_hub_pasien'] = $post->alamat_hub_pasien;

		//DATA KUNJUNGAN
		$data['waktu_input'] = $post->waktu_input;
		
		$id_kunjungan = $formData->id_kunjungan;
		$get_id_konten = $this->data_pasien_model->get_data_dari($id_kunjungan);
		$id_poli = $get_id_konten->row()->id_poly;  
		$admission_id_kunjungan = $get_id_konten->row()->admission_id_kunjungan; 

		if ($admission_id_kunjungan == NULL) {
			$post = $this->data_pasien_model->get_edit_data_pasien_rj($id_kunjungan);
			$data['id_pasien'] = $post->id_pasien;
			$id_pasien = $post->id_pasien;
			$data['nama_pasien'] = $post->nama_pasien;
			$data['nik'] = $post->nik;
			$linkpath = $site['linkpath'];
			$data['pendidikan_terakhir'] = $post->pendidikan_terakhir;
			$data['nama_pekerjaan'] = $post->nama_pekerjaan;
			$data['no_rm'] = $post->no_rm;
			$data['tgl_lahir'] = $post->tanggal_lahir;
			$data['umur'] = countumur($post->tanggal_lahir);
			$data['jenkel'] = $post->jenkel;
			$data['alamatt'] = $post->alamat;
			$data['nama_agama'] = $post->nama_agama;
			$data['no_hp'] = $post->no_handphone;
			$data['no_bpjs'] = $post->no_bpjs;
			$data['tgl_admit2'] = $post->waktu_masuk;
			$post->umur = countumur($post->tanggal_lahir);
			$data['tgl_admit'] = format_indo(date($post->waktu_masuk));
			$data['nama_dokter'] = $post->nama_dokter;
			$data['nama_poli'] = $post->nama_poli;
			$data['nama_jenis_pasien'] = $post->nama_jenis_pasien;
			$data['lama'] = countme($post->waktu_masuk);
		} else {
			// DATA DARI ADMISSION
			$post = $this->data_pasien_model->get_edit_data_pasien($id_kunjungan);
			$data['id_pasien'] = $post->id_pasien;
			$id_pasien = $post->id_pasien;
			$data['nama_pasien'] = $post->nama_pasien;
			$data['nik'] = $post->nik;
			$data['pendidikan_terakhir'] = $post->pendidikan_terakhir;
			$data['nama_pekerjaan'] = $post->nama_pekerjaan;
			$data['no_rm'] = $post->no_rm;
			$data['tgl_lahir'] = date('d / m / Y', strtotime($post->tanggal_lahir));
			$data['umur'] = countumur($post->tanggal_lahir);
			$data['jenkel'] = $post->jenkel;
			$data['alamatt'] = $post->alamat;
			$data['nama_suku'] = $post->nama_suku;
			$data['nama_agama'] = $post->nama_agama;
			$data['no_hp'] = $post->no_handphone;
			$data['tgl_admit2'] = $post->tgl_admit;
			$data['tgl_admit'] = format_indo(date($post->tgl_admit));
			$data['tgl_discharge'] = $post->tgl_discharge ? format_indo(date($post->tgl_discharge)) : "";
			$data['nama_lantai'] = $post->nama_lantai;
			$data['nama_dokter'] = $post->nama_dokter;
			$data['nama_poli'] = $post->nama_poli;
			$data['nama_ruangan'] = $post->nama_ruangan;
			$data['no_bad'] = $post->no_bad;
			$data['nama_jenis_pasien'] = $post->nama_jenis_pasien;
			$data['kelas'] = $post->kelas;
			$data['lama'] = countme($post->tgl_admit);
			// DATA DARI ADMISSION
		}
		$data['list_pasien'] = $this->antrian_model->get_all_pasien_penjamin($id_pasien);

		$temp = json_decode($data['formData'], true);
		if (json_last_error() !== JSON_ERROR_NONE) {
			log_message('error', 'JSON decode error: ' . json_last_error_msg());
			$temp = []; // fallback supaya tidak error fatal
		}

		if (isset($temp['image_drawer'])) {
			foreach ($temp['image_drawer'] as $key => $value) {
				$temp['image_drawer'][$key] = json_decode($value, true);
			}
			$temp['image'] = $temp['image_drawer'];

			unset($temp['image_drawer']);
		}
		$data['formData'] = json_encode($temp, JSON_UNESCAPED_SLASHES | JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP);


		$levelUser = $this->session->all_userdata()['level'];
		if ($levelUser == 13) {
			$post->id_perawat = $this->session->all_userdata()['id'];
			$post->nama_perawat = $this->session->all_userdata()['name'];
		}
		$data['global_data'] = json_encode($post);

		$this->load->view('backend/menuhorizontalv', $data);
		$this->load->view('backend/_partials/templatejs');
		$this->load->view('backend/rme/commoneditv', $datatipe);
	}
	public function delete()
	{
		if (!$this->input->is_ajax_request()) {
			$this->responseError([], "No Direct Access");
			return;
		}

		$id = $this->input->post('id');
		$this->rme_model->soft_delete($id) ? $this->responseOK() : $this->responseError([], "Failed to delete");
	}
	function getDiagnosa()
	{
		if (!$this->input->is_ajax_request()) {
			$this->responseError([], "No Direct Access");
			return;
		}
		$searchQuery = $this->input->get('q') ?? "";
		$limit = $this->input->get('limit') ?? 20;
		$offset = $this->input->get('offset') ?? 0;

		$data = $this->antrian_model->get_all_diagnosa($searchQuery, $limit, $offset);
		$totalCount = $this->antrian_model->count_all_diagnosa($searchQuery);

		$items = array_map(function ($item) {
			return [
				'id' => $item->code . " | " . $item->nama,
				'text' => $item->code . " | " . $item->nama,
			];
		}, $data);

		$more = ($offset + $limit) < $totalCount;

		$this->responseOK([
			'items' => $items,
			'more' => $more,
		]);
	}

	/*
	 * 5 = dokter
	 * 13 = suster
	 * */
	function getKaryawan($level_user = 5)
	{
		if (!$this->input->is_ajax_request()) {
			$this->responseError([], "No Direct Access");
			return;
		}
		$searchQuery = $this->input->get('q') ?? "";

		$data = $this->antrian_model->get_karyawan_by_level($level_user, $searchQuery);
		$items = array_map(function ($item) {
			return [
				'id_original' => $item->id,
				'id' => $item->nama,
				'text' => $item->nama,
				'qr' => $item->path_ttd
			];
		}, $data);

		$this->responseOK([
			'items' => $items,
		]);
	}

	function getQRTandaTanganKaryawan($id)
	{
		if (!$this->input->is_ajax_request()) {
			$this->responseError([], "No Direct Access");
			return;
		}
		$dir = $this->antrian_model->get_base_path_storage_qrcode()->link_asset;
		$filename = $this->antrian_model->get_karyawan_by_id($id)->path_ttd;
		$filepath = $dir . "/" . $filename;

		$this->responseOK($filepath);
	}

	function reportRME()
	{
		if (!$this->input->is_ajax_request()) {
			$this->responseError([], "No Direct Access");
			return;
		}
	}

	// VALIDASI FORM RME
	

	private
	function responseOK($data = [], $message = "Success")
	{
		echo json_encode(["status" => TRUE, "message" => $message, "data" => $data]);
	}

	private
	function responseError($errors = [], $message = "Error")
	{
		echo json_encode(["status" => FALSE, "message" => $message, "errors" => $errors]);
	}
}
