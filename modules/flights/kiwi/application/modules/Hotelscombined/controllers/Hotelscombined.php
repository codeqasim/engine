<?php
if (!defined('BASEPATH'))
  exit('No direct script access allowed');
class Hotelscombined extends MX_Controller {
  function __construct() {
// $this->session->sess_destroy();
    parent::__construct();
    $this->frontData();
    $this->data['lang_set'] = $this->session->userdata('set_lang');
      $chk = app()->service('ModuleService')->isActive('hotelscombined');
      if ( ! $chk) {
          backError_404($this->data);
      }
    $this->data['phone'] = $this->load->get_var('phone');
    $this->data['contactemail'] = $this->load->get_var('contactemail');
    $defaultlang = pt_get_default_language();
    if (empty($this->data['lang_set'])) {
      $this->data['lang_set'] = $defaultlang;
    }
    $this->lang->load("front", $this->data['lang_set']);
  }
  public function index() {
    $settings = app()->service("ModuleService")->get('hotelscombined')->settings;
    $this->data['aid'] = $settings->aid;
    $this->data['brandID'] = $settings->brandID;
    $this->data['searchBoxID'] = $settings->searchBoxID;
    $this->setMetaData($settings->headerTitle);
    $loadheaderfooter = $settings->showHeaderFooter;
    if ($loadheaderfooter == "no") {
      $this->theme->partial('modules/hotelscombined/index', $this->data);
    }
    else {
      $this->theme->view('modules/hotelscombined/index', $this->data, $this);
    }
  }
}