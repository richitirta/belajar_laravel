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

Route::get('/', function () {
    return view('welcome');
});
Route::get('halo', function () {
    return "Hai ini richi";
});

Route::get('profile', function () {
    return view('profile');
});
Route::get('pegawai/{nama}', 'PegawaiController@index');
Route::get('dosen', 'DosenController@index');
Route::get('/formulir', 'PegawaiController@formulir');
Route::post('/formulir/proses', 'PegawaiController@proses');
Route::get('/blog', 'BlogController@home');
Route::get('/blog/tentang', 'BlogController@tentang');
Route::get('/blog/kontak', 'BlogController@kontak');
//route CRUD
Route::get('/pegawai','PegawaiController@index');
Route::get('/pegawai/tambah','PegawaiController@tambah');
Route::get('/pejabat','PejabatController@index');
Route::get('/pejabat/tambah','PejabatController@tambah');
Route::get('/pejabat/edit/{id}', 'PejabatController@edit');
Route::post('/pejabat/update','PejabatController@update');
Route::post('/pejabat/store','PejabatController@store');
Route::get('/pejabat/hapus/{id}','PejabatController@hapus');