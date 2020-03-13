<?php
class Signup_model extends CI_Model{

public function add_user($data)
   {

	$query=$this->db->insert('users', $data);
	return $query;
}

}
?>