<?php
class Konsumen extends CI_Controller{
/**
* Description of Controller
*
* @author https://aethershin.com
*/	
	function __construct(){
		parent::__construct();
		error_reporting(0);
		if($this->session->userdata('access') != "3" && $this->session->userdata('access') != "1"){
			$url=base_url('login_user');
            redirect($url);
		};
		$this->load->model('backend/Konsumen_model','konsumen_model');
		$this->load->model('Site_model','site_model');
		$this->load->library('upload');
		$this->load->helper('text');
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->helper('download');
		$this->load->helper('tanggal');
		$this->load->library('ciqrcode');
		$this->load->library(array('excel','session'));
	}

	public function index(){
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
		$data['title'] = 'QR Code';
		
        $this->load->view('backend/menuhorizontal',$data);
		
		$this->load->view('backend/modal/konsumen_modal');
		$this->load->view('backend/_partials/templatejs');
		$this->load->view('backend/v_konsumen', $data);
	}
	public function get_ajax_list()
	{
	    $list = $this->konsumen_model->get_datatables();
	    $data = array();
	    $no = $_POST['start'];
	    foreach ($list as $d) {
	        $no++;
	        $row = array();
	        $row[] = '<img src="'.base_url('assets/images/qrcode/'.$d->path_ttd).'" height="50">';
	        $row[] = $d->nama;
	        $row[] = $d->nama_jabatan;

	        
	        $data[] = $row;
	    }

	    $output = array(
	        "draw" => $_POST['draw'],
	        "recordsTotal" => $this->konsumen_model->count_all(),
	        "recordsFiltered" => $this->konsumen_model->count_filtered(),
	        "data" => $data,
	    );
	    
	    echo json_encode($output);
	}

	public function ajax_edit($id)
	{
		$data = $this->konsumen_model->get_by_id($id);
		echo json_encode($data);
	}
	function to_safe_filename($name) {
	    // Hilangkan karakter selain huruf, angka, spasi dan titik
	    $name = preg_replace('/[^a-zA-Z0-9\s.]/', '', $name);
	    // Ganti spasi dan titik dengan underscore
	    $name = str_replace([' ', '.'], '_', $name);
	    // Ubah jadi huruf kecil
	    return strtolower($name);
	}
	
	public function generate_all_qrcode()
	{
	    $this->load->helper('file');

	    // Ambil semua data karyawan
	    $karyawans = $this->konsumen_model->get_all_karyawan();

	    foreach ($karyawans as $karyawan) {
	        $id = $karyawan->id;
	        $nama = $karyawan->nama;

	        $rs = htmlspecialchars($this->input->post('rs'), ENT_QUOTES, 'UTF-8');

			if (!$rs) {
			    echo json_encode([
			        'status' => false,
			        'inputerror' => ['rs'],
			        'error_string' => ['Nama rumah sakit tidak boleh kosong.']
			    ]);
			    return;
			}



			$hasil = 'Dikeluarkan di '.$rs.' Ditandatangani secara elektronik oleh '.$nama;

	        //QRCODE
	        $config['cacheable']    = true; //boolean, the default is true
	        $config['cachedir']     = './assets/'; //string, the default is application/cache/
	        $config['errorlog']     = './assets/'; //string, the default is application/logs/
	        $config['imagedir']     = './assets/images/qrcode/'; //direktori penyimpanan qr code
	        $config['quality']      = true; //boolean, the default is true
	        $config['size']         = '1024'; //interger, the default is 1024
	        $config['black']        = array(224,255,255); // array, default is array(255,255,255)
	        $config['white']        = array(70,130,180); // array, default is array(0,0,0)
	        $this->ciqrcode->initialize($config);
	 		
	 		$image_name = $this->to_safe_filename($nama) . '.png';
	 
	        $params['data'] = $hasil; //data yang akan di jadikan QR CODE
	        $params['level'] = 'H'; //H=High
	        $params['size'] = 10;
	        $params['savename'] = FCPATH.$config['imagedir'].$image_name; //simpan image QR CODE ke folder assets/images/
	        $this->ciqrcode->generate($params); // fungsi untuk generate QR CODE
			//QRCODE	

			// Simpan path QR ke DB
			$this->konsumen_model->update_path_ttd($id, $image_name);
	    }

	    echo json_encode([
	        'status' => true,
	        'message' => 'QR Code berhasil dibuat untuk semua karyawan.'
	    ]);
	}



}