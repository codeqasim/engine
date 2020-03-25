<?php if (!defined('BASEPATH')) exit ('No direct script access allowed');

class FlightTarco extends MX_Controller
{

    const MODULE = "FlightTarco";
    const SLUG = "trflight";
    const VIEW = "modules/flights/";


    private $config = [];

    public function __construct()
    {
        parent:: __construct();

        $chk = $this->App->service('ModuleService')->isActive(self::MODULE);
        if (!$chk) {
            Error_404($this);
        }

        modules::load('Front');
        $this->data['lang_set'] = $this->session->userdata('set_lang');
        $this->data['phone'] = $this->load->get_var('phone');
        $this->data['contactemail'] = $this->load->get_var('contactemail');
        $defaultlang = pt_get_default_language();
        if (empty($this->data['lang_set'])) {
            $this->data['lang_set'] = $defaultlang;
        }
        $this->lang->load("front", $this->data['lang_set']);
        $this->data['appModule'] = self::MODULE;

        $this->config = $this->App->service('ModuleService')->get(self::MODULE)->apiConfig;
        // Load library
        $this->load->library("FlightTarco/TarcoClient");
    }

    public function index()
    {
        $this->data['search'] = $this->session->userdata("tr_search");
        $this->load->view('search_form', $this->data);
    }

    /**
     * @param mixed ...$args
     */
    public function search()
    {
        $args = explode('/', uri_string());
        $currency = "SAR";
        $this->load->model('FlightTarco/FlightsSearchModel');
        $form = new FlightsSearchModel();
        unset($args[0]);
        unset($args[1]);
        $args = array_merge($args);
        $form->parseUriString($args);
        $this->session->set_userdata('FlightTarco', serialize($form));

        $OriginDestinations = array();
        $passengers = array();
        array_push($OriginDestinations, array(
            "OriginCode" => $form->origin,
            "DestinationCode" => $form->destination,
            "TargetDate" => $form->departure_date
        ));

        if ($form->tripType == "return") {
            array_push($OriginDestinations, array(
                "OriginCode" => $form->destination,
                "DestinationCode" => $form->origin,
                "TargetDate" => $form->arrival
            ));
        }

        if ($form->adults > 0) {
            array_push($passengers, array(
                "Ref" => "PADT",
                "PassengerQuantity" => $form->adults,
                "PassengerTypeCode" => "AD"
            ));
        }

        if ($form->children > 0) {
            array_push($passengers, array(
                "Ref" => "PCHD",
                "PassengerQuantity" => $form->children,
                "PassengerTypeCode" => "CHD"
            ));
        }
        if ($form->infant > 0) {
            array_push($passengers, array(
                "Ref" => "PINF",
                "PassengerQuantity" => $form->infant,
                "PassengerTypeCode" => "INF"
            ));
        }
        $requestPaylod = array(
            "FareDisplaySettings" => array(
                "SaleCurrencyCode" => $currency
            ),
            "OriginDestinations" => $OriginDestinations,
            "Passengers" => $passengers
        );
        $response = $this->TarcoClient->callService("SearchFlights", $requestPaylod,$this->config);
        if ($response->ResponseInfo->Error != null) {
            exit($response->ResponseInfo->Error->Message);
        }
        $this->load->model('FlightTarcoSearchRsp');
        $FlightTarcoSearchRsp = new FlightTarcoSearchRsp($response);
        $this->data['sr'] = $FlightTarcoSearchRsp;
        $this->data['search'] = $form;
        $this->session->set_userdata("tr_search", $form);
        $this->load->library('Hotels/Hotels_lib');
        $this->data['search'] = $this->session->userdata("tr_search");
        $this->theme->view(self::VIEW . 'listing', $this->data, $this);
    }

    public function checkout()
    {

        $this->load->model('Admin/Countries_model');
        $payload = $this->input->post();
        $response = $this->TarcoClient->callService("PrepareFlights", array(
            "Offer" => array(
                "Ref" => $payload['Offer_Ref'],
                "RefItinerary" => $payload['Offer_RefItinerary']
            )
        ),$this->config);
        if ($response->ResponseInfo->Error != null) {
            exit($response->ResponseInfo->Error->Message);
        }
        $this->load->model('PrepareFlightsRsp');
        $FlightTarcoSearchRsp = new PrepareFlightsRsp($response);
        $data['DataAdapter'] = $FlightTarcoSearchRsp;
        $data['DataAdapter']->Ref = $payload['Offer_Ref'];
        $data['DataAdapter']->Offer_RefItinerary = $payload['Offer_RefItinerary'];
        $data['allcountries'] = $this->Countries_model->get_all_countries();
        $data["config"] = $this->config;
        $this->theme->view(self::VIEW . 'tarco_flight/checkout', $data, $this);
    }


    public function booking()
    {
        $Passengers = json_decode($this->input->post('Passengers'));
        $temp_Passengers = json_decode($this->input->post('Passengers'));
        $SpecialServices = json_decode($this->input->post('SpecialServices'));
        $Firstname = $this->input->post('Firstname');
        $Middlename = $this->input->post('Middlename');
        $CivilityCode = $this->input->post('CivilityCode');

        $Gender = $this->input->post('Gender');
        $IssueCountryCode = $this->input->post('IssueCountryCode');
        $NationalityCountryCode = $this->input->post('NationalityCountryCode');
        $DateOfBirth = $this->input->post('DateOfBirth');
        $DocumentExpiryDate = $this->input->post('DocumentExpiryDate');
        $DocumentIssuanceDate = $this->input->post('DocumentIssuanceDate');
        $DocumentTypeCode = $this->input->post('DocumentTypeCode');
        $DocumentNumber = $this->input->post('DocumentNumber');

        $Surname = $this->input->post('Surname');
        $FlightData = json_decode($this->input->post('FlightData'));
        foreach ($Passengers as $index => &$passenger) {
            $temppassenger = $temp_Passengers[$index];
            $passenger->NameElement->CivilityCode = $CivilityCode[$index];
            $passenger->NameElement->Firstname = $Firstname[$index];
            $passenger->NameElement->Middlename = $Middlename[$index];
            $passenger->NameElement->Surname = $Surname[$index];

            $temppassenger->CivilityCode = $CivilityCode[$index];
            $temppassenger->Firstname = $Firstname[$index];
            $temppassenger->Middlename = $Middlename[$index];
            $temppassenger->Surname = $Surname[$index];
            $temppassenger->Gender = $Gender[$index];
            $temppassenger->IssueCountryCode = $Gender[$index];
            $temppassenger->NationalityCountryCode = $NationalityCountryCode[$index];
            $temppassenger->IssueCountryCode = $IssueCountryCode[$index];
            $temppassenger->DocumentTypeCode = $DocumentTypeCode[$index];
            $temppassenger->DocumentNumber = $DocumentNumber[$index];
            $date_birth = explode("/", $DateOfBirth[$index]);
            $date_expiry = explode("/", $DocumentExpiryDate[$index]);
            $date_issuance = explode("/", $DocumentIssuanceDate[$index]);
            $temppassenger->DateOfBirth = $date_birth[2] . "-" . $date_birth[1] . "-" . $date_birth[0];
            $temppassenger->DocumentExpiryDate = $date_expiry[2] . "-" . $date_expiry[1] . "-" . $date_expiry[0];
            $temppassenger->DocumentIssuanceDate = $date_issuance[2] . "-" . $date_issuance[1] . "-" . $date_issuance[0];
        }
        foreach ($SpecialServices as &$service) {
            $passenger_temp = $this->get_passenger($temp_Passengers, $service->RefPassenger);
            if ($service->Code == "EXT-ADOB") {
                $service->Data->Adof->DateOfBirth = $passenger_temp->DateOfBirth . "T00:00:00";
            } elseif ($service->Code == "CTCE") {
                $service->Text = $this->input->post('email');
            } elseif ($service->Code == "CTCH") {
                $service->Text = str_replace(' ', '', $this->input->post('phone_number'));
            } elseif ($service->Code == "CTCM") {
                $service->Text = str_replace(' ', '', $this->input->post('phone_number'));
            }
            elseif ($service->Code == "DOCS") {
                $service->Data->Docs->Documents[] = (object)
                array(
                    "IssueCountryCode" => "FR",
                    "NationalityCountryCode" => "FR",
                    "Gender" => "M",
                    "DateOfBirth" => $passenger_temp->DateOfBirth . "T00:00:00",
                    "DocumentExpiryDate" => $passenger_temp->DocumentExpiryDate . "T00:00:00",
                    "DocumentIssuanceDate" => $passenger_temp->DocumentIssuanceDate . "T00:00:00",
                    "Firstname" => $passenger_temp->Firstname,
                    "Surname" => $passenger_temp->Surname,
                    "DocumentTypeCode" => $passenger_temp->DocumentTypeCode,
                    "DocumentNumber" => $passenger_temp->DocumentNumber
                );
            }
            elseif ($service->Code == "DOCO") {
                $service->Data->Doco->PlaceOfBirth = $passenger_temp->NationalityCountryCode;
            }
            elseif ($service->Code == "FOID") {
                $service->Data->Foid->DocumentTypeCode = $passenger_temp->DocumentTypeCode;
                $service->Data->Foid->DocumentNumber = $passenger_temp->DocumentNumber;
            }
        }
        $Offers = array(
            "Ref" => $this->input->post('Ref'),
            "RefItinerary" => $this->input->post('Offer_RefItinerary'));
        $request = array("Passengers" => $Passengers, "SpecialServices" => $SpecialServices, "Offer" => $Offers);


        $response = $this->TarcoClient->callService("CreateBooking", $request,$this->config);
        if (!empty($response->ResponseInfo->Error)) {
            echo json_encode(array("status"=>false , "msg"=>$response->ResponseInfo->Error->Message));
        } else {
            // Save booking
            $this->load->model('FlightTarco/TrFlights_model');
            $this->TrFlights_model->special_services = json_encode($SpecialServices);
            $this->TrFlights_model->passengers = json_encode($temp_Passengers);
            $this->TrFlights_model->flightData = json_encode($FlightData);
            $this->TrFlights_model->price = $this->input->post('Price');
            $this->TrFlights_model->Currency_code = $this->input->post('currcey_code');
            $this->TrFlights_model->status = "unpaid";
            $this->TrFlights_model->offer = json_encode($Offers);
            $this->TrFlights_model->created_at = date("Y-m-d H:i:s", time());
            $this->TrFlights_model->OriginCity = $FlightData[0]->departure_airport;
            $this->TrFlights_model->DestinationCity = $FlightData[0]->arrival_airport;
            $this->TrFlights_model->OriginCode = $FlightData[0]->OriginCode;
            $this->TrFlights_model->DestinationCode = $FlightData[0]->DestinationCode;
            $this->TrFlights_model->PnrCode = $response->Booking->PnrInformation->PnrCode;
            $this->TrFlights_model->save();
            echo json_encode(array("status"=>true , "msg"=>base_url("trflight/invoice/{$this->TrFlights_model->id}")));
        }
    }

    public function payments()
    {
        $this->load->model('FlightTarco/TrFlights_model');
        $post = $this->input->post();
        $checkoutResponse = $this->TrFlights_model->get_invoice($post["entityId"]);

        $this->load->library('CardDetector');
        $cardType = $this->CardDetector->detect($post["card"]["number"]);
        if (empty($cardType) && $cardType == "Invalid Card") {
            $response = array("status" => "false", "body" => "Ivilid Card Number");
            echo json_encode($response);
        } else {
            $post["card.number"] = $post["card"]["number"];

            $post["card.holder"] = $post["card"]["holder"];

            $post["card.expiryMonth"] = $post["card"]["expiryMonth"];

            $post["card.expiryYear"] = $post["card"]["expiryYear"];

            $post["card.cvv"] = $post["card"]["cvv"];
            unset($post["card"]);

            $post["entityId"] = "8ac7a4c86dc8f195016dc9fe442e0301";
            $post["currency"] = "SAR";
            $post["amount"] = $checkoutResponse->price;

            $post["shopperResultUrl"] = base_url("trflights/checkpaymentStatus?response_id=" . $checkoutResponse->id);
            $post["paymentBrand"] = strtoupper($cardType);

            echo json_encode($this->cur_req_post($post));
        }
    }

    public function checkpaymentStatus()
    {
        $params = $this->input->get();
        $response = $this->cur_req_get($params["id"]);
        $model_id = $params["response_id"];
        if($response["status"] == true){
            $this->load->model('FlightTarco/TrFlights_model');
            $checkoutResponse = $this->TrFlights_model->get_invoice($model_id);
            $passengers = json_decode($checkoutResponse->passengers)[0]->Surname;
            $UniqueID = array(
                "TypeCode"=>"PnrCodes",
                "ID"=>$checkoutResponse->PnrCode
            );
            $PassengerName = array(
                "PassengerName"=>$passengers
            );
            $Fops = array(array(
                    "Code"=>"Cash",
                    "Amount"=>$checkoutResponse->price,
                    "MiscInfo"=>array("RecordReferenceNumber"=>"2132131"),)
            );
            $request = array("UniqueID" => $UniqueID, "Verification" => $PassengerName, "Fops" => $Fops);
            $response = $this->TarcoClient->callService("CreateTicket", $request,$this->config);
            if(!empty($response->ResponseInfo->Error)){
                exit("There is some error in ticket confirmation please contact to your Administrator");
            }else{
                $this->TrFlights_model->update_invoice($model_id,"paid");
            }
            $this->load->helper('url');
            redirect(base_url("trflight/invoice/{$model_id}"));
        }else{
            redirect(base_url("trflight/invoice/{$model_id}"));
        }
    }

    public function cur_req_post($body)
    {

        $curl = curl_init();

        if($this->config->api_environment == "sandbox")
        {
            $base_url = "https://test.oppwa.com/v1/payments";
        }else{
            $base_url = "https://oppwa.com/payments";

        }
        curl_setopt_array($curl, array(
            CURLOPT_URL => $base_url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => http_build_query($body),
            CURLOPT_HTTPHEADER => array(
                "Authorization: Bearer OGFjN2E0Yzg2ZGM4ZjE5NTAxNmRjOWZiMDRjYTAyYzZ8cEdoSjdzek5hNQ==",
                "cache-control: no-cache"
            ),
        ));

        $response = json_decode(curl_exec($curl));
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            if (!empty($response->redirect)) {
                return array("status" => "true", "body" => $response);
            } else {
                return array("status" => "false", "body" => $response->result->description);

            }
        }

    }

    public function cur_req_get($id)
    {

        $curl = curl_init();

        if($this->config->api_environment == "sandbox")
        {
            $base_url = "https://test.oppwa.com/v1/payments/";
        }else{
            $base_url = "https://oppwa.com/payments/";

        }
        curl_setopt_array($curl, array(
            CURLOPT_URL => $base_url . $id . "?entityId=8ac7a4c86dc8f195016dc9fe442e0301",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "Authorization: Bearer OGFjN2E0Yzg2ZGM4ZjE5NTAxNmRjOWZiMDRjYTAyYzZ8cEdoSjdzek5hNQ==",
                "cache-control: no-cache"
            ),
        ));

        $response = json_decode(curl_exec($curl));


        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            if($response->result->code == "000.100.110"){
                return array("status" => "true", "body" => $response);
            }else{
                return array("status" => "false", "body" => $response->result->description);
            }
        }

    }

    public function get_passenger($Passengers_, $ref_segment)
    {
        foreach ($Passengers_ as $p) {
            if ($p->Ref == $ref_segment) {
                return $p;
            }
        }
    }
}
