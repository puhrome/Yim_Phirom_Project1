<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


class Shopping extends CI_Controller

{
    function __construct()
    {
        parent::__construct();

        $this->load->database();
    }


    public function index(){

        $data = array();
        $this->load->model('Items');
        $items = new Items();
        $items->load(1);
        $data['items'] = $items;

//        echo '<pre>' . var_export($items, TRUE) . '</pre>';


        $this->load->model('Users');
        $users = new Users();
        $users->load(1);
        $data['user'] = $users;

//        function validate_credentials()
//        {
//            $this->load->model('membership_model');
//            $query = $this->membership_model->validate();
//
//            if($query) //if the user's credentials validated..
//            {
//                $data = array(
//                    'username' => $this->input->post('username'),
//                    'is_logged_in' => TRUE //add values to session
//                );
//
//                $this->session->set_userdata($data); // take info add to user session id
//                redirect('site/members_area');
//            }
//
//            else
//            {
//                $this->index();
//            }
//        }
        //$this method loads the view
        $data['main_content'] = 'login_form'; //create a new key for this variable to load in view

        $this->load->view('templates/navigation'); //load navigation view
        //
        //        $this->load->view('templates/header');  //load header view

        $this->load->view('shopping_cart', $data); //load shopping cart (main) view
        //
        //        $this->load->view('templates/footer'); //load footer view

        $this->load->view('includes/template', $data); //load template with two parameters, template and $data(main_content) variable

        $this->load->library('cart');

    }
}
