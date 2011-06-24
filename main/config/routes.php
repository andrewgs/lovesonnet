<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$route['default_controller'] = "users_interface";
$route['404_override'] = '';

/* -------------------------------------------- USER INTERFACE ---------------------------------------------------------- */

$route[''] = "users_interface/index";
$route['dresses'] = "users_interface/dresses";
$route['dresses/:num'] = "users_interface/dresses";
$route['dress-info/:num'] = "users_interface/dress_info";
$route['accessories-info/:num'] = "users_interface/access_info";
$route['accessories'] = "users_interface/accessories";
$route['accessories/:num'] = "users_interface/accessories";
$route['services'] = "users_interface/services";
$route['about'] = "users_interface/about";
$route['contact'] = "users_interface/contact";
$route['thanks'] = "users_interface/thanks";
$route['admin']	= "users_interface/admin_login";
$route['sunit/viewimage/:num'] = "users_interface/viewimage";
$route['bunit/viewimage/:num'] = "users_interface/viewimage";
$route['unit/viewimage/:num'] = "users_interface/viewimage";
$route['add-email'] = "users_interface/insert_email";
/* -------------------------------------------- ADMIN INTERFACE ---------------------------------------------------------- */
$route['profile'] = "admin_interface/profile";
$route['shutdown'] = "admin_interface/shutdown";
$route['admin/dress-add'] = "admin_interface/unit_add";
$route['admin/accessories-add'] = "admin_interface/unit_add";
$route['admin/dress-edit/:num'] = "admin_interface/unit_edit";
$route['admin/accessories-edit/:num'] = "admin_interface/unit_edit";
$route['admin/dress-delete/:num'] = "admin_interface/unit_delete";
$route['admin/accessories-delete/:num'] = "admin_interface/unit_delete";
