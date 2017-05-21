<?php


class Sales extends CI_Model
{
    public function add_cart()
    {
        $p_id = $this->input->post('product_id');
        $type = $this->input->post('type');
        $weight = $this->input->post('weight');
        $price = $this->input->post('price');
        $amount = $this->input->post('amount');

        $data = array(
            'product_id' => $p_id,
            'type' => $type,
            'weight' => $weight,
            'price' => $price,
            'amount' => $amount,
        );
        $data = $this->security->xss_clean($data);
        $this->db->insert('sales',$data);

    }

    public function add_cart_data($pr_id,$type,$weight,$price,$amount1,$row_id)
    {

        $query1=$this->db->query("SELECT CURDATE() as month");
        foreach ($query1->result()as $r){$month=$r->month;}

        $query2=$this->db->query("SELECT * FROM `stock` WHERE `stock`.`product_id`='$pr_id' GROUP BY `stock`.`product_id`");

//        return $amount1;

        foreach ($query2->result()as $t){$qun=$t->amount;


            $data = array(
                'product_id' => $pr_id,
                'type' => $type,
                'weight' => $weight,
                'price' => $price,
                'amount' => $amount1,
                'date'=>$month
            );
            $data = $this->security->xss_clean($data);
            $this->db->insert('sales',$data);

            $data1 = array(

                'amount' => $qun-$amount1,

            );
            $data1 = $this->security->xss_clean($data1);
            $this->db->where('product_id',$pr_id);
            $this->db->update('stock',$data1);





                $data = array(
                    'rowid'=>$row_id,
                    'qty'=>0

                );
                $data = $this->security->xss_clean($data);
                $this->cart->update($data);

        }






    }

    public function todaysell() {

        $date=date("Y-m-d");

        $query = $this->db->query("SELECT SUM(`price`) as totalsell FROM `sales` WHERE `date` = '$date'");
        return $query->result();
    }

}

?>