<?php
class Stone extends CI_Model {

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
        $data = $this->security->xss_clean($data);
        $this->db->insert('stock',$data);
    }

    function insert_stone(){
        $p_id = $this->input->post('p_id');
        $sname = $this->input->post('s_name');
        $weight = $this->input->post('weight');
        $price = $this->input->post('price');
        $amount = $this->input->post('amount');

        $data = array(
            'product_id' => $p_id,
            'stone_name' =>$sname,
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
        $data = $this->security->xss_clean($data);
        $stonedata = $this->security->xss_clean($stonedata);
        $this->db->insert('stone',$data);
        $this->db->insert('stock',$stonedata);
    }

    public function get_products_autocomplete($q){

        $this->db->select('product_id');
        $this->db->like('product_id', $q,'after');
        $query = $this->db->get('stock');
        //$query=$this->db->query("SELECT type FROM `stock` WHERE `type` LIKE '%$q%' ");
        // return $query->result();
        if($query->num_rows() > 0){
            foreach ($query->result_array() as $row){
                $row_set[] = htmlentities(stripslashes($row['type'])); //build an array
            }
            echo json_encode($row_set); //format the array into json data
        }
    }


    function showstone(){

        $query = $this->db->query("SELECT * FROM `stone`");
        return $query->result();
    }

    function showstock(){

        $query = $this->db->query("SELECT * FROM `stock`");
        return $query->result();
    }

    public function showstocktype(){

        $query = $this->db->query("SELECT DISTINCT(type) FROM `stock` ");
        return $query->result();
    }

    public function showstonetype(){

        $query = $this->db->query("SELECT DISTINCT(stone_name) FROM `stone` ");
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
        $data = $this->security->xss_clean($data);
        $this->db->where('id', $id);
        $this->db->update('stock', $data);

    }

    function update_stone($id){

        $p_id = $this->input->post('p_id');
        $sname = $this->input->post('s_name');
        $weight = $this->input->post('weight');
        $price = $this->input->post('price');
        $amount = $this->input->post('amount');

        $data = array(
            'product_id' => $p_id,
            'stone_name' =>$sname,
            'weight' => $weight,
            'price' => $price,
            'amount' => $amount,
        );
        $data = $this->security->xss_clean($data);
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

    function search_by_price($price){

        /*
        $this->db->select('price');
        $this->db->like('price',$price,'after');
        $query=$this->db->get('stock');
        return $query->result();
        */
        $type="";
        $query=$this->db->query("SELECT * FROM stone WHERE `price` = '$price'");
        return $query->result();
    }

    function search_by_price_less_then($price){


        $query=$this->db->query("SELECT * FROM stone WHERE `price` < '$price'");
        return $query->result();
    }

    function search_by_price_greater($price){


        $query=$this->db->query("SELECT * FROM stone WHERE `price` > '$price'");
        return $query->result();
    }

    function search_by_price_less($price){

        $query=$this->db->query("SELECT * FROM stone WHERE `price`<'$price'");
        return $query->result();
    }

    function search_by_stock($stock){

        $query=$this->db->query("SELECT * FROM stone WHERE `amount`='$stock' ORDER BY amount  ");
        return $query->result();
    }

    function search_by_stock_less($stock){

        $query=$this->db->query("SELECT * FROM stone WHERE `amount`<'$stock' ORDER BY amount  ");
        return $query->result();
    }

    function search_by_stock_greater($stock){

        $query=$this->db->query("SELECT * FROM stone WHERE `amount`>'$stock' ORDER BY amount  ");
        return $query->result();
    }


    function search_stone_by_id($id){

        $type="";
        $query=$this->db->query("SELECT * FROM stone WHERE `product_id`= '$id'");
        return $query->result();
    }



    function search_by_type($type){

        $query=$this->db->query("SELECT * FROM stock WHERE `type`= '$type'");
        return $query->result();
    }

    function search_stone_by_type($name){

        $query=$this->db->query("SELECT * FROM stone WHERE `stone_name`= '$name'");
        return $query->result();
    }
}
?>