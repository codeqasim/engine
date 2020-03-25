
<?php

require_once "Baglimit.php";
require_once "RootClass.php";
require_once "Route.php";
require_once "CustomPayload.php";
class Baglimit
{

    public $handHeight; //Integer
    public $handLength; //Integer
    public $handWeight; //Integer
    public $handWidth; //Integer
    public $holdWeight; //Integer
    
    public function getHand_height() { 
         return $this->handHeight; 
    }
    public function setHand_height($handHeight) { 
         $this->handHeight = $handHeight; 
    }    
    public function getHand_length() { 
         return $this->handLength; 
    }
    public function setHand_length($handLength) { 
         $this->handLength = $handLength; 
    }    
    public function getHand_weight() { 
         return $this->handWeight; 
    }
    public function setHand_weight($handWeight) { 
         $this->handWeight = $handWeight; 
    }    
    public function getHand_width() { 
         return $this->handWidth; 
    }
    public function setHand_width($handWidth) { 
         $this->handWidth = $handWidth; 
    }    
    public function getHold_weight() { 
         return $this->holdWeight; 
    }
    public function setHold_weight($holdWeight) { 
         $this->holdWeight = $holdWeight; 
    }    

}
?>