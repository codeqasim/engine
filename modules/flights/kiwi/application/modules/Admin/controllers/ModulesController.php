<?php if ( ! defined('BASEPATH') ) exit ('No direct script access allowed');

class ModulesController extends MX_Controller {

    public function __construct()
    {
        parent::__construct();
		// if ( ! pt_module_has_enable('hotelport') ) {
		// 	// backError_404($this->data);
		// }
		$this->role    = $this->session->userdata('pt_role');
		// If user is not log in then redirect the to admin panel.
		$this->data['userloggedin'] = $this->session->userdata('pt_logged_id');
		if (empty($this->data['userloggedin'])) 
		{
			// Redirect user to admin/index (Admin Dashboard)
			$urisegment =  $this->uri->segment(1);
			$this->session->set_userdata('prevURL', current_url());
			redirect($urisegment);
		}
		// If user is admin then assign `admin` to segment otherwise `supplier`
		$administrator = $this->session->userdata('pt_logged_admin');
		if ( ! empty ($administrator)) 
		{
			$this->data['adminsegment'] = "admin";
		}
		else 
		{
			$this->data['adminsegment'] = "supplier";
		}
		// Usecase 1: If someone make changes in session then this check can be helpful.
		// If segment string is `admin` then validate it otherwise validated `supplier`
		if ($this->data['adminsegment'] == "admin") 
		{
			$checkpoint = modules :: run('Admin/validadmin');
			if ( ! $checkpoint) // If checkpoint become fail
			{
				redirect('admin');
			}
		}
		else 
		{
			$checkpoint = modules :: run('supplier/validsupplier');
			if ( ! $checkpoint) // If checkpoint become fail
			{
				redirect('supplier');
			}
		}
		// Assign PHP Travel app settings, get it from settings table.
        $this->data['appSettings'] = modules :: run('Admin/appSettings');
		$this->data['addpermission'] = true;
		if($this->role == "supplier" || $this->role == "admin")
		{
            $this->editpermission = pt_permissions("edithotels", $this->data['userloggedin']);
            $this->deletepermission = pt_permissions("deletehotels", $this->data['userloggedin']);
			$this->data['addpermission'] = pt_permissions("addhotels", $this->data['userloggedin']);
        }
		$this->data['isadmin'] = $this->session->userdata('pt_logged_admin');
        $this->data['isSuperAdmin'] = $this->session->userdata('pt_logged_super_admin');
    }

    public function index()
    {
		// Refresh modules table.
		app()->service("ModuleService")->dump();
        $this->data['modules'] = $this->App->service('ModuleService')->all();
        $this->data['main_content'] = 'settings/modules';
        $this->data['page_title'] = 'Modules';
        $this->load->view('template', $this->data);
    }
    public function edit()
    {
        $this->load->model("Modules_model");
        $segment = $this->uri->segment(4);
        $this->data['modules'] = $this->App->service('ModuleService')->get($segment);
        $post = $this->input->post();
        if(empty($post)) {

            $this->data['main_content'] = 'settings/add_modules';
            $this->data['page_title'] = 'Modules';
            $this->load->view('template', $this->data);
        }else{
            $admin_array = [];
            $supplier_array = [];
            if(isset($post["menu_icon"]))
            {
                $this->data['modules']->menus->icon  = $post["menu_icon"];
            }
            if(isset($post["slug"]))
            {
                $this->data['modules']->slug  = $post["slug"];
            }
            if(isset($post["label"]))
            {
                $this->data['modules']->label  = $post["label"];
            }
            if(isset($post["name"]))
            {
                $this->data['modules']->name  = $post["name"];
            }
            if(isset($post["admin_menu_url"]))
            {
                $admin_menu_url = $post["admin_menu_url"];
                unset($post["admin_menu_url"]);
            }
            if(isset($post["front_name"]))
            {
                $this->data['modules']->frontend->icon = $post["front_name"];
            }
            if(isset($post["front_slug"]))
            {
                $this->data['modules']->frontend->slug = $post["front_slug"];
            }
            if(isset($post["front_label"]))
            {
                $this->data['modules']->frontend->label = $post["front_label"];
            }
            if(isset($post["admin_menu_label"]))
            {
                $admin_menu_label = $post["admin_menu_label"];
                unset($post["admin_menu_label"]);
                foreach ($admin_menu_label as $index=>$item)
                {
                    array_push($admin_array,["label"=>$item,"link"=>$admin_menu_url[$index]]);
                }
                $this->data['modules']->menus->admin = $admin_array;

            }
            if(isset($post["supplier_menu_url"]))
            {
                $supplier_menu_url = $post["supplier_menu_url"];
                unset($post["supplier_menu_url"]);
            }
            if(isset($post["supplier_menu_label"]))
            {
                $supplier_menu_label = $post["supplier_menu_label"];
                unset($post["supplier_menu_label"]);
                foreach ($supplier_menu_label as $index=>$item)
                {
                    array_push($supplier_array,["label"=>$item,"link"=>$supplier_menu_url[$index]]);
                }
                $this->data['modules']->menus->supplier = $supplier_array;

            }
            $this->Modules_model->update_module($this->data['modules'],$segment);
            redirect(base_url('admin/settings/modules'));
        }

    }
    public function delete()
    {
        $segment = $this->uri->segment(4);
        $this->data['modules'] = $this->App->service('ModuleService')->get($segment);
        $this->data['modules']->is_delete = 1;
        $this->App->service('ModuleService')->disable($segment);
        $this->Modules_model->update_module($this->data['modules'],$segment);
        redirect(base_url('admin/settings/modules'));

    }
    public function add()
    {
        $this->load->model("Modules_model");
        $post = $this->input->post();
        if(empty($post))
        {
            app()->service("ModuleService")->dump();
            $this->data['modules'] = $this->App->service('ModuleService')->all();
            $this->data['main_content'] = 'settings/add_modules';
            $this->data['page_title'] = 'Modules';
            $this->load->view('template', $this->data);
        }else{
            $admin_array = [];
            $supplier_array = [];
            $frontend = [];

            if(!empty($post["menu_icon"]))
            {
                $menu_icon = $post["menu_icon"];
                unset($post["menu_icon"]);
            }
            if(!empty($post["menu_icon"]))
            {
                $menu_icon = $post["menu_icon"];
                unset($post["menu_icon"]);
            }
            if(!empty($post["admin_menu_url"]))
            {
                $admin_menu_url = $post["admin_menu_url"];
                unset($post["admin_menu_url"]);
            }
            if(!empty($post["front_name"]))
            {
                $frontend["icon"] =  $post["front_name"];
                unset($post["front_name"]);
            }
            if(!empty($post["front_slug"]))
            {
                $frontend["slug"] =  $post["front_slug"];
                unset($post["front_slug"]);
            }
            if(!empty($post["front_label"]))
            {
                $frontend["label"] =  $post["front_label"];
                unset($post["front_label"]);
            }
            if(!empty($post["admin_menu_label"]))
            {
                $admin_menu_label = $post["admin_menu_label"];
                unset($post["admin_menu_label"]);
                foreach ($admin_menu_label as $index=>$item)
                {
                    array_push($admin_array,["label"=>$item,"link"=>$admin_menu_url[$index]]);
                }
            }
            if(!empty($post["supplier_menu_url"]))
            {
                $supplier_menu_url = $post["supplier_menu_url"];
                unset($post["supplier_menu_url"]);
            }
            if(!empty($post["supplier_menu_label"]))
            {
                $supplier_menu_label = $post["supplier_menu_label"];
                unset($post["supplier_menu_label"]);
                foreach ($supplier_menu_label as $index=>$item)
                {
                    array_push($supplier_array,["label"=>$item,"link"=>$supplier_menu_url[$index]]);
                }
            }
            $post["frontend"] = (object)$frontend;
            $post["menus"] = ["menu_icon"=>$menu_icon,"admin"=>$admin_array,"supplier"=>$supplier_array];
            $this->Modules_model->add_module($post);
            redirect(base_url('admin/settings/modules'));

        }
    }

}