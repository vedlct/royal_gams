<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Purchasec extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('Purchase');
        $this->load->model('Salary');
        $this->load->model('Typem');
    }

    public function index()
    {
        if ($this->session->userdata('type') == "Admin") {
            if (isset($_POST['purcsubmit'])) {
                $this->Purchase->insert();
                redirect(Purchasec);
            } else if (isset($_POST['purc_id_search'])) {
                $id = $this->input->post('sp_id');
                // $type=$this->uri->segment(4);
                // print_r($id);


                $this->data['showpdtype'] = $this->Purchase->show_purchase_by_type();
                $this->data['showpd'] = $this->Purchase->search_purchase_by_id($id);
                $this->load->view('purchase', $this->data);
            } else if (isset($_POST['purc_price_search'])) {
                $price = $this->input->post('price');
                // $type=$this->uri->segment(4);

                //print_r($price);

                $this->data['showpdtype'] = $this->Purchase->show_purchase_by_type();
                //$this->data['showpd'] = $this->Purchase->search_purchase_by_id($price);
                $this->data['showpd'] = $this->Purchase->search_by_price($price);
                $this->load->view('purchase', $this->data);
            } else if (isset($_POST['purc_price_less_search'])) {
                $price = $this->input->post('price');
                // $type=$this->uri->segment(4);

                //print_r($price);

                $this->data['showpdtype'] = $this->Purchase->show_purchase_by_type();
                //$this->data['showpd'] = $this->Purchase->search_purchase_by_id($price);
                $this->data['showpd'] = $this->Purchase->search_by_price_less($price);
                $this->load->view('purchase', $this->data);
            } else if (isset($_POST['purc_paid_search'])) {
                $paid = $this->input->post('paid');
                // $type=$this->uri->segment(4);

                //print_r($price);

                $this->data['showpdtype'] = $this->Purchase->show_purchase_by_type();
                //$this->data['showpd'] = $this->Purchase->search_purchase_by_id($price);
                $this->data['showpd'] = $this->Purchase->search_by_paid($paid);
                $this->load->view('purchase', $this->data);
            } else if (isset($_POST['purc_type_search'])) {
                $type = $this->input->post('sp_type');
                // $type=$this->uri->segment(4);


                $this->data['showpdtype'] = $this->Purchase->show_purchase_by_type();
                $this->data['showpd'] = $this->Purchase->search_purchase_by_type($type);
                $this->load->view('purchase', $this->data);
            } else {
                $this->data['gettype'] = $this->Typem->gettype();
                $this->data['showpd'] = $this->Purchase->view();
                $this->data['showpdtype'] = $this->Purchase->show_purchase_by_type();

                $this->load->view('purchase', $this->data);
            }

            // $this->load->view('purchase');
        }
        else {

            redirect('Login');
        }
    }



    public function insert()
    {
        if ($this->session->userdata('type') == "Admin") {
            $this->load->model('Purchase');
            $this->Purchase->insert();

            redirect(Purchasec);

        }else {

            redirect('Login');
        }
    }

    function search_by_id()
    {
        if ($this->session->userdata('type') == "Admin") {
            $id = $this->input->post('sp_id');
            // $type=$this->uri->segment(4);
            // print_r($id);


            $this->data['showpdtype'] = $this->Purchase->show_purchase_by_type();
            $this->data['showpd'] = $this->Purchase->search_purchase_by_id($id);
            $this->load->view('purchase', $this->data);

        }
        else {

            redirect('Login');
        }
    }

    function search_by_price()
    {
        if ($this->session->userdata('type') == "Admin") {
            $price = $this->input->post('price');
            // $type=$this->uri->segment(4);

            //print_r($price);

            $this->data['showpdtype'] = $this->Purchase->show_purchase_by_type();
            //$this->data['showpd'] = $this->Purchase->search_purchase_by_id($price);
            $this->data['showpd'] = $this->Purchase->search_by_price($price);
            $this->load->view('purchase', $this->data);

        }
        else {

            redirect('Login');
        }
    }

    function search_by_paid()
    {
        if ($this->session->userdata('type') == "Admin") {
            $paid = $this->input->post('paid');
            // $type=$this->uri->segment(4);

            //print_r($price);

            $this->data['showpdtype'] = $this->Purchase->show_purchase_by_type();
            //$this->data['showpd'] = $this->Purchase->search_purchase_by_id($price);
            $this->data['showpd'] = $this->Purchase->search_by_paid($paid);
            $this->load->view('purchase', $this->data);

        }
        else {

            redirect('Login');
        }
    }

    public function search_by_type()
    {
        if ($this->session->userdata('type') == "Admin") {

            $type = $this->input->post('sp_type');
            // $type=$this->uri->segment(4);


            $this->data['showpdtype'] = $this->Purchase->show_purchase_by_type();
            $this->data['showpd'] = $this->Purchase->search_purchase_by_type($type);
            $this->load->view('purchase', $this->data);

        }
        else {

            redirect('Login');
        }
    }

    function delete($id)
    {
        if ($this->session->userdata('type') == "Admin") {
            //$id=$this->input->post('sp_id');
            $this->load->model('Purchase');
            $this->Purchase->delete($id);
            redirect(Purchasec);

        }
        else {

            redirect('Login');
        }
    }

    function edit($id)
    {
        if ($this->session->userdata('type') == "Admin") {
            //$id=$this->input->post('sp_id');
            $this->load->model('Purchase');
            $this->Purchase->edit($id);
            redirect(Purchasec);

        }
        else {

            redirect('Login');
        }
    }

    public function showedit()
    {
        if ($this->session->userdata('type') == "Admin") {
            $id = $this->input->post('id');
            $this->load->model('Purchase');

            $this->data['edit'] = $this->Purchase->editstock($id);
            $this->load->view('edit_purchase', $this->data);


        }
        else {

            redirect('Login');
        }
    }





}