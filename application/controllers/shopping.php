<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


class Shopping extends CI_Controller

{
    function __construct()
    {
        parent::__construct();

        $this->load->database();
    }

    public function index(){

        $data = array();
        $this->load->model('Items');
        $items = new Items();
        $items->load(1);
        $data['items'] = $items;

        $data = array();
        $this->load->model('Users');
        $users = new Users();
        
//
//        //load Items Model
//        $this->load->model('Items');
//        $this->Items->itemName = "Ethiopia";
//        $this->Items->save();
////        echo '<pre>' . var_export($this->Items, TRUE) . '</pre>';
//
//        //load Users Model
//        $this->load->model('Users');
//        $users = new Users();
//        $users->itemId = $this->Items->itemId;
//        $users->firstName = 'Jane';
//        $users->lastName = 'Doe';
//        $users->username = 'jdoe345';
//        $users->save();
////        echo '<pre>' . var_export($users, TRUE) . '</pre>';

        //$this method loads the view
        $data['main_content'] = 'login_form'; //create a new key for this variable to load in view

        $this->load->view('templates/navigation'); //load navigation view
        //
        //        $this->load->view('templates/header');  //load header view

        $this->load->view('shopping_cart'); //load shopping cart (main) view
        //
        //        $this->load->view('templates/footer'); //load footer view

        $this->load->view('includes/template', $data); //load template with two parameters, template and $data(main_content) variable

        $this->load->library('cart');

    }
}
