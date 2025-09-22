<?php

class Antrian extends CI_Controller
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
		$this->load->model('backend/Antrian_model', 'antrian_model');
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
		$data['title'] = 'Antrian Departemen';

		$getdata = $this->antrian_model->get_list_dokter();
		$opt = array('' => '[Pilih Dokter]');
		foreach ($getdata as $d) {
			$opt[$d] = $d;
		}
		$getdatapoli = $this->antrian_model->get_list_poli();
		$pl = array('' => '[Pilih Poliklinik]');
		foreach ($getdatapoli as $x) {
			$pl[$x] = $x;
		}
		$data['form_filter'] = form_dropdown('', $opt, '', 'id="dokter" class="form-select dokter" style="width:100%;"');
		$data['form_filter_poli'] = form_dropdown('', $pl, '', 'id="poli" class="form-select poli" style="width:100%;"');

		$this->load->view('backend/menuhorizontal', $data);
		$this->load->view('backend/_partials/templatejs');
		$this->load->view('backend/v_antrian', $data);
	}


	// TAMPILAN LIST DATA ANTRIAN
	public function get_ajax_list()
	{
	    $list = $this->antrian_model->get_datatables();
	    $data = array();
	    $no = $_POST['start'];

	    $current_poly = null;
	    $poly_counter = 0;

	    foreach ($list as $d) {
	        if ($d->poli_id !== $current_poly) {
	            $current_poly = $d->poli_id;
	            $poly_counter = 0;
	        }
	        if ($poly_counter >= 20) {
	            continue; 
	        }
	        $no++;
	        $row = array();
	        $row[] = format_indo($d->waktu_masuk);
	        $row[] = $d->no_antrian;
	        $row[] = '<a class="btn-sm pilih" href="javascript:void()" title="Pilih" data-id="' . $d->id_kunjungan . '">' . $d->patient_record . '</a>';
	        $row[] = $d->patient_name;
	        $row[] = $d->penjamin_name;
	        $row[] = $d->dokter_name;
	        $row[] = $d->poly_name;
	        $row[] = $d->poli_id;
	        $data[] = $row;
	        $poly_counter++; 
	    }
	    $output = array(
	        "draw" => $_POST['draw'],
	        "recordsTotal" => $this->antrian_model->count_all(),
	        "recordsFiltered" => $this->antrian_model->count_filtered(),
	        "data" => $data,
	    );
	    echo json_encode($output);
	}

	// TAMPILAN GET DATA LEMBAR RME
	function get_data()
	{
		$id_kunjungan = $this->uri->segment(4);
		$get_id_konten = $this->antrian_model->get_id_data($id_kunjungan);
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
			$data['email'] = $getsettings['telepon'];
			$data['images'] = BASE_STORAGE . '/pmo/images/' . $getsettings['logo'];
			$data['site_favicon'] = BASE_STORAGE . '/pmo/images/' . $getsettings['logo'];
			$data['title'] = 'Rekam Medis Elektronik Rawat Jalan';
			$data['id'] = $id;

			$post = $this->antrian_model->get_edit_data($id_kunjungan);
			$data['tgl_admit_raw'] = date($post->waktu_masuk);
			$data['tgl_admit'] = format_indo(date($post->waktu_masuk));
			$data['nama_pasien'] = $post->nama_pasien;
			$data['no_rm'] = $post->no_rm;
			$data['penjamin_name'] = $post->nama_jenis_pasien;
			$data['nama_poli'] = $post->nama_poli;
			$data['id_kunjungan'] = $post->id_kunjungan;
			$data['id_pasien'] = $post->id_pasien;
			$data['nama_dokter'] = $post->nama_dokter;

			$this->load->view('backend/menuhorizontal', $data);
			$this->load->view('backend/_partials/templatejs');
			$this->load->view('backend/v_get_data_antrian', $data);
		} else {
			redirect('backend/antrian');
		}
	}

	// TAMPILAN LIST MENU RME
	public function get_ajax_list_menu()
	{
		$id_kunjungan = $this->input->post('id_kunjungan');
		if (!$id_kunjungan) {
			$this->responseError([], "data not not found");
		}

		$menus = $this->antrian_model->get_datatables_menu();
		$menus_submitted = $this->antrian_model->get_status_menu_by_kunjungan($id_kunjungan);

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

		$rme_menu = $this->antrian_model->get_by_menu($namaBerkas);
		$selected_rme = $this->rme_model->get_by_kunjungan_berkas($idKunjungan, $idPasien, $namaBerkas);

		echo json_encode(["menu" => $rme_menu, "selected_data" => $selected_rme]);
	}

	// TABLE TAMPIL LIST DATA RME YANG SUDAH DI ISI
	// gak pakai lagi kan ?
	// public function get_ajax_list_rme()
	// {
	// 	$list = $this->rme_model->get_datatables();
	// 	$data = array();
	// 	$no = $_POST['start'];
	// 	foreach ($list as $d) {
	// 		$no++;
	// 		$row = array();

	// 		$row[] = format_indo($d->tgl_admit);
	// 		$row[] = $d->nama_pasien;
	// 		$row[] = $d->no_rm;

	// 		$row[] = '<div class="btn-group mb-1"><div class="dropdown"><button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenuButton7" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Opsi</button><div class="dropdown-menu" aria-labelledby="dropdownMenuButton7"><a class="dropdown-item item_edit" id="edit-form" href="javascript:void()" title="Edit" value1=' . $d->nama_berkas . ' value2=' . $d->id . '><i class="bi bi-pen-fill"></i> Edit</a>
	// 			<a class="dropdown-item delete_record" href="javascript:void()" title="Hapus" id="del" value="' . $d->id . '"><i class="bi bi-trash"></i> Hapus</a>
	// 			</div></div></div>';
	// 		$data[] = $row;
	// 	}

	// 	$output = array(
	// 		"draw" => $_POST['draw'],
	// 		"recordsTotal" => $this->rme_model->count_all(),
	// 		"recordsFiltered" => $this->rme_model->count_filtered(),
	// 		"data" => $data,
	// 	);
	// 	//output to json format
	// 	echo json_encode($output);
	// }

	// TAMPILAN FORM RME
	function tambah($datamenus = [])
	{
		$link = $this->uri->segment(4);
		$id_kunjungan = $this->uri->segment(5);

		$exists = $this->rme_model->get_by_kunjungan_berkas($id_kunjungan, $id_pasien, $nama_berkas);
		if ($exists) {
			$this->session->set_flashdata('msg', 'doublekunjungan');
			redirect(site_url('backend/antrian/get_data/' . $id_kunjungan));
			return;
		}

		$data['btn_submit'] = "SIMPAN";
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
		$datatipe['tipe'] = '2';
		// DATA MENU

		// DATA PASIEN
		$get_id_konten = $this->antrian_model->get_data_dari($id_kunjungan);
		$id_poli = $get_id_konten->row()->id_poly;  
		$admission_id_kunjungan = $get_id_konten->row()->admission_id_kunjungan; 

		if ($admission_id_kunjungan == NULL) {
			$post = $this->antrian_model->get_edit_data($id_kunjungan);
			$data['id_pasien'] = $post->id_pasien;
			$id_pasien = $post->id_pasien; // PEMBAHARUAN 21-09-2025
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
			$post = $this->antrian_model->get_data_dariri($id_kunjungan);
			$data['id_pasien'] = $post->id_pasien;
			$id_pasien = $post->id_pasien; // PEMBAHARUAN 21-09-2025
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

			$tgl_admits = $post->tgl_admit;
			$tgl_discharge = $post->tgl_discharge;
			function hitungLamaRawat($tgl_admits, $tgl_discharge) {
			    if (!$tgl_admits) return 'Tanggal masuk tidak valid';

			    // Ambil hanya bagian tanggal (tanpa jam)
			    $masuk = new DateTime(date('Y-m-d', strtotime($tgl_admits)));
			    $keluar = $tgl_discharge ? new DateTime(date('Y-m-d', strtotime($tgl_discharge))) : new DateTime();

			    // Hitung selisih hari, lalu tambahkan 1 (agar inklusif)
			    $selisih = $masuk->diff($keluar)->days + 1;

			    return $selisih . ' hari';
			}
			$data['lama'] = hitungLamaRawat($tgl_admits, $tgl_discharge);
			// $data['lama'] = countme($post->tgl_admit);
			// DATA DARI ADMISSION


			//================ Data hidden dari model ======================//
		}

		/// LINK DIAGNOSA ///
		$diagnosa_masuk = $this->antrian_model->get_diagnosa_masuk($id_pasien, $id_kunjungan);
		$data['diagnosa_masuk'] = $diagnosa_masuk;
		/// LINK DIAGNOSA ///


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
		$data['email'] = $getsettings['telepon'];
		$data['images'] = BASE_STORAGE . '/pmo/images/' . $getsettings['logo'];
		$data['site_favicon'] = BASE_STORAGE . '/pmo/images/' . $getsettings['logo'];

		// Ambil data formulir berdasarkan ID
		$formData = $this->rme_model->get_by_id($id);

		$link = $formData->nama_berkas;
		$data['formData'] = $formData->data_json;
		$data['id_kunjungan'] = $formData->id_kunjungan;

		// //DATA HUBUNGAN PASIEN
		// $data['nama_hub_pasien'] = $post->nama_hub_pasien;
		// $data['telp_hub_pasien'] = $post->telp_hub_pasien;
		// $data['alamat_hub_pasien'] = $post->alamat_hub_pasien;

		// Ambil data rekam medis
		$filledRM = $this->antrian_model->get_filled_rm($data['id_kunjungan']);
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
		$data['diagnosa'] = $this->antrian_model->get_all_diagnosa('', 5, 0); // Menambahkan argumen yang diperlukan
		// DATA PASIEN
		$id_kunjungan = $formData->id_kunjungan;

		$get_id_konten = $this->antrian_model->get_data_dari($id_kunjungan);
		$id_poli = $get_id_konten->row()->id_poly;  
		$admission_id_kunjungan = $get_id_konten->row()->admission_id_kunjungan; 

		if ($admission_id_kunjungan == NULL) {
			$post = $this->antrian_model->get_edit_data($id_kunjungan);
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
			$data['tgl_admit2'] = $post->waktu_masuk;
			$post->umur = countumur($post->tanggal_lahir);
			$data['tgl_admit'] = format_indo(date($post->waktu_masuk));
			$data['nama_dokter'] = $post->nama_dokter;
			$data['nama_poli'] = $post->nama_poli;
			$data['nama_jenis_pasien'] = $post->nama_jenis_pasien;
			$data['lama'] = countme($post->waktu_masuk);
		} else {
			// DATA DARI ADMISSION
			$post = $this->antrian_model->get_data_dariri($id_kunjungan);
			$data['id_pasien'] = $post->id_pasien;
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

			$tgl_admits = $post->tgl_admit;
			$tgl_discharge = $post->tgl_discharge;
			function hitungLamaRawat($tgl_admits, $tgl_discharge) {
			    if (!$tgl_admits) return 'Tanggal masuk tidak valid';

			    // Ambil hanya bagian tanggal (tanpa jam)
			    $masuk = new DateTime(date('Y-m-d', strtotime($tgl_admits)));
			    $keluar = $tgl_discharge ? new DateTime(date('Y-m-d', strtotime($tgl_discharge))) : new DateTime();

			    // Hitung selisih hari, lalu tambahkan 1 (agar inklusif)
			    $selisih = $masuk->diff($keluar)->days + 1;

			    return $selisih . ' hari';
			}
			$data['lama'] = hitungLamaRawat($tgl_admits, $tgl_discharge);
			// $data['lama'] = countme($post->tgl_admit);
			// DATA DARI ADMISSION
		}

		// Ambil data level pengguna
		$levelUser = $this->session->all_userdata()['level'];
		if ($levelUser == 13) {
			$post->id_perawat = $this->session->all_userdata()['id'];
			$post->nama_perawat = $this->session->all_userdata()['name'];
		}

		$data['global_data'] = json_encode($post);
		$postmenu = $this->antrian_model->get_menu($link);
		$data['title'] = $postmenu->isi;
		$data['namarm'] = $postmenu->rm;
		$data['link'] = $postmenu->link;
		$data['tipe'] = '2';
		$data['tipedp'] = '1';

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
		$this->load->view('backend/menuhorizontal', $data);
		$this->load->view('backend/_partials/templatejs');
		$this->load->view('backend/rme/common', $data);
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




	//=============================== backup lama ============================================//
	//=============================== backup lama ============================================//

	// function onSubmitNathanEdit()
	// {
	//     $nama_berkas = strtolower(htmlspecialchars($this->input->post('nama_berkas', TRUE), ENT_QUOTES));

	//     if (!method_exists($this->rmeformvalidation, $nama_berkas)) {
	//         $this->responseError([], "Berkas tidak ada");
	//         return;
	//     }

	//     $payload = $this->input->post();
	//     $isValid = $this->rmeformvalidation->$nama_berkas($payload);
	//     if (!$isValid) {
	//         $errors = $this->rmeformvalidation->getErrors();
	//         $this->responseError($errors, "Validasi gagal");
	//         return;
	//     }

	//     $id = isset($payload['data']["id"]) ? trim($payload['data']["id"]) : null;

	//     // Tolak jika tidak ada ID (berarti ini bukan edit)
	//     if (empty($id)) {
	//         $this->responseError([], "Penambahan data tidak diperbolehkan.");
	//         return;
	//     }

	//     unset($payload['data']["id"]); // tetap hapus ID dari data_json

	//     // Ambil data lama dan lakukan merge
	//     $existing = $this->rme_model->getDataById($id);
	//     if (!$existing) {
	//         $this->responseError([], "Data tidak ditemukan untuk diupdate.");
	//         return;
	//     }

	//     $oldData = json_decode($existing['data_json'], true);
	//     if (!is_array($oldData)) $oldData = [];

	//     $dataFinal = array_merge($oldData, $payload['data']); // timpa dengan data baru

	//     $query = [
	//         'data_json' => json_encode($dataFinal)
	//     ];

	//     $success = $this->rme_model->updateData($query, $id);

	//     if (!$success) {
	//         $this->responseError([], "Gagal mengupdate data.");
	//         return;
	//     }

	//     $this->session->set_flashdata('msg', "berhasil-ubah");
	//     $this->responseOK($success);
	// }

	//=============================== backup lama ============================================//
	//=============================== backup lama ============================================//
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
		$data['email'] = $getsettings['telepon'];
		$data['images'] = BASE_STORAGE . '/pmo/images/' . $getsettings['logo'];
		$data['site_favicon'] = BASE_STORAGE . '/pmo/images/' . $getsettings['logo'];


		$data['id_kunjungan'] = $id;


		$formData = $this->rme_model->get_by_id($id);
		$data['link'] = $formData->nama_berkas;
		$data['formData'] = $formData->data_json;
		$data['id_kunjungan'] = $formData->id_kunjungan;
		$data['id'] = $formData->id;

		log_message('debug', 'Nama Menu : ');
		$postmenu = $this->antrian_model->get_menu($data['link']);
		$data['title'] = $postmenu->isi;
		$data['namarm'] = $postmenu->rm;
		$datatipe['tipe'] = '2';

		//DATA HUBUNGAN PASIEN
		$data['nama_hub_pasien'] = $post->nama_hub_pasien;
		$data['telp_hub_pasien'] = $post->telp_hub_pasien;
		$data['alamat_hub_pasien'] = $post->alamat_hub_pasien;

		$id_kunjungan = $formData->id_kunjungan;
		$get_id_konten = $this->antrian_model->get_data_dari($id_kunjungan);
		$id_poli = $get_id_konten->row()->id_poly;  
		$admission_id_kunjungan = $get_id_konten->row()->admission_id_kunjungan; 

		if ($admission_id_kunjungan == NULL) {
			$post = $this->antrian_model->get_edit_data($id_kunjungan);
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
			$post = $this->antrian_model->get_data_dariri($id_kunjungan);
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

			$tgl_admits = $post->tgl_admit;
			$tgl_discharge = $post->tgl_discharge;
			function hitungLamaRawat($tgl_admits, $tgl_discharge) {
			    if (!$tgl_admits) return 'Tanggal masuk tidak valid';

			    // Ambil hanya bagian tanggal (tanpa jam)
			    $masuk = new DateTime(date('Y-m-d', strtotime($tgl_admits)));
			    $keluar = $tgl_discharge ? new DateTime(date('Y-m-d', strtotime($tgl_discharge))) : new DateTime();

			    // Hitung selisih hari, lalu tambahkan 1 (agar inklusif)
			    $selisih = $masuk->diff($keluar)->days + 1;

			    return $selisih . ' hari';
			}
			$data['lama'] = hitungLamaRawat($tgl_admits, $tgl_discharge);
			// $data['lama'] = countme($post->tgl_admit);
			// DATA DARI ADMISSION
		}

		/// LINK DIAGNOSA ///
		$diagnosa_masuk = $this->antrian_model->get_diagnosa_masuk($id_pasien, $id_kunjungan);
		$data['diagnosa_masuk'] = $diagnosa_masuk;
		/// LINK DIAGNOSA ///

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
		$this->_validate();
		$id_berkas = htmlspecialchars($this->input->post('id_berkas', TRUE), ENT_QUOTES);
		$link = htmlspecialchars($this->input->post('namaberkas', TRUE), ENT_QUOTES);

		//JIKA FORM EDIT RM07
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

			//JIKA FORM EDIT RM08
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

		$data = $this->antrian_model->get_all_diagnosa9($searchQuery, $limit, $offset);
		$totalCount = $this->antrian_model->count_all_diagnosa9($searchQuery);

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
				'id' => $item->id,
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
