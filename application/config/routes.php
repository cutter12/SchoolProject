<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'maincontroller/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['schooldata'] = 'maincontroller/schooldata';
$route['schoolhistory'] = 'maincontroller/schoolhistory';
$route['schoolmanager'] = 'maincontroller/schoolmanager';
$route['schoolregister'] = 'maincontroller/schoolregister';
$route['register'] = 'maincontroller/register';
$route['admin'] = 'maincontroller/admin';
$route['admin/(:any)'] = 'maincontroller/admin';
