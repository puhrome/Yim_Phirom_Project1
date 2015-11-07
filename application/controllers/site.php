<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


class Site extends CI_Controller {

    function members_area()
    {
        $this->load->view->members_area();
    }
}