<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


class Users extends CI_Model

{
    //Unique Identifier
    //var - int
    public $userId;

    //Items unifier
    //var - int
    public $itemId;

    //var - string
    public $lastName;

    //var - int
    public $username;

    //var - string
    public $email;

    //var - int
    public $password;

    //var - string
    public $address;

}