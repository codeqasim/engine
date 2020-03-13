<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Blogs extends MX_Controller {

    public function __construct()
	{
		parent::__construct();
        $this->load->helper('xcrud');
        $this->load->model('Admin/Setting_Model', 'sm');
        $this->load->model('Admin/Modules_Model', 'mm');
        $this->load->model('Admin/Auth_Model', 'am');
        $result = check_admin();
        if(empty($result))
        {
            redirect(ADMINURL.'login');
        }
        $data = getAllObjects();
        $this->load->vars($data);

    }

    public function index()
	{
        $xcrud = xcrud_get_instance();
        $xcrud->table('module_blogs');
        $xcrud->unset_title();
        $xcrud->label('Image','Thumb');
        $xcrud->relation('category_id','module_blogs_categories','id','name');
        $xcrud->columns("image,title,category_id");
        $xcrud->columns(array("image","title","category_id"));
        $xcrud->change_type('image', 'image', false, array(
        'width' => 450,
        'path' => "../../".BLOGS,
        'thumbs' => array(array(
        'height' => 55,
        'width' => 120,
        'marker' => '_th'))));
        $data['title'] = 'Blog';
        $data['head'] = 'Blogs';
        $data['content'] = $xcrud->render();
        $data['main_content'] = 'Admin/xcrud';
        $data['crumbdata'] = array('Blogs');
        $data['crumb'] = 'Admin/crumb';
        $this->load->view('Admin/template', $data);
    }

    public function categories()
    {
        $xcrud = xcrud_get_instance();
        $xcrud->table('module_blogs_categories');
        $xcrud->unset_title();
        $data['title'] = 'Blog Categories';
        $data['head'] = 'Blog Categories';
        $data['content'] = $xcrud->render();
        $data['main_content'] = 'Admin/xcrud';
        $data['crumbdata'] = array('Blogs','Categories');
        $data['crumb'] = 'Admin/crumb';
        $this->load->view('Admin/template', $data);
    }

}