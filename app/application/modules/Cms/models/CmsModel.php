<?php
class CmsModel extends CI_Model{

public function get(){

	$query=$this->db->get('module_cms');
	return $query;

   {
}
