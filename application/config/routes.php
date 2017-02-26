<?php
defined('BASEPATH') OR exit('No direct script access allowed');


//kiri= user liat , kanan = file controller/metode
//kl tdk ada metode, artix itu function index
$route['default_controller'] = 'home';
//$route['resep'] = 'resep';
$route['resep1'] = 'resep1';

$route['pendaftaran'] = 'pendaftaran';
$route['prosespendaftaran'] = 'pendaftaran/prosespendaftaran';
$route['kontak'] = 'kontak';
$route['tambahkontak'] = 'crud_kontak';
$route['f_kontak'] = 'f_kontak';
$route['anggota'] = 'anggota';



$route['admin'] = 'admin';
$route['admin/login'] = 'admin/aksi_login';
$route['admin/logout'] = 'admin/logout';
$route['admin_home'] = 'admin_home';
//$route['admin_resep'] = 'admin_resep';
$route['admin_resep1'] = 'admin_resep1';


//$route['admin_resep/tambah'] = 'admin_resep/tambah';
$route['admin_resep1/tambah'] = 'admin_resep1/tambah';


$route['admin_anggota'] = 'admin_anggota';



/***********AJAX******************/

$route['ajax/ceknim'] = 'ajax/ceknimnim';

/********************************/





$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;



