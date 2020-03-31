<?php
header('Access-Control-Allow-Origin: *');
// This can be removed if you use __autoload() in config.php OR use Modular Extensions
require APPPATH . 'modules/Api/libraries/REST_Controller.php';
class Travelhope_flights extends REST_Controller {
    const Module = "TravelhopeFlights";
    public $end_point= "";
    function __construct() {
        // Construct our parent class
        parent :: __construct();

        /*Load Library and Model*/

        $this->load->library('TravelhopeFlights/ApiClient');

        $this->load->library('TravelhopeFlights/Model/SearchForm');
        $this->load->model('TravelhopeFlights/BookinngEngineBookings');
        $this->load->model('Apiflights_model','fm');
        $this->end_point = 'http://localhost/api/api/flight/';
        $this->output->set_content_type('application/json');
    }

    /*Travel Hope Flights Get all Data List */
    public function search_post()
    {

        $test = 1;

        $thfBooking = new BookinngEngineBookings();
        $milliseconds = round(microtime(true) * 1000);
        $thfBooking->setSessionKey($milliseconds);
        $searchForm = new SearchForm();
        $searchForm->test = $test;
        $searchForm->currency = "USD";


        $post_data = json_decode(trim(file_get_contents('php://input')), true);


        $Credentials = $post_data['Suppliers']["credentials"]["ota_id"];


        $searchForm->ota_id = $Credentials;

        $searchForm->from_code = $post_data['Origin'];
        $searchForm->to_code = $post_data['Destination'];
        $searchForm->date_from = $post_data['DepartureDate'];
        $searchForm->return_from = $post_data['ArrivalDate'];
        $searchForm->adults = $post_data['Adults'];
        $searchForm->children = $post_data['Children'];
        $searchForm->infants = $post_data['Infants'];
        $searchForm->flight_type = $post_data['FlightType'];
        $thfBooking->setSearchRequest(json_encode($searchForm));
        $thfBooking->setOrigin($searchForm->from_code);
        $thfBooking->setDestination($searchForm->to_code);
        $thfBooking->setDepartureDate($searchForm->date_from);
        $thfBooking->setArrivalDate($searchForm->return_from);
        $thfBooking->setAdults($searchForm->adults);
        $thfBooking->setChildren($searchForm->children);
        $thfBooking->setInfants($searchForm->infants);
        $config = array('ota_id'=>$Credentials,'apiEndpoint'=>$this->end_point);
        $thope = new ApiClient((object)$config);
        $response = json_decode($thope->sendRequest('GET', 'search', $searchForm));


        $main_object = array();
        $FlightInfo_Outbound = array();
        foreach ($response->data as $item){
            $airline = $this->fm->get_airline_name($item->airline);
            $FlightInfo = array(
                "Departure"=>$item->from_code,
                "Arrival"=>$item->to_code,
                "DepartureTime"=>$item->departure_time,
                "ArrivalTime"=>$item->arrival_time,
                "Duration"=>$item->flight_duration,
                "Carrier"=>(object)array("Name"=>$airline->name,"Code"=>$item->airline),
                "Stops"=>$item->stops,
                "BagLimit"=>$item->baglimit,
                "Supplier"=>"TravelHope",
            );
            $Segments_Inbound = array();
            $Segments_Outbound = array();
            foreach ($item->route as $route){
                $airline = $this->fm->get_airline_name($route->airline);

                $Segment = array(
                  "DepartureCity"=>$route->city_from,
                  "ArrivalCity"=>$route->city_to,
                  "DepartureCityCode"=>$route->from_code,
                  "ArrivalCityCode"=>$route->to_code,
                  "DepartureTime"=>$route->departure_time,
                  "ArrivalTime"=>$route->arrival_time,
                   "Carrier"=>(object)array("Name"=>$airline->name,"Code"=>$route->airline),
                  "FlightNo"=>$route->flight_no,
                  "AirLineCode"=>$route->airline,
                  "AirLineType"=>$route->airline_type,
                );
                if($route->return == 0 )
                {
                    array_push($Segments_Inbound,$Segment);
                }
                if($route->return == 1)
                {
                    array_push($Segments_Outbound,$Segment);
                }
            }
            $FlightInfo["DepartureCity"] =  $Segments_Inbound[0]["DepartureCity"];
            $FlightInfo["ArrivalCity"] =  $Segments_Inbound[count($Segments_Inbound)-1]["ArrivalCity"];
            $FlightInfo["Segments"] = $Segments_Inbound;


            if(!empty($Segments_Outbound)){
                $airline = $this->fm->get_airline_name($Segments_Outbound[0]["Carrier"]->Code);

                $FlightInfo_Outbound = array(
                    "Departure"=>$Segments_Outbound[0]["DepartureCityCode"],
                    "DepartureCity"=>$Segments_Outbound[0]["DepartureCity"],
                    "Arrival"=>$Segments_Outbound[count($Segments_Outbound)-1]["ArrivalCityCode"],
                    "ArrivalCity"=>$Segments_Outbound[count($Segments_Outbound)-1]["ArrivalCity"],
                    "DepartureTime"=>$Segments_Outbound[count($Segments_Outbound)-1]["DepartureTime"],
                    "ArrivalTime"=>$Segments_Outbound[count($Segments_Outbound)-1]["ArrivalTime"],
                    "Carrier"=>(object)array("Name"=>$airline->name,"Code"=>$Segments_Outbound[0]["Carrier"]->Code),
                    "Duration"=>"00:00",
                    "Stops"=>count($Segments_Outbound),
                    "BagLimit"=>array(),
                );
                $FlightInfo_Outbound["Segments"]= $Segments_Outbound;
            }

                array_push($main_object,(object)array(
                "InBoundSegments"=>$FlightInfo,
                "OutBoundSegments"=>$FlightInfo_Outbound,
                "Price"=>$item->flight_price,
                "Supplier"=>"TravelHope",
                 "BookingCode"=>(object)array(
                        "flight_id"=>$item->flight_id
                    )

            ));

        }



        $thfBooking->setSearchResponse('');
        $thfBooking->save();


        if (!empty ($response)) {
            $this->response(array('response' => $main_object, 'error' => array('status' => true,'msg' => '')), 200);

        }else{

            $this->response(array('response' => '', 'error' => array('status' => false,'msg' => 'Record not found')), 200);

        }
    }

    /*Travel Hope Flights Detail Api*/
    public function detail_post(){

        if ($this->config->api_environment == 'sandbox') {
            $test = 1;
        }else{
            $test = 0;
        }
        $pnum = $this->post('adults') + $this->post('children') + $this->post('infants');
        $params = array(
            'bnum' => $pnum,
            'pnum' => $pnum,
            'test' =>  $test,
            'custom_payload' => array(
                'booking_token' => $this->post('booking_token'),
                'visitor_uniqid' =>$this->post('visitor_uniqeid'),
            ),
            'flight_id' => $this->post('flight_id'),
            'adults' => $this->post('adults'),
            'children' => $this->post('children'),
            'infants' => $this->post('infants'),
            'ota_id' => $this->config->ota_id,
            'vendor' => 5
        );
        $thope = new ApiClient($this->config);
        $response = $thope->sendRequest('POST', 'details', json_encode($params), ["Content-Type:application/json"]);
        $contents = $response;
        echo  $contents;
    }

    /*Travel Hope Flights Booking*/
    public function booking_post(){

        if ($this->config->api_environment == 'sandbox') {
            $test = 1;
        }else{
            $test = 0;
        }

        $this->load->library('TravelhopeFlights/Model/Booking');
        $booking = new Booking();

        $params = array(
            'custom_payload' => json_decode($this->post('custom_payload')),
            'flight_id' => $this->post('flight_id'),
            'account' =>[
                'title' => $this->post('title'),
                'first_name' => $this->post('first_name'),
                'last_name' => $this->post('last_name'),
                'email' => $this->post('email'),
                'mobile_code' => $this->post('mobile_code'),
                'number' => $this->post('number'),
            ],
            'adults' => json_decode($this->post('adults')),
            'children'=>json_decode($this->post('children')),
            'infants' => json_decode($this->post('infants')),
            'special_request' => '',
            'payment_details' => [
                'name_card' => $this->post('name_card'),
                'card_no' => $this->post('card_no'),
                'month' => $this->post('month'),
                'year' => $this->post('year'),
                'security_code' => $this->post('security_code'),
            ],
            'flight_data' => array(
                array(
                    'operating_airline_iata' => $this->post('operating_airline_iata'),
                    'operating_airline_name' => $this->post('operating_airline_name'),
                    'from_city' => $this->post('from_city'),
                    'from_code' => $this->post('from_code'),
                    'to_code' => $this->post('to_code'),
                    'departure_time' => $this->post('departure_time'),
                    'to_city' => $this->post('to_city'),
                    'arrival_time' => $this->post('arrival_time'),
                    'price' => $this->post('price'),
                    'flight_id' => $this->post('flight_id'),
                    'to_country' => $this->post('to_country'),
                    'from_country' => $this->post('from_country'),
                    'to_station' => $this->post('to_station'),
                    'from_station' => $this->post('from_station'),
                    'flight_no' => $this->post('flight_no')
                ),
                array(
                    'operating_airline_iata' => $this->post('operating_airline_iata'),
                    'operating_airline_name' => $this->post('operating_airline_name'),
                    'from_city' => $this->post('from_city'),
                    'from_code' => $this->post('from_code'),
                    'to_code' => $this->post('to_code'),
                    'departure_time' => $this->post('departure_time'),
                    'to_city' => $this->post('to_city'),
                    'arrival_time' => $this->post('arrival_time'),
                    'price' => $this->post('price'),
                    'flight_id' => $this->post('flight_id'),
                    'to_country' => $this->post('to_country'),
                    'from_country' => $this->post('from_country'),
                    'to_station' => $this->post('to_station'),
                    'from_station' => $this->post('from_station'),
                    'flight_no' => $this->post('flight_no')
                ),
            ),
            'voucher' => 0,
            'ota_id' => $this->config->ota_id,
            'vendor' => 5,
            'test' => $test,
            'ip_address' => '127.0.0.1'

        );
        $booking->setCustomPayload($params['custom_payload']);
        $booking->setFlightId($params['flight_id']);
        $booking->setAccount($params['account']);
        $booking->setAdults($params['adults']);
        $booking->setChildren($params['children']);
        $booking->setInfants($params['infants']);
        $booking->setPaymentDetails($params['payment_details']);
        $flightData = $params['flight_data'];
        $booking->setFlightData($flightData);
        $booking->setVoucher(0);
        $booking->setOtaId($this->config->ota_id);
        $booking->setVendor(5);
        $booking->setIpAddress('127.0.0.1');
        $booking->setpaymentmetod($test);
        $thope = new ApiClient($this->config);
        $response = $thope->sendRequest('POST', 'booking', $booking->toJson(), ["content-Type:application/json"]);
        echo  $response;
    }
}