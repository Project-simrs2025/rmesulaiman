<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 * Description of Controller
 *
 * @author https://aethershin.com
 */
class Login extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('backend/Login_model', 'login_model');

        $this->load->model('Site_model', 'site_model');
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('form_validation');
        error_reporting(0);
    }
    function index()
    {

        $data['form_username'] = form_input('', '', 'name="username_cgtv_122021" id="username_cgtv_122021" class="form-control form-control-xl" placeholder="Username"');
        $data['form_password'] = form_password('', '', 'name="password_cgtv_122021" id="inputPassword1" class="form-control form-control-xl" placeholder="Password"');


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




        $data['title'] = 'Login';
        $this->load->view('backend/v_login', $data);
    }

    function auth()
    {
        $this->form_validation->set_rules('username_cgtv_122021', 'Email', 'trim|required|xss_clean');
        $this->form_validation->set_rules('password_cgtv_122021', 'Password', 'trim|required|xss_clean');
        if ($this->form_validation->run() == FALSE) {
            $url = base_url('login');
            echo $this->session->set_flashdata('msg2', '<div class="alert alert-danger alert-dismissible show fade">Invalid Login!.<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
            redirect($url);
        } else {
            $username_cgtv_122021 = str_replace("'", "", htmlspecialchars($this->input->post('username_cgtv_122021', TRUE), ENT_QUOTES));
            $password_cgtv_122021 = str_replace("'", "", htmlspecialchars($this->input->post('password_cgtv_122021', TRUE), ENT_QUOTES));

            $validate_us = $this->login_model->validasi_username($username_cgtv_122021);
            if ($validate_us->num_rows() > 0) {
                $validate_ps = $this->login_model->validasi_password($username_cgtv_122021, $password_cgtv_122021);
                if ($validate_ps->num_rows() > 0) {
                    $this->session->set_userdata('logged', TRUE);
                    $this->session->set_userdata('user', $u);
                    $x = $validate_ps->row_array();
                    $this->session->set_userdata('access', '1');
                    $id = $x['id_users'];
                    $name = $x['nama'];
                    $level = $x['id_level'];
                    $username = $x['username'];
                    $user_photo = $x['foto'];
                    $this->session->set_userdata('id', $id);
                    $this->session->set_userdata('name', $name);
                    $this->session->set_userdata('username', $username);
                    $this->session->set_userdata('level', $level);
                    $this->session->set_userdata('user_photo', $user_photo);
                    redirect('backend/admission');
                } else {
                    $url = base_url('login');
                    echo $this->session->set_flashdata('msg2', '<div class="alert alert-danger alert-dismissible show fade">Password Salah.<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
                    redirect($url);
                }
            } else {
                $url = base_url('login');
                echo $this->session->set_flashdata('msg2', '<div class="alert alert-danger alert-dismissible show fade">Username Salah.<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
                redirect($url);
            }
        }
    }

    function logout()
    {
        $id = $this->session->userdata('id');

        $this->session->sess_destroy();
        $url = base_url('login');
        redirect($url);
    }
}
