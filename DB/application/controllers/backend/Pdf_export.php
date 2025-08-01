<?php
class Pdf_export extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		error_reporting(0);
		ini_set('display_errors', 0);
		if ($this->session->userdata('logged') != TRUE) {
			$url = base_url('admin');
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
		$this->load->library('Pdf');
	}

	public function index()
	{
		// $unit = $this->site_model->get_unit_data();
		// $data['nama_prov'] = $unit['nama_prov'];
		// $data['nama_kab'] = $unit['nama_kab'];
		// $data['nama_kec'] = $unit['nama_kec'];
		// $data['nama_kel'] = $unit['nama_kel'];
		// $data['alamat'] = $unit['alamat'];
		// $data['city_sign'] = $unit['nama_kab'];
		// $data['lokasi'] = $unit['alamat'] . ', Kelurahan ' . $unit['nama_kel'] . ', Kecamatan ' . $unit['nama_kec'] . ', ' . $unit['nama_kab'] . ', ' . $unit['nama_prov'];
		// // AMBIL DATA SETTINGS
		// $getsettings = $this->site_model->get_settings_data();
		// $data['site_title'] = $getsettings['nama'];
		// $data['telepon'] = $getsettings['telepon'];
		// $data['email'] = $getsettings['telepon'];
		// $data['images'] = BASE_STORAGE . '/pmo/images/' . $getsettings['logo'];
		// $data['site_favicon'] = BASE_STORAGE . '/pmo/images/' . $getsettings['logo'];
		// $data['title'] = 'Menu';

		// $this->load->view('backend/menuhorizontal', $data);
		// $this->load->view('backend/modal/menu_modal', $data);
		// $this->load->view('backend/_partials/templatejs');
		// $this->load->view('backend/v_menu', $data);
	}

	public function cetak_formulir2() {
        $data = [
            'nama_pasien' => 'Budi Santoso',
            'kelas' => 'Kelas 1',
            'nama_ruangan' => 'Anggrek',
            'tgl_lahir' => '1985-01-01',
            'jenkel' => 'Laki-laki',
            'no_rm' => '123456',
            'nama_pekerjaan' => 'Karyawan Swasta',
            'alamatt' => 'Jl. Contoh No. 123',
            'city_sign' => 'Surabaya',
            'mode' => 'lihat',
            'global_data' => json_encode(['id_dokter' => 1])
        ];

        $html = $this->load->view('pdf/formulir_pasien', $data, true);

        $mpdf = new Mpdf(['format' => 'A4']);

        $mpdf->WriteHTML($html);

        $mpdf->Output('formulir_pasien.pdf', 'I'); 
    }


    function cetak_formulir($id)
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
		$datatipe['tipe'] = '1';

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
		$html = $this->load->view('backend/menuhorizontal', $data);
		$html = $this->load->view('backend/_partials/templatejs');
		$html = $this->load->view('backend/rme/common', $datatipe, true);
		$pdf= new PDF(PDF_PAGE_ORIENTATION,PDF_UNIT,PDF_PAGE_FORMAT,true,'UTF-8',false);
		$pdf->AddPage('P','A4');
		$html = preg_replace('/<form[^>]*>/', '', $html); 
		$html = preg_replace('/<\/form>/', '', $html);    
    	ob_clean();
		$pdf->writeHTML($html, true, false, true, false, '');
        $pdf->Output('formulir_pasien.pdf', 'I'); 
	}
	
}
