<?php

/**
 * Created by PhpStorm.
 * User: User
 * Date: 4/13/2017
 * Time: 6:11 PM
 */
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
        $this->db->insert('sales',$data);

    }

    public function add_cart_data($pr_id,$type,$weight,$price,$amount1,$row_id)
    {

        $query1=$this->db->query("SELECT CURDATE() as month");
        foreach ($query1->result()as $r){$month=$r->month;}

        $query2=$this->db->query("SELECT * FROM `stock` WHERE `stock`.`product_id`='$pr_id' ");

//        return $amount1;

        foreach ($query2->result()as $t){$qun=$t->amount;
        if ($qun >= $amount1){

            $data = array(
                'product_id' => $pr_id,
                'type' => $type,
                'weight' => $weight,
                'price' => $price,
                'amount' => $amount1,
                'date'=>$month
            );
            $this->db->insert('sales',$data);

            $data1 = array(

                'amount' => $qun-$amount1,

            );
            $this->db->where('product_id',$pr_id);
            $this->db->update('stock',$data1);





                $data = array(
                    'rowid'=>$row_id,
                    'qty'=>0

                );

                $this->cart->update($data);

        }
        else{

            $data3 = array(

            'false' => '1',
            'id'=>$pr_id
        );
            return $data3;
        }

        }



    }

}

?>