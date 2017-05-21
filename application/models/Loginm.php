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

    public function get_user($u_id)
    {
        $query=$this->db->query("SELECT * FROM `user` WHERE `id`='$u_id'");
        return $query->result();

    }

    public function pass_change($username,$con_pass)
    {
        $data = array(

            'password' => $con_pass

        );
        $data = $this->security->xss_clean($data);
        $this->db->where('username', $username);

        $this->db->update('user', $data);
    }
}