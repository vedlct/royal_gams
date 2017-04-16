<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Salaryc extends CI_Controller
{

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


        if (isset($_POST['salsubmit'])) {
            $this->load->model('Salary');
            $this->Salary->insertsalary();

            $this->load->model('Salary');
            $this->data['showsl'] = $this->Salary->showsalary();
            $this->load->view('salary', $this->data);


        } else {
            $this->load->model('Salary');
            $this->data['showsl'] = $this->Salary->showsalary();
            $this->data['showslname'] = $this->Salary->show_salary_by_name();
            $this->load->view('salary', $this->data);


        }

    }

    function search_by_id(){

        $id=$this->input->post('sp_id');
        // $type=$this->uri->segment(4);

        $this->data['showst'] = $this->Salary->search_by_id($id);
        $this->load->view('stock', $this->data);

    }

    public function search_by_name(){

        $name=$this->input->post('sp_type');
        // $type=$this->uri->segment(4);

        $this->data['showsl'] = $this->Salary->search_by_name($name);
        $this->load->view('salary', $this->data);

    }

    public function delete($id)
    {
        $this->load->model('Salary');
        $this->Salary->delete($id);
        redirect(Salaryc);
    }

    function showedit()
    {

        $id = $this->input->post('id');
        $this->load->model('Salary');

        $this->data['edit'] = $this->Salary->editsalary($id);
        $this->load->view('edit_salary',$this->data);

        /*
        foreach ($this->data['edit'] as $e) {
            echo "<form class=\"form-material material-primary\" method=\"post\" action=\"<?php base_url()?>Salaryc\edit\">
    <div class=\"form-group row \">
        <label  class=\"col-md-3 col-form-label\"  >Name</label>
        <div class=\"col-md-7\">
            <input type=\"text\" class=\"form-control\"  placeholder=\"Name\" name=\"name\" id=\"p_id\"  value=\" $e->name \">
        </div>
    </div>
    <div class=\"form-group row \">
        <label  class=\"col-md-3 col-form-label\"  >Designation</label>
        <div class=\"col-md-7\">
            <input type=\"text\" class=\"form-control\"  placeholder=\"Designation\" name=\"degn\"  value=\" $e->desg\">
        </div>
    </div>
    <div class=\"form-group row \">
        <label  class=\"col-md-3 col-form-label\"  >Salary</label>
        <div class=\"col-md-7\">
            <input type=\"text\" class=\"form-control\"  placeholder=\"Salary\" name=\"salary\" id=\"p_id\" value=\"  $e->salary \">
        </div>
    </div>
    <div class=\"form-group row \">
        <label  class=\"col-md-3 col-form-label\"  >Phone Number</label>
        <div class=\"col-md-7\">
            <input type=\"text\" class=\"form-control\"  placeholder=\"Phone Number\" name=\"pnumber\"  value=\" $e->phone \">
        </div>
    </div>

    <div class=\"form-group row \">
        <label  class=\"col-md-3 col-form-label\"  >Address</label>
        <div class=\"col-md-7\">
            <input type=\"text\" class=\"form-control\"  placeholder=\"Address\" name=\"address\" value=\" $e->address \">
        </div>
    </div>
    <div class=\"form-group row \" >
        <label  class=\"col-md-3 col-form-label\" >Status</label >
        <div class=\"col-md-7\" >
            <select name=\"status\">
                <option value=\"$e->status\">$e->status</option>
                <option value=\"Active\">Active</option>
                <option value=\"Inactive\">Inactive</option>

            </select>
        </div>
    </div>
  
    <br>
    <div class=\"form-group row\">
        <div class=\"col-md-2\"></div>
        <div class=\" col-md-10\">
            <button type=\"submit\" class=\"btn btn-primary\"  name=\"salsubmit\">Submit</button>

        </div>
    </div>
</form>";
        */


    }
}
?>