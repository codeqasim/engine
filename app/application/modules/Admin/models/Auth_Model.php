<?php

class Auth_Model extends CI_Model
{
    public function __construct()
    {

    }

    public function login($data)
    {
        $this->db->select('accounts.*');
        $this->db->where('email',$data["email"]);
        $result = $this->db->get("accounts")->row();
        if(!empty($result->email))
        {
            if(password_verify($data["password"],$result->password))
            {
                return $result;
            }else{
                return 2;
            }
        }else{
            return 3;
        }
    }
    public function getAccountTypes()
    {
        return $this->db->get('accounts_types')->result();
    }
    public function ChangeOrder($id,$value)
    {
        $this->db->where('id',$id);
        $this->db->update('accounts',["order_by"=>$value]);
    }
    public function delete_account_all_type($ids)
    {
        $this->db->where_in('account_type_id',$ids);
        $this->db->delete('accounts_roles_types');

        $this->db->where_in('id',$ids);
        $this->db->delete('accounts_types');

        $this->db->where_in('account_type_id',$ids);
        $this->db->delete('accounts');
    }


}