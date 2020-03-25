<?php


class FlightsSearchModel
{
    public $origin;
    public $destination;
    public $departure_date;
    public $arrival;
    public $tripType;
    public $classOfService;
    public $passenger;
    public $form_type;
    public $form_name;

    public $show_adult;
    public $show_children;
    public $show_infant;
    public $show_multi_city;
    public $reture_date;
    public $classType;
    public $listing_type;

    public function __construct()
    {
        $this->form_type = "form";  // url , form , iframe
        $this->adults = 1;
        $this->children = 0;
        $this->tripType = 'oneway';
        $this->origin = 'JED';
        $this->destination = 'KRT';
        $this->departure = date('Y-m-d', strtotime('+1 day'));

        $this->show_adult = true;
        $this->show_children = true;
        $this->show_infant = true;
        $this->show_oneway = true;
        $this->show_return = true;
        $this->show_classtype = true;
        $this->route = base_url('trflight/search/');

    }

    public function parseUriString($args)
    {
        $this->origin = $args[0];
        $this->destination = $args[1];
        $this->tripType = $args[2];
        $this->departure_date = $args[4];
        if ($this->tripType == 'round') {
            $this->arrival = $args[5];
            $this->adults = $args[6];
            $this->children = $args[7];
            $this->infant = $args[8];
        } else {
            $this->adults = $args[5];
            $this->children = $args[6];
            $this->infant = $args[7];
        }
    }
}
