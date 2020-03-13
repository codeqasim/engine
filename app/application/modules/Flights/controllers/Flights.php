<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Flights extends MX_Controller {

	public function index()
	{
		$this->theme->view('modules/flights/list');
	}

    public function details()
	{
		$this->theme->view('modules/flights/details');

	}

    public function booking()
	{
		$this->theme->view('modules/flights/booking');

	}

    public function pay()
	{
		$this->theme->view('modules/flights/booking_pay');

	}
}
