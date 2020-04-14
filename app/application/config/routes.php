<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// main routes
$route['default_controller'] ="home";
$route['sitemap\.xml'] = "Sitemap";
$route['404_override'] = 'home/error';
$route['translate_uri_dashes'] = FALSE;

// gitpull
$route['pull'] = 'home/pull';

$route['signup'] = "home/signup";
$route['flights/search'] = "Flights/searchFlight";
$route['flights/voucher'] = "Flights/voucher";

$route['flights(.*)'] = "Flights/index/$1";
$route['login'] = "accounts/accounts/login";
$route['register_action'] = "home/register_action";

$route[ADMINURL.'accounts/chagne_order'] = "admin/accounts/chagne_order";
$route[ADMINURL.'cms/chagne_order'] = "admin/cms/chagne_order";
$route[ADMINURL.'cms/page_headings'] = "admin/cms/page_headings";
$route[ADMINURL.'accounts/delete_all'] = "admin/accounts/delete_all";
$route[ADMINURL.'accounts/update_status'] = "admin/accounts/update_status";
$route[ADMINURL.'accounts/delete_all_account_type'] = "admin/accounts/delete_all_account_type";
$route[ADMINURL.'accounts/types([a-zA-Z0-9]*)'] = "admin/accounts/types$1";
$route[ADMINURL.'accounts/(:any)'] = "admin/accounts/index/$1";
$route[ADMINURL.'login'] = "admin/auth/login";

// cms
$route['contact'] = 'cms/contact';
$route['about'] = 'cms/about';
$route['policy'] = 'cms/policy';
$route['faq'] = 'cms/faq';
$route['careers'] = 'cms/careers';

$route['newslatters'] = "dashboard/newslatters";
$route['page/(:any)'] = "dashboard/page";

$route[ADMINURL.'blog/(:any)'] = "home/blog_detail/$1";
$route['blog/details/(:any)'] = "blogs/details/$1";
$route['blog/(:any)'] = "blog/index/$1";
$route['blog/search/(:any)'] = "blog/search/$1";