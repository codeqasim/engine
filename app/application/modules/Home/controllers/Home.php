<?php

class Home extends MX_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('Home_Model');
    }
    public function index()
    {
     $this->theme->view('index');
    }

    public function contact()
    {
    $this->theme->view('contact');
    }


    public function signup()
    {
    $this->theme->view('accounts/signup');
    }

    public function register_action()
    {
    $email=$this->input->post('email');

    $this->load->model('MainModel');
    $ch=$this->MainModel->verify_email($email);

    if($ch){
    $data['error']='Email Already Exits';
    $this->theme->view('accounts/signup',$data);
    }else{
    $data=array(
    'first_name'=>$this->input->post('first_name'),
    'last_name'=>$this->input->post('last_name'),
    'email'=>$this->input->post('email'),
    'phone'=>$this->input->post('phone'),
    'password'=>$this->input->post('password'),
    );
    $this->load->model('MainModel');
    $id=$this->MainModel->add_user($data);
    if($id){
    $this->session->set_userdata('id',$id);
    redirect('home');
    }
    else{
    echo '';
    }
    }
    }


    public function signin()
    {
    $this->theme->view('accounts/signin');
    }

    public function login_action()
    {
    $email=$this->input->post('email');
    $password=$this->input->post('password');

    $this->load->model('MainModel');
    $id=$this->MainModel->verify($email,$password);

    if($id){
    $this->session->set_userdata('id',$id);
    redirect('airbnb');
    }else{
    $data['error']='Email doest Not Exists';
    $this->theme->view('accounts/singin',$data);
    }
    }

    public function logout()
    {
     $this->session->unset_userdata('id');
    redirect('airbnb');
    }

    public function blogs(){
        $data["blogs"] = $this->BlogModel->get_blogs();
        $data["categories"] = $this->BlogModel->get_category();
        $data['metas'] =  signup_meta();
        render('front/blogs', $data);
    }
    public function blog_detail(){
        $data["blog"] = $this->BlogModel->get_by_category_blogs($this->uri->segment(2));
        $data["categories"] = $this->BlogModel->get_category();
        $data['metas'] =  signup_meta();
        render('front/blog_detail', $data);
    }
    public function profile()
    {
        $profile = $this->HomeModel->getProfile($this->user_data->id);
        dd($profile );
    }
    public function error(){
        $this->output->set_status_header('404');
        $data['metas'] =  error_meta();
        $this->theme->view('404',$data);
    }

    public function cms()
    {
        $data["cms"] = $this->HomeModel->getCmsbySlug($this->uri->segment(2));
        dd($data["cms"] );
    }
    public function subscribe()
    {
        $response = $this->HomeModel->subscribe_email($this->input->post("email"));
        echo  $response;
    }

}
