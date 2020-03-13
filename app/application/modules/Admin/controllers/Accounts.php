<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Accounts extends MX_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('xcrud');
        $this->load->model('Setting_Model', 'sm');
        $this->load->model('Modules_Model', 'mm');
        $this->load->model('Auth_Model', 'am');
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
        $segment = slugifyToString($this->uri->segment(3));
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


    public function items()
    {
        $segment = slugifyToString($this->uri->segment(3));
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


    public function delete_all()
    {
       $this->sm->delete_all_accounts($this->input->post("primery_keys"));
    }
    public function update_status()
    {
        echo $this->sm->activiate_user($this->input->post());
    }
    public function chagne_order()
    {
        $this->am->ChangeOrder($this->input->post('id'),$this->input->post('value'));
    }
    public function get_cities()
    {
        $city = $this->input->post("keyword");
        echo json_encode($this->sm->cities($city));
    }

    public function login()
    {
        $data['title'] = 'login';
        $data['main_content'] = 'Admin/login';
        $this->load->view('Admin/template', $data);
    }

    public function types()
    {
        $post = $this->input->post();
        if (!empty($post)) {
            if ($this->uri->segment(4) == "add") {
                $data['title'] = 'Add Account Type';
                $data["result"] = $this->mm->insert_roles_types($post);
                redirect(ADMINURL . '/accounts/types');
            } else {
                $data['title'] = 'Edit Account Type';
                $data["success"] = "success";
                $data["result"] = $this->mm->update_roles_types($post, $this->uri->segment(4));
                $data['main_content'] = 'Admin/roles';
                $this->load->view('Admin/template', $data);
            }
        } else {
            if (empty($this->uri->segment(4))) {
                $xcrud = xcrud_get_instance();
                $xcrud->table('accounts_types');
                $xcrud->unset_title();
                $xcrud->unset_edit();
                $xcrud->unset_remove();
                $xcrud->unset_view();
                $xcrud->unset_add();
                $xcrud->button(base_url() . ADMINURL . 'accounts/types/{id}', 'Edit', '', 'btn btn-warning', array('target' => '_blank'));
                $delurl = base_url() . 'admin/accounts/delete_account_type';
                $xcrud->button("javascript: delfunc('{id}','$delurl')", 'DELETE', '', 'btn-danger', array('target' => '_self', 'id' => '{id}'));
                $data['title'] = 'Accounts types';
                $data['head'] = 'Accounts types';
                $data['content'] = $xcrud->render();
                $data['add_link'] = base_url() . ADMINURL . 'accounts/types/add';
                $data['main_content'] = 'Admin/xcrud';
                $data['crumbdata'] = array('Accounts','Types');
                $data['crumb'] = 'Admin/crumb';
                $data['base_url'] = base_url(ADMINURL.'accounts/delete_all_account_type');
                $data['delete_all'] = 'true';
                $this->load->view('Admin/template', $data);
            } else {
                if ($this->uri->segment(4) == "add") {
                    $data['title'] = 'Add Account Type';
                    $data["result"] = $this->mm->modules(0);
                    $data['main_content'] = 'Admin/roles';
                    $this->load->view('Admin/template', $data);
                } else {
                    $data['title'] = 'Edit Account Type';
                    $data["result"] = $this->mm->modules($this->uri->segment(4));
                    $data['main_content'] = 'Admin/roles';
                    $this->load->view('Admin/template', $data);
                }
            }
        }
    }

    public function delete_account_type()
    {
        $this->mm->delete_account_type($this->input->post('id'));
    }
    public function delete_all_account_type()
    {
        $this->am->delete_account_all_type($this->input->post('primery_keys'));
    }

    public function roles()
    {
        $xcrud = xcrud_get_instance();
        $xcrud->table('accounts_roles');
        $xcrud->unset_title();
        $data['title'] = 'Roles';
        $data['head'] = 'Roles';
        $data['content'] = $xcrud->render();
        $data['main_content'] = 'Admin/xcrud';
        $this->load->view('Admin/template', $data);
    }

    public function signup()
    {
        $data['title'] = 'signup';
        $data['main_content'] = 'Admin/signup';
        $this->load->view('Admin/template', $data);

    }

}