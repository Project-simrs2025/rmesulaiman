<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* Description of Controller
*
* @author https://aethershin.com
*/
class Error404 extends CI_Controller {
	function __construct(){
		parent::__construct();
		
	}
	function index(){
		if($this->session->userdata('logged') !=TRUE){
            
            $x['keterangan'] = 'Homepage';
            $x['link'] = 'admin';
        } else {
        	$x['keterangan'] = 'Admission';
        	$x['link'] = 'backend/admission';
        }
		$this->load->view('errors/html/error_404',$x);
	}

	
}