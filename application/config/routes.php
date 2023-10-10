<?php
defined('BASEPATH') OR exit('No direct script access allowed');
ob_start();
/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['box/list_logs/(:any)/(:any)'] ='applogs/list_logs/$1/$2';
$route['box/list_service_log/(:any)/(:any)'] ='applogs/list_service_log/$1/$2';
$route['box/list_log_category/(:any)/(:any)'] ='applogs/list_log_category/$1/$2';

$route['servicemonitor']='servicelinklogs/create_servicelink_logs';
// $route['servicelinklogs/(:any)/(:any)']='pages/servicelinkpage/$1/$2';
// $route['servicelinklogs/(:any)']='servicelinklogs/$1';
$route['servicelinklogs']='pages/servicelinkpage';


$route['box/list_logs/(:any)/(:any)'] ='applogs/list_logs/$1/$2';
$route['box/list_service_log/(:any)/(:any)'] ='applogs/list_service_log/$1/$2';
$route['box/list_log_category/(:any)/(:any)'] ='applogs/list_log_category/$1/$2';

$route['app/(:any)/(:any)']='pages/view_pages/$1/$2';
$route['app/(:any)']='pages/view_pages/$1';
$route['default_controller'] = 'pages/homepage';
$route['404_override'] = '';
// $route['translate_uri_dashes'] = FALSE;
