<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Expense extends CI_Controller
{

    public function index()
    {

        if(!$this->input->post('generate')){

            $this->load->model('Expensem');
            $this->data['show_expense_review_date'] = $this->Expensem->show_expense_review_date();

            $this->data['gettotal'] = $this->Expensem->gettotal();
            $this->load->view('expense',$this->data);


        }
        else{
            $date_from=$this->input->post('date_from');
            $date_to=$this->input->post('date_to');
//            print_r($date_to);

            $this->load->model('Expensem');
            $this->data['show_expense_review_by_date'] = $this->Expensem->show_expese_review_by_date($date_from,$date_to);

            $this->data['gettotaltrans'] = $this->Expensem->gettotaltrans($date_from,$date_to);

            $this->load->view('expense',$this->data);
            print_r($this->data['gettotaltrans']);

        }

    }

    public function insertexpense()
    {

//        $this->load->view('type');
        $this->load->model('Expensem');

        $this->data['expense'] = $this->Expensem->insertexpense();
        redirect('Expense');
//        $this->load->view('type');


    }

    public function view_expense()
    {




    }
}