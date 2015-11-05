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

}