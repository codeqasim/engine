<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Check whether the url is with www or without www
 *
 */
class url_check_hook{



    public function __construct()
    {
    log_message('debug','Accessing url_check hook!');
    }

    public function checkwww()
    {

      

    
    }

    function hasWWW($string){
    $urlstr =  explode(".",$string);
    if (strpos($urlstr[0], 'www') !== false) {

    return TRUE;

    }else{

    return FALSE;

    }

    }


}
/* Location: ./system/application/hooks/url_check_hook.php */