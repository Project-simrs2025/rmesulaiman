<?php

class Antrians extends CI_Controller
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
		$this->load->model('backend/Antrians_model', 'antrians_model');
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

		$getdata = $this->antrians_model->get_list_dokter();
		$opt = array('' => '[Pilih Dokter]');
		foreach ($getdata as $d) {
			$opt[$d] = $d;
		}
		$getdatapoli = $this->antrians_model->get_list_poli();
		$pl = array('' => '[Pilih Poliklinik]');
		foreach ($getdatapoli as $x) {
			$pl[$x] = $x;
		}
		$data['form_filter'] = form_dropdown('', $opt, '', 'id="dokter" class="form-select dokter" style="width:100%;"');
		$data['form_filter_poli'] = form_dropdown('', $pl, '', 'id="poli" class="form-select poli" style="width:100%;"');

		$this->load->view('backend/menuhorizontal', $data);
		$this->load->view('backend/_partials/templatejs');
		$this->load->view('backend/v_antrians', $data);
	}


	// TAMPILAN LIST DATA ANTRIAN
	public function get_ajax_list()
	{
	    $list = $this->antrians_model->get_datatables();
	    $data = array();
	    $no = $_POST['start'];

	    $current_poly = null;
	    $poly_counter = 0;

	    foreach ($list as $d) {
	        if ($d->poli_id !== $current_poly) {
	            $current_poly = $d->poli_id;
	            $poly_counter = 0;
	        }
	        if ($poly_counter >= 2000) {
	            continue; 
	        }
	        $no++;
	        $row = array();
	        $row[] = format_indo($d->waktu_masuk);
	        $row[] = $d->no_antrian;
	        $row[] = $d->patient_record;
	        $row[] = $d->patient_name;
	        $row[] = $d->penjamin_name;
	        $row[] = $d->dokter_name;
	        $row[] = $d->poly_name;
	        
	        $row[] = '<a class="btn btn-danger pulang" href="javascript:void()" title="Pulangkan" id="pul" kunjungan="'.$d->id_kunjungan.'" idpas="'.$d->patient_id.'" antrian="'.$d->id_antrian.'"><i class="bi bi-box-arrow-right"></i> Pulang</a>';
	        
	        $data[] = $row;
	        $poly_counter++; 
	    }
	    $output = array(
	        "draw" => $_POST['draw'],
	        "recordsTotal" => $this->antrians_model->count_all(),
	        "recordsFiltered" => $this->antrians_model->count_filtered(),
	        "data" => $data,
	    );
	    echo json_encode($output);
	}
	public function pulang() {
    	if ($this->input->is_ajax_request()) {
    		$idpas = $this->input->post('idpas');
    		$kunjungan = $this->input->post('kunjungan');
    		$antrian = $this->input->post('antrian');
				$ajax_data['status_aktif'] = 'N';
				$ajax_data['status_antrian'] = 'N';
				$ajax_data['status_kunjungan'] = 'N';
				$ajax_data['status_issue'] = 1;

				if ($this->antrians_model->pulangkan($idpas,$kunjungan,$antrian,$ajax_data)) {
					$data = array('res' => "success", 'message' => "Data berhasil dihapus");
				} else {
					$data = array('res' => "error", 'message' => "Delete query error");
				}
				echo json_encode($data);
		} else {
			echo "No direct script access allowed";
		}
    }

}
