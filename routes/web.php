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

use App\Http\Controllers\ViewController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('praktikum1', function () {
    return view('prak1web');
});

Route::get('tugas4', function () {
    return view('tugas4web');
});

Route::get('praktikum2', 'ViewController@showPraktikum2');

Route::get('show', 'ViewController@showForm');
Route::post('result','ViewController@result');

Route::get('ets', 'ViewController@showETS');

Route::get('/pegawai','PegawaiController@index');
Route::get('/pegawai/cari','PegawaiController@cari');
Route::get('/pegawai/tambah','PegawaiController@tambah');
Route::post('/pegawai/store','PegawaiController@store');
Route::get('/pegawai/edit/{id}','PegawaiController@edit');
Route::post('/pegawai/update','PegawaiController@update');
Route::get('/pegawai/hapus/{id}','PegawaiController@hapus');
Route::get('/pegawai/detail/{id}','PegawaiController@view');

Route::get('/tugas','TugasController@index');
Route::get('/tugas/cari','TugasController@cari');
Route::get('/tugas/tambah','TugasController@tambah');
Route::post('/tugas/store','TugasController@store');
Route::get('/tugas/edit/{id}','TugasController@edit');
Route::post('/tugas/update','TugasController@update');
Route::get('/tugas/hapus/{id}','TugasController@hapus');


Route::get('/absen','AbsenController@index');
Route::get('/absen/tambah','AbsenController@tambah');
Route::post('/absen/store','AbsenController@store');
Route::get('/absen/edit/{id}','AbsenController@edit');
Route::post('/absen/update','AbsenController@update');
Route::get('/absen/hapus/{id}','AbsenController@hapus');

Route::get('/home','HomeController@index');
Route::get('/home/tambah','HomeController@tambah');

Route::get('/snack','SnackController@index');
Route::get('/snack/cari','SnackController@cari');
Route::get('/snack/tambah','SnackController@tambah');
Route::post('/snack/store','SnackController@store');
Route::get('/snack/edit/{id}','SnackController@edit');
Route::post('/snack/update','SnackController@update');
Route::get('/snack/hapus/{id}','SnackController@hapus');
Route::get('/snack/detail/{id}','SnackController@view');
