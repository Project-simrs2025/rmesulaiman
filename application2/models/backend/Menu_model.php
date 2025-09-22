<?php
class Menu_model extends CI_Model{
	
	
	var $tablemenu = 'menurme';
	

	public function __construct()
	{
		parent::__construct();
		$this->postgres = $this->load->database('postgres', TRUE);
		date_default_timezone_set("Asia/Jakarta");
	}

	
	function get_new_id_menu(){
        
        $query = $this->postgres->query("SELECT max(link) as maxKode FROM menurme WHERE link LIKE 'rm%'");

        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $result[] = $data;
            }
            return $result;
        } else {
	        return []; // Mengembalikan array kosong jika tidak ada data
	    }
                            
    }
    function get_datatables_menu()
	{
		$this->postgres->select('menurme.*');
		$this->postgres->where ('status_aktif',1);
		$this->postgres->order_by('menurme.id_menu', 'asc');
		$this->postgres->from($this->tablemenu);
		return $this->postgres->get()->result();
	}
	
	
	
    public function get_by_id($id_menu)
	{
		$this->postgres->from($this->tablemenu);
		$this->postgres->where('id_menu',$id_menu);
		$query = $this->postgres->get();
		return $query->row();
	}
	public function single_entry($id_menu)
    {
        $this->postgres->select('*');
        $this->postgres->from('menurme');
        $this->postgres->where('id_menu', $id_menu);
        $query = $this->postgres->get();
        if (count($query->result()) > 0) {
            return $query->row();
        }
    }
	function insert($arraysql){
		$insert = $this->postgres->insert($this->tablemenu, $arraysql);
		if($insert){
			return true;
		}
	}
   	public function update($where, $arraysql)
	{
		$this->postgres->update($this->tablemenu, $arraysql, $where);
		return $this->postgres->affected_rows();
	}
	public function delete_entry($where, $arraysql)
    {
        $this->postgres->update($this->tablemenu, $arraysql, $where);
        return $this->postgres->affected_rows();
    }
	
	
	
}