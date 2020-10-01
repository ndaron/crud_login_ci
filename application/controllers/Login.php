<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_login');
    }


    public function index()
    {
        $data['layout'] = [
            'page' => 'auth/login',
            'page_description' => 'Login',
            'page_title' => 'Login',
        ];
        $this->view($data);
    }

    function aksi_login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $where = array(
          'username' => $username,
            'password' => $password
        );
        $cek = $this->m_login->cek_login("admin",$where)->num_rows();
        if($cek > 0){
            $data_session = array(
                'nama' => $username,
                'status' => "login"
            );

            $this->session->set_userdata($data_session);

            redirect(site_url("Admin"));
        }else{
            echo "Username dan password salah !";
        }
    }

    function logout(){
        $this->session->sess_destroy();
        redirect(base_url());
    }
}
