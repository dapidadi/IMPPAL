<?php

class Biodata extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->model('Biodata_model');
	}

	public function index()
    {

        $this->load->view('user/Biodata');
    }

    public function simpan()
    {
        $data = array(

            'nama'          => $this->input->post("nama"),
            'tempat'        => $this->input->post("tempat"),
            'tanggal'    	=> $this->input->post("tanggal"),
            'alamat'        => $this->input->post("alamat"),
            'gender'        => $this->input->post("gender"),
            'nilai'         => $this->input->post("nilai"),

        );
        

        $this->Biodata_model->simpan($data);

        $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil disimpan didatabase.
                                                </div>');

        redirect('user/dashboard'); 
    }

    public function bio() 
    {
        $data = array(

            'title'     => 'Data Biodata',
            'data_biodata' => $this->Biodata_model->bio()

        );

        $this->load->view('user/View_biodata', $data);
    }

}

?>