<?php

class GatewayClient {
    
    private $payment;
    private $vault;
    
    public function __construct(ClientConfig $config) {
        $this->payment = new Payment($config);
        $this->vault = new Vault($config);
    }
    
    public function getPayment() {
        return $this->payment;        
    }
    
    public function setPayment($payment) {
        $this->payment = $payment;
    }
    
    public function getVault() {
        return $this->vault;
    }
    
    public function setVault($vault) {
        $this->vault =$vault;
    }
    
}
