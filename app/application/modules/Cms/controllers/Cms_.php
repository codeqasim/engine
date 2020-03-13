<?php

class Cms extends MX_Controller {

    public function index()
    {
    	
    }

    public function contact(){
    $data['fetch']=$this->CmsModel->get();
    $this->theme->view('modules/cms/cms',$data);
    }
}
