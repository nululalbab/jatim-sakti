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
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Fitur Pengajuan Anggaran
Route::get('daftar', 'PegawaiController@showDaftarAnggaran')->name('daftar.anggaran');

Route::get('form', 'PegawaiController@showFormAnggaran')->name('form.anggaran');
Route::POST('form', 'PegawaiController@createFormAnggaran')->name('post.form.anggaran');
Route::post('/form/upload', 'PegawaiController@proses_upload');

Route::get('unit','PegawaiController@showAnggaranUnit')->name('unit.anggaran');
Route::get('daftar/{id}', 'PegawaiController@showDaftarAnggaranUnit')->name('daftar.anggaran.unit');
