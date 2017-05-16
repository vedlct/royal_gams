<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Barcode extends CI_Controller
{
    public function index()
    {
        if ($this->session->userdata('type') == "Admin") {
            $this->load->view('barcode');
        }
        else {

            redirect('Login');
        }
    }

    public function printbarcode()
    {
        if ($this->session->userdata('type') == "Admin") {
            $this->data['pid'] = $this->input->post('pid');
            $this->data['sfrom'] = $this->input->post('sfrom');
            $this->data['sto'] = $this->input->post('sto');
            $this->data['heightt'] = $this->input->post('heightt');
            $this->data['widthh'] = $this->input->post('widthh');


            $this->load->view('barcodeprint', $this->data);

        }
        else {

            redirect('Login');
        }
    }
}
?>