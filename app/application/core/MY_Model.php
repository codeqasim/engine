<?php
/**
 * Created by PhpStorm.
 * User: qasimhussain
 * Date: 9/12/18
 * Time: 1:34 AM
 */
class MY_Model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();

    }

    public function getAllCountries()
    {
        $this->db->select("id,name");
        return $this->db->get('global_countries')->result();
    }
    public function getStates($country_id)
    {
        $this->db->select("*");
        $this->db->where("country_id",$country_id);
        return $this->db->get('global_states')->result();
    }
    public function get_cities($state_id)
    {
        $this->db->select("*");
        $this->db->where("state_id",$state_id);
        return $this->db->get('global_cities')->result();
    }
}