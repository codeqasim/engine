<?php if (!defined('BASEPATH')) exit ('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class OpenAPI extends MX_Controller {

	public $username;
	public $password;
	public $storeId;
	public $wsdl_url;
	public $location;
	public $option;
	public $orderId;
	public $txnAmount;
	public $txnType;
	public $msisdn;
	public $accountNumber;
	public $emailAddress;

	function __construct()
	{
		$ci =& get_instance();
		$ci->load->config('gateways');
		$configs = $ci->config->item('easypaisa')[ENVIRONMENT];
		$this->username = $configs['soap']['username'];
		$this->password = $configs['soap']['password'];
		$this->storeId = $configs['storeId'];
		$this->wsdl_url = $configs['soap']['wsdlUrl'];
		$this->location = $configs['soap']['location'];
		$this->option = [
			'stream_context' => stream_context_create([
				'ssl' => [
					// set some SSL/TLS specific options
					'verify_peer' => false,
					'verify_peer_name' => false,
					'allow_self_signed' => true
				]
			])
		];
	}

	function inquireTransaction() 
	{
		$client = new SoapClient($this->wsdl_url, $this->option);
		$client->__setLocation($this->location);
		$inquireResponse = $client->__soapCall("inquireTransaction", array(
			"inquireTransactionRequestType" => array(
				"username"=>$this->username, 
				"password"=>$this->password, 
				"orderId"=>$this->orderId, 
				"accountNum"=>$this->accountNumber
			)
		));
		return $inquireResponse;
    }

	function initiateTransaction() 
	{
		$client = new SoapClient($this->wsdl_url, $this->option);
		$client->__setLocation($this->location);
		$initRequest = array(
			"username"=>$this->username, 
			"password"=>$this->password, 
			"orderId"=>$this->orderId, 
			"storeId"=>$this->storeId, 
			"transactionAmount"=>$this->txnAmount, 
			"transactionType"=>$this->txnType, 
			"msisdn"=>$this->msisdn, 
			"mobileAccountNo"=>$this->accountNumber, 
			"emailAddress"=>$this->emailAddress
		);
		$initiateResponse = $client->__soapCall("initiateTransaction", array(
			"initiateTransactionRequestType" => $initRequest
		));
		return $initiateResponse;
    }
}