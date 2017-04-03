<?php
class Product extends CI_Model {


    function getprod(){

        $p_id=$this->input->post('p_id');

        $query = $this->db->query("SELECT * FROM `stock` WHERE `product_id`='$p_id'");
        return $query->result();
    }


}
?>