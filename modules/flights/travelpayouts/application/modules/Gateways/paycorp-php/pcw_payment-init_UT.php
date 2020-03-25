    <?php include 'au.com.gateway.client/GatewayClient.php'; ?>
        <?php include 'au.com.gateway.client.config/ClientConfig.php'; ?>
        <?php include 'au.com.gateway.client.component/RequestHeader.php'; ?>
        <?php include 'au.com.gateway.client.component/CreditCard.php'; ?>
        <?php include 'au.com.gateway.client.component/TransactionAmount.php'; ?>
        <?php include 'au.com.gateway.client.component/Redirect.php'; ?>
        <?php include 'au.com.gateway.client.facade/BaseFacade.php'; ?>
        <?php include 'au.com.gateway.client.facade/Payment.php'; ?>
        <?php include 'au.com.gateway.client.payment/PaymentInitRequest.php'; ?>
        <?php include 'au.com.gateway.client.payment/PaymentInitResponse.php'; ?>
        <?php include 'au.com.gateway.client.root/PaycorpRequest.php'; ?>
        <?php include 'au.com.gateway.client.utils/IJsonHelper.php'; ?>
        <?php include 'au.com.gateway.client.helpers/PaymentInitJsonHelper.php'; ?>
        <?php include 'au.com.gateway.client.utils/HmacUtils.php'; ?>
        <?php include 'au.com.gateway.client.utils/CommonUtils.php'; ?>
        <?php include 'au.com.gateway.client.utils/RestClient.php'; ?>
        <?php include 'au.com.gateway.client.enums/TransactionType.php'; ?>
        <?php include 'au.com.gateway.client.enums/Version.php'; ?>
        <?php include 'au.com.gateway.client.enums/Operation.php'; ?>
        <?php include 'au.com.gateway.client.facade/Vault.php'; ?>


<?php
error_reporting(0);
echo "Payment Init".'<br></br>';
// error handler function
function myErrorHandler($errno, $errstr, $errfile, $errline)
{
    if (!(error_reporting() & $errno)) {
        // This error code is not included in error_reporting, so let it fall
        // through to the standard PHP error handler
        return false;
    }

    switch ($errno) {
    case E_USER_ERROR:
        echo "<b>My ERROR</b> [$errno] $errstr<br />\n";
        echo "  Fatal error on line $errline in file $errfile";
        echo ", PHP " . PHP_VERSION . " (" . PHP_OS . ")<br />\n";
        echo "Aborting...<br />\n";
        exit(1);
        break;

    case E_USER_WARNING:
        echo "<b>My WARNING</b> [$errno] $errstr<br />\n";
        break;

    case E_USER_NOTICE:
        echo "<b>My NOTICE</b> [$errno] $errstr<br />\n";
        break;

    default:
        echo "Unknown error type: [$errno] $errstr<br />\n";
        break;
    }

    /* Don't execute PHP internal error handler */
    return true;
}

// function to test the error handling
function scale_by_log($vect, $scale)
{
    if (!is_numeric($scale) || $scale <= 0) {
        trigger_error("log(x) for x <= 0 is undefined, you used: scale = $scale", E_USER_ERROR);
    }

    if (!is_array($vect)) {
        trigger_error("Incorrect input vector, array of values expected", E_USER_WARNING);
        return null;
    }

    $temp = array();
    foreach($vect as $pos => $value) {
        if (!is_numeric($value)) {
            trigger_error("Value at position $pos is not a number, using 0 (zero)", E_USER_NOTICE);
            $value = 0;
        }
        $temp[$pos] = log($scale) * $value;
    }

    return $temp;
}

// set to the user defined error handler
$old_error_handler = set_error_handler("myErrorHandler");






?><?php



try

{


date_default_timezone_set('Asia/Colombo'); 

 $url = "http://localhost/PHP/Demo/payment_complete.php";
       
        
        
           
            $validateOnly = "FALSE";
            $clientId = 14001459;
            $transactionType = "";
            $tokenize ="FALSE";
            $tokenReference ="";
            $clientRef = "144";
            $comment = "";
            $msisdn = "";
            $sessionId = "";
            $totalAmount =1000;
            $serviceFeeAmount =0;
            $paymentAmount =1000;
            $currency = "LKR";
            $returnUrl ="http://localhost/PHP/Demo/payment_complete.php";
            $returnMethod ="GET";

            date_default_timezone_set('Australia/Sydney');

            /* ------------------------------------------------------------------------------
              STEP1: Build PaycorpClientConfig object
              ------------------------------------------------------------------------------ */
            $clientConfig = new ClientConfig();
            $clientConfig->setServiceEndpoint("https://sampath.paycorp.com.au/rest/service/proxy/");
            $clientConfig->setAuthToken("d7dde100-f290-4dbe-9119-9908dcc6f3ed");
            $clientConfig->setHmacSecret("NczqfGC3SIqggiCn");
            $clientConfig->setValidateOnly(FALSE);
 
            /* ------------------------------------------------------------------------------
              STEP2: Build PaycorpClient object
              ------------------------------------------------------------------------------ */
            $client = new GatewayClient($clientConfig);

            /* ------------------------------------------------------------------------------
              ------------------------------------------------------------------------------ */
            $initRequest = new PaymentInitRequest();

            $initRequest->setClientId($clientId);
            $initRequest->setTransactionType(TransactionType::$PURCHASE);
            $initRequest->setClientRef($clientRef);
            $initRequest->setComment($comment);
            $initRequest->setTokenize(FALSE);
            $initRequest->setExtraData(array("msisdn" => "$msisdn", "sessionId" => "$sessionId"));

            // sets transaction-amounts details (all amounts are in cents)
            $transactionAmount = new TransactionAmount(1000);
            $transactionAmount->setTotalAmount(1000);
            $transactionAmount->setServiceFeeAmount(1000);
            $transactionAmount->setPaymentAmount(1000);
            $transactionAmount->setCurrency($currency);
            $initRequest->setTransactionAmount($transactionAmount);
            // sets redirect settings
            
            $redirect = new Redirect($returnUrl);
           // $redirect->setReturnUrl($returnUrl);
            $redirect->setReturnMethod($returnMethod);
            $initRequest->setRedirect($redirect);
            /* ------------------------------------------------------------------------------
              STEP4: Process PaymentInitRequest object
              ------------------------------------------------------------------------------ */
           // echo "Before sending payment init";
            $initResponse = $client->getPayment()->init($initRequest);
            // echo "After sending payment init";


}
catch(Exception $e){echo "Error :".$e->getMessag();}//catch

?>
<html>
    <head></head>
    <body>
        <div style="float:left">
            <br><br><br><br>
            <iframe class="col-lg-12"  height="600px" width="600px" src="<?php echo $initResponse->getPaymentPageUrl(); ?>" />
        </div>
    </body>
</html>



