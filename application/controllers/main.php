<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller{

    function __construct()
    {
        parent::__construct();

        $this->load->database(); //automatically load db

        $this->load->model('Items'); //automatically load Items model
        $this->load->model('Users'); //automatically load Users model

        $this->load->helper('security'); //security helper for xss_clean



    }

    public function index(){

        $this->load->view('home'); //load navigation view

    }

    public function login(){ //method to tell what to view with login model

        {
            //$this method loads the view
            $data['main_content'] = 'login_form'; //create a new key for this variable to load in view


            $this->load->view('includes/template', $data); //load template with two parameters, template and $data(main_content) variable

            //I am not sure. This is my main controller. I put all my fucntions in here, how did you create that user that is in the db? In the models?
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

    public function check_database($password)
        //this method checks database
    {

        $this->load->library('form_validation');

        //Field validation succeeded.  Validate against database
        $username = $this->input->post('username');

        //query the database
        $result = $this->Users->login($username, $password);


        if($result)

        {
            $sess_array = array();
            foreach($result as $row)
            {
                $sess_array = array(
                    'id' => $row->id,
                    'username' => $row->username
                );
                $this->session->set_userdata('logged_in', $sess_array);
            }
            return TRUE;
        }
        else
        {

            //set rules to validate username and callback
            $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
            $this->form_validation->set_rules('password', 'Password', 'trim|required|md5|callback_check_database');

            //if it validation is FALSE
            if($this->form_validation->run() == FALSE)

            $this->form_validation->set_message('check_database', 'Invalid username or password');
            $this->load->view('login_form');
            return FALSE;

        }
    }


    public function members()
    {
        $this->load->model('create');
        //method to load members page
        $this->load->view('members_area');

        //if it validation is FALSE
        if($this->create->run() == FALSE)
            //load this view for redirect and login
        {

            //$this method loads the view
            $data['main_content'] = 'login_form'; //create a new key for this variable to load in view

            $this->load->view('includes/header', $data); //load template with two parameters, template and $data(main_content) variable

        }
        //or else route to members page
        else
        {
            $data['username'] = $this->input->post('username');

            //Go to private area
            $this->load->view('members_area', $data);
        }




    }

}