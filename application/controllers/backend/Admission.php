<?php

class Admission extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		error_reporting(0);
		if ($this->session->userdata('logged') != TRUE) {
			$url = base_url('login');
			redirect($url);
		};
		$this->load->model('Site_model', 'site_model');
		$this->load->model('backend/Admission_model', 'admission_model');
		$this->load->model('backend/Rme_model', 'rme_model');
		$this->load->library('upload');
		$this->load->library('validation/RmeFormValidation');
		$this->load->helper('text');
		$this->load->helper('url');
		$this->load->helper('tanggal');
		$this->load->helper('count');
		$this->load->helper('download');
		date_default_timezone_set("Asia/Jakarta");
	}

	// TAMPILAN INDEX ADMISSION
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
		$data['email'] = $getsettings['email'];
		$data['images'] = BASE_STORAGE . '/pmo/images/' . $getsettings['logo'];
		$data['site_favicon'] = BASE_STORAGE . '/pmo/images/' . $getsettings['logo'];
		$data['title'] = 'Admission';

		$getdata = $this->admission_model->get_list_dokter();
		$opt = array('' => '[Pilih Dokter]');
		foreach ($getdata as $d) {
			$opt[$d] = $d;
		}
		$getdatalantai = $this->admission_model->get_list_lantai();
		$lt = array('' => '[Pilih Lantai]');
		foreach ($getdatalantai as $x) {
			$lt[$x] = $x;
		}
		$data['form_filter'] = form_dropdown('', $opt, '', 'id="dokter" class="form-select dokter" style="width:100%;"');
		$data['form_filter_lantai'] = form_dropdown('', $lt, '', 'id="lantai" class="form-select lantai" style="width:100%;"');

		$this->load->view('backend/menuhorizontal', $data);
		$this->load->view('backend/_partials/templatejs');
		$this->load->view('backend/v_admission', $data);
	}


	// TAMPILAN LIST DATA ADMISSION 
	public function get_ajax_list()
	{
		$list = $this->admission_model->get_datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $d) {
			$no++;
			$row = array();
			$row[] = format_indo($d->tgl_admit);
			$row[] = $d->nama_pasien;
			$row[] = '<a class="btn-sm pilih" href="javascript:void()" title="Pilih" href="javascript:void()" data-id="' . $d->id_kunjungan . '">' . $d->no_rm . '</a>';
			$row[] = $d->nama_lantai;
			$row[] = $d->nama_poli;
			$row[] = $d->nama_ruangan;
			$row[] = $d->no_bad;
			$row[] = $d->nama_dokter;
			$row[] = $d->nama_jenis_pasien;
			$row[] = $d->kelas;
			$row[] = countme($d->tgl_admit);
			$data[] = $row;
		}
		$output = array(
			"draw" => $_POST['draw'],
			"recordsTotal" => $this->admission_model->count_all(),
			"recordsFiltered" => $this->admission_model->count_filtered(),
			"data" => $data,
		);
		//output to json format
		echo json_encode($output);
	}

	// TAMPILAN GET DATA LEMBAR RME
	function get_data()
	{
		$id = $this->uri->segment(4);
		$get_id_konten = $this->admission_model->get_id_data($id);
		if ($get_id_konten->num_rows() > 0) {
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
			$data['email'] = $getsettings['email'];
			$data['images'] = BASE_STORAGE . '/pmo/images/' . $getsettings['logo'];
			$data['site_favicon'] = BASE_STORAGE . '/pmo/images/' . $getsettings['logo'];
			$data['title'] = 'Rekam Medis Elektronik';
			$data['id'] = $id;

			$post = $this->admission_model->get_edit_data($id);
			$data['tgl_admit_raw'] = date($post->tgl_admit);
			$data['tgl_admit'] = format_indo(date($post->tgl_admit));
			$data['nama_pasien'] = $post->nama_pasien;
			$data['no_rm'] = $post->no_rm;
			$data['nama_lantai'] = $post->nama_lantai;
			$data['nama_poli'] = $post->nama_poli;
			$data['nama_ruangan'] = $post->nama_ruangan;
			$data['no_bad'] = $post->no_bad;
			$data['nama_jenis_pasien'] = $post->nama_jenis_pasien;
			$data['kelas'] = $post->kelas;
			$data['id_kunjungan'] = $post->id_kunjungan;
			$data['id_pasien'] = $post->id_pasien;
			$data['nama_dokter'] = $post->nama_dokter;
			$data['lama'] = countme($post->tgl_admit);

			$this->load->view('backend/menuhorizontal', $data);
			$this->load->view('backend/_partials/templatejs');
			$this->load->view('backend/v_get_data', $data);
		} else {
			redirect('backend/admission');
		}
	}

	// TAMPILAN LIST MENU RME
	public function get_ajax_list_menu()
	{
		$id_kunjungan = $this->input->post('id_kunjungan');
		if (!$id_kunjungan) {
			$this->responseError([], "data not not found");
		}

		$menus = $this->admission_model->get_datatables_menu();
		$menus_submitted = $this->admission_model->get_status_menu_by_kunjungan($id_kunjungan);

		$data = array();
		$no = $_POST['start'];
		foreach ($menus as $d) {
			if (in_array($d->link, $menus_submitted)) {
				$icon = 'check';
				$text = 'success';
			} else {
				$icon = 'exclamation';
				$text = 'danger';
			}
			$row = array();
			$row[] = '<div class="menurme"><form id="form-filter1"><input type="hidden" id="nama_berkas"><input type="hidden" id="id_pasien_rme"><a class="list-group-item w-100 list-group-item-action nav-link" data-bs-toggle="tab" href="#home2" role="tab" aria-controls="home2" aria-selected="false"  style="font-size:12px;" onclick="click_menu(' . "'" . $d->link . "'" . ')"><span class="badge bg-primary badge-pill badge-round col-2">' . $d->rm . '</span> ' . $d->isi . '<i class="text-' . $text . ' float-end bi bi-' . $icon . '-circle"></i></a></form></div>';

			$data[] = $row;
		}
		$output = array(
			//			"draw" => $_POST['draw'],
			//			"recordsTotal" => $this->admission_model->count_all_menu(),
			//			"recordsFiltered" => $this->admission_model->count_filtered_menu(),
			"data" => $data,
		);
		//output to json format
		echo json_encode($output);
	}

	public function ajax_get_menu()
	{
		$queryArr = [];
		parse_str($_SERVER['QUERY_STRING'], $queryArr);
		$idKunjungan = $queryArr['id_kunjungan'];
		$idPasien = $queryArr['id_pasien'];
		$namaBerkas = $queryArr['nama_berkas'];

		$rme_menu = $this->admission_model->get_by_menu($namaBerkas);
		$selected_rme = $this->rme_model->get_by_kunjungan_berkas($idKunjungan, $idPasien, $namaBerkas);

		echo json_encode(["menu" => $rme_menu, "selected_data" => $selected_rme]);
	}

	// TABLE TAMPIL LIST DATA RME YANG SUDAH DI ISI
	public function get_ajax_list_rme()
	{
		$list = $this->rme_model->get_datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $d) {
			$no++;
			$row = array();

			$row[] = format_indo($d->tgl_admit);
			$row[] = $d->nama_pasien;
			$row[] = $d->no_rm;

			$row[] = '<div class="btn-group mb-1"><div class="dropdown"><button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenuButton7" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Opsi</button><div class="dropdown-menu" aria-labelledby="dropdownMenuButton7"><a class="dropdown-item item_edit" id="edit-form" href="javascript:void()" title="Edit" value1=' . $d->nama_berkas . ' value2=' . $d->id . '><i class="bi bi-pen-fill"></i> Edit</a>
				<a class="dropdown-item delete_record" href="javascript:void()" title="Hapus" id="del" value="' . $d->id . '"><i class="bi bi-trash"></i> Hapus</a>
				</div></div></div>';
			$data[] = $row;
		}

		$output = array(
			"draw" => $_POST['draw'],
			"recordsTotal" => $this->rme_model->count_all(),
			"recordsFiltered" => $this->rme_model->count_filtered(),
			"data" => $data,
		);
		//output to json format
		echo json_encode($output);
	}

	// TAMPILAN FORM RME
	function tambah($datamenus = [])
	{
		$link = $this->uri->segment(4);
		$id = $this->uri->segment(5);

		$exists = $this->rme_model->get_by_kunjungan_berkas($id_kunjungan, $id_pasien, $nama_berkas);
		if ($exists) {
			$this->session->set_flashdata('msg', 'doublekunjungan');
			redirect(site_url('backend/admission/get_data/' . $id));
			return;
		}

		$data['btn_submit'] = "SIMPAN";
		$data['mode'] = 'tambah'; // atau 'lihat' untuk readonly
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
		$data['email'] = $getsettings['email'];
		$data['images'] = BASE_STORAGE . '/pmo/images/' . $getsettings['logo'];
		$data['site_favicon'] = BASE_STORAGE . '/pmo/images/' . $getsettings['logo'];
		$data['id_kunjungan'] = $id;



		// DATA MENU
		log_message('debug', 'Nama Menu : ');
		$postmenu = $this->admission_model->get_menu($link);
		$data['title'] = $postmenu->isi;
		$data['namarm'] = $postmenu->rm;
		$data['link'] = $postmenu->link;
		$datatipe['tipe'] = '1';
		// DATA MENU

		// DATA PASIEN
		$post = $this->admission_model->get_edit_data($id);
		if ($post->jenkel == 2) {
			$post->jenkel = 'Perempuan';
		} else {
			$post->jenkel = 'Laki-laki';
		}

		$data['id_pasien'] = $post->id_pasien;
		$data['nama_pasien'] = $post->nama_pasien;
		$data['nik'] = $post->nik;
		$data['jenkel'] = $post->jenkel;
		$data['pendidikan_terakhir'] = $post->pendidikan_terakhir;
		$data['nama_pekerjaan'] = $post->nama_pekerjaan;
		$data['nama_suku'] = $post->nama_suku;
		$data['alamat_pasien'] = $post->alamat;
		$data['nama_agama'] = $post->nama_agama;
		$data['no_rm'] = $post->no_rm;
		$data['no_hp'] = $post->no_handphone;

		$data['tgl_lahir'] = $post->tanggal_lahir;
		$data['umur'] = countumur($post->tanggal_lahir);


		//DATA HUBUNGAN PASIEN
		$data['nama_hub_pasien'] = $post->nama_hub_pasien;
		$data['telp_hub_pasien'] = $post->telp_hub_pasien;
		$data['alamat_hub_pasien'] = $post->alamat_hub_pasien;
		$data['hubungan_keluarga'] = $post->hubungan_keluarga;

		//DATA INVOICE
		$data['biaya'] = $post->biaya;

		//DATA DISCHARGE
		$data['waktu_pulang'] = $post->waktu_pulang;
		$data['cara_pulang'] = $post->cara_pulang;

		//DATA KUNJUNGAN
		$data['waktu_input'] = $post->waktu_input;

		// DATA ADMISSION
		$data['tgl_admit2'] = $post->tgl_admit;
		$post->umur = countumur($post->tanggal_lahir);
		$data['tgl_admit'] = format_indo(date($post->tgl_admit));
		$data['nama_lantai'] = $post->nama_lantai;
		$data['no_bpjs'] = $post->no_bpjs;
		$data['nama_dokter'] = $post->nama_dokter;
		$data['nama_poli'] = $post->nama_poli;
		$data['nama_ruangan'] = $post->nama_ruangan;
		$data['no_bad'] = $post->no_bad;
		$data['nama_jenis_pasien'] = $post->nama_jenis_pasien;
		$data['kelas'] = $post->kelas;
		$data['lama'] = countme($post->tgl_admit);


		$levelUser = $this->session->all_userdata()['level'];
		if ($levelUser == 13) {
			$post->id_perawat = $this->session->all_userdata()['id'];
			$post->nama_perawat = $this->session->all_userdata()['name'];
		}

		$data['global_data'] = json_encode($post);

		$this->load->view('backend/menuhorizontal', $data);
		$this->load->view('backend/_partials/templatejs');
		$this->load->view('backend/rme/commonadd', $datatipe);
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
		$post = $this->admission_model->get_edit_data($id_kunjungan);

		// Menyesuaikan jenis kelamin
		// if ($post->jenkel == 2) {
		// 	$post->jenkel = 'Perempuan';
		// } else {
		// 	$post->jenkel = 'Laki-laki';
		// }

		$data['id_pasien'] = $post->id_pasien;
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
		$data['tgl_admit2'] = $post->tgl_admit;
		$post->umur = countumur($post->tanggal_lahir);
		$data['tgl_admit'] = format_indo(date($post->tgl_admit));
		$data['nama_lantai'] = $post->nama_lantai;
		$data['nama_dokter'] = $post->nama_dokter;
		$data['nama_poli'] = $post->nama_poli;
		$data['nama_ruangan'] = $post->nama_ruangan;
		$data['no_bad'] = $post->no_bad;
		$data['nama_jenis_pasien'] = $post->nama_jenis_pasien;
		$data['kelas'] = $post->kelas;
		$data['lama'] = countme($post->tgl_admit);

		//DATA HUBUNGAN PASIEN
		$data['nama_hub_pasien'] = $post->nama_hub_pasien;
		$data['telp_hub_pasien'] = $post->telp_hub_pasien;
		$data['alamat_hub_pasien'] = $post->alamat_hub_pasien;
		$data['hubungan_keluarga'] = $post->hubungan_keluarga;

		//DATA INVOICE
		$data['biaya'] = $post->biaya;

		//DATA DISCHARGE
		$data['waktu_pulang'] = $post->waktu_pulang;
		$data['cara_pulang'] = $post->cara_pulang;

		//DATA KUNJUNGAN
		$data['waktu_input'] = $post->waktu_input;

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
		$data['tipe'] = '1';
		$data['tipedp'] = '1';

		// Mengubah format form data JSON jika ada image drawer
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

		$data['formData'] = json_encode($temp, JSON_UNESCAPED_SLASHES);

		// Load tampilan
		$this->load->view('backend/menuhorizontal', $data);
		$this->load->view('backend/_partials/templatejs');
		$this->load->view('backend/rme/common', $data);
	}


	// PROSES SUBMIT DATA FORM RME
	function submit()
	{
		$this->_validate();

		$link = htmlspecialchars($this->input->post('namaberkas', TRUE), ENT_QUOTES);
		if ($link == 'rm07') {
			// Buat JSON DATA
			$arraydata[] = array(
				"nik" => htmlspecialchars($this->input->post('nik', TRUE), ENT_QUOTES),
				"pendidikan" => htmlspecialchars($this->input->post('pendidikan', TRUE), ENT_QUOTES),
				"pekerjaan" => htmlspecialchars($this->input->post('pekerjaan', TRUE), ENT_QUOTES),
				"tgl_lahir" => htmlspecialchars($this->input->post('tgl_lahir', TRUE), ENT_QUOTES),
				"ppjp" => htmlspecialchars($this->input->post('ppjp', TRUE), ENT_QUOTES),
				"np" => htmlspecialchars($this->input->post('np', TRUE), ENT_QUOTES),
				"lembarkfr" => htmlspecialchars($this->input->post('lembarkfr', TRUE), ENT_QUOTES),
				"dfungsional" => htmlspecialchars($this->input->post('dfungsional', TRUE), ENT_QUOTES),
				"dmedis" => htmlspecialchars($this->input->post('dmedis', TRUE), ENT_QUOTES),
				"instrumentkfr" => htmlspecialchars($this->input->post('instrumentkfr', TRUE), ENT_QUOTES),
				"hasilkfr" => htmlspecialchars($this->input->post('hasilkfr', TRUE), ENT_QUOTES),
				"kesimpulan" => htmlspecialchars($this->input->post('kesimpulan', TRUE), ENT_QUOTES),
				"rekomendasi" => htmlspecialchars($this->input->post('rekomendasi', TRUE), ENT_QUOTES),
			);

			// Buat JSON DATA
		} else if ($link == 'rm08') {
			$arraydata[] = array(
				"json" => 'DATA JSON KOSONG',
			);
		} else {
			$arraydata[] = array(
				"json" => 'DATA JSON KOSONG',
			);
		}

		$jsondata = json_encode($arraydata);
		$data = array(
			'id_pasien_rme' => htmlspecialchars($this->input->post('id_pasien', TRUE), ENT_QUOTES),
			'id_kunjungan' => htmlspecialchars($this->input->post('id_kunjungan', TRUE), ENT_QUOTES),
			'nama_berkas' => htmlspecialchars($this->input->post('namaberkas', TRUE), ENT_QUOTES),
			'status_aktif' => 1,
			'datajson' => "$jsondata",
		);
		$insert = $this->rme_model->submit_data($data);
		if ($insert) {
			$this->session->set_flashdata('msg', 'berhasil-tambah');
			echo json_encode(array("status" => TRUE));
		} else {
			echo json_encode(array("status" => FALSE));
		}
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
	    ////////////////////////////////////////////////////////////////////////////////////
	    // UPDATE 09-06-2025 ZIKRY
	    // CEK APAKAH SUDAH ADA YANG MENYIMPAN DULUAN, JIKA YA MAKA RESPON EROR
	    $cek_id_kunjungan = $payload['id_kunjungan'];
	    $cek_id_pasien = $payload['id_pasien'];
	    $cek_nama_berkas = strtolower(htmlspecialchars($this->input->post('nama_berkas', TRUE), ENT_QUOTES));
	    $cek_status = 1;
	    $dataLamacek = $this->rme_model->get_by_id_pastikan_add(
		    $cek_id_kunjungan,
		    $cek_id_pasien,
		    $cek_nama_berkas,
		    $cek_status
		);

		// 💡 Jika data ditemukan, tolak insert
		if ($dataLamacek) {
		    $this->responseError([], "Data untuk berkas ini barusan telah disimpan!. Silahkan lakukan Edit!");
		    return;
		}
		// UPDATE 09-06-2025 ZIKRY
	    // CEK APAKAH SUDAH ADA YANG MENYIMPAN DULUAN, JIKA YA MAKA RESPON EROR
	    ////////////////////////////////////////////////////////////////////////////////////
	    
	    // pastikan tidak ada ID dalam data yang disimpan
	    unset($payload['data']["id"]);

	    $dataFinal = $payload['data'];

	    $query = [
	        'data_json' => json_encode($dataFinal),
	        'id_kunjungan' => htmlspecialchars($payload['id_kunjungan'], ENT_QUOTES),
	        'id_pasien_rme' => htmlspecialchars($payload['id_pasien'], ENT_QUOTES),
	        'nama_berkas' => htmlspecialchars($nama_berkas, ENT_QUOTES),
	        'status_aktif' => 1,
	    ];

	    $success = $this->rme_model->insertData($query);

	    if (!$success) {
	        $this->responseError([], "Gagal menambahkan ke database");
	        return;
	    }

	    $this->session->set_flashdata('msg', "berhasil-tambah");
	    $this->responseOK($success);
	}

	// ========================================= backup lama ======================================= //
	// ========================================= backup lama ======================================= //

	// function onSubmitNathanEdit()
	// {
	// 	$nama_berkas = strtolower(htmlspecialchars($this->input->post('nama_berkas', TRUE), ENT_QUOTES));

	// 	if (!method_exists($this->rmeformvalidation, $nama_berkas)) {
	// 		$this->responseError([], "Berkas tidak ada");
	// 		return;
	// 	}

	// 	$payload = $this->input->post();

	// 	//Mencari Validasi data tidak perlu pakai if, supaya logic tidak kompleks
	// 	$isValid = $this->rmeformvalidation->$nama_berkas($payload);
	// 	if (!$isValid) {
	// 		$errors = $this->rmeformvalidation->getErrors();
	// 		$this->responseError($errors, "Validation failed");
	// 		return;
	// 	}

	// 	$id = $payload['data']["id"];
	// 	unset($payload['data']["id"]);

	// 	$query = [
	// 		'data_json' => json_encode($payload['data'])
	// 	];
	// 	if ($id) {
	// 		$queryEdit = [
	// 			'id_kunjungan' => htmlspecialchars($payload['id_kunjungan'], ENT_QUOTES),
	// 			'id_pasien_rme' => $payload['id_pasien'],
	// 			'nama_berkas' => htmlspecialchars($nama_berkas, ENT_QUOTES),
	// 			'status_aktif' => 1,
	// 		];
	// 		$query = array_merge($query, $queryEdit);
	// 	}

	// 	$success = $this->rme_model->updateData($query, $id);
	// 	if (!$success) {
	// 		$this->responseError([], "Failed to insert DB");
	// 		return;
	// 	}

	// 	$msgFlashData = "berhasil-ubah";
	// 	$this->session->set_flashdata('msg', $msgFlashData);
	// 	$this->responseOK($success);
	// }
	

	// ========================================= backup lama ======================================= //
	// ========================================= backup lama ======================================= //
		private function cleanInputArray($array)
	{
		foreach ($array as $key => $value) {
			if (is_array($value)) {
				$array[$key] = $this->cleanInputArray($value);
			} elseif (is_string($value)) {
				 // Hapus \t dan \r, biarkan \n tetap
	            $array[$key] = preg_replace('/[\t\r]+/', ' ', $value);
				// $array[$key] = preg_replace('/\s+/', ' ', $value); // ganti semua spasi/tab/newline jadi 1 spasi
			}
		}
		return $array;
	}

	private function array_filter_recursive($input) {
	    foreach ($input as &$value) {
	        if (is_array($value)) {
	            $value = array_filter_recursive($value);
	        }
	    }
	    return array_filter($input, function ($value) {
	        return $value !== '' && $value !== null && $value !== [];
	    });
	}

	public function onSubmitNathanEdit()
	{
	    $nama_berkas = strtolower(htmlspecialchars($this->input->post('nama_berkas', TRUE), ENT_QUOTES));

	    // Pastikan form valid
	    if (!method_exists($this->rmeformvalidation, $nama_berkas)) {
	        $this->responseError([], "❌ Berkas/form tidak dikenali.");
	        return;
	    }

	    $payload = $this->input->post();

	    // Validasi menggunakan form yang sesuai
	    $isValid = $this->rmeformvalidation->$nama_berkas($payload);
	    if (!$isValid) {
	        $errors = $this->rmeformvalidation->getErrors();
	        $this->responseError($errors, "❌ Validasi gagal.");
	        return;
	    }

	    $id = $payload['data']["id"] ?? null;
	    if (!$id) {
	        $this->responseError([], "❌ ID data tidak ditemukan.");
	        return;
	    }

	    unset($payload['data']["id"]);

	    // ✅ AMBIL DATA LAMA dari DB
	    $dataLamaObj = $this->rme_model->get_by_id($id);
	    if (!$dataLamaObj) {
	        $this->responseError([], "❌ Data tidak ditemukan.");
	        return;
	    }

	    // Pastikan nama_berkas dari DB cocok dengan yang dikirim
	    if (strtolower($dataLamaObj->nama_berkas) !== strtolower($nama_berkas)) {
	        $this->responseError([], "❌ Form tidak sesuai dengan jenis berkas yang sedang diedit.");
	        return;
	    }

	    // Decode data lama
	    $dataLamaDecoded = json_decode($dataLamaObj->data_json, true);
	    if (json_last_error() !== JSON_ERROR_NONE) {
	        $dataLamaDecoded = []; // fallback jika JSON rusak
	    }

	    $dataBaru = $payload['data'];

	    // 💥 CEGAH overwrite jika data kosong (indikasi salah form atau error input)
	    if (empty($dataBaru) || count($dataBaru) === 0) {
	        $this->responseError([], "❌ Data kosong. Penyimpanan dibatalkan.");
	        return;
	    }

	    // ✅ Gabungkan (MERGE) data lama dan data baru
	    $dataFinal = array_replace_recursive($dataLamaDecoded, $dataBaru);
	    $dataFinal = $this->cleanInputArray($dataFinal); // Bersihkan karakter tak perlu

	    // Logging untuk audit perubahan
	    log_message('error', "[RME PATCH] Update ID: $id oleh User: {$this->session->userdata('id')} — Berkas: $nama_berkas");

	    // Siapkan data update
	    $query = [
	        'data_json' => json_encode($dataFinal),
	        'id_kunjungan' => htmlspecialchars($payload['id_kunjungan'], ENT_QUOTES),
	        'id_pasien_rme' => $payload['id_pasien'],
	        'nama_berkas' => htmlspecialchars($nama_berkas, ENT_QUOTES),
	        'status_aktif' => 1,
	    ];

	    // Eksekusi update
	    $success = $this->rme_model->updateData($query, $id);

	    if (!$success) {
	        $this->responseError([], "❌ Gagal menyimpan ke database.");
	        return;
	    }

	    // Success
	    $this->session->set_flashdata('msg', "berhasil-ubah");
	    $this->responseOK($success);
	}


	// TAMPILAN FORM EDIT RME
	function edit($id)
	{
		$data = [];

		$data['btn_submit'] = "UBAH";
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
		$data['email'] = $getsettings['email'];
		$data['images'] = BASE_STORAGE . '/pmo/images/' . $getsettings['logo'];
		$data['site_favicon'] = BASE_STORAGE . '/pmo/images/' . $getsettings['logo'];


		$data['id_kunjungan'] = $id;


		$formData = $this->rme_model->get_by_id($id);
		$data['link'] = $formData->nama_berkas;
		$data['formData'] = $formData->data_json;
		$data['id_kunjungan'] = $formData->id_kunjungan;
		$data['id'] = $formData->id;

		log_message('debug', 'Nama Menu : ');
		$postmenu = $this->admission_model->get_menu($data['link']);
		$data['title'] = $postmenu->isi;
		$data['namarm'] = $postmenu->rm;
		$datatipe['tipe'] = '1';
		$data['mode'] = 'edit'; // atau 'lihat'
		$id_kunjungan = $formData->id_kunjungan;
		$post = $this->admission_model->get_edit_data($id_kunjungan);
		$data['id_pasien'] = $post->id_pasien;
		$data['nama_pasien'] = $post->nama_pasien;
		$data['nik'] = $post->nik;
		$data['pendidikan_terakhir'] = $post->pendidikan_terakhir;
		$data['nama_pekerjaan'] = $post->nama_pekerjaan;
		$data['no_rm'] = $post->no_rm;
		$data['tgl_lahir'] = $post->tanggal_lahir;
		$data['umur'] = countumur($post->tanggal_lahir);
		$data['jenkel'] = $post->jenkel;
		$data['alamat_pasien'] = $post->alamat;
		$data['nama_agama'] = $post->nama_agama;
		$data['no_hp'] = $post->no_handphone;
		$data['no_bpjs'] = $post->no_bpjs;
		$data['kelas'] = $post->kelas;
		$data['tgl_admit2'] = $post->tgl_admit;
		$data['tgl_admit'] = format_indo(date($post->tgl_admit));
		$post->umur = countumur($post->tanggal_lahir);
		$data['nama_lantai'] = $post->nama_lantai;
		$data['nama_dokter'] = $post->nama_dokter;
		$data['nama_poli'] = $post->nama_poli;
		$data['nama_ruangan'] = $post->nama_ruangan;
		$data['no_bad'] = $post->no_bad;
		$data['nama_jenis_pasien'] = $post->nama_jenis_pasien;
		$data['kelas'] = $post->kelas;
		$data['lama'] = countme($post->tgl_admit);

		//DATA HUBUNGAN PASIEN
		$data['nama_hub_pasien'] = $post->nama_hub_pasien;
		$data['telp_hub_pasien'] = $post->telp_hub_pasien;
		$data['alamat_hub_pasien'] = $post->alamat_hub_pasien;
		$data['hubungan_keluarga'] = $post->hubungan_keluarga;


		//DATA INVOICE
		$data['biaya'] = $post->biaya;

		//DATA DISCHARGE
		$data['waktu_pulang'] = $post->waktu_pulang;
		$data['cara_pulang'] = $post->cara_pulang;

		//DATA KUNJUNGAN
		$data['waktu_input'] = $post->waktu_input;

		// PROSES JSON formData SECARA AMAN
		$temp = json_decode($data['formData'], true);

		// Decode image_drawer jika ada
		if (isset($temp['image_drawer'])) {
			foreach ($temp['image_drawer'] as $key => $value) {
				$temp['image_drawer'][$key] = json_decode($value, true);
			}
			$temp['image'] = $temp['image_drawer'];
			unset($temp['image_drawer']);
		}

		// Encode JSON aman ke view dengan HEX agar tidak rusak di JS
		$data['formData'] = json_encode($temp, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP);

		// Handle global_data (pasien/admission data) untuk form otomatis
		$levelUser = $this->session->userdata('level');
		if ($levelUser == 13) {
			$post->id_perawat = $this->session->userdata('id');
			$post->nama_perawat = $this->session->userdata('name');
		}
		$data['global_data'] = json_encode($post, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP);

		// LOAD VIEW
		$this->load->view('backend/menuhorizontal', $data);
		$this->load->view('backend/_partials/templatejs');
		$this->load->view('backend/rme/commonedit', $datatipe);
	}

	// PROSES EDIT DATA FORM RME
	function submitedit()
	{
		$id_berkas = htmlspecialchars($this->input->post('id_berkas', TRUE), ENT_QUOTES);
		$link = htmlspecialchars($this->input->post('namaberkas', TRUE), ENT_QUOTES);

		
		$jsondata = json_encode($arraydata);

		$ajax_data['datajson'] = "$jsondata";
		if ($this->rme_model->update_entry($id_berkas, $ajax_data)) {
			$this->session->set_flashdata('msg', 'berhasil-ubah');
			echo json_encode(array("status" => TRUE));
		} else {
			echo json_encode(array("status" => FALSE));
		}
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

		$data = $this->admission_model->get_all_diagnosa($searchQuery, $limit, $offset);
		$totalCount = $this->admission_model->count_all_diagnosa($searchQuery);

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
	// AMBIL CODE ICD 9
	function getDiagnosa9()
	{
		if (!$this->input->is_ajax_request()) {
			$this->responseError([], "No Direct Access");
			return;
		}
		$searchQuery = $this->input->get('q') ?? "";
		$limit = $this->input->get('limit') ?? 20;
		$offset = $this->input->get('offset') ?? 0;

		$data = $this->admission_model->get_all_diagnosa9($searchQuery, $limit, $offset);
		$totalCount = $this->admission_model->count_all_diagnosa9($searchQuery);

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
	// AMBIL CODE ICD 9

	// new contonller
	function getPoli()
	{
		if (!$this->input->is_ajax_request()) {
			$this->responseError([], "No Direct Access");
			return;
		}
		$searchQuery = $this->input->get('q') ?? "";
		$limit = $this->input->get('limit') ?? 20;
		$offset = $this->input->get('offset') ?? 0;

		$data = $this->admission_model->get_all_poli($searchQuery, $limit, $offset);
		$totalCount = $this->admission_model->count_all_poli($searchQuery);

		$items = array_map(function ($item) {
			return [
				'id' => $item->name,
				'text' => $item->name
			];
		}, $data);

		$more = ($offset + $limit) < $totalCount;

		$this->responseOK([
			'items' => $items,
			'more' => $more,
		]);
	}

	// ruangan
	function getRuangan()
	{
		if (!$this->input->is_ajax_request()) {
			$this->responseError([], "No Direct Access");
			return;
		}
		$searchQuery = $this->input->get('q') ?? "";
		$limit = $this->input->get('limit') ?? 20;
		$offset = $this->input->get('offset') ?? 0;

		$data = $this->admission_model->get_all_ruangan($searchQuery, $limit, $offset);
		$totalCount = $this->admission_model->count_all_ruangan($searchQuery);

		$items = array_map(function ($item) {
			return [
				'id' => $item->nama_ruangan,
				'text' => $item->nama_ruangan
			];
		}, $data);

		$more = ($offset + $limit) < $totalCount;

		$this->responseOK([
			'items' => $items,
			'more' => $more,
		]);
	}

	// new contonller



	/*
	 * 5 = dokter
	 * 13 = suster
	 * */
	public function getKaryawan($level_user = '')
	{
		if (!$this->input->is_ajax_request()) {
			$this->responseError([], "No Direct Access");
			return;
		}

		$searchQuery = $this->input->get('q') ?? "";

		// Jika level_user kosong, ambil semua
		$data = $this->admission_model->get_karyawan_by_level($level_user ?: null, $searchQuery);

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
		$dir = $this->admission_model->get_base_path_storage_qrcode()->link_asset;
		$filename = $this->admission_model->get_karyawan_by_id($id)->path_ttd;
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
	function _validate()
	{
		$data = array();
		$data['error_string'] = array();
		$data['inputerror'] = array();
		$data['status'] = TRUE;

		if ($this->input->post('tgl_lahir') == '') {
			$data['inputerror'][] = 'tgl_lahir';
			$data['error_string'][] = 'Form Tgl Lahir harus berisi';
			$data['status'] = FALSE;
		}

		if ($this->input->post('lembarkfr') == '') {
			$data['inputerror'][] = 'lembarkfr';
			$data['error_string'][] = 'Form Hasil Tindakan Uji Fungsi / Prosedur KFR harus berisi';
			$data['status'] = FALSE;
		}
		if ($this->input->post('dfungsional') == '') {
			$data['inputerror'][] = 'dfungsional';
			$data['error_string'][] = 'Form Diagnosa Fungsional harus berisi';
			$data['status'] = FALSE;
		}
		if ($this->input->post('dmedis') == '') {
			$data['inputerror'][] = 'dmedis';
			$data['error_string'][] = 'Form Diagnosa Medis harus berisi';
			$data['status'] = FALSE;
		}

		if ($this->input->post('instrumentkfr') == '') {
			$data['inputerror'][] = 'instrumentkfr';
			$data['error_string'][] = 'Form Instrumen Uji Fungsi/ Prosedur KFR harus berisi';
			$data['status'] = FALSE;
		}
		if ($this->input->post('hasilkfr') == '') {
			$data['inputerror'][] = 'hasilkfr';
			$data['error_string'][] = 'Form Hasil KFR harus berisi';
			$data['status'] = FALSE;
		}
		if ($this->input->post('kesimpulan') == '') {
			$data['inputerror'][] = 'kesimpulan';
			$data['error_string'][] = 'Form Kesimpulan harus berisi';
			$data['status'] = FALSE;
		}
		if ($this->input->post('rekomendasi') == '') {
			$data['inputerror'][] = 'rekomendasi';
			$data['error_string'][] = 'Form Rekomendasi harus berisi';
			$data['status'] = FALSE;
		}

		if ($this->input->post('id_pasien') == '') {
			$data['inputerror'][] = 'id_pasien';
			$data['error_string'][] = 'Form ID Pasien berisi';
			$data['status'] = FALSE;
		}
		if ($this->input->post('id_kunjungan') == '') {
			$data['inputerror'][] = 'id_kunjungan';
			$data['error_string'][] = 'Form ID Kunjungan harus berisi';
			$data['status'] = FALSE;
		}
		if ($this->input->post('namaberkas') == '') {
			$data['inputerror'][] = 'namaberkas';
			$data['error_string'][] = 'Form Nama Berkas harus berisi';
			$data['status'] = FALSE;
		}
		if ($data['status'] === FALSE) {
			echo json_encode($data);
			exit();
		}
	}


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
