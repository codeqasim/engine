<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Juniper extends MX_Controller
{
  public $sandbox_mode = false;

  public function __construct()
  {
    parent::__construct();
    modules::load('Front');
    $chk = $this->App->service('ModuleService')->isActive('Juniper');
    if (!$chk) {
      Error_404($this);
    }

    $this->data['lang_set'] = $this->session->userdata('set_lang');
    $this->data['phone'] = $this->load->get_var('phone');
    $this->data['contactemail'] = $this->load->get_var('contactemail');
    $defaultlang = pt_get_default_language();
    if (empty($this->data['lang_set'])) {
      $this->data['lang_set'] = $defaultlang;
    }
    $this->lang->load("front", $this->data['lang_set']);
    $this->data['hideLang'] = "show";
    $this->data['hideCurr'] = "";
    $this->data['appModule'] = 'Juniper';
    $this->load->module("Juniper");
    $this->load->model('Juniper/Juniper_model');
    $this->load->library('Juniper_lib');
    $this->load->helper("all");

    header("Cache-Control: no cache");
    session_cache_limiter("private_no_expire");
  }

  public function redirect(){
    redirect(site_url());
  }

  public function index()
  {  
    $module_setting = $this->App->service("ModuleService")->get("Juniper");
    if (!empty($this->input->post())) {

      $this->session->unset_userdata('data');
      $this->session->unset_userdata('search_param');
      $params = array(
        'nationality' => $this->input->post('juniper_nationality'),
        'checkin_date' => $this->input->post('juniper_checkin_date'),
        'checkout_date' => $this->input->post('juniper_checkout_date'),
        'city' => $this->input->post('juniper_city'),
        'room_type' => $this->input->post('type'),
        'room_required' => $this->input->post('required'),
        'category'=>(!empty($this->input->post('category')))?$this->input->post('category'):"",
        'stars' => (!empty($this->input->post('stars')))?$this->input->post('stars'):""
      );
      if (!empty($params['category'])) { $category = '<category code="'.$params['category'].'"/>';  } else { $category = ''; }
      if (!empty($params['stars'])) { $stars = '<stars><star>'.$params['stars'].'</star></stars>';  } else { $stars = ''; }

      if($module_setting->apiConfig->mode == 1){
        $query ="
        <query type=\"availability\" product=\"hotel\">
        <nationality>".$params['nationality']."</nationality>
        <filters>
        <filter>AVAILONLY</filter>
        <filter>BESTARRANGMENT</filter> 
        </filters>
        <checkin date=\"".$params['checkin_date']."\"/>
        <checkout date=\"".$params['checkout_date']."\"/>
        <city code=\"".$params['city']."\"/>
        ".$category."
        <details>
        <room type=\"".$params['room_type']."\" required=\"".$params['room_required']."\"/>
        </details>
        ".$stars."
        </query>";
        $hotel_data = $this->Juniper_lib->curl_request($query);
      } else {
        $apidata = file_get_contents('data.xml');
        $data_from_api = simplexml_load_string($apidata); 
        $data_from_api = json_encode($data_from_api); 
        $data_from_api = json_decode($data_from_api,true); 
        $hotel_data = json_change_key($data_from_api,'@attributes','attributes');
      } 

      $updated_data = $this->Juniper_lib->hotel_data($hotel_data);
      $this->session->set_userdata('data',$updated_data);
      $this->session->set_userdata('search_param',$params);
    }
    $this->data['pageTitle'] = "Hotels";
    $this->data['search_param'] = $this->session->userdata('search_param');
    $this->data['hotel_data'] = $this->session->userdata('data');
    $this->data['moduleSetting'] = $module_setting;
    $this->data['commission'] = $this->data['moduleSetting']->apiConfig->commission;
    $this->theme->view("modules/juniper/listing", $this->data, $this);

    //dd($hotel_data);
  }


  function get_hotels_data($id = 0){ 
    if ($id == 0) {
      redirect(site_url('juniper'));
    }
    $query = "
    <query type=\"details\" product=\"hotel\">
    <hotel id=\"".$id."\"/>
    </query>";
    $curl_request = $this->Juniper_lib->curl_request($query);
    $this->data['hotel_data'] = $this->Juniper_lib->get_hotel_data($curl_request);
    $this->data['current_hotel'] = $id;
    $this->data['pageTitle'] = $this->data['hotel_data']['hotel_name'];
    $this->data['moduleSetting'] = $this->App->service("ModuleService")->get("Juniper");
    $this->data['commission'] = $this->data['moduleSetting']->apiConfig->commission;
    $this->data['all_hotels'] = $this->session->userdata('data');
    $this->data['search_param'] = $this->session->userdata('search_param');
    $this->theme->view("modules/juniper/details", $this->data, $this);
    //dd($this->data['hotel_data']);
  }

  function booking(){
    $this->data['data'] = $this->input->post();
    $this->data['moduleSetting'] = $this->App->service("ModuleService")->get("Juniper");
    $this->data['commission'] = $this->data['moduleSetting']->apiConfig->commission;
    $this->theme->view("modules/juniper/booking", $this->data, $this);
  }

  function booking_confirm(){
    $data = $this->input->post();
    $params = array(
      'name' => clean_data($data['name']),
      'email' => clean_data($data['email']),
      'phone' => clean_data($data['phone']),
      'address' => clean_data($data['address']),
      'additionalnotes' => clean_data($data['additionalnotes']),
      'nationality' => clean_data($data['juniper_nationality']),
      'checkin_date' => clean_data($data['juniper_checkin_date']),
      'checkout_date' => clean_data($data['juniper_checkout_date']),
      'city' => clean_data($data['juniper_city']),
      'hotel_code' => clean_data($data['hotel_code']),
      'agreement' => clean_data($data['agreement']),
      'hotel_name' => clean_data($data['hotel_name']),
      'hotel_address' => clean_data($data['hotel_address']),
      'type' => clean_data($data['type']),
      'currency' => clean_data($data['currency']),
      'required' => clean_data($data['required']),
      'total_price_room' => clean_data($data['total_price_room'])
    );
    $reference = $this->Juniper_model->insert_booking($params);
    $room_types = array(
      'SGL' => 0, 
      'TSU' => 1,
      'TWN' => 1,
      'DBL'=> 1,
      'TRP' => 2
    ); 
        // dd($data);
    $count = count($this->input->post('leader'));
    $leader = $this->input->post('leader');
    $room_count_type = $room_types[$this->input->post('type')];
    $rooms = ""; 
    $passengers = $this->input->post('passenger');
    for ($i=0; $i < $count ; $i++) {
      $rooms .= '<room type="'.$data['type'].'"  extrabed="false">';
      $rooms .= '<pax leader="true" title="'.$leader[$i]['title'].'" name="'.$leader[$i]['name'].'" surname="'.$leader[$i]['surname'].'"/>';
      $params_leader_room = array(
        'leader' => '1', 
        'title' => $leader[$i]['title'],
        'name' => $leader[$i]['name'],
        'surname' => $leader[$i]['surname'],
        'reference' => $reference,
      );
      $this->Juniper_model->insert_rooms($params_leader_room);
      if ($room_count_type > 0) {
        for ($j=0; $j < $room_count_type ; $j++) { 
          $params_passenger_room = array(
            'leader' => '0',
            'title' => $passengers[$i]['title'],
            'name' => $passengers[$i]['name'],
            'surname' => $passengers[$i]['surname'],
            'reference' => $reference,
          );
          $this->Juniper_model->insert_rooms($params_passenger_room);
          $rooms .= '<pax title="'.$passengers[$i]['title'].'" name="'.$passengers[$i]['name'].'" surname="'.$passengers[$i]['surname'].'"/>';
        }
      }
      $rooms .= '</room>';
    }

    $request = "
    <query type=\"book\" product=\"hotel\">
    <search number=\"1238\"/>
    <synchronous value=\"true\"/>
    <nationality>".$data['juniper_nationality']."</nationality>
    <checkin date=\"".$data['juniper_checkin_date']."\"/>
    <checkout date=\"".$data['juniper_checkout_date']."\"/>
    <city code=\"".$data['juniper_city']."\"/>
    <availonly value=\"true\" />
    <hotel code=\"".$data['hotel_code']."\" agreement=\"".$data['agreement']."\"/>
    <reference code=\"".$reference."\"/>
    <details>".$rooms."
    </details>
    </query>";

    //echo htmlspecialchars($request);
    $curl_request = $this->Juniper_lib->curl_request($request);
    $booking_data = $this->Juniper_lib->booking_data($curl_request);

    if(empty($booking_data['error'])){
      $this->Juniper_model->insert_booking_response($booking_data);
      $this->data['msg'] = '<div class="alert alert-success">Your request has been received. We will contact you shortly.</div>';
    } else {
      $this->data['msg'] = '<div class="alert alert-danger">'.$booking_data['error'].'</div>';            
    }
   $this->theme->view("modules/juniper/booking_confirm", $this->data, $this);
   // dd($booking_data);
  }

  function countries(){
    $cities = $this->Juniper_model->all_cities();
    foreach ($cities as $value) {
      $country = $this->Juniper_model->get_country($value['country_code']);
      $params = array(
        'country_name' => $country
      );
      $this->Juniper_model->update($value['id'],$params);
    }
  }

  function test(){
    $data = "<envelope>
    <header>
    <actor>ALG16000381</actor>
    <user>xmluser</user>
    <password>sassixxml</password>
    <version>1.6.0</version>
    <timestamp>20181120100000</timestamp>
    </header>
    <query type=\"availability\" product=\"hotel\">
    <nationality>PK</nationality>
    <checkin date=\"2018-11-25\"/>
    <checkout date=\"2018-11-26\"/>
    <city code=\"LON\"/>
    <details>
    <room type=\"sgl\" required=\"3\"/>
    </details>
    </query>
    </envelope>
    ";

    $url = "http://towers.netstorming.net/kalima/call.php";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $data = curl_exec($ch);
    curl_close($ch);
    $array_data = json_decode(json_encode(simplexml_load_string($data)), true);
    print_r('<pre>');
    print_r($array_data);
    print_r('</pre>');
  }
}