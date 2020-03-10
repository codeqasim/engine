<?php 

include_once 'Passenger.php';

class SearchForm
{
    public $from_code;
    public $to_code;
    public $date_from;
    public $adults = 1;
    public $children = 0;
    public $infants = 0;
    public $vendor = 5;
    public $flight_type = 'oneway';
    public $return_from;
    public $ota_id;

    public function __construct()
    {
        $this->date_from = date('d/m/Y');
        $this->flight_type = "oneway";
    }

    public function parseUriString($args)
    {
        $this->from_code = $args[0];
        $this->to_code = $args[1];
        $this->flight_type = $args[2];
        $this->date_from = date('d/m/Y',strtotime($args[3]));
        if ($this->flight_type == 'return') {
            $this->return_from = date('d/m/Y',strtotime($args[4]));
            $this->adults = $args[5];
            $this->children = $args[6];
            $this->infants = $args[7];
        } else {
            $this->adults = $args[4];
            $this->children = $args[5];
            $this->infants = $args[6];
        }
    }

    public function getTotalPassengers()
    {
        return $this->adults + $this->children + $this->infants;
    }

    public function getPassengers()
    {
        $passengers = array();
        for ($adult = 0; $adult < $this->adults; $adult++) {
            $passengers[] = 'adults';
        }
        for ($children = 0; $children < $this->children; $children++) {
            $passengers[] = 'children';
        }
        for ($infant = 0; $infant < $this->infants; $infant++) {
            $passengers[] = 'infants';
        }
        return $passengers;
    }
}
