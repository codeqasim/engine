<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Flights extends MX_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin/Modules_Model', 'mm');
    }

	public function index()
	{
	    $results = $this->mm->get_module_parent('Flights');
	    dd($results);
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

	public function flight()
	{	
		$a = $this->input->get('a');
		$b = $this->input->get('b');
		$c = $this->input->get('c');
		$d = $this->input->get('d');
		$e = $this->input->get('e');
		// print_r($a);
		echo json_encode(['success'=>"order Update successfully."]);
	}
}
