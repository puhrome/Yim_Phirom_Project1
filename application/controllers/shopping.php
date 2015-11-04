<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


class Shopping extends CI_Controller
{
    public function index(){
        //$this method loads the view
        $this->load->view('templates/navigation'); //load navigation view
        $this->load->view('templates/header');  //load header view
        $this->load->view('shopping_cart'); //load shopping cart (main) view
        $this->load->view('templates/footer'); //load footer view
    }
}
