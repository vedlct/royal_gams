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
            $this->Salary->insertsalary();
            $this->data['showsl'] = $this->Salary->showsalary();

            $this->load->view('salary', $this->data);
        }

        else if (isset($_POST['sal_id_search'])) {
            $id=$this->input->post('sp_id');
            // $type=$this->uri->segment(4);

            //$this->data['showsl'] = $this->Salary->showsalary();
            $this->data['showslname'] = $this->Salary->show_salary_by_name();
            $this->data['showsl'] = $this->Salary->search_by_id($id);
            $this->load->view('salary', $this->data);
        }

        else if (isset($_POST['sal_sal_search'])) {
            $salary=$this->input->post('salary');
            // $type=$this->uri->segment(4);

            //print_r($salary);

            $this->data['showslname'] = $this->Salary->show_salary_by_name();
            $this->data['showsl'] = $this->Salary->search_by_salary($salary);
//
            $this->load->view('salary', $this->data);
        }

        else if (isset($_POST['sal_name_search'])) {
            $name=$this->input->post('sp_type');
            // $type=$this->uri->segment(4);

            //$this->data['showsl'] = $this->Salary->showsalary();
            $this->data['showslname'] = $this->Salary->show_salary_by_name();
            $this->data['showsl'] = $this->Salary->search_by_name($name);
            $this->load->view('salary', $this->data);
        }

        else if (isset($_POST['increment_submit'])) {
            $increment=$this->input->post('increment');
            $salid=$this->input->post('sal_id');
            $salary=$this->input->post('sal_amount');
            $newsalary = $salary+$increment;

            print_r($newsalary);

            /*
            $this->data['showslname'] = $this->Salary->show_salary_by_name();
            $this->data['showsl'] = $this->Salary->search_by_name($name);
            $this->load->view('salary', $this->data);
            */
        }

        else if (isset($_POST['find_salary'])) {
            $this->data['month']=$this->input->post('month');

            if ($this->data['month']==null){

                $query1=$this->db->query("SELECT CURDATE() as month");
                foreach ($query1->result()as $r){$month=$r->month;$year=$r->year;}
                print_r($month,$year);

                $this->data['month']=$month;
                $this->data['year']=$year;
                $this->data['showsl'] = $this->Salary->showsalary();
                $this->load->view('salary', $this->data);

            }
            else{
                $this->data['showsl'] = $this->Salary->showsalary();
                $this->load->view('salary', $this->data);

            }


//            print_r($this->data['month']);

        }
        else {

            $this->data['showslinc'] = $this->Salary->showsalaryincrement();
            $this->data['showsl'] = $this->Salary->showsalary();
            $this->data['showslname'] = $this->Salary->show_salary_by_name();
            $this->data['month']=$this->input->post('month');

            $this->load->view('salary', $this->data);
        }

    }

    function search_by_id(){

        $id=$this->input->post('sp_id');
        // $type=$this->uri->segment(4);

        //$this->data['showsl'] = $this->Salary->showsalary();
        $this->data['showslname'] = $this->Salary->show_salary_by_name();
        $this->data['showsl'] = $this->Salary->search_by_id($id);
        $this->load->view('salary', $this->data);

    }

    function pay_salary(){

        $id=$this->input->post('id');


        $this->data['paying'] = $this->Salary->pay_salary($id);
//        $this->load->view('salary', $this->data);


    }

    function search_by_salary(){

        $salary=$this->input->post('salary');
        // $type=$this->uri->segment(4);

        //print_r($salary);

        $this->data['showslname'] = $this->Salary->show_salary_by_name();
        $this->data['showsl'] = $this->Salary->search_by_salary($salary);
//
        $this->load->view('salary', $this->data);

    }

    public function search_by_name(){

        $name=$this->input->post('sp_type');
        // $type=$this->uri->segment(4);

        //$this->data['showsl'] = $this->Salary->showsalary();
        $this->data['showslname'] = $this->Salary->show_salary_by_name();
        $this->data['showsl'] = $this->Salary->search_by_name($name);
        $this->load->view('salary', $this->data);

    }

    public function delete($id)
    {
        $this->load->model('Salary');
        $this->Salary->delete($id);
        redirect(Salaryc);
    }

    public function view_increment()
    {
        $id = $this->input->post('id');

        $this->data['edit'] = $this->Salary->editsalary($id);
        $this->load->view('add_increment',$this->data);
    }

    public function add_increment($id)
    {

        $this->Salary->insert_increment($id);
        redirect('Salaryc');
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