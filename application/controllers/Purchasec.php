<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Purchasec extends CI_Controller{

    public function index()
    {


        $this->load->model('Typem');
        $this->data['gettype'] = $this->Typem->gettype();
        $this->load->model('Purchase');
        $this->data['showpd'] = $this->Purchase->view();
        $this->load->view('purchase', $this->data);
      // $this->load->view('purchase');
    }



    public function insert(){

        $this->load->model('Purchase');
        $this->Purchase->insert();

        redirect(Purchasec);

    }

    function delete($id){

        //$id=$this->input->post('sp_id');
        $this->load->model('Purchase');
        $this->Purchase->delete($id);
        redirect(Purchasec);

    }

    function edit($id){

        //$id=$this->input->post('sp_id');
        $this->load->model('Purchase');
        $this->Purchase->edit($id);
        redirect(Purchasec);

    }

    public function showedit()
    {

        $id = $this->input->post('id');
        $this->load->model('Purchase');

        $this->data['edit'] = $this->Purchase->editstock($id);
        $this->load->view('edit_purchase',$this->data);


    }





}