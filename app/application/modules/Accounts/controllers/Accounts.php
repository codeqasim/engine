<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Accounts extends MX_Controller {

	public function index()
	{
    
	}

    public function login()
	{
        $this->theme->view('accounts/account');
	}

}
