<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class User extends CI_Model
{
    public function __construct()
    {
        parent::__construct();

    }
    function login($email,$password)
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
                    'user_id'  => $rows->userid,
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

    public function add_user()
    {
        $data=array(
            'username'=>$this->input->post('username'),
            'email'=>$this->input->post('email'),
            'password'=>md5($this->input->post('password'))
        );
        $this->db->insert('user',$data);
    }


//    function login($username, $password)
//    {
//        $this -> db -> select('id, username, password');
//        $this -> db -> from('users');
//        $this -> db -> where('username', $username);
//        $this -> db -> where('password', MD5($password));
//        $this -> db -> limit(1);
//
//        $query = $this -> db -> get();
//
//        if($query -> num_rows() == 1)
//        {
//            return $query->result();
//        }
//        else
//        {
//            return false;
//        }
//    }


}
