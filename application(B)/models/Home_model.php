<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home_model extends CI_Model{
	var $tabledatas = 'tbl_data_penduduk';
	
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function get_by_id($dp_nik,$dp_nama,$tgl_lahir)
	{
		$tgl_cari = date('Y-m-d', strtotime($tgl_lahir));

		$this->db->from($this->tabledatas);
		$this->db->join ( 'tbl_cabang', 'tbl_cabang.id_cabang = tbl_data_penduduk.dp_outlet' , 'left' );
		$this->db->like('dp_nik',$dp_nik);
		$this->db->like('dp_nama',$dp_nama);	
		$this->db->or_where('date(tgl_lahir) =',$tgl_cari);

		$query = $this->db->get();
		return $query->row();
	}
	
	function get_kode_detail($id){
		$query = $this->db->query("SELECT tbl_data_penduduk.* FROM tbl_data_penduduk 
			WHERE dp_id='$id' GROUP BY dp_id LIMIT 1");
		return $query;
	}
	function get_detail_nasabah($id){
		$this->db->select("tbl_data_penduduk.*,dp_nama");
		$this->db->from('tbl_data_penduduk');
		$this->db->where ( 'tbl_data_penduduk.dp_id', $id);
		$this->db->order_by('dp_id', 'DESC');
		$query = $this->db->get();
		return $query;
	}

	
	
	
	

	

}