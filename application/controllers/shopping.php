<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


class Shopping extends CI_Controller
{
    public function index(){
        //$this method loads the view
        $this->load->view('templates/header');
        $this->load->view('shopping_cart');
        $this->load->view('templates/footer');
    }
}
