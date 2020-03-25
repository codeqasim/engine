<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Travelstart extends MX_Controller {

  function __construct()
  {
        parent::__construct();
        $this->data['lang_set'] = $this->session->userdata('set_lang');
        $chk = app()->service('ModuleService')->isActive('travelstart');
        if ( ! $chk) {
            backError_404($this->data);
        }
        $this->data['phone'] = $this->load->get_var('phone');
        $this->data['contactemail'] = $this->load->get_var('contactemail');

        $defaultlang = pt_get_default_language();
        if(empty($this->data['lang_set'])){
          $this->data['lang_set'] = $defaultlang;
        }
        $this->lang->load("front",$this->data['lang_set']);
    }

	public function index()
	{
        $settings = app()->service("ModuleService")->get('travelstart')->settings;
        $this->data['affid'] = $settings->affid;
        $this->data['iframeID'] = $settings->iframeID;
        $this->setMetaData($settings->headerTitle);
        $loadheaderfooter = $settings->showHeaderFooter;
        $isMobile = $_GET['mobile'];
        if ($loadheaderfooter == "no" || $isMobile == "yes") {
            $this->theme->partial('modules/flights/travelstart/index',$this->data);
        }else{
            $this->theme->view('modules/flights/travelstart/index',$this->data, $this);
        }

    }
}