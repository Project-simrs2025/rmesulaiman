<?php
class Menu extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		error_reporting(0);
		if($this->session->userdata('level') != "10"){
			$url=base_url('admin');
            redirect($url);
		};
		$this->load->model('backend/Menu_model', 'menu_model');
		$this->load->model('Site_model', 'site_model');
		$this->load->helper('text');
		$this->load->helper('url');
	}

	public function index()
	{
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
		$data['title'] = 'Menu';

		$this->load->view('backend/menuhorizontal', $data);
		$this->load->view('backend/modal/menu_modal', $data);
		$this->load->view('backend/_partials/templatejs');
		$this->load->view('backend/v_menu', $data);
	}

	public function get_ajax_list()
	{
		$list = $this->menu_model->get_datatables_menu();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $d) {
			$tipe = $d->tipe;
			if ($tipe == '1,2') {
				$tipedata = 'Rawat Inap & Rawat Jalan';
			} else if ($tipe == '1') {
				$tipedata = 'Rawat Inap';
			} else if ($tipe == '2') {
				$tipedata = 'Rawat Jalan';
			} else {
				$tipedata = 'Tidak diketahui';
			}

			$no++;
			$row = array();
			$row[] = $d->rm;
			$row[] = $d->isi;
			$row[] = $tipedata;
			$row[] = '<div class="btn-group mb-1"><div class="dropdown"><button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton7" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Opsi</button><div class="dropdown-menu" aria-labelledby="dropdownMenuButton7"><a class="dropdown-item item_edit" href="javascript:void()" title="Edit" onclick="edit_menu(' . "'" . $d->id_menu . "'" . ')"><i class="bi bi-pen-fill"></i> Edit</a>
				<a class="dropdown-item delete_record" href="javascript:void()" title="Hapus" id="del" value="' . $d->id_menu . '"><i class="bi bi-trash"></i> Hapus</a>
				</div></div></div>';
			$data[] = $row;
		}

		$output = array(
			// "draw" => $_POST['draw'],
			// "recordsTotal" => $this->menu_model->count_all(),
			// "recordsFiltered" => $this->menu_model->count_filtered(),
			"data" => $data,
		);
		//output to json format
		echo json_encode($output);
	}
	public function ajax_edit($id_menu)
	{
		$data = $this->menu_model->get_by_id($id_menu);
		echo json_encode($data);
	}

	function add()
	{
		$this->_validate();
		$xtipe[]=$this->input->post('tipe');
		foreach($xtipe as $tipe){
			$tipenya = @implode(",", $tipe);
		}


		$arraysql = array(
			"rm" => $this->input->post('norm', TRUE),
			"isi" => $this->input->post('nama', TRUE),
			"link" => $this->input->post('link', TRUE),
			"status_aktif" => 1,
			"tipe" => $tipenya
		);

		$insert = $this->menu_model->insert($arraysql);
		if ($insert) {
			echo json_encode(array("status" => TRUE));
		} else {
			echo json_encode(array("status" => FALSE));
		}
	}


	public function edit()
	{
		$this->_validate_edit();
		$id_menu = $this->input->post('id_menu');
		$xtipe[]=$this->input->post('tipe');
		foreach($xtipe as $tipe){
			$tipenya = @implode(",", $tipe);
		}



		$arraysql = array(
			"rm" => $this->input->post('norm', TRUE),
			"isi" => $this->input->post('nama', TRUE),
			"link" => $this->input->post('link', TRUE),
			"tipe" => $tipenya
		);
		$this->menu_model->update(array('id_menu' => $this->input->post('id_menu')), $arraysql);
		// update ke mysql
		echo json_encode(array("status" => TRUE));
	}

	public function delete()
	{
		if ($this->input->is_ajax_request()) {
			$id_menu = $this->input->post('id_menu');
			$post = $this->menu_model->single_entry($id_menu);
			$arraysql = array(
				"status_aktif" => 0,
			);


			if ($this->menu_model->update(array('id_menu' => $this->input->post('id_menu')), $arraysql)) {
				$data = array('res' => "success", 'message' => "Data berhasil dihapus");
			} else {
				$data = array('res' => "error", 'message' => "Delete query error");
			}
			echo json_encode($data);
		} else {
			echo "No direct script access allowed";
		}
	}

	private function _validate()
	{
		$data = array();
		$data['error_string'] = array();
		$data['inputerror'] = array();
		$data['status'] = TRUE;

		if ($this->input->post('nama') == '') {
			$data['inputerror'][] = 'nama';
			$data['error_string'][] = 'Form Nama Menu RME harus berisi';
			$data['status'] = FALSE;
		}
		if ($this->input->post('norm') == '') {
			$data['inputerror'][] = 'norm';
			$data['error_string'][] = 'Form No Berkas RME harus berisi';
			$data['status'] = FALSE;
		}
		if ($this->input->post('link') == '') {
			$data['inputerror'][] = 'link';
			$data['error_string'][] = 'Form Kode Berkas RME harus berisi';
			$data['status'] = FALSE;
		}

		if ($data['status'] === FALSE) {
			echo json_encode($data);
			exit();
		}
	}

	private function _validate_edit()
	{
		$data = array();
		$data['error_string'] = array();
		$data['inputerror'] = array();
		$data['status'] = TRUE;
		if ($this->input->post('nama') == '') {
			$data['inputerror'][] = 'nama';
			$data['error_string'][] = 'Form Nama Menu RME harus berisi';
			$data['status'] = FALSE;
		}
		if ($this->input->post('norm') == '') {
			$data['inputerror'][] = 'norm';
			$data['error_string'][] = 'Form No Berkas RME harus berisi';
			$data['status'] = FALSE;
		}
		if ($this->input->post('link') == '') {
			$data['inputerror'][] = 'link';
			$data['error_string'][] = 'Form Kode Berkas RME harus berisi';
			$data['status'] = FALSE;
		}
		if ($data['status'] === FALSE) {
			echo json_encode($data);
			exit();
		}
	}
}
