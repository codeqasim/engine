<?php



class Apiflights_model extends CI_Model {

		public $settings;



		function __construct() {

// Call the Model constructor

				parent :: __construct();




		}

        function get_airline_name($code)
        {
            $this->db->select("pt_flights_airlines.*");
            $this->db->where('thumbnail',$code.'.png');
            return $this->db->get('pt_flights_airlines')->row();
        }



}