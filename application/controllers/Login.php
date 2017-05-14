<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Loginm');
    }

    public function index()
    {

        $this->load->view('login');
    }

    public  function check_user()
    {

        $result = $this->Loginm->validate_user($_POST);
        //$name = $this->Loginm->get_username();

        if(!empty($result)){

            $id = $result->id;
            $name= $this->Loginm->get_username($id);
            $data = [

                'username' => $result->username,
                'id'=>$result->id,
                'type'=>$result->type,
                'loggedin'=>"true",
                'name' => $name
            ];

            $this->session->set_userdata($data);

            if ($this->session->userdata('type') == "Admin"){
                redirect('Home');
            }

        }else {

            echo "<script>
                        alert('wrong username or password');
                     window.location=\"/royal_gams/Login\";  
					
                    </script>";
        }

    }

    public function logout(){
        /*$this->session->unset_userdata('username');
        $this->session->unset_userdata('id');
        $this->session->unset_userdata('type');*/

        $this->session->sess_destroy();
        redirect('Login');

    }

    public function password_change(){


        //$this->load->view('password_change');
       $username= $this->input->post('username');
        $email=$this->input->post('email');
       $new_pass= $this->input->post('new_pass');
        $con_pass=$this->input->post('con_pass');
        if ($new_pass==$con_pass){

            $this->data['pass_change'] = $this->Loginm->pass_change($username,$email,$con_pass);
            redirect('Home');

        }else{

            echo "<script>
                        alert('wrong password and Confirm password does not match' );
                        window.location=\"/royal_gams/Home\";  
					
                    </script>";
        }

    }

}
?>