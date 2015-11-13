<?php

class Cart extends CI_Controller { // Our Cart class extends the Controller class

    function Cart()
    {
        $this->load->library('cart');
        $this->load->model('cart_model'); // Load our cart model for our entire class

        $data['products'] = $this->cart_model->retrieve_products(); // Retrieve an array with all products
        print_r($data['products']); // Print out the array to see if it works (Remove this line when done testing)

    }

    function index()
    {
        $data['products'] = $this->cart_model->retrieve_products(); // Retrieve an array with all products

        $data['content'] = 'cart/products'; // Select our view file that will display our products
        $this->load->view('cart_view', $data); // Display the page with the above defined content

        $this->load->view('shopping_cart');
    }


}
