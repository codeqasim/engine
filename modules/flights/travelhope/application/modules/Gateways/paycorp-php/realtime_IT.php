<?php include $_SERVER["DOCUMENT_ROOT"] .'/PHP/Demo/au.com.gateway.client/GatewayClient.php'; ?>
<?php include $_SERVER["DOCUMENT_ROOT"] .'/PHP/Demo/au.com.gateway.client.config/ClientConfig.php'; ?>
<?php include $_SERVER["DOCUMENT_ROOT"] .'/PHP/Demo/au.com.gateway.client.component/RequestHeader.php'; ?>
<?php include $_SERVER["DOCUMENT_ROOT"] .'/PHP/Demo/au.com.gateway.client.component/CreditCard.php'; ?>
<?php include $_SERVER["DOCUMENT_ROOT"] .'/PHP/Demo/au.com.gateway.client.component/TransactionAmount.php'; ?>
<?php include $_SERVER["DOCUMENT_ROOT"] .'/PHP/Demo/au.com.gateway.client.component/Redirect.php'; ?>
<?php include $_SERVER["DOCUMENT_ROOT"] .'/PHP/Demo/au.com.gateway.client.facade/BaseFacade.php'; ?>
<?php include $_SERVER["DOCUMENT_ROOT"] .'/PHP/Demo/au.com.gateway.client.facade/Payment.php'; ?>
<?php include $_SERVER["DOCUMENT_ROOT"] .'/PHP/Demo/au.com.gateway.client.payment/PaymentRealTimeRequest.php'; ?>
<?php include $_SERVER["DOCUMENT_ROOT"] .'/PHP/Demo/au.com.gateway.client.payment/PaymentRealTimeResponse.php'; ?>
<?php include $_SERVER["DOCUMENT_ROOT"] .'/PHP/Demo/au.com.gateway.client.root/PaycorpRequest.php'; ?>
<?php include $_SERVER["DOCUMENT_ROOT"] .'/PHP/Demo/au.com.gateway.client.utils/IJsonHelper.php'; ?>
<?php include $_SERVER["DOCUMENT_ROOT"] .'/PHP/Demo/au.com.gateway.client.helpers/PaymentRealTimeJsonHelper.php'; ?>
<?php include $_SERVER["DOCUMENT_ROOT"] .'/PHP/Demo/au.com.gateway.client.utils/HmacUtils.php'; ?>
<?php include $_SERVER["DOCUMENT_ROOT"] .'/PHP/Demo/au.com.gateway.client.utils/CommonUtils.php'; ?>
<?php include $_SERVER["DOCUMENT_ROOT"] .'/PHP/Demo/au.com.gateway.client.utils/RestClient.php'; ?>
<?php include $_SERVER["DOCUMENT_ROOT"] .'/PHP/Demo/au.com.gateway.client.enums/TransactionType.php'; ?>
<?php include $_SERVER["DOCUMENT_ROOT"] .'/PHP/Demo/au.com.gateway.client.enums/Version.php'; ?>
<?php include $_SERVER["DOCUMENT_ROOT"] .'/PHP/Demo/au.com.gateway.client.enums/Operation.php'; ?>
<?php include $_SERVER["DOCUMENT_ROOT"] .'/PHP/Demo/au.com.gateway.client.facade/Vault.php'; ?>


<?php

error_reporting(E_ALL);
date_default_timezone_set('Asia/Colombo');
/*------------------------------------------------------------------------------
STEP1: Build ClientConfig object
------------------------------------------------------------------------------*/
$ClientConfig = new ClientConfig();
$ClientConfig->setServiceEndpoint("https://sampath.paycorp.com.au/rest/service/proxy");
$ClientConfig->setAuthToken("");
$ClientConfig->setHmacSecret("");

/*------------------------------------------------------------------------------
STEP2: Build Client object
------------------------------------------------------------------------------*/
$Client = new GatewayClient($ClientConfig);
/*------------------------------------------------------------------------------
STEP3: Build PaymentRealTimeRequest object
------------------------------------------------------------------------------*/
$realTimeRequest = new PaymentRealTimeRequest();

$realTimeRequest->setClientId();
$realTimeRequest->setTransactionType(TransactionType::$PURCHASE);
$realTimeRequest->setClientRef("merchant_reference");
$realTimeRequest->setComment("merchant_additional_data");

$extraData = array("invoice-no" => "I99999", "job-no" => "J10101");

$realTimeRequest->setExtraData($extraData);
// sets credit-card details
$creditCard = new CreditCard();
$creditCard->setType("VISA");
$creditCard->setHolderName("Chanaka");
$creditCard->setExpiry("1225");
$creditCard->setNumber("4564456445644564");
$creditCard->setSecureId("123");
$creditCard->setSecureIdSupplied(TRUE);
$realTimeRequest->setCreditCard($creditCard);
// sets transaction-amounts details (all amounts are in cents)
$transactionAmount = new TransactionAmount(1010);
$transactionAmount->setTotalAmount(0);
//$transactionAmount->setPaymentAmount(200);
//$transactionAmount->setServiceFeeAmount(0);
$transactionAmount->setCurrency("AUD");
$realTimeRequest->setTransactionAmount($transactionAmount);

/*------------------------------------------------------------------------------
STEP4: Process RealTimeRequest object
------------------------------------------------------------------------------*/
$realTimeResponse = $Client->getPayment()->realTime($realTimeRequest);

/*------------------------------------------------------------------------------
STEP5: Extract RealTimeResponse object
------------------------------------------------------------------------------*/
echo '<br><br>-----------Payment Real-Time Response: --------------------------';
echo '<br>TxnReference : ' . $realTimeResponse->getTxnReference();
echo '<br>ResponseCode : ' . $realTimeResponse->getResponseCode();
echo '<br>ResponseText : ' . $realTimeResponse->getResponseText();
echo '<br>SettlementDate : ' . $realTimeResponse->getSettlementDate();
echo '<br>AuthCode : ' . $realTimeResponse->getAuthCode();
echo '<br>----------------------------------------------------------------------';
?>
