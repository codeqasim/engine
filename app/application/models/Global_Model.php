<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 5/12/2019
 * Time: 3:47 AM
 */
class Global_Model extends CI_Model
{
    public function __construct()
    {

    }

    public function all_currencies()
    {
       return $this->db->get('global_currencies')->result();
    }
    public function curency_by_id($id)
    {
       return $this->db->where("id",$id)->get('global_currencies')->row_array();
    }
    public function update($id,$array)
    {
        unset($array["id"]);
       return $this->db->where("id",$id)->update('global_currencies',$array);
    }
    public function add_corn_data($array)
    {
       return $this->db->insert('global_currencies_cron_update',$array);
    }
}