<?php

class Input extends CI_Controller{

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_data');
        $this->load->helper('url');
    }

    function index(){
        $data['user'] = $this->m_data->tampil_data()->result();
        $this->load->view('V_tampil',$data);
    }

    function tambah(){
        $this->load->view('V_input');
    }

    function tambah_aksi(){
        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');
        $nrp = $this->input->post('nrp');

        $data = array(
            'nama' => $nama,
            'alamat' => $alamat,
            'nrp' => $nrp
        );
        $this->m_data->input_data($data,'user');
        redirect('Input/index');
    }
}