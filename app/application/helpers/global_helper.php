<?php defined('BASEPATH') OR exit('No direct script access allowed');


if ( ! function_exists('add_active')) {

    function add_active($name)
    {
        $segments = explode("/",uri_string());
        if(empty($segments[1])){
            $segments[1] = "dashboard";
        }
        if($segments[1] == $name )
        {
            return "parent active open";
        }else{
            return "parent";

        }
    }
}
if ( ! function_exists('dd')) {

    function dd($array)
    {
        echo "<pre>";
        print_r($array);
        die;
    }
}
if ( ! function_exists('slugify')) {

    function slugify($text)
    {
        // replace non letter or digits by -
        $text = preg_replace('~[^\pL\d]+~u', '-', $text);

        // transliterate
        $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

        // remove unwanted characters
        $text = preg_replace('~[^-\w]+~', '', $text);

        // trim
        $text = trim($text, '-');

        // remove duplicate -
        $text = preg_replace('~-+~', '-', $text);

        // lowercase
        $text = strtolower($text);

        if (empty($text)) {
            return 'n-a';
        }

        return $text;
    }
}
if ( ! function_exists('slugifyToString')) {

    function slugifyToString($text)
    {
        // replace non letter or digits by -
        $text = strtolower(preg_replace('/\s/', '_', $text));

        return $text;
    }
}
if ( ! function_exists('send_mail')) {

    function send_mail()
    {
        $ci = get_instance();
        // replace non letter or digits by -
        $ci->load->library('email',Config::$email_settings);

        $ci->email->from('info@tecfare.com', 'Tecfare');
        $ci->email->to('hamzarana@gmail.com');


        $ci->email->subject('Email Test');
        $ci->email->message('Testing the email class.');
        $ci->email->initialize();
        $ci->email->send(FALSE);

        dd($ci->email->print_debugger());
        exit("SDfd");


    }
}
if (!function_exists('email_render')) {

    function email_render($view, $data) {
        $CI =& get_instance();
        $data['content'] = $view;
        $data['data'] = $data;
        return  $CI->load->view('email/template', $data,true);
    }

}