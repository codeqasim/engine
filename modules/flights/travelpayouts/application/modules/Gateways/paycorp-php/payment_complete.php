
<html>
    <head>
        <meta charset="UTF-8">
        <title>Payment Complete Response -demo</title>
        <link rel="stylesheet" href="css/bootstrap.css" media="screen">
        <link rel="stylesheet" href="css/bootswatch.min.css">
        <script src="js/jquery-1.10.2.min.js"></script>
    </head>
    <body>
        <?php include $_SERVER["DOCUMENT_ROOT"] . "/PHP/Demo/au.com.gateway.client/GatewayClient.php"; ?>
        <?php include $_SERVER["DOCUMENT_ROOT"] . "/PHP/Demo/au.com.gateway.client.config/ClientConfig.php"; ?>
        <?php include $_SERVER["DOCUMENT_ROOT"] . "/PHP/Demo/au.com.gateway.client.component/RequestHeader.php"; ?>
        <?php include $_SERVER["DOCUMENT_ROOT"] . "/PHP/Demo/au.com.gateway.client.component/CreditCard.php"; ?>
        <?php include $_SERVER["DOCUMENT_ROOT"] . "/PHP/Demo/au.com.gateway.client.component/TransactionAmount.php"; ?>
         <?php include $_SERVER["DOCUMENT_ROOT"] . "/PHP/Demo/au.com.gateway.client.component/Redirect.php"; ?>
         <?php include $_SERVER["DOCUMENT_ROOT"] . "/PHP/Demo/au.com.gateway.client.facade/BaseFacade.php"; ?>
         <?php include $_SERVER["DOCUMENT_ROOT"] . "/PHP/Demo/au.com.gateway.client.facade/Payment.php"; ?>
         <?php include $_SERVER["DOCUMENT_ROOT"] . "/PHP/Demo/au.com.gateway.client.payment/PaymentInitRequest.php"; ?>
         <?php include $_SERVER["DOCUMENT_ROOT"] . "/PHP/Demo/au.com.gateway.client.payment/PaymentInitResponse.php"; ?>
         <?php include $_SERVER["DOCUMENT_ROOT"] . "/PHP/Demo/au.com.gateway.client.root/PaycorpRequest.php"; ?>
         <?php include $_SERVER["DOCUMENT_ROOT"] . "/PHP/Demo/au.com.gateway.client.utils/IJsonHelper.php"; ?>
         <?php include $_SERVER["DOCUMENT_ROOT"] . "/PHP/Demo/au.com.gateway.client.helpers/PaymentInitJsonHelper.php"; ?>
         <?php include $_SERVER["DOCUMENT_ROOT"] . "/PHP/Demo/au.com.gateway.client.utils/HmacUtils.php"; ?>
         <?php include $_SERVER["DOCUMENT_ROOT"] . "/PHP/Demo/au.com.gateway.client.utils/CommonUtils.php"; ?>
         <?php include $_SERVER["DOCUMENT_ROOT"] . "/PHP/Demo/au.com.gateway.client.utils/RestClient.php"; ?>
         <?php include $_SERVER["DOCUMENT_ROOT"] . "/PHP/Demo/au.com.gateway.client.enums/TransactionType.php"; ?>
         <?php include $_SERVER["DOCUMENT_ROOT"] . "/PHP/Demo/au.com.gateway.client.enums/Version.php"; ?>
         <?php include $_SERVER["DOCUMENT_ROOT"] . "/PHP/Demo/au.com.gateway.client.enums/Operation.php"; ?>
         <?php include $_SERVER["DOCUMENT_ROOT"] . "/PHP/Demo/au.com.gateway.client.facade/Vault.php"; ?>
         <?php include $_SERVER["DOCUMENT_ROOT"] . "/PHP/Demo/au.com.gateway.client.payment/PaymentCompleteRequest.php"; ?>

 



  <?php
      echo "Payment Complete".'<br></br>';

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
}// end function

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
}// end function scale_by_log



// set to the user defined error handler
// $old_error_handler = set_error_handler("myErrorHandler");

try

{
        date_default_timezone_set('Asia/Colombo');
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
          STEP3: Build PaymentCompleteRequest object
          ------------------------------------------------------------------------------ */

        $completeRequest = new PaymentCompleteRequest(); 
        $completeRequest->setClientId(14001459);
        $completeRequest->setReqid($_GET['reqid']);
         
        $completeResponse = $client->getPayment()->complete($completeRequest);

        // echo "response code is " . $completeResponse->getResponseCode();

} //try

catch(Exception $e){echo "Error :".$e->getMessag();}//catch

        ?>

            <script src="js/bootstrap.min.js"></script>
            <script src="js/bootswatch.js"></script>
        </div>
    </body>
</html>
