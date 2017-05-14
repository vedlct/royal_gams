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
        //$this->load->model('Typem');
        $this->data['gettype'] = $this->Typem->gettype();
        $this->load->view('type',$this->data);
    }
    public function inserttype()
    {

//        $this->load->view('type');
        //$this->load->model('Typem');
        $this->data['inserttype'] = $this->Typem->inserttype();
        $this->data['gettype'] = $this->Typem->gettype();
        redirect('Type');
//        $this->load->view('type');


    }

    function edittype()
    {

        $id = $this->input->post('id');


        $this->data['edit'] = $this->Typem->edittype($id);
        $this->load->view('edit_type', $this->data);
    }

    function edit($id){


        $this->Typem->edit($id);
        redirect('Type');

    }

    function delete($id){

        //$id=$this->input->post('sp_id');

        $this->Typem->delete($id);
        redirect('Type');

    }
}