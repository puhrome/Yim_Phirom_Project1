<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller{

    function __construct()
    {
        parent::__construct();

        $this->load->database();

        $this->load->model('Items');
        $this->load->model('Users');

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

    public function login_validation(){

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
            $data['main_content'] = 'login_form'; //create a new key for this variable to load in view


            $this->load->view('shopping_cart',$data); //load shopping cart (main) view

            $this->load->view('includes/template', $data); //load template with two parameters, template and $data(main_content) variable

        }
        //or else route to members page
        else
        {
            //Go to private area
            $this->load->view('members_area');
        }

    }



    public function check_database($password)
        //this method checks database
    {
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
            $this->form_validation->set_message('check_database', 'Invalid username or password');
            return false;
        }
    }

    //model set up to create new members in a db
    public function create()
    {
        $enc_password = md5($this->input->post('password')); //set password to md5 hashing

        //data array to input username, password, and email into database
        $data = array(
            'username' => $this->input->post('username'),
            'password' => $enc_password,
            'email' => $this->input->post('email')
        );

        //insert this new user and data array into database
        $insert = $this->db->insert('users', $data);

        //return database insert
        return $insert;
    }

    public function members(){

        //method to load members page
        $this->load->view('members_area');

    }

}