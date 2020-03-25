<?php 

include __DIR__.'/paycorp-php/ApiClient.php';

/**
 * This function get register the gateway into payment gateways section of admin panel. 
 * The script read this function get registered the gateway.
 */
function paycorp_config() 
{
    $configarray = array(
        "FriendlyName" => array("Type" => "System", "Value"=>"Paycorp"),
        "ServiceEndpoint" => array("FriendlyName" => "Service Endpoint", "Type" => "text", "Size" => "40", ),
        "ClientId" => array("FriendlyName" => "Client ID", "Type" => "text", "Size" => "40", ),
        "ClientName" => array("FriendlyName" => "Client Name", "Type" => "text", "Size" => "40", ),
        "HmacSecret" => array("FriendlyName" => "Hmac Secret", "Type" => "text", "Size" => "40", ),
        "AuthToken" => array("FriendlyName" => "Auth Token", "Type" => "text", "Size" => "40", ) 
    );

	return $configarray;
}

function paycorp_link($params)
{
    $CI = get_instance();
    $client = new ApiClient();
    $params['initResponse'] = $client->init($params);
    $_SESSION['order.id'] = $params['invoiceid'];
	return $CI->load->view('paymentgateway/paycorp', $params, TRUE);
}