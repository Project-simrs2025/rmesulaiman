<?php
class Konsumen_model extends CI_Model
{
    var $table = 'master_karyawan';
    var $column_search = array('k.nama', 'j.nama'); // nama karyawan dan jabatan
    var $order = array('k.id' => 'desc');

    public function __construct()
    {
        parent::__construct();
        $this->postgres = $this->load->database('postgres', TRUE);
        date_default_timezone_set("Asia/Jakarta");
    }

    private function _get_datatables_query()
    {
        $this->postgres->select('k.id, k.nama, j.nama as nama_jabatan');
        $this->postgres->from('master_karyawan k');
        $this->postgres->join('master_karyawan_jabatan j', 'j.id = k.id_jabatan', 'left');

        $i = 0;
        foreach ($this->column_search as $item) {
            if ($_POST['search']['value']) {
                if ($i === 0) {
                    $this->postgres->group_start();
                    $this->postgres->like($item, $_POST['search']['value']);
                } else {
                    $this->postgres->or_like($item, $_POST['search']['value']);
                }

                if (count($this->column_search) - 1 == $i)
                    $this->postgres->group_end();
            }
            $i++;
        }

        if (isset($_POST['order'])) {
            $this->postgres->order_by($this->column_search[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } else if (isset($this->order)) {
            $order = $this->order;
            $this->postgres->order_by(key($order), $order[key($order)]);
        }
    }

    function get_datatables()
    {
        $this->_get_datatables_query();
        if ($_POST['length'] != -1)
            $this->postgres->limit($_POST['length'], $_POST['start']);
        $query = $this->postgres->get();
        return $query->result();
    }

    public function count_filtered()
    {
        $this->_get_datatables_query();
        $query = $this->postgres->get();
        return $query->num_rows();
    }

    public function count_all()
    {
        $this->postgres->from($this->table);
        return $this->postgres->count_all_results();
    }

    public function get_by_id($id)
    {
        $this->postgres->from($this->table);
        $this->postgres->where('id',$id);
        $query = $this->postgres->get();
        return $query->row();
    }
    public function get_all_karyawan()
	{
	    $this->postgres->select('k.id, k.nama');
	    $this->postgres->from('master_karyawan k');
	    return $this->postgres->get()->result();
	}
    function insert_stock($data){
        $insert = $this->postgres->insert($this->table, $data);
        if($insert){
            return true;
        }
    }

    public function update_entry($id, $data)
    {
        return $this->postgres->update('master_karyawan', $data, array('id' => $id));
    }
    public function single_entry($id_konsumen)
    {
        $this->postgres->select('*');
        $this->postgres->from('master_karyawan');
        $this->postgres->where('id', $id_konsumen);
        $query = $this->postgres->get();
        if (count($query->result()) > 0) {
            return $query->row();
        }
    }
    public function update_lock($id_konsumen, $data)
    {
        return $this->postgres->update('master_karyawan', $data, array('id' => $id_konsumen));
    }
    function delete_entry($id_konsumen)
    {
        return $this->postgres->delete('master_karyawan', array('id' => $id_konsumen));
        
    }
}

	
