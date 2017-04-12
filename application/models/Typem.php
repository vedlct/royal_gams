<?php
class Typem extends CI_Model {


    function inserttype(){
        $t_name = $this->input->post('t_name');
        $data = array(
            'name' => $t_name,

        );

        $this->db->insert('type',$data);
    }

    public function gettype(){
        //$this->db->group_by('menu_id');
        $query = $this->db->get('type');
        return $query->result();

    }
}
