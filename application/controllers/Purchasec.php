<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Purchasec extends CI_Controller{

    public function index()
    {

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


        foreach ($this->data['edit'] as $e) {
            echo "<form class=\"form-material material-primary\" method=\"post\" action=\"Purchasec/edit/$e->id\">
    <div class=\"form-group row \">
        <label  class=\"col-md-3 col-form-label\"  >Product ID</label>
        <div class=\"col-md-7\">
            <input type=\"text\" class=\"form-control\"  placeholder=\"Product ID\" name=\"p_id\" id=\"p_id\" value=\" $e->product_id \" >
        </div>
    </div>
    <div class=\"form-group row \">
        <label  class=\"col-md-3 col-form-label\"  >Type</label>
        <div class=\"col-md-7\">
            <input type=\"text\" class=\"form-control\"  placeholder=\"Type\" name=\"type\" value=\" $e->type \" >
        </div>
    </div>
    <div class=\"form-group row \">
        <label  class=\"col-md-3 col-form-label\"  >Weight</label>
        <div class=\"col-md-7\">
            <input type=\"text\" class=\"form-control\"  placeholder=\"Weight\" name=\"weight\" id=\"p_id\" value=\" $e->weight \">
        </div>
    </div>
    <div class=\"form-group row \">
        <label  class=\"col-md-3 col-form-label\"  >Price</label>
        <div class=\"col-md-7\">
            <input type=\"text\" class=\"form-control\"  placeholder=\"Price\" name=\"price\" value=\" $e->price \" >
        </div>
    </div>
    <div class=\"form-group row \">
        <label  class=\"col-md-3 col-form-label\"  >In Stock</label>
        <div class=\"col-md-7\">
            <input type=\"text\" class=\"form-control\"  placeholder=\"In Stock\" name=\"amount\" value=\" $e->instock \" >
        </div>
    </div>
    <div class=\"form-group row \">
        <label  class=\"col-md-3 col-form-label\"  >In Stock</label>
        <div class=\"col-md-7\">
            <input type=\"text\" class=\"form-control\"  placeholder=\"In Stock\" name=\"paid\" value=\" $e->paid \" >
        </div>
    </div>
    <div class=\"form-group row \">
        <label  class=\"col-md-3 col-form-label\"  >In Stock</label>
        <div class=\"col-md-7\">
            <input type=\"text\" class=\"form-control\"  placeholder=\"In Stock\" name=\"due\" value=\" $e->due \" >
        </div>
    </div>
    <div class=\"form-group row \">
        <label  class=\"col-md-3 col-form-label\"  >In Stock</label>
        <div class=\"col-md-7\">
            <input type=\"text\" class=\"form-control\"  placeholder=\"In Stock\" name=\"date\" value=\" $e->date \" >
        </div>
    </div>
    <br>
    <div class=\"form-group row\">
        <div class=\"col-md-2\"></div>
        <div class=\" col-md-10\">
            <button type=\"submit\" class=\"btn btn-primary\"  name=\"psubmit\">Submit</button>

        </div>
    </div>
</form>";

        }
    }





}