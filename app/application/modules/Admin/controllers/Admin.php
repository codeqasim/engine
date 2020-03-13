<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MX_Controller {

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
        // $this->output->enable_profiler(TRUE);
        $data['title'] = 'Dashboard';
        $data['main_content'] = 'Admin/dashboard';
        $this->load->view('Admin/template', $data);
    }

    public function change_drawer_status()
    {
        $drawer_status = $this->session->userdata('drawer_status');
        if(empty($drawer_status))
        {
            $this->session->set_userdata('drawer_status',true);
        }else{
            $this->session->set_userdata('drawer_status',false);
        }
        echo   $this->session->userdata('drawer_status');

    }

    public function settings()
    {
        $data['main_content'] = 'Admin/settings';
        $data['crumbdata'] = array('settings','accounts');
        $data['crumb'] = 'Admin/crumb';

        $data['title'] = 'Settings';
        $this->load->library('upload');
        $this->load->Model('Setting_Model', 'SM');
        $this->load->helper(array('form', 'url'));
        $post = $this->input->post();
        $image_path = FCPATH.ASSETS_IMG;
        $data["result"] = $this->SM->get_settings();
        if (!empty($post)) {
            $config['upload_path'] = $image_path ;
            $config['allowed_types'] = 'png|jpg|gif';
            $config['max_size'] = 2048;
            $config['overwrite'] = TRUE;
            $config['file_name'] = "favicon";

            $this->upload->initialize($config);
            if (!empty($_FILES["favicon"]["name"])) {
                if (!empty($_FILES['favicon']['name'])) {
                    if (!$this->upload->do_upload('favicon')) {
                        $data['errors'] = $this->upload->display_errors();
                        $error = true;
                    } else {
                        $favicon = $this->upload->data("file_name");
                        if(file_exists($image_path.$data["result"]["favicon"] ))
                        {
                            unlink($image_path.$data["result"]["favicon"] );

                        }
                        $post["favicon"] = $favicon;
                    }
                }
            }

            $config['file_name'] = "logo";
            $this->upload->initialize($config);
            if (!empty($_FILES['logo']['name'])) {
                if (!$this->upload->do_upload('logo')) {
                    $errors = $this->upload->display_errors();
                    $data['errors'] = $errors;
                    $error = true;
                } else {
                    $logo = $this->upload->data("file_name");
                    if(file_exists($image_path.$data["result"]["logo"]))
                    {
                        unlink($image_path.$data["result"]["logo"]);
                    }
                    $post["logo"] = $logo;
                }
            }
            if (empty($error)) {
                $this->SM->update_settings($post);
                $data["success"] = "Update Successfully";
                $data["result"] = $this->SM->get_settings();
            }
            $data['main_content'] = 'Admin/settings';
            $this->load->view('Admin/template', $data);
        } else {

            $this->load->view('Admin/template', $data);
        }
    }

    public function subscribe()
    {
        $xcrud = xcrud_get_instance();
        $xcrud->table('subscribers');
        $xcrud->unset_title();
        $data['title'] = 'Subscribes';
        $data['head'] = 'Subscribes';
        $data['content'] = $xcrud->render();
        $data['main_content'] = 'Admin/xcrud';
        $this->load->view('Admin/template', $data);
    }

    public function profile()
    {
        $data['title'] = 'Profile';
        $data['main_content'] = 'Admin/profile';
        $data['crumbdata'] = array('Profile');
        $data['crumb'] = 'Admin/crumb';
        $this->load->view('Admin/template', $data);
    }

    public function notifications()
    {
        $data['title'] = 'notifications';
        $data['main_content'] = 'Admin/notifications';
        $this->load->view('Admin/template', $data);
    }

    public function logout(){
        $this->session->unset_userdata('check_admin');
        redirect(base_url('admin/login'));
    }

    public function dashboard()
    {
        $data['title'] = 'Dashboard';
        $data['main_content'] = 'Admin/dashboard';
        $data['crumbdata'] = array('');
        $data['crumb'] = 'Admin/crumb';
        $this->load->view('Admin/template', $data);
    }
    public function testmail()
    {
        $this->load->library('email',Config::$email_settings);
        $this->email->from('info@tecfare.com', 'Tecfare');
        $this->email->to('iamhamzajaved@gmail.com');
        $view = email_render('email/testemail',[]);
        $this->email->subject('Email Test');
        $this->email->message($view);
        $this->email->send(FALSE);
        dd($this->email->print_debugger());
    }
    public function memtest()
    {
        $this->load->driver('cache', array('adapter' => 'apc', 'backup' => 'file'));
        $this->cache->save('foo', "sdfsdfsdfds", 300);
        $foo = $this->cache->get('foo');
        echo $foo;

    }

    public function menus()
    {
        $xcrud = xcrud_get_instance();
        $xcrud->table('module_cms_menus');
        $xcrud->unset_title();
        $data['title'] = 'Subscribes';
        $data['head'] = 'Subscribes';
        $data['content'] = $xcrud->render();
        $data['main_content'] = 'Admin/xcrud_menu.php';
        $this->load->view('Admin/template', $data);
    }
}