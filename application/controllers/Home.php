<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('Stock');
        $this->load->model('Salary');
        $this->load->model('Typem');
        $this->load->model('Sales');
        $this->load->model('Product');
        $this->load->model('Purchase');
        $this->load->model('Expensem');
    }

    public function index()
    {
        if ($this->session->userdata('type') == "Admin") {
            if (isset($_POST['psubmit'])) {
                $this->load->model('Product');
                $this->data['viewproduct'] = $this->Product->getprod(); // calling Post model method getPosts()
                // load the view file , we are passing $data array to view file
                // print_r($this->data['viewproduct']);
                if ($this->data['viewproduct'] != null) {
                    $this->data['msg'] = "";
                    foreach ($this->data['viewproduct'] as $row) {
                        $type = $row->type;
                        $price = $row->price;
                        $weight = $row->weight;
                        $amount = $row->amount;
                    }
                    $id = $this->input->post('p_id');
                    if ($this->cart->contents() == null) {

                        if ($amount <= '0') {

                            $this->data['msg'] = "We don't have suficient amount";
                        } else {

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

                        }

                    } else {
                        foreach ($this->cart->contents() as $items) {
                            $asd = $items['rowid'];


                            $t = $this->cart->get_item($asd);
                            $cart_id = $t['id'];
                            $amount1 = $t['qty'];
                        }
                        if ($cart_id == $id) {

                            if ($amount >= $amount1) {

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

                            } else {
                                $this->data['msg'] = "We don't have suficient amount";
                                //print_r($amount1);
                            }
                        } else {

                            if ($amount <= '0') {

                                $this->data['msg'] = "We don't have suficient amount";
                            } else {

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

                            }

                        }

                    }


                } else {
                    $this->data['msg'] = "no data found";
                }
                $this->load->view('home', $this->data);
                // redirect($this->load->view('home', $this->data['viewproduct']));
                //$this->session->set_flashdata('key',$this->data['viewproduct']);
                //redirect(Home, $this->data);
            } else {
                $this->load->view('home');
            }

        } else {

            redirect('Login');
        }
    }

    public function hello()
    {
        if ($this->session->userdata('type') == "Admin") {
            $this->load->view('home');

        } else {

            redirect('Login');
        }
    }


    public function submitfrom()
    {
        if ($this->session->userdata('type') == "Admin") {
            extract($_POST);
            extract($_GET);

        } else {

            redirect('Login');
        }
    }

    public function update_cart()
    {
        if ($this->session->userdata('type') == "Admin") {
            $id = $this->input->post('id');
            $amount = $this->input->post('amount');
//        $p_id = $this->input->post('p_id');
//
//
//            $query2=$this->db->query("SELECT * FROM `stock` WHERE `stock`.`product_id`='$p_id' ");

            $t = $this->cart->get_item($id);
            $cart_id = $t['id'];

            $query2 = $this->db->query("SELECT * FROM `stock` WHERE `stock`.`product_id`='$cart_id' ");

            foreach ($query2->result() as $t) {
                $qun = $t->amount;


                if ($qun >= $amount) {


                    $data = array(
                        'rowid' => $id,
                        'qty' => $amount,
                    );
                    $this->cart->update($data);

                } elseif ($amount == '0') {

                    $data = array(
                        'rowid' => $id,
                        'qty' => $amount,
                    );
                    $this->cart->update($data);
                } else {
                    echo 1;


                }
            }

        } else {

            redirect('Login');
        }
    }


    public function delete_from_cart_by_id()
    {
        if ($this->session->userdata('type') == "Admin") {
            $id = $this->input->post('id');


            $data = array(
                'rowid' => $id,
                'qty' => 0

            );

            $this->cart->update($data);

        } else {

            redirect('Login');
        }
    }

    public function addcart()
    {
        if ($this->session->userdata('type') == "Admin") {
            $this->load->model('Product');
            $this->data['viewproduct'] = $this->Product->getprod(); // calling Post model method getPosts()
            // load the view file , we are passing $data array to view file
            foreach ($this->data['viewproduct'] as $row) {
                $type = $row->type;
                $price = $row->price;
            }
            $id = $this->input->post('p_id');
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
        } else {

            redirect('Login');
        }
    }

    public function removeall()
    {
        if ($this->session->userdata('type') == "Admin") {
            $this->cart->destroy();
            redirect('Home');
        } else {

            redirect('Login');
        }
    }

    public function add_cart()
    {
        if ($this->session->userdata('type') == "Admin") {
            foreach ($this->cart->contents() as $items) {
                $pr_id = $items['id'];
                $type = $items['type'];
                $weight = $items['weight'];
                $price = $items['price']*$items['qty'];
                $amount1 = $items['qty'];
                $row_id = $items['rowid'];

                $id = $this->Sales->add_cart_data($pr_id, $type, $weight, $price, $amount1, $row_id);


            }
            $this->cart->destroy();
            redirect('Home');
        } else {

            redirect('Login');
        }
    }

    public function todayssell()
    {
        if ($this->session->userdata('type') == "Admin") {
            $this->data['todaysell'] = $this->Sales->todaysell();

            foreach ($this->data['todaysell'] as $r) {
                echo $r->totalsell;
            }
        } else {

            redirect('Login');
        }
    }

    public function todaybuy()
    {
        if ($this->session->userdata('type') == "Admin") {
            $this->data['todaybuy'] = $this->Purchase->todaybuy();

            foreach ($this->data['todaybuy'] as $r) {
                echo $r->todaybuy;
            }
        } else {

            redirect('Login');
        }
    }

    public function other_expense()
    {
        if ($this->session->userdata('type') == "Admin") {
            $this->data['other_expense'] = $this->Expensem->other_expense();

            foreach ($this->data['other_expense'] as $r) {
                echo $r->other_expense;
            }
        }
        else {

            redirect('Login');
        }
    }
}