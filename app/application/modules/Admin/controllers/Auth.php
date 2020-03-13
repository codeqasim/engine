<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends MX_Controller {

    public function __construct()
	{
        parent::__construct();
        $this->load->helper('xcrud');
        $result = check_admin();
        $this->load->helper('form');
        $this->load->library('form_validation');
        if(!empty($result))
        {
         redirect(ADMINURL.'/admin');
        }
        $this->load->model('Auth_Model','am');

    }

    public function login()
    {
        $post = $this->input->post();
        if(!empty($post))
        {
            $this->form_validation->set_rules('email', 'Email or  Username', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');
            if ($this->form_validation->run() == FALSE)
            {
                $data["error"] =  validation_errors();
                $data['title'] = 'login';
                $data['main_content'] = 'login';
                $this->load->view('login_main', $data);

            }else{
                $result =  $this->am->login($post);
                if(is_numeric($result) && $result == 2)
                {
                    $data["error"] = "password incorrect";
                    $data['title'] = 'login';
                    $data['main_content'] = 'login';
                    $this->load->view('login_main', $data);

                }else if( is_numeric($result) && $result == 3){
                    $data["error"] = "Email not found";
                    $data['title'] = 'login';
                    $data['main_content'] = 'login';
                    $this->load->view('login_main', $data);

                }else{
                    $this->session->set_userdata('check_admin',$result);
                    redirect(base_url("/admin"));
                }
            }
        }
        $data['title'] = 'login';
        $data['main_content'] = 'login';
        $this->load->view('login_main', $data);
    }

}