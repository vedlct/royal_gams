<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Barcode extends CI_Controller
{
    public function index()
    {

        $this->load->view('barcode');
    }

    public function printbarcode()
    {

        $this->data['pid']=$this->input->post('pid');
        $this->data['sfrom']=$this->input->post('sfrom');
        $this->data['sto']=$this->input->post('sto');
        $this->data['heightt']=$this->input->post('heightt');
        $this->data['widthh']=$this->input->post('widthh');



        $this->load->view('barcodeprint', $this->data);

    }
}
?>