<?php if (!defined('BASEPATH')) exit ('No direct script access allowed');

class Migs extends MX_Controller{
		
	public function hitmigs(){
		
		$redirect_url = "";
		require_once(__DIR__."/../migs/PaymentCodesHelper.php");
		include_once(__DIR__."/../migs/VPCPaymentConnection.php");
		include_once(__DIR__."/../migs/PHP_VPC_3Party_Order_DO.php");
		redirect($redirect_url);
	}
}