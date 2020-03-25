<?php

class Juniper_model extends CI_Model
{
    // public function get_airport($query){
    // 	return $this->db->query("SELECT *
    //     FROM pt_flights_airports
    //      WHERE (code LIKE '%$query%' OR name LIKE '%$query%')
    //     ORDER BY CASE
    //    WHEN (code LIKE '%$query%' AND name LIKE '%$query%') THEN 1
    //     WHEN (code LIKE '%$query%' AND name NOT LIKE '%$query%') THEN 2
    //      ELSE 3
    //      END, code")->result_array();
    // }

    public function get_sercet_keys(){
    	$query = $this->db->get_where('modules', array('name' =>'Juniper'));
    	$data = $query->row_array();
    	return $data['settings'];
    }
    // public function currencies(){
    //     $query = $this->db->get('pt_flights_currencies');
    //     return $query->result_array();
    // }

    // public function get_airport_name($code){
    //     $this->db->where('code', $code);
    //     $query = $this->db->get('pt_flights_airports');
    //     $data = $query->row_array();
    //     return $data['cityName']." - ".$data['name']. " (".$data['code'].")";
    // }

    public function insert_booking($params){
        $this->db->insert('pt_ejuniper_booking',$params);
        return $this->db->insert_id();
    }
    
    public function insert_rooms($params){
        $this->db->insert('pt_ejuniper_rooms',$params);
    }

    public function insert_booking_response($params){
        $this->db->insert('pt_ejuniper_booking_response',$params);
    }

    public function all_bookings(){
        $this->db->order_by('id',"DESC");
        return $this->db->get('pt_ejuniper_booking')->result_array();
    }

    public function booking_data($id){
        $this->db->where('id',$id);
        return $this->db->get('pt_ejuniper_booking')->row_array();
    }

    public function rooms_data($id){
        $this->db->where('reference',$id);
        return $this->db->get('pt_ejuniper_rooms')->result_array();
    }

    public function api_data($id){
        $this->db->where('reference',$id);
        return $this->db->get('pt_ejuniper_booking_response')->row_array();
    }
}