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
        /*
        if(isset($_POST['psubmit'])){

            $this->load->model('Stock');
            $this->Stock->insertstock();

            $this->load->model('Stock');
            $this->data['showst'] = $this->Stock->showstock();
            $this->load->view('stone', $this->data);

        }
        */

            $this->data['showsttype'] = $this->Stock->showstonetype();
            $this->data['showsl'] = $this->Salary->showsalary();
            $this->data['showst'] = $this->Stock->showstone();
            $this->load->view('stone', $this->data);




    }

    public function insert_stone()
    {
        $this->Stock->insert_stone();
        redirect('Stonec');
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

    function edit($id){

        $this->Stock->update_stone($id);
        redirect('Stonec');

    }

    function delete_stone($id){

        //$id=$this->input->post('sp_id');
        $this->Stock->delete_stone($id);
        redirect('Stonec');

    }

    function search_by_id(){

        $id=$this->input->post('sp_id');
       // $type=$this->uri->segment(4);
        $this->load->model('Stock');
        $this->data['showsttype'] = $this->Stock->showstonetype();
        $this->data['showst'] = $this->Stock->search_stone_by_id($id);
        $this->load->view('stone', $this->data);
    }

    function search_by_price(){

        $price=$this->input->post('price');
        // $type=$this->uri->segment(4);

        //print_r($price);

        $this->data['showsttype'] = $this->Stone->showstonetype();
        $this->data['showst'] = $this->Stone->search_by_price($price);
        $this->load->view('stone', $this->data);

    }

    function search_by_stock(){

        $stock=$this->input->post('stock');
        // $type=$this->uri->segment(4);

        //print_r($price);

        $this->data['showsttype'] = $this->Stone->showstonetype();
        $this->data['showst'] = $this->Stone->search_by_stock($stock);
        $this->load->view('stone', $this->data);

    }

    public function search_by_type(){

        $name=$this->input->post('sp_type');
        // $type=$this->uri->segment(4);
        $this->data['showsttype'] = $this->Stone->showstonetype();
        $this->data['showst'] = $this->Stone->search_stone_by_type($name);
        $this->load->view('stone', $this->data);

    }




    function showedit(){

    $id=$this->input->post('id');
    $this->load->model('Stock');

    $this->data['edit'] = $this->Stock->editstone($id);
    $this->load->view('edit_stone',$this->data);

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