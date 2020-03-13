<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 5/12/2019
 * Time: 3:47 AM
 */
class Blog_Model extends CI_Model
{
    public function __construct()
    {

    }

    public function get_all_blogs($category = "",$title="")
    {
       $this->db->select('module_blogs.*,module_blogs_categories.name');
       if(!empty($category)){
           $this->db->where('module_blogs_categories.name',$category);
       }
       if(!empty($title)){
           $this->db->like('module_blogs.title',$title);
       }
       $this->db->join("module_blogs_categories",'module_blogs_categories.id = category_id');
       return $this->db->get('module_blogs')->result();
    }
    public function get_all_blog_title($title)
    {
       $this->db->select('module_blogs.*,module_blogs_categories.name');
       $this->db->like('module_blogs.title',$title);
       $this->db->join("module_blogs_categories",'module_blogs_categories.id = category_id');
       return $this->db->get('module_blogs')->row();
    }
    public function get_categories()
    {
        $this->db->select('COUNT(category_id) as total ,module_blogs_categories.name');
        $this->db->join("module_blogs_categories",'module_blogs_categories.id = category_id');
        $this->db->group_by("category_id");
        return $this->db->get('module_blogs')->result();
    }
}