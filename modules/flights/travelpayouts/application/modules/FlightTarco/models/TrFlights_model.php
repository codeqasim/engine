<?php

class TrFlights_model extends CI_Model
{

    const DB_TABLE = 'pt_tarco_invoice';

    public $id;
    public $special_services;
    public $passengers;
    public $flightData;
    public $price;
    public $Currency_code;
    public $status;
    public $offer;
    public $OriginCity;
    public $DestinationCity;
    public $OriginCode;
    public $DestinationCode;
    public $created_at;


    public function __construct()
    {
        parent::__construct();

    }

    function get_airport_name($code)
    {
        $this->db->select("pt_flights_airports.*");
        $this->db->where('code',$code);
        return $this->db->get('pt_flights_airports')->row()->name;
    }
    function get_airline_name($code)
    {
        $this->db->select("pt_flights_airlines.*");
        $this->db->where('thumbnail',$code.'.png');
        return $this->db->get('pt_flights_airlines')->row();
    }
    function currencyrate($currencycode){
        $this->db->select('rate');
        $this->db->from('pt_currencies');
        $this->db->where('name',$currencycode);
        return $this->db->get()->row('rate');
    }
    function save_invoice($data){


    }

    public function save()
    {
        $this->db->insert(self::DB_TABLE, $this);
        $this->id = $this->db->insert_id();
    }
    public function get_invoice($id){
        $this->db->where('id', $id);
        $query = $this->db->get('pt_tarco_invoice');
        return $query->row();
    }
    public function update_invoice($id,$status){
        $this->db->where('id', $id);
        $status = array("status"=>$status);
        $this->db->update('pt_tarco_invoice',$status);
    }
}
