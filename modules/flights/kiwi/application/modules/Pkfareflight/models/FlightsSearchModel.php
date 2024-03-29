<?php

class FlightsSearchModel
{

    public $form_type;
    public $form_source;

    public $adults;
    public $children;
    public $infant;

    public $show_adult;
    public $show_children;
    public $show_infant;

    public $show_oneway;
    public $show_return;
    public $show_multi_city;

    public $origin;
    public $destination;
    public $arrival;
    public $tripType;
    public $classType;
    public $classOfService;
    public $passenger;
    public $route;
    public $action_url;



    public function __construct()
    {
        $this->form_type = "form";  // url , form , iframe
        $this->adults = 1;
        $this->children = 0;
        $this->infant = 0;
        $this->show_adult = true;
        $this->show_children = true;
        $this->show_infant = true;
        $this->show_oneway = true;
        $this->show_return = true;
        $this->show_multi_city = false;
        $this->show_classtype = true;
        $this->tripType = 'oneway'; // oneway retuen muti_city
        $this->classType = 'economy'; // economy bussiness first
        $this->origin = 'LHE';
        $this->destination = 'DXB';
        $this->route = base_url().'pfflight/search/';
    }

    public function parseUriString($args)
    {
        $this->origin = $args[0];
        $this->destination = $args[1];
        $this->tripType = $args[2];
        $this->departure_date = $args[4];
        if ($this->tripType == 'return') {
            $this->arrival = $args[4];
            $this->adult = $args[5];
            $this->children = $args[6];
            $this->infant = $args[7];
        } else {
            $this->adult = $args[5];
            $this->children = $args[6];
            $this->infant = $args[7];
            $this->reture_date = $args[7];
        }
    }
}
