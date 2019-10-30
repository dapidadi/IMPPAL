<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //load model admin
        $this->load->model('admin');
        //cek session dan level user
    }

    public function index()
    {

        $this->load->view("user/Dashboard");            

    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }

}