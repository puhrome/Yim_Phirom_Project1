<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

    $this->load->view('includes/header');

    $this->load->view($main_content); //set this to a variable to change every time

    $this->load->view('includes/footer');

