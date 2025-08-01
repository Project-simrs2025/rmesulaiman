<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sitemap extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('sitemap_model');
	}

	public function index()
	{		
		$data['post'] = $this->sitemap_model->get_artikel();
        $this->load->view('sitemap/index', $data);
	}
}