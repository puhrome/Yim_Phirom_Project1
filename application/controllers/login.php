<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct()
    {
        parent::__construct();

        $this->load->database(); //automatically load db

        $this->load->model('Items'); //automatically load Items model
        $this->load->model('Users'); //automatically load Users model
        $this->load->model('User_model'); //automatically load User_model

        $this->load->helper('security'); //security helper for xss_clean

    }


    public function index()
    {
        $this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');

        $this->load->view('home');


        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
            $this->load->view('members_area', $data);
        }
        else
        {
            //If no session, redirect to login page
            redirect('login_form', 'refresh');
        }

    }

    public function login_validation()
    {

        //This method will have the credentials validation
        $this->load->library('form_validation');

        //set rules to validate username and callback
        $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|md5|callback_check_database');

        //if it validation is FALSE
        if($this->form_validation->run() == FALSE)
            //load this view for redirect and login
        {

            //$this method loads the view
//            $data['main_content'] = 'login_form'; //create a new key for this variable to load in view

            $this->load->view('login_form', 'login_validation'); //load template with two parameters, template and $data(main_content) variable

        }
        //or else route to members page
        else
        {
            $data['username'] = $this->input->post('username');

            //Go to private area
            $this->load->view('members_area', $data);
        }

    }

    public function create(){


    }
//    function logout()
//    {
//        $this->session->unset_userdata('logged_in');
//        session_destroy();
//        redirect('/index.php/logout_view', 'refresh');
//    }

}