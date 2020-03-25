<?php


class TarcoClient
{
    public $endpoint;
    public $token;
    public $language;
    public $config;

    public function __construct()
    {

        $this->endpoint = "http://tstws2.ttinteractive.com/Zenith/TTI.PublicApi.Services/JsonSaleEngineService.svc/";
        $this->token = "";
        $this->language = "en-GB";
    }

    public function callService($service, $requestPaylod,$module_settings)
    {
        $this->token = $module_settings->create_token;
        if($service == "CreateTicket"){
            $this->token = $module_settings->create_booking_token;
        }
        // Append authentication object.
        $requestPaylod["RequestInfo"] = array(
            "AuthenticationKey" => $this->token,
            "CultureName" => $this->language
        );

        $endpoint = $this->endpoint.$service."?DateFormatHandling=IsoDateFormat&BodyStyle=Bare";
        $requestPaylod = json_encode($requestPaylod);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $endpoint);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $requestPaylod);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            "Content-Type: application/json"
        ));

        $result = curl_exec($ch);
//        dd($result);

        if (curl_error($ch)) {
            echo curl_error($ch);
        }

        curl_close($ch);
//        dd(json_decode($result));

        return json_decode($result);
    }
}