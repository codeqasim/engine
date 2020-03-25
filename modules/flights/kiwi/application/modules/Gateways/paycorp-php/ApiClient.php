<?php
include 'au.com.gateway.client/GatewayClient.php';
include 'au.com.gateway.client.config/ClientConfig.php';
include 'au.com.gateway.client.component/RequestHeader.php';
include 'au.com.gateway.client.component/CreditCard.php';
include 'au.com.gateway.client.component/TransactionAmount.php';
include 'au.com.gateway.client.component/Redirect.php';
include 'au.com.gateway.client.facade/BaseFacade.php';
include 'au.com.gateway.client.facade/Payment.php';
include 'au.com.gateway.client.payment/PaymentInitRequest.php';
include 'au.com.gateway.client.payment/PaymentInitResponse.php';
include 'au.com.gateway.client.root/PaycorpRequest.php';
include 'au.com.gateway.client.utils/IJsonHelper.php';
include 'au.com.gateway.client.helpers/PaymentInitJsonHelper.php';
include 'au.com.gateway.client.utils/HmacUtils.php';
include 'au.com.gateway.client.utils/CommonUtils.php';
include 'au.com.gateway.client.utils/RestClient.php';
include 'au.com.gateway.client.enums/TransactionType.php';
include 'au.com.gateway.client.enums/Version.php';
include 'au.com.gateway.client.enums/Operation.php';
include 'au.com.gateway.client.facade/Vault.php';

class ApiClient 
{
    public function __construct()
    {
        // TODO...
    }

    public function init($params)
    {
        $validateOnly = "FALSE";
        $clientId = $params['ClientId'];
        $transactionType = "PAYMENT_INIT";
        $tokenize ="FALSE";
        $tokenReference ="egiwuegfiuwebf";
        $clientRef = "testRef";
        $comment = "Thankyou for using paycorp";
        $msisdn = "0432384947";
        $sessionId = "x2d2323r23r23";
        $totalAmount =$params['amount'];
        $serviceFeeAmount =0;
        $paymentAmount =$params['amount'];
        $currency = "LKR";
        $returnUrl = base_url('Gateways/PaycorpInvoice/complete');
        $returnMethod ="GET";

        /* ------------------------------------------------------------------------------
            STEP1: Build PaycorpClientConfig object
            ------------------------------------------------------------------------------ */
        $clientConfig = new ClientConfig();
        $clientConfig->setServiceEndpoint($params['ServiceEndpoint']);
        $clientConfig->setAuthToken($params['AuthToken']);
        $clientConfig->setHmacSecret($params['HmacSecret']);
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
        $initRequest->setExtraData(array(
            "msisdn" => $msisdn, 
            "sessionId" => $sessionId
        ));

        // sets transaction-amounts details (all amounts are in cents)
        $transactionAmount = new TransactionAmount($totalAmount);
        $transactionAmount->setTotalAmount($totalAmount);
        $transactionAmount->setServiceFeeAmount($serviceFeeAmount);
        $transactionAmount->setPaymentAmount($totalAmount);
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
        return $initResponse;
    }
}