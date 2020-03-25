<?php

function hyperpay_config() {

	$configarray = array( "FriendlyName" => array( "Type" => "System", "Value" => "Hyper Pay" ),
        "entityId" => array( "FriendlyName" => "Entity id", "Type" => "text", "Size" => "40","Description" => "You must enter entity id." ),
        "access_token" => array( "FriendlyName" => "Access Token", "Type" => "text", "Size" => "40","Description" => "You must enter access token." ),
        "sandbox" => array( "FriendlyName" => "Sandbox", "Type" => "yesno", "Description" => "Tick to enable test mode" ));
	return $configarray;
}


function hyperpay_link($params) {
    dd($params);
	$invoiceid = $params['invoiceid'];
	$paypalemail = $params['email'];

	$code = "<table><tr>";
	$isMobile = isMobileDevice();
	$target = "";
	if($isMobile){
	$target = "target = '_blank'";
	}

if($params['sandbox']){
	$code .= "<td><form action=\"https://www.sandbox.paypal.com/cgi-bin/webscr\" method=\"post\" " . $target . " >";
}else{
	$code .= "<td><form action=\"https://www.paypal.com/cgi-bin/webscr\"  method=\"post\" " . $target . " >";

	}

	$code .="<input type=\"hidden\" name=\"cmd\" value=\"_xclick\">
			  <input type=\"hidden\" name=\"business\" value=\"" . $paypalemail . "\">";

	$code .= "<input type=\"hidden\" name=\"charset\" value=\"" . $params['charset'] . "\">
		<input type=\"hidden\" name=\"amount\" value=\"" . $params['amount'] . "\"> 
        <input type=\"hidden\" name=\"currency\" value=\"" . $params['currency'] . "\">
        <input type=\"hidden\" name=\"custom\" value=\"" . $params['invoiceid'] . "\">
        <input type=\"hidden\" name=\"item_name\" value=\"" . $params['description'] . "\">
        <input type=\"hidden\" name=\"return\" value=\"" .base_url(). "invoice?&id=".$params['invoiceid']."&sessid=".$params['invoiceref']."\">
        <input type=\"hidden\" name=\"cancel_return\" value=\"" .base_url(). "invoice?&id=".$params['invoiceid']."&sessid=".$params['invoiceref']."\">
        <input type=\"hidden\" name=\"notify_url\" value=\"" . base_url(). "invoice/notifyUrl/paypal\">
        <input type=\"hidden\" name=\"rm\" value=\"2\">
        <input type=\"image\" class=\"paybtn\" src=\"https://www.paypal.com/en_US/i/btn/x-click-but03.gif\" border=\"0\" name=\"submit\" alt=\"Make a one time payment with PayPal\">
        </form></td>";

	$code .= "</tr></table>";
	return $code;
}

//function for verification of payment. It will be used in notify url
function hyperpay_verifypayment($params){

//funciton should return an array of result with status = success/fail, invoiceid, amount paid, transaction id if any 
$result = array("status" => "fail","invoiceid" => "","paid" => 0,"transactionid" => "");

$postipn = "cmd=_notify-validate";
$orgipn = "";

foreach ($_POST as $key => $value) {
	$orgipn .= ("" . $key . " => " . $value . "\r\n");
	$postipn .= "&" . $key . "=" . urlencode(html_entity_decode($value, ENT_QUOTES));
}

if($params['sandbox']){
	$reply = curlCall("https://www.sandbox.paypal.com/cgi-bin/webscr", $postipn);
}else{
	$reply = curlCall("https://www.paypal.com/cgi-bin/webscr", $postipn);

	}



if (!strcmp($reply, "VERIFIED")) {
	$paypalemail = $_POST['receiver_email'];
$payment_status = $_POST['payment_status'];
$txn_type = $_POST['txn_type'];
$txn_id = $_POST['txn_id'];
$mc_gross = $_POST['mc_gross'];
$mc_fee = $_POST['mc_fee'];
$invoiceid = $_POST['custom'];


if ($txn_type == "web_accept" && $payment_status == "Completed") {
	
	$result = array("status" => "success","invoiceid" => $invoiceid,"paid" => $mc_gross,"transactionid" => $txn_id);
	return $result;

}

} else {
	if (!strcmp($reply, "INVALID")) {
		return $result;
		exit();
	} else {
		return $result;
		
	}
}



}