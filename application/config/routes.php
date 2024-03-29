<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//PenggunaController
$route['profile'] = 'PenggunaController/profile';
$route['dashboard'] = 'PenggunaController';
$route['pengguna'] = 'PenggunaController/daftar';
$route['tambah_pengguna'] = 'PenggunaController/tambah';
$route['edit_pengguna/(:any)'] = 'PenggunaController/edit/$1';
$route['delete_pengguna/(:any)'] = 'PenggunaController/delete/$1';
$route['detail_pengguna'] = 'PenggunaController/detail';

//Provider
$route['provider'] = 'ProviderController/daftar';
$route['tambah_provider'] = 'ProviderController/tambah';
$route['edit_provider/(:any)'] = 'ProviderController/edit/$1';
$route['delete_provider/(:any)'] = 'ProviderController/delete/$1';
$route['detail_provider'] = 'ProviderController/detail';
//Cabang
$route['cabang'] = 'CabangController/daftar';
$route['tambah_cabang'] = 'CabangController/tambah';
$route['edit_cabang/(:any)'] = 'CabangController/edit/$1';
$route['delete_cabang/(:any)'] = 'CabangController/delete/$1';
$route['detail_cabang'] = 'CabangController/detail';
//Kios
$route['kios'] = 'KiosController/daftar';
$route['tambah_kios'] = 'KiosController/tambah';
$route['edit_kios/(:any)'] = 'KiosController/edit/$1';
$route['delete_kios/(:any)'] = 'KiosController/delete/$1';
$route['detail_kios'] = 'KiosController/detail';
//Pulsa
$route['pulsa'] = 'PulsaController/daftar';
$route['tambah_pulsa'] = 'PulsaController/tambah';
$route['edit_pulsa/(:any)'] = 'PulsaController/edit/$1';
$route['update_stok'] = 'PulsaController/update_stok';
$route['delete_pulsa/(:any)'] = 'PulsaController/delete/$1';
$route['detail_pulsa'] = 'PulsaController/detail';
//Paket
$route['paket'] = 'PaketController/daftar';
$route['tambah_paket'] = 'PaketController/tambah';
$route['edit_paket/(:any)'] = 'PaketController/edit/$1';
$route['update_stok'] = 'PaketController/update_stok';
$route['delete_paket/(:any)'] = 'PaketController/delete/$1';
$route['detail_paket'] = 'PaketController/detail';
//transaksi
$route['transaksi/(:any)/(:any)'] = 'TransaksiController/daftar/$1/$2';
$route['karyawan/debit'] = 'TransaksiController/tambahdebit';
$route['karyawan/kredit'] = 'TransaksiController/tambahkredit';
$route['karyawan/riwayat/masuk'] = 'TransaksiController/riwayat';
$route['karyawan/riwayat/keluar'] = 'TransaksiController/riwayat';
$route['administrator/riwayat/masuk/cetak'] = 'TransaksiController/cetak';
$route['administrator/riwayat/keluar/cetak'] = 'TransaksiController/cetak';
$route['detail_paket_karyawan'] = 'TransaksiController/detail';
// authentication
$route['logout'] = 'AuthController/logout';
$route['login'] = 'AuthController/login';
$route['default_controller'] = 'AuthController';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


