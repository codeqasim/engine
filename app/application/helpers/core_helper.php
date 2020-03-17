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
if (!function_exists('ArrayWhere')) {

    function ArrayWhere($array,$column,$value)
    {
        $return_value = [];
        foreach ($array as $item){
            $item = (array)$item;
            if($item[$column] == $value){
                array_push($return_value,$item);
            }
        }
        return $return_value;
    }
}
?>
