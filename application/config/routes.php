<?php
defined('BASEPATH') OR exit('No direct script access allowed');



$route['default_controller'] = 'home';
$route['resep'] = 'resep';
$route['pendaftaran'] = 'pendaftaran';
$route['prosespendaftaran'] = 'pendaftaran/prosespendaftaran';
$route['kontak'] = 'kontak';
$route['anggota'] = 'anggota';
$route['admin'] = 'admin';
$route['admin/login'] = 'admin/aksi_login';
$route['admin/logout'] = 'admin/logout';
$route['admin_home'] = 'admin_home';
$route['admin_resep'] = 'admin_resep';
$route['admin_resep/tambah'] = 'admin_resep/tambah';
$route['admin_anggota'] = 'admin_anggota';



/***********AJAX******************/
$route['ajax/ceknama'] = 'ajax/ceknamaanggota';
$route['ajax/ceknim'] = 'ajax/ceknimnim';


$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
