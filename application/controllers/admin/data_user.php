<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class data_user extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
    }

    public function index()
    {
        $data = array(

            'title'     => 'User',
            'data_user'       => $this->user_model->tampil_data(),

        );

        $this->load->view('data_user', $data);
    }

    public function hapus($id_user)
    {
        $id['id_user'] = $this->uri->segment(3);

        $this->user_model->hapus($id);

        //redirect
        redirect('admin/data_user/');

    }

    public function edit($id_user)
    {
        $id_user = $this->uri->segment(3);

        $data = array(

            'title'     => 'Edit',
            'data_user' => $this->user_model->edit($id_user)

        );

        $this->load->view('', $data);
    }

}
?>