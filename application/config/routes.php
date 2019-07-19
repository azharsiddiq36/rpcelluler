<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	// jadwal
	$route['jadwal/tambah'] = 'JadwalController/tambah';
	$route['jadwal'] = 'JadwalController';
	
	// berkas
	$route['berkas/pengantar'] = 'BerkasController/formN1';
	$route['berkas/unggah/(:any)'] = 'BerkasController/unggah/$1';
	$route['berkas/riwayat/(:any)'] = 'BerkasController/riwayat/$1';
	$route['berkas/persyaratan'] = 'BerkasController/persyaratan';
	$route['berkas/(:any)']  = 'BerkasController/berkasSaya';
	$route['berkas/upload/(:any)'] = 'BerkasController/unggahBerkas/$1';

	// pendaftar
	$route['pendaftar'] = 'PendaftarController';
	$route['pendaftar/detail/(:any)'] = 'PendaftarController/detail/$1';
	$route['pendaftar/tambah'] = 'PendaftarController/tambah';
	$route['pendaftar/add'] = 'PendaftarController/add';
	$route['pendaftar/ubah/(:any)'] = 'PendaftarController/ubah/$1';
	$route['pendaftar/update/(:any)'] = 'PendaftarController/update/$1';
	$route['pendaftar/hapus/(:any)'] = 'PendaftarController/hapus/$1';
	$route['pendaftar/kelengkapan/(:any)'] = 'PendaftarController/kelengkapan/$1';
	$route['pendaftar/tambahKelengkapan'] = 'PendaftarController/tambahKelengkapan';
	$route['pendaftar/berkas']      =   'PendaftarController/berkas';
	$route['pendaftar/syarat']      =   'PendaftarController/syarat';


	//PenggunaController
	$route['dashboard'] = 'PenggunaController';
    $route['pengguna'] = 'PenggunaController/daftar';
    $route['tambah_pengguna'] = 'PenggunaController/tambah';
    $route['edit_pengguna/(:any)'] = 'PenggunaController/edit/$1';
    $route['delete_pengguna/(:any)'] = 'PenggunaController/delete/$1';
    $route['detail_pengguna'] = 'PenggunaController/detail';
	// authentication
	$route['logout'] = 'AdminController/logout';
    $route['login'] = 'AuthController/login';
	$route['default_controller'] = 'AuthController';
	$route['404_override'] = '';
	$route['translate_uri_dashes'] = FALSE;

