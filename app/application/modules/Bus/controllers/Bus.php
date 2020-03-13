<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bus extends MX_Controller {

    public function __construct()
    {
    }

	public function index()
	{
    $this->theme->view('modules/bus/list');
	}

    public function details()
	{
	$this->theme->view('modules/bus/details');
	}

    public function booking()
	{
	$this->theme->view('booking');
	}

}
