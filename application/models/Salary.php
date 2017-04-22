<?php
class Salary extends CI_Model {



    function insertsalary(){
        $name = $this->input->post('name');
        $degn  = $this->input->post('degn');
        $salary = $this->input->post('salary');
        $pnumber = $this->input->post('pnumber');
        $address = $this->input->post('address');
        $status = $this->input->post('status');

        $data = array(
            'name' => $name,
            'desg' => $degn,
            'salary' => $salary,
            'phone' => $pnumber,
            'address' => $address,
            'status' => $status,
        );

        $this->db->insert('salary',$data);
    }


    function pay_salary($id){

        $query=$this->db->query("SELECT * FROM salary WHERE `id`= '$id'");
//
        foreach ($query->result() as $s){

            $sal_id=$s->id;
            $name=$s->name;
            $amount=$s->salary;
            $status=$s->status;
        }

        $this->load->helper('date');
        $month=$this->input->post('month1');
        if ($month==null) {
            $data = array(
                'name' => $name,
                'amount' => $amount,
                'salary_id' => $sal_id,
                'date' => date("Y-m-d"),
                'status' => $status,
            );
        }
        else{
            $data = array(
                'name' => $name,
                'amount' => $amount,
                'salary_id' => $sal_id,
                'date' => $month,
                'status' => $status,
            );

        }

        $this->db->insert('salary_paid',$data);
    }


    function showsalary(){

        $query = $this->db->query("SELECT * FROM `salary`");
        return $query->result();
    }

    function show_salary_by_name(){

        $query=$this->db->query("SELECT DISTINCT(name) FROM salary");
        return $query->result();
    }

    function search_by_name($name){

        $query=$this->db->query("SELECT * FROM salary WHERE `name`= '$name'");
        return $query->result();
    }

    function search_by_salary($salary){

        $query=$this->db->query("SELECT * FROM salary WHERE `salary` >= '$salary'");
        return $query->result();
    }

    public function editsalary($id){

        $query=$this->db->query("SELECT * FROM salary WHERE `id`= '$id'");
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


    function delete($id){

        $this->db->where('id', $id);
        $this->db->delete('salary');


    }

    function search_by_id($id){

        $type="";
        $query=$this->db->query("SELECT * FROM salary WHERE `id`= '$id'");
        return $query->result();


    }
}
?>