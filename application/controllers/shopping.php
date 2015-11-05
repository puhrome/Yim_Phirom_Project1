<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


class Shopping extends CI_Controller

{
    function __construct()
    {
        parent::__construct();

        $this->load->database();
    }

    public function index(){

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
