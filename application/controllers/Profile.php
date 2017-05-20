<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Profile extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Userm');
    }

    public function index()
    {

        //$this->load->view('login');
    }

    public function show()
    {
        $id=$this->session->userdata('id');
        $this->data['userinfo'] = $this->Userm->show_profile($id);
        $this->load->view('profile',$this->data);
    }

    public function edit_profile()
    {
        $id = $this->input->post('id');
        $this->Userm->edit($id);
        redirect('Home');
        //$this->load->view('profile',$this->data);
    }
}