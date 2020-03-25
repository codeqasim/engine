<?php

class HotelsSearchModel
{
    public $hoteladult;
    public $hotelchildren;
    public $hotelinfant;

    public $hotelshow_adult;
    public $hotelshow_children;
    public $hotelshow_childrenage;
    public $hotelshow_infant;
    public $hotelshow_rooms_count;
    public $hotelshow_nights;

    public $hotellocation;
    public $hotelcheckin;
    public $hotelcheckout;
    public $hoteldatetype;
    public $hotelchildrenage;
    public $hotelrooms;
    public $hotelnights;
    public $hotelroute;
    public $location_url;
    public $hotelcurrency;
    public $form_type = "iframe";
    public $form_source;


    public function __construct()
    {
        $settings = app()->service("ModuleService")->get('Hotelscombined')->settings;
        $this->hoteladult = 2;
        $this->hotelchildren = 0;
        $this->hotelshow_adult = true;
        $this->hotelshow_children = true;
        $this->hotelshow_childrenage = false;
        $this->hotelshow_infant = false;
        $this->hotelshow_rooms_count = false;
        $this->hotelshow_nights = false;
        $this->hoteldatetype = date('m/d/y', strtotime('+1 day'));
        $this->hotelroute = base_url().'thhotels/search';
        $this->location_url = base_url().'home/suggestions_v2/hotels';
        $this->form_source = '<script src="https://sbhc.portalhc.com/'.$settings->aid.'/searchbox/'.$settings->searchBoxID.'"></script>';
    }

}