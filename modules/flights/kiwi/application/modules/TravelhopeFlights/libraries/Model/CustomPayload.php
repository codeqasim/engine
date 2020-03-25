
<?php


require_once "Baglimit.php";
require_once "RootClass.php";
require_once "Route.php";
require_once "CustomPayload.php";
class CustomPayload
{

    public $bookingToken; //String
    public $visitorUniqid; //String
    
    public function getBooking_token() { 
         return $this->bookingToken; 
    }
    public function setBooking_token($bookingToken) { 
         $this->bookingToken = $bookingToken; 
    }    
    public function getVisitor_uniqid() { 
         return $this->visitorUniqid; 
    }
    public function setVisitor_uniqid($visitorUniqid) { 
         $this->visitorUniqid = $visitorUniqid; 
    }    

}