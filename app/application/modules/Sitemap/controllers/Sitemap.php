<?php

class Sitemap extends MX_Controller {


  public function index()
    {
        $this->load->model('Blogs/Blog_Model','BM');
        $data["urls"] = site_map();
        $data["result"] = $this->BM->get_all_blogs();
        foreach ($data["result"] as $item)
        {
            array_push($data["urls"],base_url("blogs/details/$item->slug") );
        }
        header("Content-Type: text/xml;charset=iso-8859-1");
        $this->load->view("sitemap",$data);
    }

}
