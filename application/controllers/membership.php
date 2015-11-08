<?php

class Membership extends CI_Controller {

    function login_validation()
    {
        $this->db->where('username', $this->input->post('username'));
        $this->db->where('password', md5($this->input->post('password')));
        $query = $this->db->where('users');

        if ($query->num_rows = 1) ; //if 1 row is returned, then they are member
        {
            return TRUE;
        }
    }

}