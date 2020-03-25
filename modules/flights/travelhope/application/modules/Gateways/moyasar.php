<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 1/25/2019
 * Time: 3:04 PM
 */

/**
 * This function get register the gateway into payment gateways section of admin panel.
 * The script read this function get registered the gateway.
 */
function moyasar_config()
{
    $configarray = array(
        "FriendlyName"  => array("Type" => "System", "Value" => "Moyasar"),
        "key"      => array("FriendlyName" => "API Key", "Type" => "text", "Size" => "100")
    );

    return $configarray;
}

function moyasar_link($params)
{
    $CI = get_instance();
    $params['amount'] = (empty($params['amount']))?$params['invoiceData']->checkoutTotal:$params['amount'];
    return $CI->load->view('paymentgateway/moyasar_init', compact('params'), TRUE);
}