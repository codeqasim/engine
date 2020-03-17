<?php
defined('BASEPATH') OR exit('No direct script access allowed');


if (!function_exists('check_admin')) {

    function check_admin() {
        $ci = get_instance();
        $ci->load->library('session');
        return $ci->session->userdata('check_admin');

    }

}
if (!function_exists('getAllObjects')) {

    function getAllObjects() {
        $ci = get_instance();
        $ci->load->library('session');
        $ci->load->model('Modules_Model', 'mm');
        $ci->load->model('Setting_Model', 'sm');
        $ci->load->model('Auth_Model', 'am');
        $modules =  $ci->mm->get_modules();
        $modules_final = array();
        foreach ($modules as &$md)
        {
            $modules_final[$md->name] = $md;
        }
        $data["modules"] = $modules_final;
        $data["accounts_types"] =  $ci->am->getAccountTypes();
        $data["drawer_status"] =  $ci->session->userdata('drawer_status');
        return $data;

    }

}

if (!function_exists('sendRequest')) {

     function sendRequest($req_method = 'GET', $url = '', $payload = [], $_headers = [])
    {

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_ENCODING, "");
        curl_setopt($curl, CURLOPT_MAXREDIRS, 10);
        curl_setopt($curl, CURLOPT_TIMEOUT, 30);
        curl_setopt($curl, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);

        if ($req_method == 'POST') {
            curl_setopt($curl, CURLOPT_POST, true);
            curl_setopt($curl, CURLOPT_POSTFIELDS, $payload);
        } else {
            curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "GET");
            $url = $url."?".http_build_query($payload);
        }

        if (! empty($_headers) ) {
            curl_setopt($curl, CURLOPT_HTTPHEADER, $_headers);
        }

        curl_setopt($curl, CURLOPT_URL, $url);

        $response = curl_exec( $curl );
        $err      = curl_error( $curl );

        curl_close( $curl );

        if ( $err ) {
            $response = $err;
        }

        return $response;
    }


}