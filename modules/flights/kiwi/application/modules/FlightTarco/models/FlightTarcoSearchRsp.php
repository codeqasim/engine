<?php

class FlightTarcoSearchRsp
{

    public $Passengers;
    public $Segments;
    public $FareInfo;
    public $Offer;
    public $ResponseInfo;
    public $Extensions;
    public $departure_code;
    public $arrival_code;
    public $arrival_airport;
    public $departure_airport;
    public $img_code;
    public $departure_time;
    public $departure_date;
    public $duration_time;
    public $arrival_time;
    public $arrival_date;
    public $currency_code;
    public $hidden_params;
    public $airline_name;
    public $price;
    public $form_name;

    public $action_url;

    public $final_array = [];
    public  $airlines = [];


    public function __construct($args = array())
    {
        if (! empty($args)) {

            foreach ($args as $key => $value) {
                $this->{$key} = $value;
            }
            $this->extract_segment();
        }
    }

    public function getTotalFlights()
    {
        return count($this->Segments);
    }

    public function mainloop()
    {
        return $this->FareInfo->Itineraries;
    }
    public function getTotalStops($stops)
    {
        if ($stops == 0) {
            return 'Direct';
        } else {
            return ($stops == 1) ? $stops.' Stop' : $stops.' Stops';
        }
    }

    public function parseDate($dataString)
    {
        $dataArray = explode(' ', $dataString);
       
        return $dataArray;
    }

    public function getAirSegment($SegmentKey)
    {
        foreach ($this->Segments as $Segment) {
            if ($Segment->Ref == $SegmentKey) {
                return $Segment;
            }
        }
    }
    public function extract_segment()
    {

        $ci = get_instance();
        $ci->load->model('FlightTarco/TrFlights_model','tm');
        $ci->load->library('Hotels/Hotels_lib');
        $segments = array();
        foreach ($this->FareInfo->Itineraries as $Itinerary){
            $oneway = array();
            foreach ($Itinerary->AirOriginDestinations as $Index => $AirOriginDestination){
                    $TotalStops = count($AirOriginDestination->AirCoupons) - 1;
                    foreach ($AirOriginDestination->AirCoupons as $AirCoupons){

                        $Segment = $this->getAirSegment($AirCoupons->RefSegment);
                        $arr_date = date_create($Segment->FlightInfo->ArrivalDate);
                        $arr_date = date_format($arr_date,"d/m/Y h:i:A");

                        $dep_date = date_create($Segment->FlightInfo->ArrivalDate);
                        $dep_date = date_format($dep_date,"d/m/Y h:i:A");

                        $img_code = $Segment->AirlineDesignator;
                        $departure_time = $this->parseDate($dep_date)[1];
                        $departure_date = $this->parseDate($dep_date)[0];
                        $arrival_date = $this->parseDate($arr_date)[0];
                        $arrival_time = $this->parseDate($arr_date)[1];
                        $departure_code = $Segment->OriginCode;
                        $departure_airport = $ci->tm->get_airport_name($Segment->OriginCode);
                        $arrival_code = $Segment->DestinationCode;
                        $arrival_airport = $ci->tm->get_airport_name($Segment->DestinationCode);
                        $duration_time = $Segment->FlightInfo->DurationMinutes;
                        $price = $Itinerary->SaleCurrencyAmount->TotalAmount;
                        $airline_name = $Segment->AirlineDesignator;
                        $sar_price = $ci->tm->currencyrate("SAR");
                        $price = $price * $sar_price;
                        $current_currency_price = $ci->tm->currencyrate($ci->Hotels_lib->currencycode);
                        $price = ceil($price * $current_currency_price);

                        $main_object = (object)[
                            "img_code"=>base_url("uploads/images/flights/airlines/$img_code.png"),
                            "departure_time"=>$departure_time,
                            "departure_date"=>$departure_date,
                            "arrival_date"=>$arrival_date,
                            "arrival_time"=>$arrival_time,
                            "departure_code"=>$departure_code,
                            "departure_airport"=>$departure_airport,
                            "arrival_code"=>$arrival_code,
                            "arrival_airport"=>$arrival_airport,
                            "duration_time"=>$duration_time,
                            "currency_code"=>$ci->Hotels_lib->currencycode,
                            "price"=>$price,
                            "airline_name"=>$airline_name,
                            "Offer_Ref"=>$this->Offer->Ref,
                            "Offer_RefItinerary"=>$Itinerary->Ref,
                            "form"=>$this->getHidden($this->Offer->Ref,$Itinerary->Ref),
                            "booking_class"=>$Segment->BookingClasses[0]->CabinClassCode == "C" ?"Business class":"Economy class",
                        ];
                        array_push($segments,$main_object);
                    }
                }
                $oneway["segments"][][] = $main_object;
                array_push($this->final_array,$oneway);
            }

        $this->action_url = base_url()."trflight/checkout";
    }
    public function getHidden($Offer_Ref,$Offer_RefItinerary)
    {
        return '<input type="hidden" name="Offer_Ref" value="'.$Offer_Ref.'">
        <input type="hidden" name="Offer_RefItinerary" value="'.$Offer_RefItinerary.'">';
    }
    public function getAirLines()
    {
        $AirLines = array();
        foreach ($this->Segments as $Segment) {
            array_push($AirLines, $Segment->AirlineDesignator);
        }

        return array_unique($AirLines);
    }
}