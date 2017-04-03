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

    public function editstock($id){

        $query=$this->db->query("SELECT * FROM `purchase` WHERE `id`= '$id'");
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

}
?>