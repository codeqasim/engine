<?php

class Listing_model extends CI_Model{

public function insert_records($data)
    {

    $result=$this->db->insert('property',$data);
    return $result;

     }

	public function fetch_byid($id){

    $result=$this->db->Where('id',$id)->get('property');
    return $result;
	}

    public function fetch_records(){
    $this->db->order_by('id','DESC');
    $result=$this->db->get('property');
    return $result;
}

    public function update_records($id,$data){
    $result=$this->db->Where('id',$id);

    return $this->db->update('property', $data);

}


   public function search_country($searchTerm){
            $q=$this->db->from('pt_locations')
                ->like('location',$searchTerm)
                ->get();
            return $q->result();
    }

   public function search_records($search){
    $q=$this->db->from('property')
                ->like('name',$search)
                ->get();
    if($q->num_rows() > 0){

        return $q;
    }else{
        return false;
}
   }

public function num_rows(){

                 $query=$this->db->get('property');
                     
                 return $query->num_rows();
      }
  }
?>

