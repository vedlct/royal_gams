<?php
class Typem extends CI_Model {


    function inserttype(){
        $t_name = $this->input->post('t_name');
        $data = array(
            'name' => $t_name,

        );
        $data = $this->security->xss_clean($data);
        $this->db->insert('type',$data);
    }

    public function gettype(){
        //$this->db->group_by('menu_id');
        $query = $this->db->get('type');
        return $query->result();

    }

    public function edittype($id){

        $query=$this->db->query("SELECT * FROM type WHERE `id`= '$id'");
        return $query->result();
    }

    function edit($id){

        $type_name = $this->input->post('t_name');


        $data = array(

            'name' => $type_name,
        );
        $data = $this->security->xss_clean($data);
        $this->db->where('id', $id);
        $this->db->update('type', $data);

    }
    function delete($id){

        $this->db->where('id', $id);
        $this->db->delete('type');


    }
}
