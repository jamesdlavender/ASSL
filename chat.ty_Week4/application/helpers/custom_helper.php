<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	function is_logged_in()
    {
    	$CI =& get_instance();
        $is_logged_in = $CI->session->userdata('username');
        if(!isset($is_logged_in) || $is_logged_in != true)
        {
        	redirect (base_url());   
        }       
    }

 
 
