<?php
class Userm extends CI_Model
{


    function show()
    {
        $query=$this->db->query("SELECT * FROM `user` ");
        return $query->result();
    }

    function edit($id)
    {
        $username = $this->input->post('username');
        $firstname = $this->input->post('first_name');
        $lastname = $this->input->post('last_name');
        $phone = $this->input->post('phone_number');
        $email = $this->input->post('email');

        $data = array(
            'username' => $username,
            'first_name' => $firstname,
            'last_name' => $lastname,
            'phone_number' => $phone,
            'email' => $email,
        );

        $this->db->where('id', $id);
        $this->db->update('user', $data);
    }
}