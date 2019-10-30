<?php

class register extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->model('Register_model');
	}

	public function index()
    {
        $data = array(

            'title'     => 'Data User',
            'data_user' => $this->Register_model->get_all(),

        );

        $this->load->view('register', $data);
    }
	
	public function tambah()
    {
        $data = array(

            'title'     => 'Sign Up'

        );

        $this->load->view('register', $data);
    }

    public function simpan()
    {
        $data = array(

            'nama'       	=> $this->input->post("nama"),
            'email'         => $this->input->post("email"),
            'username'    	=> $this->input->post("username"),
            'password'      => $this->input->post("password"),

        );
        

        $this->Register_model->simpan($data);

        $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil disimpan didatabase.
                                                </div>');

        //redirect
        redirect('welcome/');

    }

    // public function update()
    // {
    //     $id['id_user'] = $this->input->post("id_user");
    //     $data = array(

    //         'nama'       	=> $this->input->post("nama"),
    //         'email'         => $this->input->post("email"),
    //         'username'    	=> $this->input->post("username"),
    //         'password'      => $this->input->post("password"),

    //     );

    //     $this->Register_model->update($data, $id);

    //     $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil diupdate didatabase.
    //                                             </div>');

    //     //redirect
    //     redirect('user/edit_akun');

    // }


}

?>
