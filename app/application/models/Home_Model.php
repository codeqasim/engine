<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 5/12/2019
 * Time: 3:47 AM
 */
class Home_Model extends CI_Model
{
    public function __construct()
    {

    }

    public function signup($data)
    {
        $this->db->insert('users',$data);
    }
    public function login($data)
    {
        $this->db->select('users.*');
        $this->db->where('email',$data["email"]);
        $result = $this->db->get("users")->row();
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
    public function getProfile($id)
    {
        $this->db->select('users.*');
        $this->db->where('id',$id);
        return $this->db->get('users')->row();
    }
    public function getCms()
    {
        return $this->db->get('cms')->result();
    }
    public function getSocial()
    {
        return $this->db->get('social_icons')->result();
    }
    public function getCmsbySlug($slug)
    {
        $this->db->select('cms.*');
        $this->db->where('slug',$slug);
        return $this->db->get('cms')->row();
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
}