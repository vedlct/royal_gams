<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller{

    public function index()
    {

        if(isset($_POST['psubmit'])){
        $this->load->model('Product');

        $this->data['viewproduct'] = $this->Product->getprod(); // calling Post model method getPosts()
        // load the view file , we are passing $data array to view file
        foreach ($this->data['viewproduct'] as $row)
        {
            $type=$row->type;
            $price=$row->price;

        }
        $id=$this->input->post('p_id');
        $data = array(
            'id' => $id,
            'qty' => 1,
            'price' => $price,
            'name' => $type,
            'coupon' => 'XMAS-50OFF'
        );

        $this->cart->insert($data);

        $this->load->view('home', $this->data);
        // redirect($this->load->view('home', $this->data['viewproduct']));
        //$this->session->set_flashdata('key',$this->data['viewproduct']);
        //redirect(Home, $this->data);
    }
    else{
        $this->load->view('home');
    }}

    public function hello()
    {
        $this->load->view('home');
        //echo "this is a view";
    }

    public function submitfrom()
    {
        extract($_POST);
        extract($_GET);

        //echo $p_id;


    }

    public function addcart()
    {

        $this->load->model('Product');

        $this->data['viewproduct'] = $this->Product->getprod(); // calling Post model method getPosts()
        // load the view file , we are passing $data array to view file
        foreach ($this->data['viewproduct'] as $row)
        {
            $type=$row->type;
            $price=$row->price;

        }
        $id=$this->input->post('p_id');
        $data = array(
            'id' => $id,
            'qty' => 1,
            'price' => $price,
            'name' => $type,
            'coupon' => 'XMAS-50OFF'
        );

        $this->cart->insert($data);

        $this->load->view('home', $this->data);
       // redirect($this->load->view('home', $this->data['viewproduct']));
        //$this->session->set_flashdata('key',$this->data['viewproduct']);
        //redirect(Home, $this->data);
    }

    public function removeall(){

        $this->cart->destroy();
        redirect(Home::get_instance());
    }



}