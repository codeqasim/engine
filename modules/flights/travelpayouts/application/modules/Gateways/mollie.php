<?php
	function mollie_config() 
	{
		$configarray = array(
			"FriendlyName" => array("Type" => "System", "Value"=>"Mollie"),
			"mollie_key" => array("FriendlyName" => "Mollie Key", "Type" => "text", "Size" => "40", ),
		);
		return $configarray;
	}
	
	function mollie_link($params)
	{
	
	$ch1 = curl_init();
        curl_setopt($ch1, CURLOPT_URL, "http://free.currencyconverterapi.com/api/v5/convert?q=".$params['currency']."_EUR&compact=y");
        curl_setopt($ch1, CURLOPT_RETURNTRANSFER, 1);
        $response = curl_exec($ch1);
        curl_close($ch1);
        $amount = json_decode($response, true);

	$final_price = (float)round($params['amount']) * $amount[$params['currency']."_EUR"]["val"];
	$_SESSION['mollie_key'] = $params['mollie_key'];
        $X = (string)sprintf("%0.2f", $final_price);
        $obj = array(
            "amount" => array(
                "currency" => "EUR",
                "value" => $X
            ),
            "method" => "sofort",
            "description" => $params['description'],
            "redirectUrl" => base_url('Gateways/Molliehook/webhook'),
            "webhookUrl" => base_url('Gateways/Molliehook/webhook'),
            "metadata" => array(
                "order_id" => $params['invoiceid']
            )
        );
        

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_URL, "https://api.mollie.com/v2/payments");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Authorization: Bearer '.$params['mollie_key'],
            'Accept: application/json;charset=UTF-8',
            'Content-Type: application/json'
            ));
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($obj));
        $response = curl_exec($ch);
        curl_close($ch);
        $d = json_decode($response);
        $_SESSION['mollie_id'] = $d->id;
        return $d;
    }

?>