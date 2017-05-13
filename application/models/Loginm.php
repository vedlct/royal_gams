<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Loginm extends CI_Model
{

    public function validate_user($data)
    {

        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $this->db->where('username', $username);
        $this->db->where('password', $password);

        return $this->db->get('user')->row();
    }
    public function get_username($id)
    {
        $query=$this->db->query("SELECT CONCAT(`first_name`,' ', `last_name`) AS name FROM `user` WHERE `id`='$id'");
        return $query->result();
    }
}