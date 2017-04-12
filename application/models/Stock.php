<?php
class Stock extends CI_Model {



    function insertstock(){
        $p_id = $this->input->post('p_id');
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

        $this->db->insert('stock',$data);
    }

    function insert_stone(){
        $p_id = $this->input->post('p_id');
        //$type = $this->input->post('type');
        $weight = $this->input->post('weight');
        $price = $this->input->post('price');
        $amount = $this->input->post('amount');

        $data = array(
            'product_id' => $p_id,
            'weight' => $weight,
            'price' => $price,
            'amount' => $amount,
        );

        $stonedata = array(
            'product_id' => $p_id,
            'type' => 'Stone',
            'weight' => $weight,
            'price' => $price,
            'amount' => $amount,
        );

        $this->db->insert('stone',$data);
        $this->db->insert('stock',$stonedata);
    }

    function showstone(){

        $query = $this->db->query("SELECT * FROM `stone`");
        return $query->result();
    }

    function showstock(){

        $query = $this->db->query("SELECT * FROM `stock`");
        return $query->result();
    }

    public function editstock($id){

        $query=$this->db->query("SELECT * FROM stock WHERE `id`= '$id'");
        return $query->result();
    }

    public function editstone($id){

        $query=$this->db->query("SELECT * FROM stone WHERE `id`= '$id'");
        return $query->result();
    }


    function edit($id){

        $p_id = $this->input->post('p_id');
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

        $this->db->where('id', $id);
        $this->db->update('stock', $data);

    }

    function update_stone($id){

        $p_id = $this->input->post('p_id');
        $weight = $this->input->post('weight');
        $price = $this->input->post('price');
        $amount = $this->input->post('amount');

        $data = array(
            'product_id' => $p_id,
            'weight' => $weight,
            'price' => $price,
            'amount' => $amount,
        );

        $this->db->where('id', $id);
        $this->db->update('stone', $data);

    }

    public function delete_stone($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('stone');
    }

    function delete($id){

        $this->db->where('id', $id);
        $this->db->delete('stock');


    }

    function search_by_id($id){

        $type="";
        $query=$this->db->query("SELECT * FROM stock WHERE `product_id`= '$id'");
        return $query->result();


    }
}
?>