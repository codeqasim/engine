<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Flights extends MX_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin/Modules_Model', 'mm');
//        $this->load->library('ur');
        $this->search_url = 'https://booknow.co/main/public/api/flights/search';
    }

	public function index()
	{
	    $payload = $this->uri->segment_array();
	    $payload = array(
	        "Origin"=>strtoupper($payload[2]),
            "Destination"=>strtoupper($payload[3]),
            "DepartureDate"=>$payload[5],
            "ArrivalDate"=>$payload[6],
            "FlightType"=>$payload[4],
            "FlightClass"=>"economy",
            "Adults"=>$payload[7],
            "Children"=>$payload[8],
            "Infants"=>"0"
        );
	    $data["payload"] = json_encode($payload);
	    $data["apis"] = $this->mm->get_module_parent('Flights');
	    $final_payload = [];
	    foreach ($data["apis"] as &$item){
	        array_push($final_payload,$item->id);
	    }
        $data["apis"] = $final_payload;
		$this->theme->view('modules/flights/list',$data);
	}
	public function searchFlight(){
        $post_data = json_decode(trim(file_get_contents('php://input')), true);
        $post_data["Suppliers"] = $this->mm->get_module_id($post_data["ID"]);
        unset($post_data["ID"]);
        $post_data["Suppliers"]->credentials = json_decode($post_data["Suppliers"]->credentials);
        $post_data["ArrivalDate"] = str_replace("-","/",$post_data["ArrivalDate"]);
        $post_data["DepartureDate"] = str_replace("-","/",$post_data["DepartureDate"]);
        dd(json_encode($post_data));
        $request = json_decode($this->sendRequest('POST',$this->search_url,json_encode($post_data),array('Content-Type:application/json')));
        dd($request);
        if(($request->error->status) && !empty($request->response)){
            echo  json_encode(array('status'=>true,'response'=>$request->response));
        }else{
            echo  json_encode(array('status'=>false,'response'=>array()));
        }
    }

    public function details()
	{
		$this->theme->view('modules/flights/details');

	}

    public function booking()
	{
		$this->theme->view('modules/flights/booking');

	}

    public function pay()
	{
		$this->theme->view('modules/flights/booking_pay');

	}
    public function voucher()
    {
        $this->theme->view('modules/flights/voucher');

    }
    public function sendRequest($req_method = 'POST', $url = '', $payload = [], $_headers = [])
    {

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_ENCODING, "");
        curl_setopt($curl, CURLOPT_MAXREDIRS, 10);
        curl_setopt($curl, CURLOPT_TIMEOUT, 30);
        curl_setopt($curl, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);

        if ($req_method == 'POST') {
            curl_setopt($curl, CURLOPT_POST, true);
            curl_setopt($curl, CURLOPT_POSTFIELDS, $payload);
        } else {
            curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "GET");
            $url = $url."?".http_build_query($payload);
        }

        if (! empty($_headers) ) {
            curl_setopt($curl, CURLOPT_HTTPHEADER, $_headers);
        }

        curl_setopt($curl, CURLOPT_URL, $url);

        $response = curl_exec( $curl );
        $err      = curl_error( $curl );

        curl_close( $curl );

        if ( $err ) {
            $response = $err;
        }

        return $response;
    }

}