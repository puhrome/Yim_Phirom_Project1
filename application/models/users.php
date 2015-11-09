<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


class Users extends MY_Model

{
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

//
//    public function new_member()
//    {
//        $enc_password = md5($this->input->post('password'));
//
//        $data = array(
//        'username' => $this->input->post('username'),
//        'password' => $enc_password,
//        'email' => $this->input->post('email')
//    );
//        $insert = $this->db->insert('users', $data);
//        return $insert;
//    }
//
//    public function login_user($username, $password){
//
//        $enc_password = md5($this->input->post('password'));
//
//        $this->db->where('username', $username);
//        $this->db->where('password', $enc_password);
//
//
//        $result = $this->db->get('users');
//        if($result->num_rows() == 1){
//            return $result->row(0)->id;
//        }else{
//            return FALSE;
//        }
//    }
}