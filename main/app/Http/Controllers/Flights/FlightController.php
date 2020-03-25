<?php

namespace App\Http\Controllers\Flights;

use App\Http\Controllers\Controller;
use App\PojoModels\FlightSearch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use function GuzzleHttp\Promise\all;

class FlightController extends Controller
{
    public $base_url = "";
    public function __construct()
    {
        $this->base_url = "http://localhost/engine/modules/";
    }
    public function getFlightResults(Request $request)
    {
        $flightSearch = new FlightSearch($request->all());
        $Response = array();
        foreach ($flightSearch->Suppliers as $supplier ){
            $TempResponse = Http::post($this->base_url.$supplier["Name"]."/flights/search", $flightSearch->getPayload($supplier));
            return $TempResponse->json();
            array_push($Response,$TempResponse);
        }
        dd($Response);

    }
}
