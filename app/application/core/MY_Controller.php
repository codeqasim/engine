<?php
/**
 * Created by PhpStorm.
 * User: qasimhussain
 * Date: 8/3/18
 * Time: 12:21 AM
 */

class MY_Controller extends MX_Controller
{
    public function __construct()
  {
  	    $page = $this->uri->segment(1);
        
        $data['page'] = (empty($page)) ? "home": $page;
        $this->load->vars($data);
}
}