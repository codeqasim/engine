<?php


class FlightsListingModel
{

    public $data;
    public $airlines = [];
    public $mini_price;
    public $max_price;
    public $final_array = [];
    public $limit = 50;
    public $action_url;
    public $form_name;


    public function __construct($response = "")
    {
        $this->data = $response;

        if (!empty($response)) {
            $this->extract_data();
        }
    }

    function extract_data()
    {
        $ci = get_instance();
        $ci->load->model('FlightTarco/TrFlights_model', 'tm');
        $main_array = $this->data->data;
        foreach ($main_array as $mainindex=>$item) {

            $one_array = array();
            $return_array = array();
            $segments["segments"] = array();
            foreach ($item->route as $index=>$fligtdata) {

                $currency_code = $item->currency;
                $price = $item->flight_price;
                $departure_time = date("H:i", $fligtdata->departure_time);
                $duration_time = $item->flight_duration;
                $arrival_time = date("H:i", $fligtdata->arrival_time);
                $departure_date = date("l d M Y", $fligtdata->departure_time);
                $arrival_date = date("l d M Y", $fligtdata->arrival_time);
                $class_type = $fligtdata->fare_classes;
                $departure_code = $fligtdata->city_from;
                $arrival_code = $fligtdata->city_to;
                $departure_airport = $fligtdata->from_code;
                $arrival_airport = $fligtdata->to_code;
                $airline_name = $ci->tm->get_airline_name($item->airline);
                $check = true;

                $hidden_parameters = (object)[
                    'booking_token'=>$item->custom_payload->booking_token,
                    'flight_id'=>$item->flight_id,
                    'visitor_uniqid'=>$item->custom_payload->visitor_uniqid,
                    'flight_price'=>$item->flight_price,
                    'payload'=>json_encode($item->custom_payload),

                ];

                $form = $this->hidden_parameters($hidden_parameters);

                foreach ($this->airlines as $ar) {
                    if ($ar->thumbnail == $airline_name->thumbnail) {
                        $check = false;
                        break;
                    }
                }
                if ($check) {
                    array_push($this->airlines, $airline_name);
                }

                $datetime1 = new DateTime( date( "Y-m-d h:i:s a", $fligtdata->arrival_utc_time ) );
                $datetime2 = new DateTime( date( "Y-m-d h:i:s a", $fligtdata->departure_utc_time ) );
                $interval = $datetime1->diff( $datetime2 );
                $segment_time = $interval->format( '%h' ) . "h " . $interval->format( '%i' ) . "m";

                $img_code = base_url("uploads/images/flights/airlines/$item->airline.png");
                $bj =  (object)[
                    "img_code" => $img_code,
                    "departure_time" => $departure_time,
                    "departure_date" => $departure_date,
                    "arrival_date" => $arrival_date,
                    "arrival_time" => $arrival_time,
                    "departure_code" => $departure_code,
                    "departure_airport" => $departure_airport,
                    "arrival_code" => $arrival_code,
                    "arrival_airport" => $arrival_airport,
                    "duration_time" => $duration_time,
                    "segment_time" => $segment_time,
                    "currency_code" => $currency_code,
                    "price" => $price,
                    "airline_name" => $airline_name->name,
                    "booking_class" => $class_type,
                    "form" => $form,
                ];
                if($fligtdata->return == 0 )
                {
                    array_push($one_array,$bj);
                }
                if($fligtdata->return == 1)
                {
                    array_push($return_array,$bj);
                }
            }

            $segments["segments"][] = $one_array;
            if(!empty($return_array))
            {
                $segments["segments"][] = $return_array;
            }

            array_push($this->final_array, $segments);
        }
        $this->final_array = array_slice($this->final_array, 0, $this->limit);
        $this->action_url = site_url('thflights/checkout');

    }

    public function hidden_parameters($hidden_parameters){

        $input = '';
        $input .= '<input type="hidden" name="booking_token" value="'.$hidden_parameters->booking_token.'" />';
        $input .= '<input type="hidden" name="flight_id" value="'.$hidden_parameters->flight_id.'" />';
        $input .= '<input type="hidden" name="visitor_uniqid" value="'.$hidden_parameters->visitor_uniqid.'" />';
        $input .= '<input type="hidden" name="flight_price" value="'.$hidden_parameters->flight_price.'" />';
        return $input;

    }

}