<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {



    public function index()
    {
        $this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');

        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('members_area');
        }
        else
        {
            $this->load->view('success_view');
        }
    }


}