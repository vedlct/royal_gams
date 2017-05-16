<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Type extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();

        $this->load->model('Typem');
    }
    public function index()
    {
        if ($this->session->userdata('type') == "Admin") {
            //$this->load->model('Typem');
            $this->data['gettype'] = $this->Typem->gettype();
            $this->load->view('type', $this->data);
        }
        else {

            redirect('Login');
        }
    }
    public function inserttype()
    {
        if ($this->session->userdata('type') == "Admin") {
//        $this->load->view('type');
            //$this->load->model('Typem');
            $this->data['inserttype'] = $this->Typem->inserttype();
            $this->data['gettype'] = $this->Typem->gettype();
            redirect('Type');
//        $this->load->view('type');


        }
        else {

            redirect('Login');
        }
    }

    function edittype()
    {
        if ($this->session->userdata('type') == "Admin") {
            $id = $this->input->post('id');


            $this->data['edit'] = $this->Typem->edittype($id);
            $this->load->view('edit_type', $this->data);
        }
        else {

            redirect('Login');
        }
    }

    function edit($id)
    {

        if ($this->session->userdata('type') == "Admin") {
            $this->Typem->edit($id);
            redirect('Type');

        }
        else {

            redirect('Login');
        }
    }

    function delete($id)
    {
        if ($this->session->userdata('type') == "Admin") {
            //$id=$this->input->post('sp_id');

            $this->Typem->delete($id);
            redirect('Type');

        }
        else {

            redirect('Login');
        }
    }
}