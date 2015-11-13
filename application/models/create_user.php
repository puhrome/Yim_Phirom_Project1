<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Create_user extends MY_Model {

    function index()
    {


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
