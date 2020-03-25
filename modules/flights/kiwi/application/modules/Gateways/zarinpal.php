<?php
	function zarinpal_config() 
	{
		$configarray = array(
			"FriendlyName" => array("Type" => "System", "Value"=>"ZarinPal"),
			"merchant_id" => array("FriendlyName" => "Merchant ID", "Type" => "text", "Size" => "40", ),
		);
		return $configarray;
	}
	
	function zarinpal_link($params)
	{
        $this->load->library('zarinpal');
        $merchant_id = $params['merchant_id'];
        $amount = $params['merchant_id'];
        $desc = $params['description'];
        $call_back = base_url('Gateways/Zarinpalhook/webhook');
        var_dump($params);exit();
        $mobile = "";
        $email = "";
        if($this->zarinpal->webgate($merchant_id , $amount, $desc, $call_back, $mobile, $email)){
            $authority = $this->zarinpal->getAuthority();
            // do database 
            $this->zarinpal->redirect();
        }
        else{
            $error = $this->zarinpal->getError();
        }
	}
?>