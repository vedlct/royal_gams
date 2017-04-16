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

    public function add_cart_data($p_id,$type,$weight,$price,$amount)
    {

        $data = array(
            'product_id' => $p_id,
            'type' => $type,
            'weight' => $weight,
            'price' => $price,
            'amount' => $amount,
        );
        $this->db->insert('sales',$data);

    }

}

?>