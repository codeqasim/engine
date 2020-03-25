<?php
class Juniper_lib {
    function __construct() {
        $this->ci =& get_instance(); 
        $this->ci->load->model('Juniper/Juniper_model'); 
    }

    function curl_request($query){

        $secret_data = $this->ci->Juniper_model->get_sercet_keys();
        $api_credentials =  json_decode($secret_data,true);
        $actor = $api_credentials['apiConfig']['actor'];
        $user = $api_credentials['apiConfig']['user'];
        $password = $api_credentials['apiConfig']['password'];

        $time = time();
        $timestamp = date("Ymdhis");

        $data = "<envelope>
        <header>
        <actor>".$actor."</actor>
        <user>".$user."</user>
        <password>".$password."</password>
        <version>1.6.0</version>
        <timestamp>".$timestamp."</timestamp>
        </header>".$query."</envelope>";

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "http://towers.netstorming.net/kalima/call.php");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        $response = curl_exec($ch);
        curl_close($ch);
        $data_from_api = simplexml_load_string($response); 
        $data_from_api = json_encode($data_from_api); 
        $data_from_api = json_decode($data_from_api,true); 
        $hotel_data = json_change_key($data_from_api,'@attributes','attributes');
        return $hotel_data;
    }

    function hotel_data($hotel_data) {
        if (!empty($hotel_data['response']["hotels"])) {
          foreach ($hotel_data['response']['hotels']['hotel'] as $key => $value) {
            $i = 1;
            if (!empty($value['agreement']['room'])) {
                $room_data[0] = array(
                    'hotel_booking_id'=> $value['agreement']['attributes']['id'],
                    'hotel_available'=> $value['agreement']['attributes']['available'],
                    'hotel_room_basis'=> $value['agreement']['attributes']['room_basis'],
                    'hotel_meal_basis'=> $value['agreement']['attributes']['meal_basis'],
                    'hotel_ctype'=> $value['agreement']['attributes']['ctype'],
                    'hotel_c_type'=> $value['agreement']['attributes']['c_type'],
                    'hotel_room_type'=> $value['agreement']['attributes']['room_type'],
                    'hotel_is_dynamic'=> $value['agreement']['attributes']['is_dynamic'],
                    'hotel_currency'=> $value['agreement']['attributes']['currency'],
                    'hotel_total'=> $value['agreement']['attributes']['total'],
                    'hotel_total_gross'=> $value['agreement']['attributes']['total_gross'],
                    'hotel_original_total'=> $value['agreement']['attributes']['original_total'],
                    'hotel_special'=> $value['agreement']['attributes']['special'],
                    'hotel_room_type_individual' => $value['agreement']['room']['attributes']['type'],
                    'hotel_room_required' => $value['agreement']['room']['attributes']['required'],
                    'hotel_room_occupancy' => ($value['agreement']['room']['attributes']['occupancy'])?$value['agreement']['room']['attributes']['occupancy']:0,
                    'hotel_room_occupancyChild' => (!empty($value['agreement']['room']['attributes']['occupancyChild']))?$value['agreement']['room']['attributes']['occupancyChild']:0,
                    'hotel_room_occupancyInfant' => (!empty($value['agreement']['room']['attributes']['occupancyInfant']))?$value['agreement']['room']['attributes']['occupancyInfant']:0,
                    'hotel_room_from' => $value['agreement']['room']['price']['attributes']['from'],
                    'hotel_room_to' => $value['agreement']['room']['price']['attributes']['to'],
                    'hotel_room_nett' => $value['agreement']['room']['price']['roomprice']['attributes']['nett'],
                    'hotel_room_gross' => $value['agreement']['room']['price']['roomprice']['attributes']['gross']
                );  
                $price = $value['agreement']['room']['price']['roomprice']['attributes']['gross'];
                $currency = $value['agreement']['attributes']['currency'];
            } else {
                foreach ($value['agreement'] as $key2 => $rooms) {
                  $room_data[] = array(
                    'hotel_booking_id'=> $rooms['attributes']['id'],
                    'hotel_available'=> $rooms['attributes']['available'],
                    'hotel_room_basis'=> $rooms['attributes']['room_basis'],
                    'hotel_meal_basis'=> $rooms['attributes']['meal_basis'],
                    'hotel_ctype'=> $rooms['attributes']['ctype'],
                    'hotel_c_type'=> $rooms['attributes']['c_type'],
                    'hotel_room_type'=> $rooms['attributes']['room_type'],
                    'hotel_is_dynamic'=> $rooms['attributes']['is_dynamic'],
                    'hotel_currency'=> $rooms['attributes']['currency'],
                    'hotel_total'=> $rooms['attributes']['total'],
                    'hotel_total_gross'=> $rooms['attributes']['total_gross'],
                    'hotel_original_total'=> $rooms['attributes']['original_total'],
                    'hotel_special'=> $rooms['attributes']['special'],
                    'hotel_room_type_individual' => $rooms['room']['attributes']['type'],
                    'hotel_room_required' => $rooms['room']['attributes']['required'],
                    'hotel_room_occupancy' => ($rooms['room']['attributes']['occupancy'])?$rooms['room']['attributes']['occupancy']:0,
                    'hotel_room_occupancyChild' => (!empty($rooms['room']['attributes']['occupancyChild']))?$rooms['room']['attributes']['occupancyChild']:0,
                    'hotel_room_occupancyInfant' => (!empty($rooms['room']['attributes']['occupancyInfant']))?$rooms['room']['attributes']['occupancyInfant']:0,
                    'hotel_room_from' => $rooms['room']['price']['attributes']['from'],
                    'hotel_room_to' => $rooms['room']['price']['attributes']['to'],
                    'hotel_room_nett' => $rooms['room']['price']['roomprice']['attributes']['nett'],
                    'hotel_room_gross' => $rooms['room']['price']['roomprice']['attributes']['gross']
                );
                  if ($i == 1) {
                    $price = $rooms['room']['price']['roomprice']['attributes']['gross'];
                    $currency = $rooms['attributes']['currency'];
                } else {
                    if ($price > $rooms['room']['price']['roomprice']['attributes']['gross']) {
                        $price = $rooms['room']['price']['roomprice']['attributes']['gross'];
                        $currency = $rooms['attributes']['currency'];
                    }
                }
                $i++;
            }
        }


        $segments[$value['attributes']['code']] = array(
         'hotel_code' => $value['attributes']['code'],
         'hotel_name' => $value['attributes']['name'],
         'hotel_stars' => $value['attributes']['stars'],
         'hotel_location' =>$value['attributes']['location'],
         'hotel_address' =>$value['attributes']['address'],
         'hotel_promo' =>$value['attributes']['promo'],
         'hotel_city' =>$value['attributes']['city'],
         'hotel_price' => $price,
         'hotel_currency' => $currency,
         'room_data' => $room_data
     );
    }
      //dd($segments);
}
return array('segments' => $segments);
}

function get_hotel_data($hotel_data){
    if (!empty($hotel_data['response']["attributes"]['type'])) {
        $picture = array();
        $image_count = count($hotel_data['response']['pictures']['picture']);
        $counter = 0;
        for ($i=0; $i < $image_count ; $i++) { 

            $picture[$i] = $hotel_data['response']['pictures']['picture'][$i]['attributes']['src'];

        }    
    }
    $data_all = array(
        'count' => count($hotel_data['response']),
        'hotel_name' => $hotel_data['response']['name']['attributes']['value'],
        'stars' => $hotel_data['response']['stars']['attributes']['value'],
        'location' => $hotel_data['response']['location']['attributes']['value'],
        'lg' => $hotel_data['response']['lg']['attributes']['value'],
        'lt' => $hotel_data['response']['lt']['attributes']['value'],
        'sgl' => $hotel_data['response']['hotelfacilities']['sgl']['attributes']['value'],
        'dbl' => $hotel_data['response']['hotelfacilities']['dbl']['attributes']['value'],
        'twn' => $hotel_data['response']['hotelfacilities']['twn']['attributes']['value'],
        'trp' => $hotel_data['response']['hotelfacilities']['trp']['attributes']['value'],
        'qdr' => $hotel_data['response']['hotelfacilities']['qdr']['attributes']['value'],
        'start_porter' => $hotel_data['response']['hotelfacilities']['start_porter']['attributes']['value'],
        'end_porter' => $hotel_data['response']['hotelfacilities']['end_porter']['attributes']['value'],
        'checkin' => $hotel_data['response']['hotelfacilities']['checkin']['attributes']['value'],
        'start_roomservice' => $hotel_data['response']['hotelfacilities']['start_roomservice']['attributes']['value'], 
        'end_roomservice' => $hotel_data['response']['hotelfacilities']['end_roomservice']['attributes']['value'],
        'travel_agency' => $hotel_data['response']['hotelfacilities']['travel_agency']['attributes']['value'],
        'classification' => $hotel_data['response']['classification']['attributes']['value'],
        'park_auto' => $hotel_data['response']['park_auto']['attributes']['value'],
        'block_descriptions' => $hotel_data['response']['block_descriptions']['attributes']['value'],
        'facilities' => $hotel_data['response']['facilities']['attributes']['value'],
        'sauna' => $hotel_data['response']['sauna']['attributes']['value'],
        'vote' => $hotel_data['response']['vote']['attributes']['value'],
        'film' => $hotel_data['response']['film']['attributes']['value'],
        'zone' => $hotel_data['response']['zone']['attributes']['value'],
        'tennis' => $hotel_data['response']['tennis']['attributes']['value'],
        'fast' => $hotel_data['response']['fast']['attributes']['value'],
        'station' => $hotel_data['response']['station']['attributes']['value'],
        'nosmoking' => $hotel_data['response']['nosmoking']['attributes']['value'],
        'conference' => $hotel_data['response']['hotelfacilities']['conference']['attributes']['value'],
        'projector' => $hotel_data['response']['hotelfacilities']['projector']['attributes']['value'],
        'mic' => $hotel_data['response']['hotelfacilities']['mic']['attributes']['value'],
        'dinner' => $hotel_data['response']['hotelfacilities']['dinner']['attributes']['value'],
        'lifts' => $hotel_data['response']['hotelfacilities']['lifts']['attributes']['value'],
        'internet' => $hotel_data['response']['hotelfacilities']['internet']['attributes']['value'],
        'soccer' => $hotel_data['response']['hotelfacilities']['soccer']['attributes']['value'],
        'lobby_size' => $hotel_data['response']['hotelfacilities']['lobby_size']['attributes']['value'],
        'suites' => $hotel_data['response']['hotelfacilities']['suites']['attributes']['value'],
        'laundry' => $hotel_data['response']['hotelfacilities']['laundry']['attributes']['value'],
        'beauty' => $hotel_data['response']['hotelfacilities']['beauty']['attributes']['value'],
        'park_bus' => $hotel_data['response']['hotelfacilities']['park_bus']['attributes']['value'],
        'garage_auto' => $hotel_data['response']['hotelfacilities']['garage_auto']['attributes']['value'],
        'coach_dropoff' => $hotel_data['response']['hotelfacilities']['coach_dropoff']['attributes']['value'],
        'busstop' => $hotel_data['response']['hotelfacilities']['busstop']['attributes']['value'],
        'animals' => $hotel_data['response']['hotelfacilities']['animals']['attributes']['value'],
        'lightboard' => $hotel_data['response']['hotelfacilities']['lightboard']['attributes']['value'],
        'dblext' => $hotel_data['response']['hotelfacilities']['dblext']['attributes']['value'],
        'bar' => $hotel_data['response']['hotelfacilities']['bar']['attributes']['value'],
        'shuttle_station' => $hotel_data['response']['hotelfacilities']['shuttle_station']['attributes']['value'],
        'twnext' => $hotel_data['response']['hotelfacilities']['twnext']['attributes']['value'],
        'coach_parking' => $hotel_data['response']['hotelfacilities']['coach_parking']['attributes']['value'],
        'pool_close' => $hotel_data['response']['hotelfacilities']['pool_close']['attributes']['value'],
        'fax' => $hotel_data['response']['fax']['attributes']['value'],
        'description' => $hotel_data['response']['description']['attributes']['value'],
        'pool_hot' => $hotel_data['response']['pool_hot']['attributes']['value'],
        'boutique' => $hotel_data['response']['boutique']['attributes']['value'],
        'gym' => $hotel_data['response']['gym']['attributes']['value'],
        'telephone' => $hotel_data['response']['telephone']['attributes']['value'],
        'shuttle_apt' => $hotel_data['response']['shuttle_apt']['attributes']['value'],
        'shuttle_center' => $hotel_data['response']['shuttle_center']['attributes']['value'],
        'address' => $hotel_data['response']['address']['attributes']['value'],
        'rfacilities' => $hotel_data['response']['roomsfacilities']['rfacilities']['attributes']['value'],
        'flatiron' => $hotel_data['response']['roomsfacilities']['flatiron']['attributes']['value'],
        'minibar' => $hotel_data['response']['roomsfacilities']['minibar']['attributes']['value'],
        'tv' => $hotel_data['response']['roomsfacilities']['tv']['attributes']['value'],
        'pantsiron' => $hotel_data['response']['roomsfacilities']['pantsiron']['attributes']['value'],
        'alarm' => $hotel_data['response']['roomsfacilities']['alarm']['attributes']['value'],
        'safe' => $hotel_data['response']['roomsfacilities']['safe']['attributes']['value'],
        'paytv' => $hotel_data['response']['roomsfacilities']['paytv']['attributes']['value'],
        'wifi' => $hotel_data['response']['roomsfacilities']['wifi']['attributes']['value'],
        'rtelephone' => $hotel_data['response']['roomsfacilities']['rtelephone']['attributes']['value'],
        'tvsat' => $hotel_data['response']['roomsfacilities']['tvsat']['attributes']['value'],
        'radio' => $hotel_data['response']['roomsfacilities']['radio']['attributes']['value'],
        'pictures' => $picture


    );
return $data_all;
}

function booking_data($data){
    if (!empty($data['response']['supplier'])) { 
        $hotel_data = $data['response']['hotel']['attributes'];
        $array = array(
            'supplier' =>$data['response']['supplier']['attributes']['code'],
            'booking_id' => $data['response']['booking']['attributes']['code'],
            'status' => $data['response']['status']['attributes']['code'],
            'reference' => $data['response']['reference']['attributes']['code'],
            'deadline' => $data['response']['deadline']['attributes']['date'],
        );
    } else {
        $array = array('error' => $data['response']);
    }
    return $array;
}
}