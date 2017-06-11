<?php

class Edit extends CI_Controller{

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_data');
        $this->load->helper('url');
    }

    function edit($id){
        $where = array('id' => $id);
        $data['user'] = $this->m_data->edit_data($where,'user')->result();
        $this->load->view('v_edit',$data);
    }

    function update(){
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');
        $nrp = $this->input->post('nrp');

        $data = array(
            'nama' => $nama,
            'alamat' => $alamat,
            'nrp' => $nrp
        );

        $where = array(
            'id' => $id
        );

        $this->m_data->update_data($where,$data,'user');
        redirect('Input/index');
    }
}