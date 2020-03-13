<?php


class ProductModel extends CI_Model
{


    /**
     * ProductModel constructor.
     */
    public function __construct()
    {
    }
    public function get_product($slug)
    {
         $this->db->select('products.*,currencies.name as currency_name,currencies.symbol ');
         $this->db->where("slug",$slug);
         $this->db->join('currencies','currencies.id = currency');
         return $this->db->get("products")->row_array();
    }
    public function get_products(){
        return $this->db->where("status",1)->get("products")->result_array();

    }
}