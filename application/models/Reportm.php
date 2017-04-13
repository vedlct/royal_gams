<?php
class Reportm extends CI_Model
{


    public function show_sales_review_date()
    {
        /*$query = $this->db->query("SELECT * FROM `order` ORDER BY `date`");
        return $query->result();*/
        $query = $this->db->query("SELECT `date`,`product_id`,`type`,`weight`, SUM(`amount`) as amoun,SUM(`price`) as price FROM `sales` WHERE DATE(`date`)=CURDATE() GROUP  BY `product_id`");
        return $query->result();
    }

    public function show_sales_review_by_date($date_from,$date_to)
    {
        /*$query = $this->db->query("SELECT * FROM `order` ORDER BY `date`");
        return $query->result();*/
        $query = $this->db->query("SELECT `date`,GROUP_CONCAT(`product_id`) as product_id, GROUP_CONCAT(`type`) as type,GROUP_CONCAT(`weight`) as weight, GROUP_CONCAT(`amount`) as amoun, GROUP_CONCAT(`price`) as price,SUM(`price`) as tp FROM `sales` WHERE DATE(`date`) BETWEEN STR_TO_DATE('$date_from', '%Y-%m-%d') AND STR_TO_DATE('$date_to', '%Y-%m-%d') GROUP BY `date` ");
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
        $query = $this->db->query("SELECT SUM(`price`) as total FROM `sales` WHERE DATE(`date`)=CURDATE()");
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
        $query = $this->db->query("SELECT SUM(`price`) as total FROM `sales` WHERE DATE(`date`) BETWEEN STR_TO_DATE('$date_from', '%Y-%m-%d') AND STR_TO_DATE('$date_to', '%Y-%m-%d')");
        return $query->result();

    }

    /*-----buy--------*/
    public function show_buy_review_date()
    {
        /*$query = $this->db->query("SELECT * FROM `order` ORDER BY `date`");
        return $query->result();*/
        $query = $this->db->query("SELECT `date`,`product_id`,`type`,`weight`, `instock`, `paid`, `due`,SUM(`price`) as price FROM `purchase` WHERE DATE(`date`)=CURDATE() GROUP  BY `product_id`");
        return $query->result();
    }

    public function show_buy_review_by_date($date_from,$date_to)
    {
        /*$query = $this->db->query("SELECT * FROM `order` ORDER BY `date`");
        return $query->result();*/
        $query = $this->db->query("SELECT `date`,GROUP_CONCAT(`product_id`) as product_id, GROUP_CONCAT(`type`) as type,GROUP_CONCAT(`weight`) as weight, GROUP_CONCAT(`instock`) as instock ,GROUP_CONCAT(`paid`) as paid,GROUP_CONCAT(`due`) as due, GROUP_CONCAT(`price`) as price,SUM(`price`) as tp FROM `purchase` WHERE DATE(`date`) BETWEEN STR_TO_DATE('$date_from', '%Y-%m-%d') AND STR_TO_DATE('$date_to', '%Y-%m-%d') GROUP BY `date` ");
        return $query->result();
    }

    public function gettotalbuy()
    {


        /* $this->db->select_sum('price');

         $this->db->from('order');
         //$this->db->where('email',$login_email);
         $this->db->order_by('date', 'ASC');
         $query = $this->db->get();

         // Return the results.
         return $query->result();*/
        $query = $this->db->query("SELECT SUM(`price`) as total FROM `purchase` WHERE DATE(`date`)=CURDATE()");
        return $query->result();

    }

    public function gettotaltransbuy($date_from,$date_to)
    {


        /* $this->db->select_sum('price');

         $this->db->from('order');
         //$this->db->where('email',$login_email);
         $this->db->order_by('date', 'ASC');
         $query = $this->db->get();

         // Return the results.
         return $query->result();*/
        $query = $this->db->query("SELECT SUM(`price`) as total FROM `purchase` WHERE DATE(`date`) BETWEEN STR_TO_DATE('$date_from', '%Y-%m-%d') AND STR_TO_DATE('$date_to', '%Y-%m-%d')");
        return $query->result();

    }
    /* other expense--------------*/

    public function show_review_date_other_expense()
    {
        /*$query = $this->db->query("SELECT * FROM `order` ORDER BY `date`");
        return $query->result();*/
        $query = $this->db->query("SELECT `date`,`purpose`, SUM(`amount`) as amount FROM `expense` WHERE DATE(`date`)=CURDATE() GROUP  BY `purpose`");
        return $query->result();
    }

    public function show_other_expense_review_by_date($date_from,$date_to)
    {
        /*$query = $this->db->query("SELECT * FROM `order` ORDER BY `date`");
        return $query->result();*/
        $query = $this->db->query("SELECT `date`,GROUP_CONCAT(`purpose`) as purpose, GROUP_CONCAT(`amount`) as amount, SUM(`amount`) as rowtotal FROM `expense` WHERE DATE(`date`) BETWEEN STR_TO_DATE('$date_from', '%Y-%m-%d') AND STR_TO_DATE('$date_to', '%Y-%m-%d') GROUP BY `date` ");
        return $query->result();
    }

    public function gettotal_other_expense()
    {


        $query = $this->db->query("SELECT SUM(`amount`) as total FROM `expense` WHERE DATE(`date`)=CURDATE()");
        return $query->result();

    }

    public function gettotaltrans_other_expense($date_from,$date_to)
    {
        $query = $this->db->query("SELECT SUM(`amount`) as total FROM `expense` WHERE DATE(`date`) BETWEEN STR_TO_DATE('$date_from', '%Y-%m-%d') AND STR_TO_DATE('$date_to', '%Y-%m-%d')");
        return $query->result();

    }

    /*-------salary-----------*/


    public function show_review_date_salary()
    {
        /*$query = $this->db->query("SELECT * FROM `order` ORDER BY `date`");
        return $query->result();*/
        $query = $this->db->query("SELECT `date`,`name`,`status`, SUM(`amount`) as amount FROM `salary_paid` WHERE DATE(`date`)=CURDATE() GROUP  BY `name`");
        return $query->result();
    }

    public function show_salary_review_by_date($date_from,$date_to)
    {
        /*$query = $this->db->query("SELECT * FROM `order` ORDER BY `date`");
        return $query->result();*/
        $query = $this->db->query("SELECT `date`,GROUP_CONCAT(`name`) as name ,GROUP_CONCAT(`status`) as status, GROUP_CONCAT(`amount`) as amount, SUM(`amount`) as rowtotal FROM `salary_paid` WHERE DATE(`date`) BETWEEN STR_TO_DATE('$date_from', '%Y-%m-%d') AND STR_TO_DATE('$date_to', '%Y-%m-%d') GROUP BY `date` ");
        return $query->result();
    }

    public function gettotal_salary()
    {


        $query = $this->db->query("SELECT SUM(`amount`) as total FROM `salary_paid` WHERE DATE(`date`)=CURDATE()");
        return $query->result();

    }

    public function gettotaltrans_salary($date_from,$date_to)
    {
        $query = $this->db->query("SELECT SUM(`amount`) as total FROM `salary_paid` WHERE DATE(`date`) BETWEEN STR_TO_DATE('$date_from', '%Y-%m-%d') AND STR_TO_DATE('$date_to', '%Y-%m-%d')");
        return $query->result();

    }



}