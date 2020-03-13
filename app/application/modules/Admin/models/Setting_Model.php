<?php

class Setting_Model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function update_settings($data)
    {
        $this->db->update('global_settings',$data);
    }
    public function get_settings()
    {
        return $this->db->get('global_settings')->result_array()[0];
    }
    public function subscribe_email($email)
    {
        $row =  $this->db->where("email",$email)->get('subscribers')->num_rows();

        if($row == 0)
        {
            $inser_array = array('email'=>$email);
            $this->db->insert('subscribers',$inser_array);
            return true;
        }else{
            return false;
        }
    }
    public function activiate_user($post)
    {

        $update_array  = array("status"=>$post["value"]);
        $this->db->where('id',$post["id"]);
        $this->db->update('accounts',$update_array);
    }
    public function activiate_modules($post)
    {

        $update_array  = array("active"=>$post["value"]);
        $this->db->where('id',$post["id"]);
        $this->db->update('modules',$update_array);
    }
    public function delete_all_modules($ids)
    {
        $this->db->where_in('id',$ids);
        $this->db->delete('modules');
    }
    public function ChangeOrder($id,$value)
    {
        $this->db->where('id',$id);
        $this->db->update('module_cms',["order_by"=>$value]);
    }
    public function cities($keyword)
    {

        $this->db->like('name',$keyword);
        $this->db->get('cities')->result();
    }

    public function delete_all_accounts($keys)
    {
        $this->db->where_in('id',$keys);
        $this->db->delete('accounts');
    }
    public function delete_all_currencies($keys)
    {
        $this->db->where_in('id',$keys);
        $this->db->delete('global_currencies');
    }
    public function delete_all_gateways($keys)
    {
        $this->db->where_in('payment_id',$keys);
        $this->db->delete('global_payment_gateways');
    }
    public function delete_all_icons($keys)
    {
        $this->db->where_in('id',$keys);
        $this->db->delete('global_social_icons');
    }

}