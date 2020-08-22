<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['tambahJadwal'] = 'admin/tambah_jadwal';
$route['admin/dashboard/kelola-jadwal'] = 'admin/keHalamanKelolaJadwal';

$route['cariTiket'] = 'guest/cari_tiket';

$route['editStasiun'] = 'admin/edit_stasiun';
$route['admin/dashboard/edit/(:any)'] = 'admin/keHalamanEditStasiun/$1';

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
