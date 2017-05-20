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
        $data = $this->security->xss_clean($data);
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
        $data = $this->security->xss_clean($data);
        $this->db->insert('salary_paid',$data);
    }


    function showsalary(){

        $query = $this->db->query("SELECT * FROM `salary`");
        return $query->result();
    }

    function showsalaryincrement(){

        $query = $this->db->query("SELECT * FROM `increment`");
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

        $query=$this->db->query("SELECT * FROM salary WHERE `salary` > '$salary'");
        return $query->result();
    }

    function search_by_salary_less($salary){

        $query=$this->db->query("SELECT * FROM salary WHERE `salary` <= '$salary'");
        return $query->result();
    }

    public function add_increment($id){

        $query=$this->db->query("SELECT * FROM salary WHERE `id`= '$id'");
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
        $data = $this->security->xss_clean($data);
        $this->db->where('id', $id);
        $this->db->update('stock', $data);

    }

    function insert_increment($id){

        $salary = $this->input->post('salary');
        $name = $this->input->post('name');
        $increment = $this->input->post('increment');
        $newsalary = $salary+$increment;

        $data = array(
            'salary' => $newsalary
        );

        $incdata = array(
            'salary_id' => $id,
            'name' => $name,
            'previous_salary' => $salary,
            'current_salary' => $newsalary
        );
        $incdata = $this->security->xss_clean($incdata);
        $this->db->insert('increment',$incdata);

        $data = $this->security->xss_clean($data);
        $this->db->where('id', $id);
        $this->db->update('salary', $data);

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

    function salarycedit($id){

        $name = $this->input->post('name');
        $degn = $this->input->post('degn');
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
        $data = $this->security->xss_clean($data);
        $this->db->where('id', $id);
        $this->db->update('salary', $data);

    }
}
?>