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
        $this->base_url = "https://booknow.co/modules/";
    }
    public function getFlightResults(Request $request)
    {
        $payload = $request->all();
        $Response = array();
//        foreach ($flightSearch->Suppliers as $supplier ){
            $TempResponse = Http::post($this->base_url."flights/".$payload["Suppliers"]["name"]."/search", $payload);
            return $TempResponse->json();
//            array_push($Response,$TempResponse);
//        }
        dd($Response);

    }
}
