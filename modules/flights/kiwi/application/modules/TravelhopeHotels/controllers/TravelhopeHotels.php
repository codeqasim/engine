<?php if (!defined('BASEPATH')) exit ('No direct script access allowed');

class TravelhopeHotels extends MX_Controller {

    const MODULE = "TravelhopeHotels";
    const SLUG = "thhotels";
    const THEME_MODULE = "modules/hotels/travelhopehotels/";
    const DB_TRAVELHOPE_SESSION_KEY = "travelHopeHotelReqSessionKey";
    private $config = [];

    public function __construct() 
	{
		parent :: __construct();
		$chk = $this->App->service('ModuleService')->isActive(self::MODULE);
        if (!$chk) { Error_404($this); }

        $ci = get_instance();
        $version = implode("=>",(array)$ci->db->query('SELECT VERSION()')->result()[0]);
        if($version > 5.6)
        {
        $ci->db->query('SET SESSION sql_mode = ""');
        $ci->db->query('SET SESSION sql_mode =
        REPLACE(REPLACE(REPLACE(
        @@sql_mode,
        "ONLY_FULL_GROUP_BY,", ""),
        ",ONLY_FULL_GROUP_BY", ""),
        "ONLY_FULL_GROUP_BY", "")');
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

        $this->load->library('TravelhopeHotels/ApiClient');
        $this->load->model('TravelhopeHotels/TravelhopeHotelsSearchForm');
        $this->load->library('Hotels/Hotels_lib');
        $this->load->model('TravelhopeHotels/BookinngEngineBookings');
        $this->config = $this->App->service('ModuleService')->get(self::MODULE)->apiConfig;
        $this->client_ip = $this->input->ip_address();
    }

    public function index()
    {
        redirect('/');
    }

    public function payment_success()
    {
    echo "Booking Confirmed";
    }

    public function pay()
    {
        $price = $this->input->post("price");
        $currency = $this->input->post("currency");
        if(!empty($price) )
        {
            $data['price'] = $price;
            $data['currency'] = $currency;
            $this->theme->view('paddle', $data,$this);
        }else{
            exit("price must be number");
        }
    }

    /**
     * @param mixed ...$args
     */
    public function search(...$args)
    {
        $this->session->set_userdata("thhotelsSearchForm", $args);
        $searchForm = new TravelhopeHotelsSearchForm();
        $searchForm->parseUriString($args);
        $searchForm->setOtaId($this->config->ota_id);
        $searchForm->setCurrency($this->Hotels_lib->currencycode);
        $searchForm->setIpAddress($this->client_ip);

        $thfBooking = new BookinngEngineBookings();
        $session_key = sha1(time());
        $thfBooking->setSessionKey($session_key);
        // store key in session
        $this->session->set_userdata(self::DB_TRAVELHOPE_SESSION_KEY, $session_key);
        $thfBooking->setSearchRequest($searchForm->getInJson());
        $thfBooking->setDestination($searchForm->getDestination());
        $thfBooking->setCheckin($searchForm->getCheckin());
        $thfBooking->setCheckout($searchForm->getCheckout());
        $thfBooking->setAdults($searchForm->getAdults());
        $thfBooking->setChildren($searchForm->getChildren());

        $thope = new ApiClient($this->config);
        log_message('debug', 'SearchRequest[travelhopeHotels]: ' . $searchForm->getInJson());
        $response = $thope->sendRequest('GET', 'search', $searchForm);
        log_message('debug', 'SearchResponse[travelhopeHotels]: ' . $response);

        $thfBooking->setSearchResponse($response);
//        $thfBooking->save();

        $response = json_decode($response);
        $data['hotels'] = array();
        if (isset($response->data)) {
            $data['hotels'] = $response->data;
        }
        $this->load->model('TravelhopeHotels/HotelsSearchModel');

        $args = explode('/',  $this->uri->uri_string());
        unset($args[0]);
        unset($args[1]);
        $segments = array_merge($args);
        $search = new HotelsSearchModel();
        $search->parseUriString($segments);
        $this->session->set_userdata('TravelhopeHotels',serialize($search));

        $data['pageTitle'] = 'Hotels Results' ;
        $data['searchForm'] = $searchForm;
        $data['appModule'] = self::MODULE;
        $this->theme->view(self::THEME_MODULE.'/listing', $data, $this);
    }

    public function detail($slug = '')
    {
        $thope_local_session_key = $this->session->userdata(self::DB_TRAVELHOPE_SESSION_KEY);
        $thfBooking = new BookinngEngineBookings();
        $thfBooking->loadBySessionKey($thope_local_session_key);

        $hotel_id = $this->input->post('hotel_id');
        $custom_payload = $this->input->post('custom_payload');
        $search_form = $this->input->post('search_form');

        $searchForm = new TravelhopeHotelsSearchForm();
        $searchForm->populate(json_decode($search_form));
        $searchForm->hotel_id = $hotel_id;
        $searchForm->custom_payload = $custom_payload;

        $detailRequestPayload = array(
            'currency' => $searchForm->getCurrency(),
            'checkin' => $searchForm->getCheckin(),
            'checkout' => $searchForm->getCheckout(),
            'hotel_id' => $searchForm->hotel_id,
            'ip_address' => $searchForm->getIpAddress(),
            'ota_id' => $searchForm->getOtaId(),
            'vendor' => $searchForm->getVendor(),
            'custom_payload' => $searchForm->custom_payload
        );
        $thope = new ApiClient($this->config);
        $thfBooking->setCheckoutRequest(json_encode($detailRequestPayload));
        log_message('debug', 'DeatilRequest[travelhopeHotels]: ' . json_encode($detailRequestPayload));
        $response = $thope->sendRequest('GET', 'details', $detailRequestPayload);
        log_message('debug', 'DeatilResponse[travelhopeHotels]: ' . $response);
        $thfBooking->setCheckoutResponse($response);

        $response = json_decode($response);
        $data['hotel'] = array();
        if (isset($response->hotels)) {
            $data['hotel'] = $response->hotels;
        }

        $thfBooking->update();

        $searchForm->checkin = date('Y-m-d', strtotime($searchForm->checkin));
        $searchForm->checkout = date('Y-m-d', strtotime($searchForm->checkout));
        $data['searchForm'] = $searchForm;
        $data['search_form'] = $search_form;
        $data['custom_payload'] = $custom_payload;

        $this->theme->view(self::THEME_MODULE.'/details', $data, $this);
    }

    public function recheck($slug = '')
    {
        $checkin = $this->input->post('checkin');
        $checkout = $this->input->post('checkout');
        $adults = $this->input->post('adults');
        $children = $this->input->post('children');
        $hotel_id = $this->input->post('hotel_id');
        $custom_payload = $this->input->post('custom_payload');
        $search_form = $this->input->post('search_form');

        $searchForm = new TravelhopeHotelsSearchForm();
        $searchForm->populate(json_decode($search_form));
        $searchForm->setAction(base_url('thhotels/recheck'));
        $searchForm->setCheckin($checkin);
        $searchForm->setCheckout($checkout);
        $searchForm->setAdults($adults);
        $searchForm->setChildren($children);
        $searchForm->hotel_id = $hotel_id;
        $searchForm->custom_payload = $custom_payload;

        $detailRequestPayload = array(
            'currency' => $searchForm->getCurrency(),
            'checkin' => $searchForm->getCheckin(),
            'checkout' => $searchForm->getCheckout(),
            'hotel_id' => $searchForm->hotel_id,
            'ip_address' => $searchForm->getIpAddress(),
            'ota_id' => $searchForm->getOtaId(),
            'vendor' => $searchForm->getVendor(),
            'custom_payload' => $searchForm->custom_payload
        );

        $thope = new ApiClient($this->config);
        log_message('debug', 'DeatilRequest[travelhopeHotels]: ' . json_encode($detailRequestPayload));
        $response = $thope->sendRequest('GET', 'details', $detailRequestPayload);
        log_message('debug', 'DeatilResponse[travelhopeHotels]: ' . $response);

        $response = json_decode($response);
        $data['hotel'] = array();
        if (isset($response->hotels)) {
            $data['hotel'] = $response->hotels;
        }

        $searchForm->checkin = date('Y-m-d', strtotime($searchForm->checkin));
        $searchForm->checkout = date('Y-m-d', strtotime($searchForm->checkout));
        $data['searchForm'] = $searchForm;
        $data['search_form'] = $search_form;
        $data['custom_payload'] = $custom_payload;

        $this->theme->view(self::THEME_MODULE.'/details', $data, $this);
    }

    public function checkout()
    {
        $this->load->model('Admin/Countries_model');
        $data['hotel_encoded'] = $this->input->post('hotel');
        $data['room_encoded'] = $this->input->post('room');
        $data['search_form_encoded'] = $this->input->post('search_form');
        $data['hotel'] = json_decode(base64_decode($data['hotel_encoded']));
        $data['room'] = json_decode(base64_decode($data['room_encoded']));
        $search_form = json_decode(base64_decode($data['search_form_encoded']));
        $searchForm = new TravelhopeHotelsSearchForm();
        $searchForm->populate($search_form);
        $data['searchForm'] = $searchForm;
        $user_id = $this->session->userdata('pt_logged_customer');
        $data['userAuthorization'] = (isset($user_id) && ! empty($user_id)) ? 1 : 0;
        $data['pageTitle'] = 'Hotels Booking Checkout' ;
        $data['allcountries'] = $this->Countries_model->get_all_countries();
        $this->theme->view(self::THEME_MODULE.'/checkout', $data, $this);
    }

    public function booking()
    {
        $user_id = $this->session->userdata('pt_logged_customer');
        $thope_local_session_key = $this->session->userdata(self::DB_TRAVELHOPE_SESSION_KEY);

        // Post data
        $payload = $this->input->post();
        $search_form = json_decode(base64_decode($payload['search_form']));
        $hotel = json_decode(base64_decode($payload['hotel']));
        $room = json_decode(base64_decode($payload['room']));
        $searchForm = new TravelhopeHotelsSearchForm();
        $searchForm->populate($search_form);

        // Booking object
        $thfBooking = new BookinngEngineBookings();
        $thfBooking->loadBySessionKey($thope_local_session_key);
        $thfBooking->setUserId($user_id);
        $thfBooking->setHotelName($hotel->company_name);
        $thfBooking->setRoomName($room->room_name);
        $thfBooking->setPrice($room->price);
        $thfBooking->setCurrency($searchForm->getCurrency());
        $thfBooking->setCheckin($searchForm->getCheckin());
        $thfBooking->setCheckout($searchForm->getCheckout());
        $thfBooking->setAdults($searchForm->getAdults());
        $thfBooking->setChildren($searchForm->getChildren());

        $this->load->model(self::MODULE.'/Booking');
        $booking = new Booking();
        $booking->setAccount([
            'title' => $payload['title'],
            'first_name' => $payload['first_name'],
            'last_name' => $payload['last_name'],
            'email' => $payload['email'],
            'mobile_code' => $payload['mobile_code'],
            'number' => $payload['number']
        ]);
        $booking->setPaymentDetails([
            'name_card' => $payload['name_card'],
            'card_no' => $payload['card_no'],
            'month' => $payload['month'],
            'year' => $payload['year'],
            'security_code' => $payload['security_code']
        ]);
        $booking->setHotelData([
            'hotel_id' => $hotel->id,
            'hotel_name' => $hotel->company_name,
            'room_name' => $room->room_name,
            'rating' => $hotel->rating,
            'address' => $hotel->address,
            'mobile_number' => $hotel->mobile_number,
            'longitude' => $hotel->longitude,
            'latitude' => $hotel->latitude
        ]);
        $booking->setRoomData([
            'checkin' => $searchForm->getCheckin(),
            'checkout' => $searchForm->getCheckout(),
            'adults' => $searchForm->getAdults(),
            'children' => $searchForm->getChildren(),
            'room_id' => $room->id,
            'price' => $room->price,
            'currency' => $searchForm->getCurrency()
        ]);
        $booking->setOtaId($searchForm->getOtaId());
        $booking->setVendor($searchForm->getVendor());
        $booking->setIpAddress($searchForm->getIpAddress());

        $thope = new ApiClient($this->config);
        log_message('debug', 'BookingRequest[travelhopeHotels]: ' . $booking->toJson());
        $thfBooking->setBookingRequest($booking->toJson());
        $response = $thope->sendRequest('POST', 'booking', $booking->toJson(), array('Content-Type:application/json'));
        $thfBooking->setBookingResponse($response);
        log_message('debug', 'BookingResponse[travelhopeHotels]: ' . $response);

        $response = json_decode($response);

        if ($response->code == 200) {
            // log response in db.
            $thfBooking->setBookingId($response->data->id);
            $response->{'status'} = 'success';
            $response->{'message'} = 'Booking generated successfully';
            $response->{'invoice_url'} = base_url(self::SLUG."/invoice/{$thfBooking->getId()}?n=y");
        } else {
            $response->{'status'} = 'fail';
            $response->{'message'} = 'Unable to generate booking';
        }

        $thfBooking->update();

        $this->output->set_content_type('application/json');
        $this->output->set_output(json_encode($response));
    }
}
