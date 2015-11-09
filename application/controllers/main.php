<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller{

    public function index(){
        $this->login();
    }

    public function login(){
        $this->load->view('login');
    }

    public function memebers(){
        $this->load->view();
    }

    public function login_validation(){

        //This method will have the credentials validation
        $this->load->library('form_validation');

        $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');

        if($this->form_validation->run() == FALSE)
        {
            //$this method loads the view
            $data['main_content'] = 'login_form'; //create a new key for this variable to load in view

            $this->load->view('templates/navigation'); //load navigation view
            //

            $this->load->view('shopping_cart',$data); //load shopping cart (main) view
            //
            //        $this->load->view('templates/footer'); //load footer view

            $this->load->view('includes/template', $data); //load template with two parameters, template and $data(main_content) variable

            $this->load->library('cart');
        }
        else
        {
            //Go to private area
            redirect('home', 'refresh');
        }

    }




}