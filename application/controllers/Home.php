<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('Stock');
        $this->load->model('Salary');
        $this->load->model('Typem');
        $this->load->model('Sales');
        $this->load->model('Product');
    }
    public function index()
    {
        if(isset($_POST['psubmit'])){
            $this->load->model('Product');
            $this->data['viewproduct'] = $this->Product->getprod(); // calling Post model method getPosts()
            // load the view file , we are passing $data array to view file
            // print_r($this->data['viewproduct']);
            if ($this->data['viewproduct']!= null) {
                $this->data['msg']="";
                foreach ($this->data['viewproduct'] as $row) {
                    $type = $row->type;
                    $price = $row->price;
                    $weight = $row->weight;
                    $amount = $row->amount;
                }
                $id = $this->input->post('p_id');
                $data = array(
                    'id' => $id,
                    'qty' => 1,
                    'weight' => $weight,
                    'type' => $type,
                    'price' => $price,
                    'name' => $type,
                    'coupon' => 'XMAS-50OFF'
                );
                $this->cart->insert($data);
            }else{
                $this->data['msg']="no data found";
            }
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
    public function update_cart(){
        $id = $this->input->post('id');
        $amount = $this->input->post('amount');
        $data = array(
            'rowid'=>$id,
            'qty' => $amount,
        );
        $this->cart->update($data);
//        print_r($id);
    }

    public function delete_from_cart_by_id(){

        $id = $this->input->post('id');




        $data = array(
            'rowid'=>$id,
            'qty'=>0

        );

        $this->cart->update($data);

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
    public function add_cart()
    {
        /*
        foreach ($this->cart->contents() as $items) {
            $p_id = $items['id'];
            $type = $items['type'];
            $weight = $items['weight'];
            $price = $items['price'];
            $amount = $items['qty'];
        }
        //print_r($p_id);
        $this->Sales->add_cart($p_id,$type,$weight,$price,$amount);
        */
        foreach ($this->cart->contents() as $items) {
            $p_id = $items['id'];
            //print_r($p_id);
            $this->data['viewproduct'] = $this->Product->get_cart_prod($p_id);
            foreach ($this->data['viewproduct'] as $items) {
                $pr_id = $items->product_id;
                $type = $items->type;
                $weight = $items->weight;
                $price = $items->price;
                $amount = $items->amount;
            }
            $y=$this->Sales->add_cart_data($pr_id, $type, $weight, $price, $amount);

            print_r($y);
        }
        //print_r($pr_id,$type);
//        $this->cart->destroy();
//        redirect('Home');
    }
}