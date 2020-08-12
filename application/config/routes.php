<?php
defined('BASEPATH') OR exit('No direct script access allowed');




$route['hapusStasiun/(:any)'] = 'admin/hapus_setasiun/$1';
$route['tambahSetasiun'] = 'admin/tambah_setasiun';
$route['admin/dashboard'] = 'admin/keHalamanDashboard';

$route['logout'] = 'admin/logout';
$route['prosesLogin'] = 'admin/login';
$route['login'] = 'admin/keHalamanlogin';

$route['konfirmasi'] = 'guest/keHalamanKonfirmasi';
$route['default_controller'] = 'guest/keHalamanDepan';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
