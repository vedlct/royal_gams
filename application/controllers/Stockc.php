<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Stockc extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('Stock');
        $this->load->model('Salary');
        $this->load->model('Typem');
    }

    public function index()
    {

        /*
        if(isset($_POST['psubmit'])){


            $this->Stock->insertstock();

            $this->data['showsttype'] = $this->Stock->showstocktype();
            $this->data['showst'] = $this->Stock->showstock();
            $this->load->view('stock', $this->data);
        }

        else if(isset($_POST['st_id_submit'])){

            $id=$this->input->post('sp_id');
            // $type=$this->uri->segment(4);

            $this->data['showsttype'] = $this->Stock->showstocktype();
            $this->data['showst'] = $this->Stock->search_by_id($id);
            $this->load->view('stock', $this->data);
        }

        else if(isset($_POST['st_price_submit'])){

            $price=$this->input->post('price');
            // $type=$this->uri->segment(4);

            //print_r($price);
            $this->data['showsttype'] = $this->Stock->showstocktype();
            $this->data['showst'] = $this->Stock->search_by_price($price);
            $this->load->view('stock', $this->data);
        }

        else if(isset($_POST['st_price_less_submit'])){

            $price=$this->input->post('price');
            // $type=$this->uri->segment(4);

            //print_r($price);

            $this->data['showsttype'] = $this->Stock->showstocktype();
            $this->data['showst'] = $this->Stock->search_by_price_less($price);
            //print_r($this->data['showst']);
            $this->load->view('stock', $this->data);

        }

        else if(isset($_POST['st_type_submit'])){

            $type=$this->input->post('sp_type');
            // $type=$this->uri->segment(4);
            $this->data['showsttype'] = $this->Stock->showstocktype();
            $this->data['showst'] = $this->Stock->search_by_type($type);
            //redirect('Stockc/index');
            $this->load->view('stock', $this->data);
        }


        else{
            $this->data['gettype'] = $this->Typem->gettype();
            $this->data['showsl'] = $this->Salary->showsalary();
            $this->data['showst'] = $this->Stock->showstock();
            $this->data['showsttype'] = $this->Stock->showstocktype();
            $this->load->view('stock', $this->data);
        }

        */
        if (isset($_POST['search_from'])) {


            $from = $this->input->post('get_search_from');

            //print_r($from);
            if ($from == 8) {

                $name = $this->input->post('sp_type');
                // $type=$this->uri->segment(4);
                $this->data['showsttype'] = $this->Stock->showstocktype();
                $this->data['showst'] = $this->Stock->search_by_type($name);
                $this->load->view('stock', $this->data);

            } elseif ($from == 1) {

                $id = $this->input->post('sp_id');
                // $type=$this->uri->segment(4);
                $this->data['showsttype'] = $this->Stock->showstocktype();
                $this->data['showst'] = $this->Stock->search_by_id($id);
                $this->load->view('stock', $this->data);

            } elseif ($from == 2) {

                $price = $this->input->post('sp_id');
                // $type=$this->uri->segment(4);

                //print_r($price);

                $this->data['showsttype'] = $this->Stock->showstocktype();
                $this->data['showst'] = $this->Stock->search_by_price($price);
                $this->load->view('stock', $this->data);
            } elseif ($from == 3) {

                $price = $this->input->post('sp_id');
                // $type=$this->uri->segment(4);

                //print_r($price);

                $this->data['showsttype'] = $this->Stock->showstocktype();
                $this->data['showst'] = $this->Stock->search_by_price_less($price);
                //print_r($this->data['showst']);
                $this->load->view('stock', $this->data);
            } elseif ($from == 4) {

                $price = $this->input->post('sp_id');
                // $type=$this->uri->segment(4);

                //print_r($price);

                $this->data['showsttype'] = $this->Stock->showstocktype();
                $this->data['showst'] = $this->Stock->search_by_price_greater($price);
                //print_r($this->data['showst']);
                $this->load->view('stock', $this->data);
            } elseif ($from == 5) {
                $stock = $this->input->post('sp_id');

                $this->data['showsttype'] = $this->Stock->showstocktype();
                $this->data['showst'] = $this->Stock->search_by_stock($stock);
                $this->load->view('stock', $this->data);
            } elseif ($from == 6) {
                $stock = $this->input->post('sp_id');

                $this->data['showsttype'] = $this->Stock->showstonetype();
                $this->data['showst'] = $this->Stock->search_by_stock_less($stock);
                $this->load->view('stock', $this->data);
            } elseif ($from == 7) {
                $stock = $this->input->post('sp_id');

                $this->data['showsttype'] = $this->Stock->showstonetype();
                $this->data['showst'] = $this->Stock->search_by_stock_greater($stock);
                $this->load->view('stock', $this->data);
            } elseif ($from == 0) {

                $this->data['showsttype'] = $this->Stock->showstonetype();
                $this->data['showsl'] = $this->Salary->showsalary();
                $this->data['showst'] = $this->Stock->showstone();
//            $this->data['showst'] = $this->Stone->gettablename();

                $this->load->view('stock', $this->data);
            }


        } else {
            $this->data['gettype'] = $this->Typem->gettype();
            $this->data['showsl'] = $this->Salary->showsalary();
            $this->data['showst'] = $this->Stock->showstock();
            $this->data['showsttype'] = $this->Stock->showstocktype();
            $this->load->view('stock', $this->data);

        }

    }

    public function get_products_autocomplete()
    {
        if (isset($_GET['term'])){
            $q = strtolower($_GET['term']);
            $this->Stock->get_products_autocomplete($q);
        }
    }

    function insertstock(){
        $this->Stock->insertstock();
        redirect(Stockc);

    }

    function edit($id){


        $this->Stock->edit($id);
        redirect(Stockc);

    }

    function delete($id){

        //$id=$this->input->post('sp_id');

        $this->Stock->delete($id);
        redirect(Stockc);

    }

    function search_by_id(){

        $id=$this->input->post('sp_id');
       // $type=$this->uri->segment(4);

        $this->data['showsttype'] = $this->Stock->showstocktype();
        $this->data['showst'] = $this->Stock->search_by_id($id);
        $this->load->view('stock', $this->data);

    }

    function search_by_price(){

        $price=$this->input->post('price');
        // $type=$this->uri->segment(4);

        //print_r($price);
        $this->data['showsttype'] = $this->Stock->showstocktype();
        $this->data['showst'] = $this->Stock->search_by_price($price);
        $this->load->view('stock', $this->data);

    }

    public function search_by_type(){

        $type=$this->input->post('sp_type');
        // $type=$this->uri->segment(4);
        $this->data['showsttype'] = $this->Stock->showstocktype();
        $this->data['showst'] = $this->Stock->search_by_type($type);
        //redirect('Stockc/index');
        $this->load->view('stock', $this->data);

    }




    function showedit(){

    $id=$this->input->post('id');


    $this->data['edit'] = $this->Stock->editstock($id);
    $this->load->view('edit_stock',$this->data);


    /*
    foreach ($this->data['edit'] as $e){
        echo "<form class=\"form-material material-primary\" method=\"post\" action=\"http://localhost/royal_gams/Stockc/edit/$e->id\">
                                    <div class=\"form-group row \">
                                        <label  class=\"col-md-3 col-form-label\"  >Product ID</label>
                                        <div class=\"col-md-7\">
                                            <input type=\"text\" class=\"form-control\"  placeholder=\"Product ID\" name=\"p_id\" id=\"p_id\" value=\" $e->product_id\" >
                                        </div>
                                    </div>
                                    <div class=\"form-group row \">
                                        <label  class=\"col-md-3 col-form-label\"  >Type</label>
                                        <div class=\"col-md-7\">
                                            <input type=\"text\" class=\"form-control\"  placeholder=\"Type\" name=\"type\" value=\" $e->type\" >
                                        </div>
                                    </div>
                                    <div class=\"form-group row \">
                                        <label  class=\"col-md-3 col-form-label\"  >Weight</label>
                                        <div class=\"col-md-7\">
                                            <input type=\"text\" class=\"form-control\"  placeholder=\"Weight\" name=\"weight\" id=\"p_id\" value=\" $e->weight\">
                                        </div>
                                    </div>
                                    <div class=\"form-group row \">
                                        <label  class=\"col-md-3 col-form-label\"  >Price</label>
                                        <div class=\"col-md-7\">
                                            <input type=\"text\" class=\"form-control\"  placeholder=\"Price\" name=\"price\" value=\"  $e->price\" >
                                        </div>
                                    </div>
                                    <div class=\"form-group row \">
                                        <label  class=\"col-md-3 col-form-label\"  >In Stock</label>
                                        <div class=\"col-md-7\">
                                            <input type=\"text\" class=\"form-control\"  placeholder=\"In Stock\" name=\"amount\" value=\" $e->amount\" >
                                        </div>
                                    </div>
                                    <br>
                                    <div class=\"form-group row\">
                                        <div class=\"col-md-2\"></div>
                                        <div class=\" col-md-10\">
                                            <button type=\"submit\" class=\"btn btn-primary\"  name=\"stockedit\">Submit</button>

                                        </div>
                                    </div>
                                </form>";
    */

    }





}