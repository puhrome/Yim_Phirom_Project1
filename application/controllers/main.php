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

        //$data = array();


        //$items->load(1);
        //$data['items'] = $this->Items->getItems();

        //$data['users'] = $this->Users->getUsers();

        $this->load->view('home'); //load navigation view

        //var_dump($data);


        //$users->load(1);
        //$data['user'] = $users;

//        $this->load->view('login', $data); //load shopping cart (main) view


//        //load Items Model
//        $this->load->model('Items');
//        $this->Items->itemName = "Ethiopia";
//        $this->Items->save();
//
//        //load Users Model
//        $this->load->model('Users');
//        $users = new Users();
//        $users->itemId = $this->Items->itemId;
//        $users->firstName = 'Jane';
//        $users->lastName = 'Doe';
//        $users->username = 'jdoe345';
//        $users->save();

        //$this method loads the view
//        $data['main_content'] = 'login_form'; //create a new key for this variable to load in view

        //


//        $this->load->view('shopping_cart',$data); //load shopping cart (main) view
        //
        //        $this->load->view('templates/footer'); //load footer view

//        $this->load->view('includes/template', $data); //load template with two parameters, template and $data(main_content) variable
//
//        $this->load->library('cart');

    }


    public function login(){
        $this->load->view('login_form');

    }

    public function members(){
        $this->load->view('members_area');
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


            $this->load->view('shopping_cart',$data); //load shopping cart (main) view

            $this->load->view('includes/template', $data); //load template with two parameters, template and $data(main_content) variable

        }
        else
        {
            //Go to private area
            redirect('members_area', 'refresh');
        }

    }

    public function check_database($password)
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




}