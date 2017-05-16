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
        if ($this->session->userdata('type') == "Admin") {
            if (isset($_POST['salsubmit'])) {
                $this->Salary->insertsalary();
                $this->data['showsl'] = $this->Salary->showsalary();
                $this->data['showslinc'] = $this->Salary->showsalaryincrement();
                $this->data['month'] = $this->input->post('month');

                $this->load->view('salary', $this->data);
            } else if (isset($_POST['sal_id_search'])) {
                $id = $this->input->post('sp_id');
                // $type=$this->uri->segment(4);

                //$this->data['showsl'] = $this->Salary->showsalary();
                $this->data['showslname'] = $this->Salary->show_salary_by_name();
                $this->data['showsl'] = $this->Salary->search_by_id($id);
                $this->load->view('salary', $this->data);
            } else if (isset($_POST['sal_sal_search'])) {
                $salary = $this->input->post('salary');
                // $type=$this->uri->segment(4);

                //print_r($salary);

                $this->data['showslname'] = $this->Salary->show_salary_by_name();
                $this->data['showsl'] = $this->Salary->search_by_salary($salary);
//
                $this->load->view('salary', $this->data);
            } else if (isset($_POST['sal_sal_less_search'])) {
                $salary = $this->input->post('salary');
                // $type=$this->uri->segment(4);

                //print_r($salary);

                $this->data['showslname'] = $this->Salary->show_salary_by_name();
                $this->data['showsl'] = $this->Salary->search_by_salary_less($salary);
//
                $this->load->view('salary', $this->data);
            } else if (isset($_POST['sal_name_search'])) {
                $name = $this->input->post('sp_type');
                // $type=$this->uri->segment(4);

                //$this->data['showsl'] = $this->Salary->showsalary();
                $this->data['showslname'] = $this->Salary->show_salary_by_name();
                $this->data['showsl'] = $this->Salary->search_by_name($name);
                $this->load->view('salary', $this->data);
            }

//        else if (isset($_POST['increment_submit'])) {
//            $increment=$this->input->post('increment');
//            $salid=$this->input->post('sal_id');
//            $salary=$this->input->post('sal_amount');
//            $newsalary = $salary+$increment;
//
//            //print_r($newsalary);
//
//            /*
//            $this->data['showslname'] = $this->Salary->show_salary_by_name();
//            $this->data['showsl'] = $this->Salary->search_by_name($name);
//            $this->load->view('salary', $this->data);
//            */
//        }

            else if (isset($_POST['find_salary'])) {
                $this->data['month'] = $this->input->post('month');

                if ($this->data['month'] == null) {

                    $query1 = $this->db->query("SELECT CURDATE() as month");
                    foreach ($query1->result() as $r) {
                        $month = $r->month;
                        $year = $r->year;
                    }
                    //print_r($month,$year);

                    $this->data['month'] = $month;
                    $this->data['year'] = $year;
                    $this->data['showsl'] = $this->Salary->showsalary();
                    $this->data['showslinc'] = $this->Salary->showsalaryincrement();
                    $this->load->view('salary', $this->data);

                } else {
                    $this->data['showslinc'] = $this->Salary->showsalaryincrement();
                    $this->data['showsl'] = $this->Salary->showsalary();
                    $this->load->view('salary', $this->data);

                }


//            print_r($this->data['month']);

            } else {

                $this->data['showslinc'] = $this->Salary->showsalaryincrement();
                $this->data['showsl'] = $this->Salary->showsalary();
                $this->data['showslname'] = $this->Salary->show_salary_by_name();
                $this->data['month'] = $this->input->post('month');

                $this->load->view('salary', $this->data);
            }

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

            //$this->data['showsl'] = $this->Salary->showsalary();
            $this->data['showslname'] = $this->Salary->show_salary_by_name();
            $this->data['showsl'] = $this->Salary->search_by_id($id);
            $this->load->view('salary', $this->data);

        }
        else {

            redirect('Login');
        }
    }

    function pay_salary()
    {
        if ($this->session->userdata('type') == "Admin") {
            $id = $this->input->post('id');


            $this->data['paying'] = $this->Salary->pay_salary($id);
//        $this->load->view('salary', $this->data);


        }
        else {

            redirect('Login');
        }
    }

    function search_by_salary()
    {
        if ($this->session->userdata('type') == "Admin") {
            $salary = $this->input->post('salary');
            // $type=$this->uri->segment(4);

            //print_r($salary);

            $this->data['showslname'] = $this->Salary->show_salary_by_name();
            $this->data['showsl'] = $this->Salary->search_by_salary($salary);
//
            $this->load->view('salary', $this->data);

        }
        else {

            redirect('Login');
        }
    }

    public function search_by_name()
    {
        if ($this->session->userdata('type') == "Admin") {
            $name = $this->input->post('sp_type');
            // $type=$this->uri->segment(4);

            //$this->data['showsl'] = $this->Salary->showsalary();
            $this->data['showslname'] = $this->Salary->show_salary_by_name();
            $this->data['showsl'] = $this->Salary->search_by_name($name);
            $this->load->view('salary', $this->data);

        }
        else {

            redirect('Login');
        }
    }

    public function delete($id)
    {
        if ($this->session->userdata('type') == "Admin") {
            $this->load->model('Salary');
            $this->Salary->delete($id);
            redirect(Salaryc);
        }
        else {

            redirect('Login');
        }
    }

    public function view_increment()
    {
        if ($this->session->userdata('type') == "Admin") {
            $id = $this->input->post('id');

            $this->data['edit'] = $this->Salary->editsalary($id);
            $this->load->view('add_increment', $this->data);

        }
        else {

            redirect('Login');
        }
    }

    public function add_increment($id)
    {
        if ($this->session->userdata('type') == "Admin") {
            $this->Salary->insert_increment($id);
            redirect('Salaryc');
        }
        else {

            redirect('Login');
        }
    }

    function showedit()
    {
        if ($this->session->userdata('type') == "Admin") {
            $id = $this->input->post('id');
//        $this->load->model('Salary');
//
            $this->data['edit'] = $this->Salary->editsalary($id);
            $this->load->view('edit_salary', $this->data);


        }
        else {

            redirect('Login');
        }
    }

    function salarycedit($id)
    {

        if ($this->session->userdata('type') == "Admin") {
            $this->data['edit'] = $this->Salary->salarycedit($id);
            redirect('Salaryc');


        }
        else {

            redirect('Login');
        }
    }
}
?>