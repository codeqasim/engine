<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hotels extends MX_Controller {

    public function __construct()
    {
    }

	public function index()
	{
    $this->theme->view('modules/hotels/list');
	}

    public function details()
	{
	$this->theme->view('modules/hotels/details');
	}

    public function booking()
	{
	$this->theme->view('modules/hotels/booking');
	}

    public function pay()
	{
	$this->theme->view('modules/hotels/booking_pay');
	}
}
