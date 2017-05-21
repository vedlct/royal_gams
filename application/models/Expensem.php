<?php
class Expensem extends CI_Model
{


    function insertexpense()
    {
        $purpose = $this->input->post('purpose');
        $amount = $this->input->post('amount');
        $date = $this->input->post('date');



        $data = array(
            'purpose' => $purpose,
            'amount' => $amount,
            'date' => $date,

        );
        $data = $this->security->xss_clean($data);
        $this->db->insert('expense', $data);
    }

    public function show_expense_review_date()
    {
        /*$query = $this->db->query("SELECT * FROM `order` ORDER BY `date`");
        return $query->result();*/
        $query = $this->db->query("SELECT `date`,`purpose`, SUM(`amount`) as amoun FROM `expense` WHERE DATE(`date`)=CURDATE() GROUP  BY `purpose`");
        return $query->result();
    }

    public function show_expese_review_by_date($date_from,$date_to)
    {
        /*$query = $this->db->query("SELECT * FROM `order` ORDER BY `date`");
        return $query->result();*/
        $query = $this->db->query("SELECT `date`,GROUP_CONCAT(`purpose`) as purpose, GROUP_CONCAT(`amount`) as amoun, SUM(`amount`) as rowtotal FROM `expense` WHERE DATE(`date`) BETWEEN STR_TO_DATE('$date_from', '%Y-%m-%d') AND STR_TO_DATE('$date_to', '%Y-%m-%d') GROUP BY `date` ");
        return $query->result();
    }

    public function gettotal()
    {


        /* $this->db->select_sum('price');

         $this->db->from('order');
         //$this->db->where('email',$login_email);
         $this->db->order_by('date', 'ASC');
         $query = $this->db->get();

         // Return the results.
         return $query->result();*/
        $query = $this->db->query("SELECT SUM(`amount`) as total FROM `expense` WHERE DATE(`date`)=CURDATE()");
        return $query->result();

    }

    public function gettotaltrans($date_from,$date_to)
    {


        /* $this->db->select_sum('price');

         $this->db->from('order');
         //$this->db->where('email',$login_email);
         $this->db->order_by('date', 'ASC');
         $query = $this->db->get();

         // Return the results.
         return $query->result();*/
        $query = $this->db->query("SELECT SUM(`amount`) as total FROM `expense` WHERE DATE(`date`) BETWEEN STR_TO_DATE('$date_from', '%Y-%m-%d') AND STR_TO_DATE('$date_to', '%Y-%m-%d')");
        return $query->result();

    }

    public function other_expense() {

        $date=date("Y-m-d");

        $query = $this->db->query("SELECT SUM(`amount`) as other_expense FROM `expense` WHERE `date` = '$date'");
        return $query->result();
    }
}