<?php 

if (!function_exists('isUserLogin')) {
    
    function isUserLogin()
    {
        $CI = &get_instance();
    	
    	$id = $CI->session->userdata('id');
	    if (! empty($id)) 
	    {
	      	return true;
	    }

        return false;
    }
}
?>
