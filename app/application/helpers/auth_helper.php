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