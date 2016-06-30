<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
$route['default_controller'] = "admin";
//$route[''] = "home";

$route['404_override'] = 'home';
$route['admin'] = 'admin/dashboard';
//$route['client'] = 'client/dashboard';
$route['user'] = 'user/dashboard';
$route['authority'] = 'authority/dashboard';