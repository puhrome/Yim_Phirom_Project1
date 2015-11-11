<?php

    class Cart_model extends CI_Model
    {
    // Function to retrieve an array with all product information
    function retrieve_products()
    {
        $query = $this->db->get('products'); // Select the table products
        return $query->result_array(); // Return the results in a array.

    }

    public function getItems()
    {
        $query = $this->db->get('items');
        return $query->result_array();
    }


}
