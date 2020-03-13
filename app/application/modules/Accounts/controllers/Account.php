<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller {

	public function index()
	{
		$this->load->view('main/header');
		$this->load->view('account/account');
		$this->load->view('main/footer');
	}
}
