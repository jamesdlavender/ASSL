<?php
class User extends CI_Controller {
    
    function User()
    {
        parent::__construct();
        
        $this->view_data['base_url'] = base_url();
    }
    
    function index()
    {
        $this->register();
        
    }
    
    function register()
    {
        $this->load->library('form_validation');
        
        
        if ($this->form_validation->run() == FALSE)
        {
            // hasn't been run or there are validation errors
            $this->load->view('view_register', $this->view_data);
        }
        else
        {
            // everything is good - process the form - write the data into the registration database
            
            
        }
         
        
    }
    
}
