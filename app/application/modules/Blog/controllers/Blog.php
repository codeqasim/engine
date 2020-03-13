<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends MX_Controller {

    public function __construct()
	{
		parent::__construct();
        $this->load->model('Blog_Model','bm');

    }

    public function index()
	{
	    $category = $this->uri->segment(2);
        $data["blog"] = $this->bm->get_all_blogs();
        if(!empty($category))
        {
            $category = str_replace("-"," ",$category);
            $data["blog"] = $this->bm->get_all_blogs($category);
        }
	    $data["categories"] = $this->bm->get_categories();
        $this->theme->view('modules/blog/list',$data);
    }

    public function details()
    {
        $title = $this->uri->segment(4);
        if(!empty($title))
        {
            $title = str_replace("-"," ",$title);
            $data["blog"] = $this->bm->get_all_blog_title($title);
        }
        $data["title"]= $title;
        $data['metas'] = global_meta($data["blog"]->title,$data["blog"]->description,base_url(uri_string()),FCPATH.BLOGS.$data["blog"]->image,"TECFARE");
        $data["categories"] = $this->bm->get_categories();

        $this->theme->view('modules/blog/detail',$data);
    }

    public function search()
    {
        $title = $this->uri->segment(3);
        if(!empty($title))
        {
            $query = str_replace("-"," ",$title);
            $data["blog"] = $this->bm->get_all_blogs("",$query);
        }
        $data["categories"] = $this->bm->get_categories();
        $this->theme->view('modules/blog/list',$data);
    }

}