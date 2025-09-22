<?php
class Dashboard extends CI_Controller{
/**
* Description of Controller
*
* @author https://aethershin.com
*/
	function __construct(){
		parent::__construct();
		error_reporting(0);
		if($this->session->userdata('logged') !=TRUE){
            $url=base_url('admin');
            redirect($url);
        };
		$this->load->model('Site_model','site_model');
		$this->load->helper('text');
		$this->load->helper('url');
		$this->load->helper('download');
		$this->load->library('upload');
	}
	function index(){
		$site = $this->site_model->get_site_data()->row_array();
        $data['site_title'] = $site['site_title'];
        $data['site_favicon'] = $site['site_favicon'];
        $data['images'] = $site['images'];
        $data['title'] = 'Selamat Datang';
        $tgl=date('Y-m-d');
        //$tgl=date('2024-12-27');
        $trust = new ApiAntrian($con);
		$data2    =  $trust->antreanPerTanggal($tgl);
        $content = json_decode($data2, TRUE);
       	$hasil_sudah = 0;
       	$hasil_sedang = 0;
       	$hasil_belum = 0;
       	$hasil_batal = 0;
       	$hasil_batal = 0;
       	$persentase = 0;
       	$total_tanpa_batal = 0;
       	$sudah = 'Selesai dilayani';
       	$sedang = 'Sedang dilayani';
       	$belum = 'Belum dilayani';
       	$batal = 'Batal';
		foreach($content as $key)
		{
			$tes .= $key['status'];
		}
		$hasil_sudah = substr_count($tes, $sudah);
		$hasil_sedang = substr_count($tes, $sedang);
		$hasil_belum = substr_count($tes, $belum);
		$hasil_batal = substr_count($tes, $batal);

		$total_tanpa_batal = $hasil_sudah+$hasil_sedang+$hasil_belum;

		$persentase = $hasil_sudah/$total_tanpa_batal*100;
        
		$data['jumlah_pasien'] = count($content);
		$data['jumlah_selesai'] = $hasil_sudah;
		$data['jumlah_sedang'] = $hasil_sedang;
		$data['jumlah_belum'] = $hasil_belum;
		$data['persentase'] = $persentase;
		

		$this->load->view('backend/menu',$data);
		$this->load->view('backend/_partials/head');
		$this->load->view('backend/_partials/templatejs');
		$this->load->view('backend/v_dashboard',$data);
		
		
		
		
	}
	
   	

}