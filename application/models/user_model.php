<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//User_model class
class User_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    function login($email,$password) //login method for existing users
    {
        $this->db->where("email",$email);
        $this->db->where("password",$password);

        $query=$this->db->get("user");
        if($query->num_rows()>0)
        {
            foreach($query->result() as $rows)
            {
                //add all data to session
                $newdata = array(
                    'id'  => $rows->userId,
                    'username'  => $rows->userName,
                    'email'    => $rows->userEmail,
                    'logged_in'  => TRUE,
                );
            }
            $this->session->set_userdata($newdata);
            return true;
        }
        return false;
    }

    public function add_user() //method for adding user to database
    {
        //set up data array
        $data=array(
            'username'=>$this->input->post('user_name'), //post username to db
            'email'=>$this->input->post('email_address'), //post email to db
            'password'=>md5($this->input->post('password')) //post password to db with encryption
        );

        $this->db->insert('user',$data); //insert new user to db
    }
}
