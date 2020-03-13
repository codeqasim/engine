<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cms extends MX_Controller {

	public function index()
	{

	}

    public function contact()
	{
		$this->theme->view('modules/cms/contact');
	}

    public function about()
	{
		$this->theme->view('modules/cms/about');

	}

    public function policy()
	{
		$this->theme->view('modules/cms/policy');

	}

    public function faq()
	{
		$this->theme->view('modules/cms/faq');

	}

    public function careers()
	{
		$this->theme->view('modules/cms/careers');

	}
}
