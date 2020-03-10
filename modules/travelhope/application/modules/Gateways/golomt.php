<?php
	function golomt_config() 
	{
		$configarray = array(
		"FriendlyName" => array("Type" => "System", "Value"=>"Golomt"),
		"golomt_key_number" => array("FriendlyName" => "Key Number", "Type" => "text", "Size" => "70", ),
		"golomt_soap_user" => array("FriendlyName" => "Soap User", "Type" => "text", "Size" => "70", ),
		"golomt_soap_pass" => array("FriendlyName" => "Soap Password", "Type" => "password", "Size" => "40", ),
		);

		return $configarray;
	}
	
	function golomt_link($params){
		return golomt_init($params);
	}
	
	function golomt_init($params){
         $t_num = $params['invoiceid'].'-'.time();
	$form = '<form action="https://m.egolomt.mn/billingnew/cardinfo.aspx" method="post" >
	<input type="hidden" name="key_number" value="'.$params['golomt_key_number'].'">
	<input type="hidden" name="trans_number" value="'.$t_num.'">
	<input type="hidden" name="trans_amount" value="'.$params['amount'].'">
	<input type="hidden" name="lang_ind" value="0">
	<input type="hidden" name="customer_id" value="'.$params['invoiceData']->accountEmail.'">
	<input type="hidden" name="subID" value="1">
	<input type="submit" alt="Golomtbank" value="Pay Now!" title="Golomtbank"/> </form>
	';
	
	return $form;
	
	}
	
	
?>
