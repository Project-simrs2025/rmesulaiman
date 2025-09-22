<?php
class Login_model extends CI_Model{
    private $tbl_user_cgtv_122021 = 'auth_users';
    private $tbl_dokter_cgtv_122021 = 'master_karyawan';
    function __construct() {
        parent::__construct();
        $this->postgres = $this->load->database('postgres',TRUE);
    }
    
    function validasi_username($username_cgtv_122021)
    {
        $this->postgres->select('auth_users.*, auth_users.id_users,auth_users.username,auth_users.password,auth_users.id_level,master_karyawan.nama,master_karyawan.foto');
        $this->postgres->from($this->tbl_user_cgtv_122021);
        $this->postgres->join ( 'master_karyawan', 'master_karyawan.id = auth_users.id_karyawan' , 'left' );
        $this->postgres->where('auth_users.username',$username_cgtv_122021);
        $this->postgres->limit(1);
        $result = $this->postgres->get();
        return $result;
        
    }
   
    function validasi_password($username_cgtv_122021,$password_cgtv_122021)
    {
        $this->postgres->select('auth_users.*, auth_users.username,auth_users.password,master_karyawan.nama,master_karyawan.foto');
        $this->postgres->from($this->tbl_user_cgtv_122021);
        $this->postgres->join ( 'master_karyawan', 'master_karyawan.id = auth_users.id_karyawan' , 'left' );
        $this->postgres->where('auth_users.username',$username_cgtv_122021);
        $this->postgres->where('auth_users.password',MD5($password_cgtv_122021));
        $this->postgres->limit(1);
        $result = $this->postgres->get();
        return $result;
        
    }
    
    
   

} 