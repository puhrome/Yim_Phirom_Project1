<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {



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

//    function logout()
//    {
//        $this->session->unset_userdata('logged_in');
//        session_destroy();
//        redirect('/index.php/logout_view', 'refresh');
//    }

}