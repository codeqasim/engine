<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Accounts extends MX_Controller {

    public function __construct()
	{
		parent::__construct();
        $this->load->helper('xcrud');
    }

    public function index()
	{

        $xcrud = xcrud_get_instance();
        $xcrud->table('accounts');
        $xcrud->columns('thumb,status,account_type_id,first_name,last_name,email,phone,order_by');
        $xcrud->fields('thumb,account_type_id,first_name,last_name,email,country_id,city_id,phone');
        $xcrud->relation('account_type_id', 'accounts_types', 'id', 'type');
        $xcrud->join('account_type_id', 'accounts_types', 'id', [],"not_insert");
        $xcrud->label('account_type_id', 'Type');
        if(!empty($segment)){
        $xcrud->where('accounts_types.type',$segment);
        }
        $xcrud->order_by('order_by','desc');
        $xcrud->label('city_id', 'City');
        $xcrud->column_class('thumb', 'zoom_img');
        $xcrud->change_type('thumb', 'image', '', array('path' => "../../uploads/accounts", 'width' => 200, 'height' => 200));
        $xcrud->change_type('order_by', 'input');
        $xcrud->unset_title();
        $xcrud->relation('country_id', 'global_countries', 'id', 'name');
        $data['title'] = 'Accounts';
        $xcrud->order_by('id', 'desc');
        $xcrud->column_callback('status', 'change_status');
        $xcrud->column_width('order_by', '8%');
        $xcrud->column_callback('order_by', 'orderInput');
        $xcrud->order_by('id');
        $xcrud->limit(50);
        $data['head'] = 'Accounts';
        $data['content'] = $xcrud->render();
        $data['main_content'] = 'Admin/xcrud';
        $data['crumbdata'] = array('Accounts');
        $data['crumb'] = 'Admin/crumb';
        $data["base_url"] = base_url(ADMINURL.'accounts/delete_all');
        $this->load->view('Admin/alerts');
        $this->load->view('Admin/template', $data);

    }

    public function login()
    {
        $data['title'] = 'login';
        $data['main_content'] = 'admin/login';
        $this->load->view('admin/template', $data);
    }

    public function signup()
    {
        $data['title'] = 'signup';
        $data['main_content'] = 'admin/signup';
        $this->load->view('admin/template', $data);
    }

}