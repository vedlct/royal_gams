<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Report extends CI_Controller
{

    public function index()
    {

//        $this->load->view('report');
        if (!$this->input->post('generate')) {

            $this->load->model('Reportm');
            $this->data['show_sales_review_date'] = $this->Reportm->show_sales_review_date();

            $this->data['gettotal'] = $this->Reportm->gettotal();
//            $this->load->view('report', $this->data);
            if (!$this->input->post('buy_generate')){

                $this->load->model('Reportm');
                $this->data['show_buy_review_date_buy'] = $this->Reportm->show_buy_review_date();

                $this->data['gettotal_buy'] = $this->Reportm->gettotalbuy();
//                $this->load->view('report',$this->data);

                /*------other expense-------------*/
                if (!$this->input->post('otherexpense_generate')){

                    $this->load->model('Reportm');
                    $this->data['show_buy_review_date_other_expense'] = $this->Reportm->show_review_date_other_expense();

                    $this->data['gettotal_other_expense'] = $this->Reportm->gettotal_other_expense();
//                    $this->load->view('report',$this->data);

                    /*------salary-------------*/
                    if (!$this->input->post('salary_generate')){

                        $this->load->model('Reportm');
                        $this->data['show_buy_review_date_salary_report'] = $this->Reportm->show_review_date_salary();

                        $this->data['gettotal_salary_report'] = $this->Reportm->gettotal_salary();
                        $this->load->view('report',$this->data);

                    }
                    else{

                        $date_from=$this->input->post('date_from');
                        $date_to=$this->input->post('date_to');


                        $this->load->model('Reportm');
                        $this->data['show_review_by_date_salary_report'] = $this->Reportm->show_salary_review_by_date($date_from,$date_to);

                        $this->data['gettotaltrans_salary_report'] = $this->Reportm->gettotaltrans_salary($date_from,$date_to);

                        $this->load->view('report',$this->data);


                    }
                    /*---  end salary --------------*/

                }
                else{

                    $date_from=$this->input->post('date_from');
                    $date_to=$this->input->post('date_to');


                    $this->load->model('Reportm');
                    $this->data['show_buy_review_by_date_other_expense'] = $this->Reportm->show_other_expense_review_by_date($date_from,$date_to);

                    $this->data['gettotaltrans_other_expense'] = $this->Reportm->gettotaltrans_other_expense($date_from,$date_to);

//                    $this->load->view('report',$this->data);
                    /*------salary-------------*/
                    if (!$this->input->post('salary_generate')){

                        $this->load->model('Reportm');
                        $this->data['show_buy_review_date_salary_report'] = $this->Reportm->show_review_date_salary();

                        $this->data['gettotal_salary_report'] = $this->Reportm->gettotal_salary();
                        $this->load->view('report',$this->data);

                    }
                    else{

                        $date_from=$this->input->post('date_from');
                        $date_to=$this->input->post('date_to');


                        $this->load->model('Reportm');
                        $this->data['show_review_by_date_salary_report'] = $this->Reportm->show_salary_review_by_date($date_from,$date_to);

                        $this->data['gettotaltrans_salary_report'] = $this->Reportm->gettotaltrans_salary($date_from,$date_to);

                        $this->load->view('report',$this->data);


                    }
                    /*---  end salary --------------*/
//            print_r($this->data['gettotaltrans']);

                }
                /*--- end other expense--------------*/

            }



            else{

                $date_from=$this->input->post('date_from');
                $date_to=$this->input->post('date_to');
//            print_r($date_to);

                $this->load->model('Reportm');
                $this->data['show_buy_review_by_date_buy'] = $this->Reportm->show_buy_review_by_date($date_from,$date_to);

                $this->data['gettotaltrans_buy'] = $this->Reportm->gettotaltransbuy($date_from,$date_to);

//                $this->load->view('report',$this->data);

                /*------other expense-------------*/
                if (!$this->input->post('otherexpense_generate')){

                    $this->load->model('Reportm');
                    $this->data['show_buy_review_date_other_expense'] = $this->Reportm->show_review_date_other_expense();

                    $this->data['gettotal_other_expense'] = $this->Reportm->gettotal_other_expense();
//                    $this->load->view('report',$this->data);

                    /*------salary-------------*/
                    if (!$this->input->post('salary_generate')){

                        $this->load->model('Reportm');
                        $this->data['show_buy_review_date_salary_report'] = $this->Reportm->show_review_date_salary();

                        $this->data['gettotal_salary_report'] = $this->Reportm->gettotal_salary();
                        $this->load->view('report',$this->data);

                    }
                    else{

                        $date_from=$this->input->post('date_from');
                        $date_to=$this->input->post('date_to');


                        $this->load->model('Reportm');
                        $this->data['show_review_by_date_salary_report'] = $this->Reportm->show_salary_review_by_date($date_from,$date_to);

                        $this->data['gettotaltrans_salary_report'] = $this->Reportm->gettotaltrans_salary($date_from,$date_to);

                        $this->load->view('report',$this->data);


                    }
                    /*---  end salary --------------*/

                }
                else{

                    $date_from=$this->input->post('date_from');
                    $date_to=$this->input->post('date_to');
//            print_r($date_to);

                    $this->load->model('Reportm');
                    $this->data['show_buy_review_by_date_other_expense'] = $this->Reportm->show_other_expense_review_by_date($date_from,$date_to);

                    $this->data['gettotaltrans_other_expense'] = $this->Reportm->gettotaltrans_other_expense($date_from,$date_to);

                    $this->load->view('report',$this->data);
//            print_r($this->data['gettotaltrans']);

                }
                /*--- end other expense--------------*/
//            print_r($this->data['gettotaltrans']);

            }

        } else {

            $date_from = $this->input->post('date_from');
            $date_to = $this->input->post('date_to');
//            print_r($date_to);

            $this->load->model('Reportm');
            $this->data['show_sales_review_by_date'] = $this->Reportm->show_sales_review_by_date($date_from, $date_to);

            $this->data['gettotaltrans'] = $this->Reportm->gettotaltrans($date_from, $date_to);

//            $this->load->view('report', $this->data);
            if (!$this->input->post('buy_generate')){

                $this->load->model('Reportm');
                $this->data['show_buy_review_date_buy'] = $this->Reportm->show_buy_review_date();

                $this->data['gettotal_buy'] = $this->Reportm->gettotalbuy();
//                $this->load->view('report',$this->data);

                /*------other expense-------------*/
                if (!$this->input->post('otherexpense_generate')){

                    $this->load->model('Reportm');
                    $this->data['show_buy_review_date_other_expense'] = $this->Reportm->show_review_date_other_expense();

                    $this->data['gettotal_other_expense'] = $this->Reportm->gettotal_other_expense();
//                    $this->load->view('report',$this->data);

                    /*------salary-------------*/
                    if (!$this->input->post('salary_generate')){

                        $this->load->model('Reportm');
                        $this->data['show_buy_review_date_salary_report'] = $this->Reportm->show_review_date_salary();

                        $this->data['gettotal_salary_report'] = $this->Reportm->gettotal_salary();
                        $this->load->view('report',$this->data);

                    }
                    else{

                        $date_from=$this->input->post('date_from');
                        $date_to=$this->input->post('date_to');


                        $this->load->model('Reportm');
                        $this->data['show_review_by_date_salary_report'] = $this->Reportm->show_salary_review_by_date($date_from,$date_to);

                        $this->data['gettotaltrans_salary_report'] = $this->Reportm->gettotaltrans_salary($date_from,$date_to);

                        $this->load->view('report',$this->data);


                    }
                    /*---  end salary --------------*/

                }
                else{

                    $date_from=$this->input->post('date_from');
                    $date_to=$this->input->post('date_to');
//            print_r($date_to);

                    $this->load->model('Reportm');
                    $this->data['show_buy_review_by_date_other_expense'] = $this->Reportm->show_other_expense_review_by_date($date_from,$date_to);

                    $this->data['gettotaltrans_other_expense'] = $this->Reportm->gettotaltrans_other_expense($date_from,$date_to);

                    $this->load->view('report',$this->data);
//            print_r($this->data['gettotaltrans']);

                }
                /*--- end other expense--------------*/

            }
            else{

                $date_from=$this->input->post('date_from');
                $date_to=$this->input->post('date_to');
//            print_r($date_to);

                $this->load->model('Reportm');
                $this->data['show_buy_review_by_date_buy'] = $this->Reportm->show_buy_review_by_date($date_from,$date_to);

                $this->data['gettotaltrans_buy'] = $this->Reportm->gettotaltransbuy($date_from,$date_to);

                $this->load->view('report',$this->data);
//            print_r($this->data['gettotaltrans']);

            }


        }
    }
    public function buy_report()
    {

//            print_r($this->data['gettotaltrans']);

        if (!$this->input->post('buy_generate')){

            $this->load->model('Reportm');
            $this->data['show_buy_review_date_buy'] = $this->Reportm->show_buy_review_date();

            $this->data['gettotal_buy'] = $this->Reportm->gettotalbuy();
            $this->load->view('report',$this->data);

        }
        else{

            $date_from=$this->input->post('date_from');
            $date_to=$this->input->post('date_to');
//            print_r($date_to);

            $this->load->model('Reportm');
            $this->data['show_buy_review_by_date_buy'] = $this->Reportm->show_buy_review_by_date($date_from,$date_to);

            $this->data['gettotaltrans_buy'] = $this->Reportm->gettotaltransbuy($date_from,$date_to);

            $this->load->view('report',$this->data);
//            print_r($this->data['gettotaltrans']);

        }



    }


    public function buy_report1()
    {


                    /*------Total report-------------*/
            if (!$this->input->post('total_generate')){

                $this->load->model('Reportm');
                $this->data['show_total_review_date'] = $this->Reportm->show_total_by_date();

//                $this->data['gettotal_total'] = $this->Reportm->gettotal_total();
                $this->load->view('report',$this->data);

            }
            else{

                $date_from=$this->input->post('date_from');
                $date_to=$this->input->post('date_to');


                $this->load->model('Reportm');
                $this->data['show_total_review_by_date'] = $this->Reportm->show_total_by_date($date_from,$date_to);

//                $this->data['gettotaltrans_total'] = $this->Reportm->gettotaltrans_date($date_from,$date_to);

                $this->load->view('report',$this->data);


            }
            /*---  end Total report --------------*/




    }


}