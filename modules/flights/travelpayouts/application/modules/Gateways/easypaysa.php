<?php
/**
 * This function get register the gateway into payment gateways section of admin panel.
 * The script read this function get registered the gateway.
 */
function easypaysa_config()
{
    $configarray = array(
        "FriendlyName"  => array("Type" => "System", "Value" => "Easypaisa"),
        "username"      => array("FriendlyName" => "API Username", "Type" => "text", "Size" => "60"),
        "password"      => array("FriendlyName" => "API Password", "Type" => "text", "Size" => "60"),
        "storeID" => array("FriendlyName" => "Store ID", "Type" => "text", "Size" => "60"),
        // "accountNumber" => array("FriendlyName" => "Account Number", "Type" => "text", "Size" => "60"),
        // "msisdn" => array("FriendlyName" => "MSISDN", "Type" => "text", "Size" => "60"),
        "wsdlUrl" => array("FriendlyName" => "WSDL URL", "Type" => "text", "Size" => "60"),
        "serviceLocation" => array("FriendlyName" => "Service Location", "Type" => "text", "Size" => "60"),
        "hashKey" => array("FriendlyName" => "Hash Key", "Type" => "text", "Size" => "60"),
        "expiryDateTime" => array("FriendlyName" => "Expiry DateTime", "Type" => "text", "Size" => "60")
    );

    return $configarray;
}

function easypaysa_link($params)
{
    $CI = get_instance();
    return $CI->load->view('paymentgateway/easypaysa_init', compact('params'), TRUE);
}