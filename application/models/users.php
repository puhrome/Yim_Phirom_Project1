<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


class Users extends MY_Model{
    const DB_TABLE = 'users';
    const DB_TABLE_PK = 'userId';

    //Unique Identifier
    //var - int
    public $userId;



    //Items unifier
    //var - int
    public $itemId;

    //var - int
    public $firstName;

    //var - string
    public $lastName;

    //var - int
    public $username;

    //var - string
    public $userEmail;

    //var - string
    public $fbUserName;

    //var - int
    public $password;

    //var - string
    public $address;

    //var - string
    public $phone;


    //these are methods in a model
    public function getUsers()
    {
        $query = $this->db->get('users');
        return $query->result_array();
    }

//    public function login($username, $password){
//
//        $this->db->where('username', $username);
//        $this->db->where('password', $password);
//
//
//        $result = $this->db->get('users');
//
//        if($result->num_rows() == 1){
//            return $result->row(0)->userId;
//
//        }else{
//            return FALSE;
//        }
//    }


    public function validate(){

        // grab user input
        $username = $this->security->xss_clean($this->input->post('username'));
        $password = $this->security->xss_clean($this->input->post('password'));

        // Prep the query
        $this->db->where('username', $username);
        $this->db->where('password', $password);

        // Run the query
        $query = $this->db->get('users');

        // Let's check if there are any results
        if($query->num_rows == 1)
        {
            // If there is a user, then create session data
            $row = $query->row();
            $data = array(
                'userid' => $row->userid,
                'fname' => $row->fname,
                'lname' => $row->lname,
                'username' => $row->username,
                'validated' => true
            );
            $this->session->set_userdata($data);
            return true;
        }
        // If the previous process did not validate
        // then return false.
        return false;
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

    public function add_user()
    {
        $data=array(
            'username'=>$this->input->post('username'),
            'email'=>$this->input->post('email'),
            'password'=>md5($this->input->post('password'))
        );
        $this->db->insert('user',$data);
    }





}