<?php
class HotelApiClient 
{
    public $requestXML   = 'https://dev.hotelston.com/ws/HotelServiceV2?wsdl';
    public $client;

    public function __construct()
    {
    }

    public function callApi()
    {
        $this->client = new SoapClient($this->requestXML, array(
            'soap_version' => 'SOAP_1_2',
            'encoding' => 'UTF-8',
            'exceptions' => true,
            'stream_context' => stream_context_create(array(
                'http' => array(
                    'header' => array(
                        'Content-Type: text/xml; charset=UTF-8',
                        'Accept-Encoding: gzip, deflate',
                        'SOAPAction: ""'
                    )),
                'ssl' => array(
                    'ciphers' => 'AES256-SHA',
                    'verify_peer' => false,
                    'verify_peer_name' => false
                )
            )),
            'trace' => true,
            'email' => 'info@phptravels.com',
            'password' => '65cavalry'
        ));
        try {
            $result = $this->client->__soapCall("searchHotels", [
                'parameters' => ''
            ]);
            dd($result);
        } catch(SoapFault $e) {
            throw new Exception("SOAP Fault: (faultcode: {$e->faultcode}, faultstring: {$e->faultstring})");
        }
    }   
}