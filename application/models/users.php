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

    public function login($username, $password){

        $this->db->where('username', $username);
        $this->db->where('password', $password);


        $result = $this->db->get('users');

        if($result->num_rows() == 1){
            return $result->row(0)->userId;

        }else{
            return FALSE;
        }
    }


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

    public function create()
    {
        $enc_password = md5($this->input->post('password')); //set password to md5 hashing

        //data array to input username, password, and email into database
        $data = array(
            'username' => $this->input->post('username'),
            'password' => $enc_password,
            'userEmail' => $this->input->post('userEmail')
        );

        //insert this new user and data array into database
        $insert = $this->db->insert('users', $data);

        //return database insert
        return $insert;
    }



}