<?php
class Purchase extends CI_Model {


    function insert(){

        $p_id = $this->input->post('p_id');
        $type = $this->input->post('type');
        $weight = $this->input->post('weight');
        $price = $this->input->post('price');
        $amount = $this->input->post('amount');
        $paid = $this->input->post('paid');
        $due = $this->input->post('due');
        $date =date("Y-m-d");
        $data = array(
            'product_id' => $p_id,
            'type' => $type,
            'weight' => $weight,
            'price' => $price,
            'instock' => $amount,
            'paid' => $paid,
            'due' => $due,
            'date' => $date,
        );

        $this->db->insert('purchase',$data);
    }

    function view(){

        $query = $this->db->query("SELECT * FROM `purchase`");
        return $query->result();
    }

    function show_purchase_by_type(){

        $query=$this->db->query("SELECT DISTINCT(type) FROM purchase");
        return $query->result();
    }

    function search_purchase_by_type($type){

        $query=$this->db->query("SELECT * FROM purchase WHERE `type`='$type'");
        return $query->result();
    }

    public function editstock($id){

        $query=$this->db->query("SELECT * FROM `purchase` WHERE `id`= '$id'");
        return $query->result();
    }

    public function search_purchase_by_id($id){

        $query=$this->db->query("SELECT * FROM `purchase` WHERE `product_id`= '$id'");
        return $query->result();
    }

    function search_by_price($price){

        $query=$this->db->query("SELECT * FROM purchase WHERE `price`>='$price' ORDER BY price ");
        return $query->result();
    }

    function search_by_price_less($price){

        $query=$this->db->query("SELECT * FROM purchase WHERE `price`<'$price' ORDER BY price ");
        return $query->result();
    }

    function search_by_paid($paid){

        $query=$this->db->query("SELECT * FROM purchase WHERE `paid`>='$paid' ORDER BY paid DESC");
        return $query->result();
    }

    function edit($id){

        $p_id = $this->input->post('p_id');
        $type = $this->input->post('type');
        $weight = $this->input->post('weight');
        $price = $this->input->post('price');
        $amount = $this->input->post('amount');
        $paid = $this->input->post('paid');
        $due = $this->input->post('due');
        $date = $this->input->post('date');

        $data = array(
            'product_id' => $p_id,
            'type' => $type,
            'weight' => $weight,
            'price' => $price,
            'instock' => $amount,
            'paid' => $paid,
            'due' => $due,
            'date' => $date,
        );

        $this->db->where('id', $id);
        $this->db->update('purchase', $data);

    }

    function delete($id){

        $this->db->where('id', $id);
        $this->db->delete('purchase');


    }

    public function todaybuy() {

        $date=date("Y-m-d");

        $query = $this->db->query("SELECT SUM(`price`) as todaybuy FROM `purchase` WHERE `date` = '$date'");
        return $query->result();
    }

}
?>