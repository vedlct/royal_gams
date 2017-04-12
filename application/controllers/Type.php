<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Type extends CI_Controller
{

    public function index()
    {
        $this->load->model('Typem');
        $this->data['gettype'] = $this->Typem->gettype();
        $this->load->view('type',$this->data['gettype']);
    }
    public function inserttype()
    {

//        $this->load->view('type');
        $this->load->model('Typem');
        $this->data['inserttype'] = $this->Typem->inserttype();

        redirect('Type');


    }
}