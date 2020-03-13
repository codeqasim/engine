<?php


require_once(rtrim(FCPATH, '\\') . '/application/xcrud/xcrud.php');
if (!function_exists('xcrud_get_instance')) {
    function xcrud_get_instance($name = false)
    {
        $CI = &get_instance();
        $CI->load->library('session');
        $CI->load->helper('url');
        Xcrud_config::$scripts_url = base_url('');
        $xcrud = Xcrud::get_instance($name);
        return $xcrud;
    }
}
if (!function_exists('xcrud_store_session')) {
    function xcrud_store_session()
    {
        $CI = &get_instance();
        $CI->load->library('session');
        $CI->session->set_userdata(array('xcrud_sess' => Xcrud::export_session()));
    }
}
if (!function_exists('xcrud_restore_session')) {
    function xcrud_restore_session()
    {
        $CI = &get_instance();
        $CI->load->library('session');
        Xcrud::import_session($CI->session->userdata('xcrud_sess'));
    }
}
if (!function_exists('insert_before')) {
    function insert_before($postdata, $xcrud)
    {
        $name = $postdata->get("name");
        $postdata->set("slug", slugify($name));
    }
}
if (!function_exists('slugify')) {
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
