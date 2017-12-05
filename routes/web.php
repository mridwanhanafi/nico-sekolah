<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@pengalihan')->name('pengalihan');
Auth::routes();
Route::get('/test', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@pengalihan')->name('pengalihan');

// Admin
Route::get('/admin', 'AdminController@index')->name('admin_page')->middleware('auth');
Route::get('/tambah-kelas', 'AdminController@addKelasForm')->name('tambah_kelas')->middleware('auth');
Route::post('/tambah-kelas', 'AdminController@createKelas')->middleware('auth');
Route::get('/tambah-siswa', 'AdminController@addSiswa')->name('tambah_siswa')->middleware('auth');

// SPV
Route::get('/spv', 'SpvController@index')->name('spv_page')->middleware('auth');

// Siswa
Route::get('/siswa', 'SiswaController@index')->name('siswa_page')->middleware('auth');