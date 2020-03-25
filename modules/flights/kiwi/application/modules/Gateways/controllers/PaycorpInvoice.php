<?php if (!defined('BASEPATH')) exit ('No direct script access allowed');
include __DIR__ . "/../paycorp-php/au.com.gateway.client/GatewayClient.php";
include __DIR__ . "/../paycorp-php/au.com.gateway.client.config/ClientConfig.php";
include __DIR__ . "/../paycorp-php/au.com.gateway.client.component/RequestHeader.php";
include __DIR__ . "/../paycorp-php/au.com.gateway.client.component/CreditCard.php";
include __DIR__ . "/../paycorp-php/au.com.gateway.client.component/TransactionAmount.php";
include __DIR__ . "/../paycorp-php/au.com.gateway.client.component/Redirect.php";
include __DIR__ . "/../paycorp-php/au.com.gateway.client.facade/BaseFacade.php";
include __DIR__ . "/../paycorp-php/au.com.gateway.client.facade/Payment.php";
include __DIR__ . "/../paycorp-php/au.com.gateway.client.payment/PaymentInitRequest.php";
include __DIR__ . "/../paycorp-php/au.com.gateway.client.payment/PaymentInitResponse.php";
include __DIR__ . "/../paycorp-php/au.com.gateway.client.root/PaycorpRequest.php";
include __DIR__ . "/../paycorp-php/au.com.gateway.client.utils/IJsonHelper.php";
include __DIR__ . "/../paycorp-php/au.com.gateway.client.helpers/PaymentInitJsonHelper.php";
include __DIR__ . "/../paycorp-php/au.com.gateway.client.utils/HmacUtils.php";
include __DIR__ . "/../paycorp-php/au.com.gateway.client.utils/CommonUtils.php";
include __DIR__ . "/../paycorp-php/au.com.gateway.client.utils/RestClient.php";
include __DIR__ . "/../paycorp-php/au.com.gateway.client.enums/TransactionType.php";
include __DIR__ . "/../paycorp-php/au.com.gateway.client.enums/Version.php";
include __DIR__ . "/../paycorp-php/au.com.gateway.client.enums/Operation.php";
include __DIR__ . "/../paycorp-php/au.com.gateway.client.facade/Vault.php";
include __DIR__ . "/../paycorp-php/au.com.gateway.client.payment/PaymentCompleteRequest.php";

class PaycorpInvoice extends MX_Controller 
{
	/**
	 * Successfull Transaction
	 */
	const TransactionApproved = 00;

	public function __construct() 
	{
		parent::__construct();	

		$this->clientId = 14001459;
		$this->authToken = "d7dde100-f290-4dbe-9119-9908dcc6f3ed";
		$this->hmacSecret = "NczqfGC3SIqggiCn";
		$this->endpoint = "https://sampath.paycorp.com.au/rest/service/proxy/";
	}

	public function complete()
	{
		/* ------------------------------------------------------------------------------
		STEP1: Build PaycorpClientConfig object
		------------------------------------------------------------------------------ */
		$clientConfig = new ClientConfig();
		$clientConfig->setServiceEndpoint($this->endpoint);
		$clientConfig->setAuthToken($this->authToken);
		$clientConfig->setHmacSecret($this->hmacSecret);
		$clientConfig->setValidateOnly(FALSE);
		/* ------------------------------------------------------------------------------
		STEP2: Build PaycorpClient object
		------------------------------------------------------------------------------ */
		$client = new GatewayClient($clientConfig);
		/* ------------------------------------------------------------------------------
		STEP3: Build PaymentCompleteRequest object
		------------------------------------------------------------------------------ */

		$completeRequest = new PaymentCompleteRequest(); 
		$completeRequest->setClientId($this->clientId);
		$completeRequest->setReqid($_GET['reqid']);
		
		$completeResponse = $client->getPayment()->complete($completeRequest);
		if($completeResponse->getResponseCode() == self::TransactionApproved) {
			$this->db->set('booking_status', 'paid');
			$this->db->where('booking_id', $_SESSION['order.id']);
			$this->db->update('pt_bookings');
		}
		redirect(base_url($_SESSION['paymentGatewayAfterCompleteRedirect']));
	}
}