<?php include '../au.com.gateway.client/GatewayClient.php'; ?>
<?php include '../au.com.gateway.client.config/ClientConfig.php'; ?>
<?php include '../au.com.gateway.client.component/RequestHeader.php'; ?>
<?php include '../au.com.gateway.client.component/CreditCard.php'; ?>
<?php include '../au.com.gateway.client.component/TransactionAmount.php'; ?>
<?php include '../au.com.gateway.client.component/Redirect.php'; ?>
<?php include '../au.com.gateway.client.facade/BaseFacade.php'; ?>
<?php include '../au.com.gateway.client.facade/Payment.php'; ?>
<?php include '../au.com.gateway.client.payment/PaymentInitRequest.php'; ?>
<?php include '../au.com.gateway.client.payment/PaymentInitResponse.php'; ?>
<?php include '../au.com.gateway.client.root/PaycorpRequest.php'; ?>
<?php include '../au.com.gateway.client.utils/IJsonHelper.php'; ?>
<?php include '../au.com.gateway.client.helpers/PaymentInitJsonHelper.php'; ?>
<?php include '../au.com.gateway.client.utils/HmacUtils.php'; ?>
<?php include '../au.com.gateway.client.utils/CommonUtils.php'; ?>
<?php include '../au.com.gateway.client.utils/RestClient.php'; ?>
<?php include '../au.com.gateway.client.enums/TransactionType.php'; ?>
<?php include '../au.com.gateway.client.enums/Version.php'; ?>
<?php include '../au.com.gateway.client.enums/Operation.php'; ?>
<?php include '../au.com.gateway.client.facade/Vault.php'; ?>
<?php include '../au.com.gateway.client.facade/Report.php'; ?>

<?php

date_default_timezone_set('Asia/Colombo');
/*------------------------------------------------------------------------------
STEP1: Build ClientConfig object
------------------------------------------------------------------------------*/
$ClientConfig = new ClientConfig();
$ClientConfig->setServiceEndpoint("https://test-sampath.paycorp.com.au/paycorp-webservice/InterfaceServlet");
$ClientConfig->setAuthToken("");
$ClientConfig->setHmacSecret("");
$ClientConfig->setValidateOnly(FALSE);
/*------------------------------------------------------------------------------
STEP2: Build Client object
------------------------------------------------------------------------------*/
$Client = new GatewayClient($ClientConfig);
/*------------------------------------------------------------------------------
STEP3: Build PaymentInitRequest object
------------------------------------------------------------------------------*/
$initRequest = new PaymentInitRequest();
$initRequest->setClientId(14000031);
$initRequest->setTransactionType(TransactionType::$PURCHASE);
$initRequest->setClientRef("merchant_reference");
$initRequest->setComment("merchant_additional_data");
$initRequest->setTokenize(TRUE);
$initRequest->setExtraData(array("ADD-KEY-1" => "ADD-VALUE-1", "ADD-KEY-2" => "ADD-VALUE-2"));
// sets transaction-amounts details (all amounts are in cents)
$transactionAmount = new TransactionAmount(1010);
$transactionAmount->setTotalAmount(0);
$transactionAmount->setServiceFeeAmount(0);
//$transactionAmount->setPaymentAmount(100);
$transactionAmount->setCurrency("AUD");
$initRequest->setTransactionAmount($transactionAmount);
// sets redirect settings
$redirect = new Redirect("http://localhost/paycorp-client-php/au.com.gateway.IT/pcw_payment-complete_UT.php");
//$redirect->setReturnUrl();
$redirect->setReturnMethod("GET");
$initRequest->setRedirect($redirect);

/*------------------------------------------------------------------------------
STEP4: Process PaymentInitRequest object
------------------------------------------------------------------------------*/
$initResponse = $Client->payment()->init($initRequest);

/*------------------------------------------------------------------------------
STEP5: Extract PaymentInitResponse object
------------------------------------------------------------------------------*/
echo '<br><br>PCW Payment-Init Respopnse: --------------------------------------';
echo '<br>Req Id : ' . $initResponse->getReqid();
echo '<br>Payment Page Url : ' . $initResponse->getPaymentPageUrl();
echo '<br>Expire At : ' . $initResponse->getExpireAt();
echo '<br>------------------------------------------------------------------<br>';
?>

<html>
    <head></head>
    <body>
        <div style="float:left">
            <br><br><br><br>
            <iframe class="col-lg-12"  height="600px" width="600px" src="<?php echo $initResponse->getPaymentPageUrl(); ?>">
        </div>
    </body>
</html>
