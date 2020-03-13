<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Cms extends MX_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('xcrud');
        $result = check_admin();
        if(empty($result))
        {
         redirect(ADMINURL.'login');
        }
        $this->load->model('Setting_Model', 'sm');
        $this->load->model('Modules_Model', 'mm');
        $this->load->model('Auth_Model', 'am');
        $data = getAllObjects();
        $this->load->vars($data);
    }

    public function index()
    {
        $segment = slugifyToString($this->uri->segment(3));
        $xcrud = xcrud_get_instance();
        $xcrud->table('module_cms');
        $xcrud->unset_title();

        $xcrud->order_by('order_by','asc');
        $xcrud->column_callback('order_by', 'orderInputCms');
        $data['title'] = 'CMS Pages';
        $data['head'] = 'CMS Pages';
        $data['content'] = $xcrud->render();
        $data["base_url"] = base_url(ADMINURL.'cms/delete_all_cms');
        $data['main_content'] = 'Admin/xcrud';
        $data['crumbdata'] = array('CMS');
        $data['crumb'] = 'Admin/crumb';
        $this->load->view('Admin/template', $data);
    }
    public function delete_all_cms()
    {
        $this->mm->delete_all_cms($this->input->post('primery_keys'));

    }
    public function chagne_order()
    {
        $this->sm->ChangeOrder($this->input->post('id'),$this->input->post('value'));
    }

}