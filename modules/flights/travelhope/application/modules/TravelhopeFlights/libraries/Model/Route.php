
<?php

require_once "Baglimit.php";
require_once "RootClass.php";
require_once "Route.php";
require_once "CustomPayload.php";
class Route
{

    public $airline; //String
    public $airlineType; //String
    public $arrivalTime; //Integer
    public $arrivalUtcTime; //Integer
    public $bagsRecheckRequired; //Boolean
    public $cityFrom; //String
    public $cityTo; //String
    public $departureTime; //Integer
    public $departureUtcTime; //Integer
    public $fareBasis; //String
    public $fareClasses; //String
    public $flightNo; //Integer
    public $fromCode; //String
    public $guarantee; //Boolean
    public $latitudeFrom; //Float
    public $latitudeTo; //Float
    public $latTo; //Float
    public $longitudeFrom; //Float
    public $longitudeTo; //Float
    public $mapFrom; //String
    public $mapTo; //String
    public $originalReturn; //Integer
    public $price; //Integer
    public $return; //Integer
    public $toCode; //String
    public $vehicleType;

    /**
     * Route constructor.
     */
    public function __construct($data)
    {
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
    public function getAirline_type() { 
         return $this->airlineType; 
    }
    public function setAirline_type($airlineType) { 
         $this->airlineType = $airlineType; 
    }    
    public function getArrival_time() { 
         return $this->arrivalTime; 
    }
    public function setArrival_time($arrivalTime) { 
         $this->arrivalTime = $arrivalTime; 
    }    
    public function getArrival_utc_time() { 
         return $this->arrivalUtcTime; 
    }
    public function setArrival_utc_time($arrivalUtcTime) { 
         $this->arrivalUtcTime = $arrivalUtcTime; 
    }    
    public function getBags_recheck_required() { 
         return $this->bagsRecheckRequired; 
    }
    public function setBags_recheck_required($bagsRecheckRequired) { 
         $this->bagsRecheckRequired = $bagsRecheckRequired; 
    }    
    public function getCity_from() { 
         return $this->cityFrom; 
    }
    public function setCity_from($cityFrom) { 
         $this->cityFrom = $cityFrom; 
    }    
    public function getCity_to() { 
         return $this->cityTo; 
    }
    public function setCity_to($cityTo) { 
         $this->cityTo = $cityTo; 
    }    
    public function getDeparture_time() { 
         return $this->departureTime; 
    }
    public function setDeparture_time($departureTime) { 
         $this->departureTime = $departureTime; 
    }    
    public function getDeparture_utc_time() { 
         return $this->departureUtcTime; 
    }
    public function setDeparture_utc_time($departureUtcTime) { 
         $this->departureUtcTime = $departureUtcTime; 
    }    
    public function getFare_basis() { 
         return $this->fareBasis; 
    }
    public function setFare_basis($fareBasis) { 
         $this->fareBasis = $fareBasis; 
    }    
    public function getFare_classes() { 
         return $this->fareClasses; 
    }
    public function setFare_classes($fareClasses) { 
         $this->fareClasses = $fareClasses; 
    }    
    public function getFlight_no() { 
         return $this->flightNo; 
    }
    public function setFlight_no($flightNo) { 
         $this->flightNo = $flightNo; 
    }    
    public function getFrom_code() { 
         return $this->fromCode; 
    }
    public function setFrom_code($fromCode) { 
         $this->fromCode = $fromCode; 
    }    
    public function getGuarantee() { 
         return $this->guarantee; 
    }
    public function setGuarantee($guarantee) { 
         $this->guarantee = $guarantee; 
    }    
    public function getLatitude_from() { 
         return $this->latitudeFrom; 
    }
    public function setLatitude_from($latitudeFrom) { 
         $this->latitudeFrom = $latitudeFrom; 
    }    
    public function getLatitude_to() { 
         return $this->latitudeTo; 
    }
    public function setLatitude_to($latitudeTo) { 
         $this->latitudeTo = $latitudeTo; 
    }    
    public function getLatTo() { 
         return $this->latTo; 
    }
    public function setLatTo($latTo) { 
         $this->latTo = $latTo; 
    }    
    public function getLongitude_from() { 
         return $this->longitudeFrom; 
    }
    public function setLongitude_from($longitudeFrom) { 
         $this->longitudeFrom = $longitudeFrom; 
    }    
    public function getLongitude_to() { 
         return $this->longitudeTo; 
    }
    public function setLongitude_to($longitudeTo) { 
         $this->longitudeTo = $longitudeTo; 
    }    
    public function getMap_from() { 
         return $this->mapFrom; 
    }
    public function setMap_from($mapFrom) { 
         $this->mapFrom = $mapFrom; 
    }    
    public function getMap_to() { 
         return $this->mapTo; 
    }
    public function setMap_to($mapTo) { 
         $this->mapTo = $mapTo; 
    }    
    public function getOriginal_return() { 
         return $this->originalReturn; 
    }
    public function setOriginal_return($originalReturn) { 
         $this->originalReturn = $originalReturn; 
    }    
    public function getPrice() { 
         return $this->price; 
    }
    public function setPrice($price) { 
         $this->price = $price; 
    }    
    public function getReturn() { 
         return $this->return; 
    }
    public function setReturn($return) { 
         $this->return = $return; 
    }    
    public function getTo_code() { 
         return $this->toCode; 
    }
    public function setTo_code($toCode) { 
         $this->toCode = $toCode; 
    }    
    public function getVehicle_type() { 
         return $this->vehicleType; 
    }
    public function setVehicle_type($vehicleType) { 
         $this->vehicleType = $vehicleType; 
    }    

}