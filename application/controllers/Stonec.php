<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Stonec extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('Stock');
        $this->load->model('Stone');
        $this->load->model('Salary');
    }

    public function index()
    {

//        if(isset($_POST['ssubmit'])){
//
//            $this->Stone->insert_stone();
//            //redirect('Stonec');
//            $this->data['showsttype'] = $this->Stock->showstonetype();
//            $this->data['showst'] = $this->Stone->showstone();
//
//            $this->load->view('stone', $this->data);
//
//        }
//        else if(isset($_POST['stone_id_search'])){
//            $id=$this->input->post('sp_id');
//            // $type=$this->uri->segment(4);
//            $this->data['showsttype'] = $this->Stock->showstonetype();
//            $this->data['showst'] = $this->Stock->search_stone_by_id($id);
//
//            $this->load->view('stone', $this->data);
//        }
//        else if(isset($_POST['stone_price_search'])){
//            $price=$this->input->post('price');
//            // $type=$this->uri->segment(4);
//
//            //print_r($price);
//
//            $this->data['showsttype'] = $this->Stone->showstonetype();
//            $this->data['showst'] = $this->Stone->search_by_price($price);
//            $this->load->view('stone', $this->data);
//        }

//        else if(isset($_POST['stone_price_less_search'])){
//            $price=$this->input->post('price');
//            // $type=$this->uri->segment(4);
//
//            //print_r($price);
//
//            $this->data['showsttype'] = $this->Stone->showstonetype();
//            $this->data['showst'] = $this->Stone->search_by_price_less($price);
//            $this->load->view('stone', $this->data);
//        }
//        else if(isset($_POST['stone_stock_search'])){
//            $stock=$this->input->post('stock');
//            // $type=$this->uri->segment(4);
//
//            //print_r($price);
//
//            $this->data['showsttype'] = $this->Stone->showstonetype();
//            $this->data['showst'] = $this->Stone->search_by_stock($stock);

//        else if(isset($_POST['stone_stock_search'])){
//            $stock=$this->input->post('stock');
//            $stock_type=$this->input->post('stock_type');
//
//            // $type=$this->uri->segment(4);
//
//            //print_r($stock_type);
//            if ($stock_type==null){
//                $this->data['showsttype'] = $this->Stone->showstonetype();
//                $this->data['showst'] = $this->Stone->search_by_stock($stock);
//
//            }
//            elseif($stock_type==1){
//                $this->data['showsttype'] = $this->Stone->showstonetype();
//                $this->data['showst'] = $this->Stone->search_by_stock_less($stock);
//
//            }
//            else{
//
//                $this->data['showsttype'] = $this->Stone->showstonetype();
//                $this->data['showst'] = $this->Stone->search_by_stock_greater($stock);
//            }
//

//            $this->load->view('stone', $this->data);
//        }
//        else if(isset($_POST['stone_name_search'])){
//            $name=$this->input->post('sp_type');
//            // $type=$this->uri->segment(4);
//            $this->data['showsttype'] = $this->Stone->showstonetype();
//            $this->data['showst'] = $this->Stone->search_stone_by_type($name);
//            $this->load->view('stone', $this->data);
//        }

//        else {
//            $this->data['showsttype'] = $this->Stock->showstonetype();
//            $this->data['showsl'] = $this->Salary->showsalary();
//            $this->data['showst'] = $this->Stock->showstone();
//            $this->load->view('stone', $this->data);
//        }
        if ($this->session->userdata('type') == "Admin") {
            if (isset($_POST['search_from'])) {


                $from = $this->input->post('get_search_from');

                //print_r($from);
                if ($from == 8) {

                    $name = $this->input->post('sp_type');
                    // $type=$this->uri->segment(4);
                    $this->data['showsttype'] = $this->Stone->showstonetype();
                    $this->data['showst'] = $this->Stone->search_stone_by_type($name);
                    $this->load->view('stone', $this->data);

                } elseif ($from == 1) {

                    $id = $this->input->post('sp_id');
                    // $type=$this->uri->segment(4);
                    $this->data['showsttype'] = $this->Stock->showstonetype();
                    $this->data['showst'] = $this->Stock->search_stone_by_id($id);

                    $this->load->view('stone', $this->data);

                } elseif ($from == 2) {

                    $price = $this->input->post('sp_id');
                    // $type=$this->uri->segment(4);

                    //print_r($price);

                    $this->data['showsttype'] = $this->Stone->showstonetype();
                    $this->data['showst'] = $this->Stone->search_by_price($price);
                    $this->load->view('stone', $this->data);
                } elseif ($from == 3) {

                    $price = $this->input->post('sp_id');
                    // $type=$this->uri->segment(4);

                    //print_r($price);

                    $this->data['showsttype'] = $this->Stone->showstonetype();
                    $this->data['showst'] = $this->Stone->search_by_price_less_then($price);
                    $this->load->view('stone', $this->data);
                } elseif ($from == 4) {

                    $price = $this->input->post('sp_id');
                    // $type=$this->uri->segment(4);

                    //print_r($price);

                    $this->data['showsttype'] = $this->Stone->showstonetype();
                    $this->data['showst'] = $this->Stone->search_by_price_greater($price);
                    $this->load->view('stone', $this->data);
                } elseif ($from == 5) {
                    $stock = $this->input->post('sp_id');

                    $this->data['showsttype'] = $this->Stone->showstonetype();
                    $this->data['showst'] = $this->Stone->search_by_stock($stock);
                    $this->load->view('stone', $this->data);
                } elseif ($from == 6) {
                    $stock = $this->input->post('sp_id');

                    $this->data['showsttype'] = $this->Stone->showstonetype();
                    $this->data['showst'] = $this->Stone->search_by_stock_less($stock);
                    $this->load->view('stone', $this->data);
                } elseif ($from == 7) {
                    $stock = $this->input->post('sp_id');

                    $this->data['showsttype'] = $this->Stone->showstonetype();
                    $this->data['showst'] = $this->Stone->search_by_stock_greater($stock);
                    $this->load->view('stone', $this->data);
                } elseif ($from == 0) {

                    $this->data['showsttype'] = $this->Stock->showstonetype();
                    $this->data['showsl'] = $this->Salary->showsalary();
                    $this->data['showst'] = $this->Stock->showstone();
//            $this->data['showst'] = $this->Stone->gettablename();

                    $this->load->view('stone', $this->data);
                }


            } else {
                $this->data['showsttype'] = $this->Stock->showstonetype();
                $this->data['showsl'] = $this->Salary->showsalary();
                $this->data['showst'] = $this->Stock->showstone();
//            $this->data['showst'] = $this->Stone->gettablename();

                $this->load->view('stone', $this->data);
            }
        }
        else {

            redirect('Login');
        }




    }

    public function insert_stone()
    {
        if ($this->session->userdata('type') == "Admin") {
            $this->Stone->insert_stone();
            redirect('Stonec');
        }
        else {

            redirect('Login');
        }
    }

    function insertstock(){
        //$this->load->model('Stock');
        //$this->Stock->insertstock(); //WTF is this?

        //$sidebar = $this->load->view('insertproduct', '', TRUE);

        //redirect('Stockc#content2');
//        $data=array();
//        $data['baseUrl']= base_url();
//        $data['internalPage']= $this->load->view('insetproduct',$data);
        //$this->load->view('Stock',$data);
//        echo $data['internalPage'];
        // i assume inserproduct is the loading view.



        //$this->load->model('Stock');
        //$this->Stock->insertstock();

      //  $this->load->view('stock');
       // redirect(Stockc);

       // $this->load->helper('url');
       // redirect('stockc/index'); //or let say success page

       // $sidebar = $this->load->view('insertproduct', '', TRUE);
        //$data['sidebar'] = $sidebar;
        //$this->load->view('stock',$sidebar);


//        $sidebar = $this->load-view('insertproduct', '', TRUE);
//        $data['sidebar'] = $sidebar;
//        $this->load->view('stock', $data);

    }

    function edit($id)
    {
        if ($this->session->userdata('type') == "Admin") {
            $this->Stock->update_stone($id);
            redirect('Stonec');

        }
        else {

            redirect('Login');
        }
    }

    function delete_stone($id)
    {
        if ($this->session->userdata('type') == "Admin") {
            //$id=$this->input->post('sp_id');
            $this->Stock->delete_stone($id);
            redirect('Stonec');

        }
        else {

            redirect('Login');
        }
    }

    function search_by_id()
    {
        if ($this->session->userdata('type') == "Admin") {
            $id = $this->input->post('sp_id');
            // $type=$this->uri->segment(4);
            $this->load->model('Stock');
            $this->data['showsttype'] = $this->Stock->showstonetype();
            $this->data['showst'] = $this->Stock->search_stone_by_id($id);
            $this->load->view('stone', $this->data);
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

            $this->data['showsttype'] = $this->Stone->showstonetype();
            $this->data['showst'] = $this->Stone->search_by_price($price);
            $this->load->view('stone', $this->data);

        }
        else {

            redirect('Login');
        }
    }

    function search_by_stock()
    {
        if ($this->session->userdata('type') == "Admin") {
            $stock = $this->input->post('stock');
            // $type=$this->uri->segment(4);

            //print_r($price);

            $this->data['showsttype'] = $this->Stone->showstonetype();
            $this->data['showst'] = $this->Stone->search_by_stock($stock);
            $this->load->view('stone', $this->data);

        }
        else {

            redirect('Login');
        }
    }

    public function search_by_type()
    {
        if ($this->session->userdata('type') == "Admin") {
            $name = $this->input->post('sp_type');
            // $type=$this->uri->segment(4);
            $this->data['showsttype'] = $this->Stone->showstonetype();
            $this->data['showst'] = $this->Stone->search_stone_by_type($name);
            $this->load->view('stone', $this->data);

        }
        else {

            redirect('Login');
        }
    }




    function showedit()
    {
        if ($this->session->userdata('type') == "Admin") {
            $id = $this->input->post('id');
            $this->load->model('Stock');

            $this->data['edit'] = $this->Stock->editstone($id);
            $this->load->view('edit_stone', $this->data);

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
        else {

            redirect('Login');
        }
    }





}