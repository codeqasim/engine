<?php

require_once "Baglimit.php";
require_once "RootClass.php";
require_once "Route.php";
require_once "CustomPayload.php";
class Response
{

    public $airline; //String
    public $arrivalTime; //Integer
    public $baglimit; //Baglimit
    public $bagsPrice; //BagsPrice
    public $currency; //String
    public $customPayload; //CustomPayload
    public $departureTime; //Integer
    public $flightDuration; //String
    public $flightId; //String
    public $flightPrice; //Integer
    public $fromCode; //String
    public $returnArrival; //String
    public $returnDeparture; //String
    public $returnDepartureAirline; //String
    public $route; //Route
    public $routes; //String
    public $stops; //Integer
    public $toCode;

    /**
     * Data constructor.
     */
    public function __construct($data)
    {
//        echo "<pre>";
//        print_r($data);
//        exit();
        foreach ($data as $key => $value) {
            $this->{$key} = $value;
        }
    } //String



    public function getAirline() { 
         return $this->airline; 
    }
    public function setAirline($airline) { 
         $this->airline = $airline; 
    }    
    public function getArrival_time() { 
         return $this->arrivalTime; 
    }
    public function setArrival_time($arrivalTime) { 
         $this->arrivalTime = $arrivalTime; 
    }    
    public function getBaglimit() { 
         return $this->baglimit; 
    }
    public function setBaglimit($baglimit) { 
         $this->baglimit = $baglimit; 
    }    
    public function getBags_price() { 
         return $this->bagsPrice; 
    }
    public function setBags_price($bagsPrice) { 
         $this->bagsPrice = $bagsPrice; 
    }    
    public function getCurrency() { 
         return $this->currency; 
    }
    public function setCurrency($currency) { 
         $this->currency = $currency; 
    }    
    public function getCustom_payload() { 
         return $this->customPayload; 
    }
    public function setCustom_payload($customPayload) { 
         $this->customPayload = $customPayload; 
    }    
    public function getDeparture_time() { 
         return $this->departureTime; 
    }
    public function setDeparture_time($departureTime) { 
         $this->departureTime = $departureTime; 
    }    
    public function getFlight_duration() { 
         return $this->flightDuration; 
    }
    public function setFlight_duration($flightDuration) { 
         $this->flightDuration = $flightDuration; 
    }    
    public function getFlight_id() { 
         return $this->flightId; 
    }
    public function setFlight_id($flightId) { 
         $this->flightId = $flightId; 
    }    
    public function getFlight_price() { 
         return $this->flightPrice; 
    }
    public function setFlight_price($flightPrice) { 
         $this->flightPrice = $flightPrice; 
    }    
    public function getFrom_code() { 
         return $this->fromCode; 
    }
    public function setFrom_code($fromCode) { 
         $this->fromCode = $fromCode; 
    }    
    public function getReturn_arrival() { 
         return $this->returnArrival; 
    }
    public function setReturn_arrival($returnArrival) { 
         $this->returnArrival = $returnArrival; 
    }    
    public function getReturn_departure() { 
         return $this->returnDeparture; 
    }
    public function setReturn_departure($returnDeparture) { 
         $this->returnDeparture = $returnDeparture; 
    }    
    public function getReturn_departure_airline() { 
         return $this->returnDepartureAirline; 
    }
    public function setReturn_departure_airline($returnDepartureAirline) { 
         $this->returnDepartureAirline = $returnDepartureAirline; 
    }    
    public function getRoute() { 
         return $this->route; 
    }
    public function setRoute($route) { 
         $this->route = $route; 
    }    
    public function getRoutes() { 
         return $this->routes; 
    }
    public function setRoutes($routes) { 
         $this->routes = $routes; 
    }    
    public function getStops() { 
         return $this->stops; 
    }
    public function setStops($stops) { 
         $this->stops = $stops; 
    }    
    public function getTo_code() { 
         return $this->toCode; 
    }
    public function setTo_code($toCode) { 
         $this->toCode = $toCode; 
    }    

}