<?php

class PrepareFlightsRsp
{
    public $Passengers;
    public $Segments;
    public $SpecialServices;
    public $FareInfo;
    public $OptionalSpecialServices;
    public $SeatMaps;
    public $ResponseInfo;
    public $Extensions;
    public $Ref;
    public $RefItinerary;
    public $main_array = [];

    public function __construct($args = array())
    {
        if (! empty($args)) {
            foreach ($args as $key => $value) {
                $this->{$key} = $value;
            }
            $this->extract_data();
        }

    }

    public function getTotalFlights()
    {
        return count($this->Segments);
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
        $dataArray = explode('T', $dataString);
        return implode('<br/> At', $dataArray);
    }

    public function getAirSegment($SegmentKey)
    {
        foreach ($this->Segments as $Segment) {
            if ($Segment->Ref == $SegmentKey) {
                return $Segment;
            }
        }
    }
    public function extract_data()
    {
        $ci = get_instance();
        $ci->load->model('FlightTarco/TrFlights_model','tm');
         $final_array = [];
        foreach ($this->FareInfo->Itineraries as $Itinerary){
            foreach ($Itinerary->AirOriginDestinations as $Index => $AirOriginDestination){
                $total_stop = count($AirOriginDestination->AirCoupons) - 1;
                foreach ($AirOriginDestination->AirCoupons as $AirCoupons){

                    $Segment = $this->getAirSegment($AirCoupons->RefSegment);

                    $arr_date = date_create($Segment->FlightInfo->ArrivalDate);
                    $arr_date = date_format($arr_date,"d/m/Y h:i:A");

                    $dep_date = date_create($Segment->FlightInfo->ArrivalDate);
                    $dep_date = date_format($dep_date,"d/m/Y h:i:A");

                    $departure_airport = $ci->tm->get_airport_name($Segment->OriginCode);
                    $arrival_airport = $ci->tm->get_airport_name($Segment->DestinationCode);

                    $insert_array = [
                        "DepartureDate"=>$dep_date,
                        "OriginCode"=>$Segment->OriginCode,
                        "ArrivalDate"=>$arr_date,
                        "DestinationCode"=>$Segment->DestinationCode,
                        "DurationMinutes"=>$Segment->FlightInfo->DurationMinutes,
                        "arrival_airport"=>$arrival_airport,
                        "departure_airport"=>$departure_airport,
                    ];
                    array_push($final_array,(object)$insert_array);
                }
            }
        }
        $this->main_array = $final_array;
        return $final_array;
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