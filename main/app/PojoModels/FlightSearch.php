<?php


namespace App\PojoModels;


class FlightSearch
{
    public $Origin = "";
    public $Destination = "";
    public $DepartureDate = "";
    public $ArrivalDate = "";
    public $Suppliers = "";
    public $FlightType = "";
    public $FlightClass = "";

    public function __construct($FlightData)
    {
        foreach ($this as $index=> $item){
           $this->$index = $FlightData[$index];
        }
    }
    public function getOrigin(){
        $this->Origin;
    }
    public function getDestination(){
        return $this->Destination;
    }
    public function getDepartureDate(){
        return $this->DepartureDate;
    }
    public function getArrivalDate(){
        return $this->ArrivalDate;
    }
    public function getSuppliers(){
        return $this->Suppliers;
    }
    public function getFlightType(){
        return $this->FlightType;
    }
    public function getFlightClass(){
        return $this->FlightClass;
    }
    public function toJson(){
        return json_encode($this);
    }
    public function toArray(){
        return (array)($this);
    }
    public function getPayload($supplier){
        $payload = $this->toArray();
        $payload["Credentials"] = $supplier["Credentials"];
        unset($payload["Suppliers"]);
        return $payload;
    }
}
