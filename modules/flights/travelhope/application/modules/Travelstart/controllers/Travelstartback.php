<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Travelstartback extends MX_Controller {

    function __construct() {
        $method_segment = $this->uri->segment(3);
        $chk = app()->service('ModuleService')->isActive('travelstart');
        if (!$chk && $method_segment != "settings" && $method_segment != "update_settings") {
            backError_404($this->data);
        }
        $checkingadmin = $this->session->userdata('pt_logged_admin');
        if (!empty($checkingadmin)) {
            $this->data['userloggedin'] = $this->session->userdata('pt_logged_admin');
        } else {

            $this->data['userloggedin'] = $this->session->userdata('pt_logged_agent');
        }

        if (empty($this->data['userloggedin'])) {
            redirect("admin");
        }

        if (!empty($checkingadmin)) {
            $this->data['adminsegment'] = "admin";
        } else {
            $this->data['adminsegment'] = "agent";
        }

        if ($this->data['adminsegment'] == "admin") {
            $chkadmin = modules::run('Admin/validadmin');
            if (!$chkadmin) {
                redirect('admin');
            }
        } else {

            $chkagent = modules::run('agent/validagent');
            if (!$chkagent) {
                redirect('agent');
            }
        }

        if (!pt_permissions('travelstart', $this->data['userloggedin'])) {
            redirect('admin');
        }
        $this->load->helper('settings');

        $this->data['isadmin'] = $this->session->userdata('pt_logged_admin');
        $this->data['isSuperAdmin'] = $this->session->userdata('pt_logged_super_admin');
    }

    function index() {
    }

    function settings() {

        $payload = $this->input->post();
        if (!empty($payload)) {
            app()->service("ModuleService")->update('travelstart', 'settings', $payload);
            redirect('admin/travelstart/settings');
        }
        $this->data['settings'] = app()->service("ModuleService")->get('travelstart')->settings;

        $this->data['main_content'] = 'Travelstart/settings';
        $this->data['page_title'] = 'Travel Start Settings';

        $this->load->view('Admin/template', $this->data);
    }
}
