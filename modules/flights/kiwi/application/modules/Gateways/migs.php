<?php
	function migs_config() 
	{
		$configarray = array(
			"FriendlyName" => array("Type" => "System", "Value"=>"Migs"),
			"merchant_name" => array("FriendlyName" => "Merchant Name", "Type" => "text", "Size" => "40", ),
			"merchant_id" => array("FriendlyName" => "Merchant ID", "Type" => "text", "Size" => "40", ),
			"merchant_access_code" => array("FriendlyName" => "Access Code", "Type" => "text", "Size" => "40", ),
			"merchant_secure_hash" => array("FriendlyName" => "Secure Has Secret", "Type" => "text", "Size" => "50", ),
		);

		return $configarray;
	}
	
	function migs_link($params)
	{
		$amount = round($params['amount']) * 100;
		$form = '<form action="'.base_url('Gateways/Migs/hitmigs').'" method="post" accept-charset="UTF-8">
			<input type="hidden" name="Title" value = "Migs Transaction - PHPTravels">
			<input type="hidden" name="virtualPaymentClientURL" size="65" value="https://migs.mastercard.com.au/vpcpay" maxlength="250"/>
			<input type="hidden" name="vpc_Version" value="1" size="20" maxlength="8"/>
			<input type="hidden" name="vpc_Command" value="pay" size="20" maxlength="16"/>
				<input type="hidden" name="vpc_AccessCode" value="'.$params['merchant_access_code'].'" size="20" maxlength="8"/>
				<input type="hidden" name="vpc_MerchTxnRef" value="'. $params['invoiceid'] .'" size="20" maxlength="40"/>
				<input type="hidden" name="vpc_Merchant" value="'. $params['merchant_id'] .'" size="20" maxlength="16"/>
				<input type="hidden" name="vpc_OrderInfo" value="'. $params['description'] .'" size="20" maxlength="34"/>
				<input type="hidden" name="vpc_Amount" value="'. $amount .'" maxlength="10"/>
				<input type="hidden" name="vpc_ReturnURL" size="65" value="'.base_url('Gateways/Migshook/webhook').'" maxlength="250"/>
				<input type="hidden" name="vpc_Locale" value="en_US" />
				<input type="hidden" name="vpc_Currency" value="'. $params['currency'] .'" />
				<input type="submit" NAME="SubButL" value="Pay Now!">
			</form>';
		return $form;
	}
?>