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


    public function login(){ //method to tell what to view with login model

        //$this method loads the view
        $data['main_content'] = 'login_form'; //create a new key for this variable to load in view


        $this->load->view('includes/template', $data); //load template with two parameters, template and $data(main_content) variable

        //I am not sure. This is my main controller. I put all my fucntions in here, how did you create that user that is in the db? In the models?

    }

    public function login_validation(){

        //This method will have the credentials validation
        $this->load->library('form_validation');

        //set rules to validate username and callback
        $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|md5|callback_check_database'); //okay well here your not hashing the input

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
                    'id' => $row->userId,
                    'username' => $row->userName
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

    public function create(){

        $this->load->view('create_member');
        //Okay, now I suppose you could use this to load the view as you have then post back to it with the data
        //Then once you have data you just do If ($POST etc... and that way you can use the controller for both
        //before and after the form is filled out, now with regards to validation, you'll need a separate
        //check_database unless you want to specify weather it's a new user or login and then run an IF in the
        //check database but essentially all you need to validate in this case besides the same form_validation





    }

    public function members(){
        //method to load members page
        $this->load->view('members_area');

    }

}