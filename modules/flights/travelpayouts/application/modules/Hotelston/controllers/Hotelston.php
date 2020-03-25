<?php if (!defined('BASEPATH')) exit ('No direct script access allowed');

ini_set('display_errors', 0);

class Hotelston extends MX_Controller
{
    public $cacheResponse;

    public function __construct()
    {
        parent :: __construct();
        
		// $chk = modules::run('Home/is_main_module_enabled', 'travelport_hotel');
		// if ( ! $chk ) { Module_404(); }
        // For contact detail display in header.
        modules::load('Front');
        $this->data['phone'] = $this->load->get_var('phone');
		$this->data['contactemail'] = $this->load->get_var('contactemail');
		$this->data['usersession'] = $this->session->userdata('pt_logged_customer');
		$this->data['appModule'] = "hotelston";
		$languageid = $this->uri->segment(2);
		$this->validlang = pt_isValid_language($languageid);
		if( $this->validlang ) {
			$this->data['lang_set'] =  $languageid;
		} else {
			$this->data['lang_set'] = $this->session->userdata('set_lang');
		}
		$defaultlang = pt_get_default_language();
		if ( empty($this->data['lang_set']) ) {
			$this->data['lang_set'] = $defaultlang;
		}
		// For menu `HOME` and `My Account` link in header.
		$this->lang->load("front", $this->data['lang_set']);
		$user_id = $this->session->userdata('pt_logged_customer');
        $this->data['userAuthorization'] = (isset($user_id) && ! empty($user_id)) ? 1 : 0;
		$this->data['pageTitle'] = "Hotels List";

		$this->load->library('HotelApiClient');
        //$this->data['facilities'] = $this->HotelApiClient->getAmenities();
        $this->cacheResponse = FALSE;
    }
    public function search()
    {
        
        try {
            $this->data['hotels'] = $this->HotelApiClient->callApi();
           dd($this->data['hotels']);
        } catch(Exception $e) {
            echo $e->getMessage();
        }
	}



}