<?php

class Data_pasien extends CI_Controller
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
		$this->load->model('backend/Data_pasien_model', 'data_pasien_model');
		$this->load->model('backend/Admission_model', 'admission_model');
		$this->load->model('backend/Rme_model', 'rme_model');
		$this->load->model('backend/Antrian_model', 'antrian_model');
		$this->load->library('upload');
		$this->load->library('validation/RmeFormValidation');
		$this->load->library('Pdf');
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


	// TAMPILAN LIST DATA ANTRIAN
	public function get_ajax_list()
	{
	    $list = $this->data_pasien_model->get_datatables();
	    $data = array();
	    $no = $_POST['start'];


	    foreach ($list as $d) {
	        
	        $no++;
	        $row = array();
	        
	        $row[] = $d->nama;
	        $row[] = '<a class="btn-sm pilih" href="javascript:void()" title="Pilih" data-id="' . $d->id . '">' . $d->no_rm . '</a>';
	        $row[] = format_indo($d->tanggal_lahir);
	        $row[] = $d->alamat;
	        $data[] = $row;
	    }
	    $output = array(
	        "draw" => $_POST['draw'],
	        "recordsTotal" => $this->data_pasien_model->count_all(),
	        "recordsFiltered" => $this->data_pasien_model->count_filtered(),
	        "data" => $data,
	    );
	    echo json_encode($output);
	}

	// TAMPILAN GET DATA LEMBAR RME
	function get_data_pasien()
	{
		$id_pasien = $this->uri->segment(4);
		$get_id_konten = $this->data_pasien_model->get_id_data($id_pasien);
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
			$data['title'] = 'Detail Kunjungan';
			$data['id'] = $id_pasien;

			$post = $this->data_pasien_model->get_edit_data($id_pasien);
			$data['tanggal_lahir'] = format_indo(date($post->tanggal_lahir));
			$data['nama_pasien'] = $post->nama_pasien;
			$data['no_rm'] = $post->no_rm;
			$data['nik'] = $post->nik;
			$data['no_bpjs'] = $post->no_bpjs;
			$data['alamat'] = $post->alamat;

			$this->load->view('backend/menuhorizontal', $data);
			$this->load->view('backend/_partials/templatejs');
			$this->load->view('backend/v_get_data_pasien', $data);
		} else {
			redirect('backend/antrian');
		}
	}

	public function get_ajax_list_download() {
        // Get 'id_pasien' from POST data
	    $id_pasien = $this->input->post('id_pasien');
	    
	    // Fetch data using the model function
	    $list = $this->data_pasien_model->get_datatables_download($id_pasien);
        $data = array();
        $no = $_POST['start'];

        foreach ($list as $r) {
            
        	$row = array();
        	
            $tanggal = $r->waktu_input ? format_indo(date($r->waktu_input)) : '-';
			$row[] = $tanggal;
            $row[] = $r->nama_poli;
            $row[] = $r->nama_dokter;
            //////////////////////////////////////////////////////////////////////////////////////////////////
           
            $row[] = '<a class="btn icon btn-success details" href="javascript:void()" title="Download All" data-id="'.$r->id.'"><i class="bi bi bi-eye"></i> Lihat Berkas RME</a>';

            $data[] = $row;
        }

        // Output in DataTable format
        $output = array(
            "draw" => $_POST['draw'], 
            "recordsTotal" => $this->data_pasien_model->count_all_download($id_pasien),
            "recordsFiltered" => $this->data_pasien_model->count_filtered_download($id_pasien),
            "data" => $data, 
        );
        
        echo json_encode($output);
    }

    // TAMPILAN GET DATA LEMBAR RME
	function get_data_pasien_detail()
	{
		$id = $this->uri->segment(4);
		$get_id_konten = $this->data_pasien_model->get_id_data2($id);
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

			$id_poli = $get_id_konten->row()->id_poly;  
			$admission_id_kunjungan = $get_id_konten->row()->admission_id_kunjungan;  
			
			if ($id_poli == 16 && $admission_id_kunjungan == NULL) {

				$post2 = $this->data_pasien_model->get_edit_data3($id);
				$data['tgl_admit_raw'] = date($post2->waktu_masuk);
				$data['tgl_admit'] = format_indo(date($post2->waktu_masuk));
				$data['nama_pasien'] = $post2->nama_pasien;
				$data['no_rm'] = $post2->no_rm;
				$data['penjamin_name'] = $post2->nama_jenis_pasien;
				$data['nama_poli'] = $post2->nama_poli;
				$data['id_kunjungan'] = $post2->id_kunjungan;
				$data['id_pasien'] = $post2->id_pasien;
				$data['nama_dokter'] = $post2->nama_dokter;
				$this->load->view('backend/menuhorizontal', $data);
				$this->load->view('backend/_partials/templatejs');
				$this->load->view('backend/v_get_detail_berkas_rj', $data);

			} else {
				

				$post = $this->data_pasien_model->get_edit_data2($id);
			
			
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
				$this->load->view('backend/v_get_detail_berkas', $data);
			}
				
		} else {
			redirect('backend/data_pasien');
		}
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
		if ($post->jenkel == 2) {
			$post->jenkel = 'Perempuan';
		} else {
			$post->jenkel = 'Laki-laki';
		}

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
		$datatipe['tipe'] = '3';

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
		$this->load->view('backend/rme/common', $datatipe);
	}
	function lihatrj($id)
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
		$post = $this->antrian_model->get_edit_data($id_kunjungan);

		// Menyesuaikan jenis kelamin
		if ($post->jenkel == 2) {
			$post->jenkel = 'Perempuan';
		} else {
			$post->jenkel = 'Laki-laki';
		}

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
		$data['tgl_admit2'] = $post->waktu_masuk;
		$post->umur = countumur($post->tanggal_lahir);
		$data['tgl_admit'] = format_indo(date($post->waktu_masuk));
		$data['nama_dokter'] = $post->nama_dokter;
		$data['nama_poli'] = $post->nama_poli;
		$data['nama_jenis_pasien'] = $post->nama_jenis_pasien;
		$data['lama'] = countme($post->waktu_masuk);

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
		$datatipe['tipe'] = '3';

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
		$this->load->view('backend/rme/common', $datatipe);
	}
	
}
