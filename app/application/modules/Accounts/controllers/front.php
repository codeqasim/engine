<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Accounts extends MX_Controller {

	public function index()
	{
        $this->theme->view('accounts/accounts');
	}
}
