<?php
defined('BASEPATH') OR exit('No direct script access allowed');




$route['tambahSetasiun'] = 'admin/tambah_setasiun';
$route['admin/dashboard'] = 'admin/keHalamanDashboard';

$route['logout'] = 'admin/logout';
$route['prosesLogin'] = 'admin/login';
$route['login'] = 'admin/keHalamanlogin';

$route['konfirmasi'] = 'guest/keHalamanKonfirmasi';
$route['default_controller'] = 'guest/keHalamanDepan';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
