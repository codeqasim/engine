<?php

class Dashboard_Model extends CI_Model{

public function fetch_user_detail()
    {
    $id = $this->session->userdata("id");
    $result=$this->db->where('id',$id)->get('users');
    return $result;
}

   public function update_user_detail($data)
    {
    $id = $this->session->userdata("id");
    $result=$this->db->where('id',$id)->update('users',$data);
    return $result;
}


}
  ?>