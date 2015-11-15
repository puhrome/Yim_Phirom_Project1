<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


class Shopping extends CI_Controller

{
    function __construct()
    {
        parent::__construct();

        $this->load->database();
    }

    public function index(){

//        $data = array();
//        $this->load->model('Items');
//        $items = new Items();
//        $items->load(1);
//        $data['items'] = $items;
//
//        echo '<pre>' . var_export($items, TRUE) . '</pre>';
//
//
//        $this->load->model('Users');
//        $users = new Users();
//        $users->load(1);
//        $data['user'] = $users;
//
//        echo '<pre>' . var_export($users, TRUE) . '</pre>';
//
//
//        //load Items Model
//        $this->load->model('Items');
//        $this->Items->itemName = "Ethiopia";
//        $this->Items->save();
////        echo '<pre>' . var_export($this->Items, TRUE) . '</pre>'
//        //load Users Model
//        $this->load->model('Users');
//        $users = new Users();
//        $users->itemId = $this->Items->itemId;
//        $users->firstName = 'Jane';
//        $users->lastName = 'Doe';
//        $users->username = 'jdoe345';
//        $users->save();
//        echo '<pre>' . var_export($users, TRUE) . '</pre>';
//
//        //$this method loads the view
//        $data['main_content'] = 'login_form'; //create a new key for this variable to load in view
//
//        $this->load->view('templates/navigation'); //load navigation view
//        //
//
//        $this->load->view('shopping_cart',$data); //load shopping cart (main) view
//        //
//        //        $this->load->view('templates/footer'); //load footer view
//
//        $this->load->view('includes/template', $data); //load template with two parameters, template and $data(main_content) variable
//
//        $this->load->library('cart');
//
//    }
//
//    function check_database($password)
//    {
//        //Field validation succeeded.  Validate against database
//        $username = $this->input->post('username');
//
//        //query the database
//        $result = $this->user->login($username, $password);
//
//        if($result)
//        {
//            $sess_array = array();
//            foreach($result as $row)
//            {
//                $sess_array = array(
//                    'id' => $row->id,
//                    'username' => $row->username
//                );
//                $this->session->set_userdata('logged_in', $sess_array);
//            }
//            return TRUE;
//        }
//        else
//        {
//            $this->form_validation->set_message('check_database', 'Invalid username or password');
//            return false;
//        }


    function check_database($password)
    {

    }



    }
}
