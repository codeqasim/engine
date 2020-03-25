<?php include '../au.com.gateway.client/GatewayClient.php'; ?>
<?php include '../au.com.gateway.client.config/ClientConfig.php'; ?>
<?php include '../au.com.gateway.client.component/RequestHeader.php'; ?>
<?php include '../au.com.gateway.client.component/CreditCard.php'; ?>
<?php include '../au.com.gateway.client.facade/BaseFacade.php'; ?>
<?php include '../au.com.gateway.client.root/PaycorpRequest.php'; ?>
<?php include '../au.com.gateway.client.vault/StoreCardRequest.php'; ?>
<?php include '../au.com.gateway.client.vault/StoreCardResponse.php'; ?>
<?php include '../au.com.gateway.client.vault/RetrieveCardRequest.php'; ?>
<?php include '../au.com.gateway.client.vault/RetrieveCardResponse.php'; ?>
<?php include '../au.com.gateway.client.vault/UpdateCardRequest.php'; ?>
<?php include '../au.com.gateway.client.vault/UpdateCardResponse.php'; ?>
<?php include '../au.com.gateway.client.vault/VerifyTokenRequest.php'; ?>
<?php include '../au.com.gateway.client.vault/VerifyTokenResponse.php'; ?>
<?php include '../au.com.gateway.client.vault/DeleteTokenRequest.php'; ?>
<?php include '../au.com.gateway.client.vault/DeleteTokenResponse.php'; ?>
<?php include '../au.com.gateway.client.utils/IJsonHelper.php'; ?>
<?php include '../au.com.gateway.client.helpers/StoreCardJsonHelper.php'; ?>
<?php include '../au.com.gateway.client.helpers/DeleteTokenJsonHelper.php';  ?>
<?php include '../au.com.gateway.client.helpers/RetrieveCardJsonHelper.php'; ?>
<?php include '../au.com.gateway.client.utils/HmacUtils.php'; ?>
<?php include '../au.com.gateway.client.utils/CommonUtils.php'; ?>
<?php include '../au.com.gateway.client.utils/RestClient.php'; ?>
<?php include '../au.com.gateway.client.helpers/UpdateCardJsonHelper.php'; ?>
<?php include '../au.com.gateway.client.helpers/VerifyTokenJsonHelper.php'; ?>
<?php include '../au.com.gateway.client.enums/Version.php'; ?>
<?php include '../au.com.gateway.client.enums/Operation.php'; ?>
<?php include '../au.com.gateway.client.facade/Payment.php'; ?>
<?php include '../au.com.gateway.client.facade/Vault.php'; ?>
<?php include '../au.com.gateway.client.facade/Report.php'; ?>

<?php
date_default_timezone_set('Asia/Colombo');
/*------------------------------------------------------------------------------
STEP1: Build ClientConfig object
------------------------------------------------------------------------------*/

$ClientConfig = new ClientConfig();
$ClientConfig->setServiceEndpoint("https://test-merchants.paycorp.com.au/rest/service/proxy");
$ClientConfig->setAuthToken("");
$ClientConfig->setHmacSecret("");
/*------------------------------------------------------------------------------
STEP2: Build Client object
------------------------------------------------------------------------------*/
$Client = new GatewayClient($ClientConfig);
/*------------------------------------------------------------------------------
STEP3: Build StoreCardRequest object
------------------------------------------------------------------------------*/
$storeCardRequest = new StoreCardRequest();

$storeCardRequest->setClientId(100007);
$storeCardRequest->setClientRef("api-");
// sets credit-card details
$creditCard = new CreditCard();
$creditCard->setType("VISA");
$creditCard->setHolderName("Scott Tiger");
$creditCard->setExpiry("1222");
$creditCard->setNumber("4564456445644564");
$creditCard->setSecureId("123");
$creditCard->setSecureIdSupplied(TRUE);
$storeCardRequest->setCreditCard($creditCard);

/*------------------------------------------------------------------------------
STEP4: Process StoreCardRequest object
------------------------------------------------------------------------------*/
$storeCardResponse = $Client->vault()->storeCard($storeCardRequest);
/*------------------------------------------------------------------------------
STEP5: Extract StoreCardResponse object
------------------------------------------------------------------------------*/
echo '<br><br>Vault Store-Card Response: --------------------------------------';
echo '<br>Token: ' . $storeCardResponse->getToken();
echo '<br>Response Code: ' . $storeCardResponse->getResponseCode();
echo '<br>Response Text: ' . $storeCardResponse->getResponseText();
echo '<br>----------------------------------------------------------------------';
/*------------------------------------------------------------------------------
STEP6: Build RetrieveCardRequest object
------------------------------------------------------------------------------*/
$retrieveCardRequest = new RetrieveCardRequest();
$retrieveCardRequest->setClientId(10000715);
$retrieveCardRequest->setToken("4564450210414564");
$retrieveCardRequest->setToken($storeCardResponse->getToken());
/*------------------------------------------------------------------------------
STEP7: Process RetrieveCardRequest object
------------------------------------------------------------------------------*/
$retrieveCardResponse = $Client->vault()->retrieveCard($retrieveCardRequest);
/*------------------------------------------------------------------------------
STEP8: Extract RetrieveCardResponse object
------------------------------------------------------------------------------*/
echo '<br><br>Vault Retrieve-Card Response: ------------------------------------';
echo '<br>Response Code: ' . $retrieveCardResponse->getResponseCode();
echo '<br>Response Text: ' . $retrieveCardResponse->getResponseText();
echo '<br>----------------------------------------------------------------------';
/*------------------------------------------------------------------------------
STEP9: Build UpdateCardRequest object
------------------------------------------------------------------------------*/
$updateCardRequest = new UpdateCardRequest();
$updateCardRequest->setClientId(10000715);
$updateCardRequest->setToken("4564450210414564");
$updateCardRequest->setExpiryDate("1222");
/*------------------------------------------------------------------------------
STEP10: Process UpdateCardRequest object
------------------------------------------------------------------------------*/
$updateCardResponse = $Client->vault()->updateCard($updateCardRequest);
/*------------------------------------------------------------------------------
STEP11: Extract UpdateCardResponse object
------------------------------------------------------------------------------*/
echo '<br><br>Vault Update-Card Response: --------------------------------------';
echo '<br>Response Code: ' . $updateCardResponse->getResponseCode();
echo '<br>Response Text: ' . $updateCardResponse->getResponseText();
echo '<br>----------------------------------------------------------------------';
/*------------------------------------------------------------------------------
STEP12: Build VerifyTokenRequest object
------------------------------------------------------------------------------*/
$verifyTokenRequest = new VerifyTokenRequest();
$verifyTokenRequest->setClientId(10000715);
$verifyTokenRequest->setToken("4564450210414564");
/*------------------------------------------------------------------------------
STEP13: Process VerifyTokenRequest object
------------------------------------------------------------------------------*/
$verifyTokenResponse = $Client->vault()->verifyToken($verifyTokenRequest);
/*------------------------------------------------------------------------------
STEP14: Extract VerifyTokenResponse object
------------------------------------------------------------------------------*/
echo '<br><br>Vault Verify-Token Response: -------------------------------------';
echo '<br>Token: ' . $verifyTokenResponse->getToken();
echo '<br>Client Ref: ' . $verifyTokenResponse->getClientRef();
echo '<br>Response Code: ' . $verifyTokenResponse->getResponseCode();
echo '<br>Response Text: ' . $verifyTokenResponse->getResponseText();
echo '<br>----------------------------------------------------------------------';
/*------------------------------------------------------------------------------
STEP15: Build DeleteTokenRequest object
------------------------------------------------------------------------------*/
$deleteTokenRequest = new DeleteTokenRequest();
$deleteTokenRequest->setClientId(10000715);
$deleteTokenRequest->setToken("4564450210414564");
/*------------------------------------------------------------------------------
STEP16: Process DeleteTokenRequest object
------------------------------------------------------------------------------*/
$deleteTokenResponse = $Client->vault()->deleteToken($deleteTokenRequest);
echo "SSS";
/*------------------------------------------------------------------------------
STEP17: Extract DeleteTokenRequest object
------------------------------------------------------------------------------*/
echo '<br><br>Vault Delete-Token Response: -------------------------------------';
echo '<br>Response Code: ' . $deleteTokenResponse->getResponseCode();
echo '<br>Response Text: ' . $deleteTokenResponse->getResponseText();
echo '<br>----------------------------------------------------------------------';
?>
