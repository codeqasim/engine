<?php
class RootClass
{

    public $code; //Integer
    public $data; //Data
    public $status;

    /**
     * RootClass constructor.
     */
    public function __construct($jsonData)
    {
        $this->data = new Data($jsonData);
    } //String


    public function getCode() { 
         return $this->code; 
    }
    public function setCode($code) { 
         $this->code = $code; 
    }    
    public function getData() { 
         return $this->data; 
    }
    public function setData($data) { 
         $this->data = $data; 
    }    
    public function getStatus() { 
         return $this->status; 
    }
    public function setStatus($status) { 
         $this->status = $status; 
    }    

}