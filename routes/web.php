<?php

use Illuminate\Support\Facades\Route;

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

//template
Route::get('/beranda','BerandaController@index');

//pengaduan
Route::get('/pengaduan', 'PengaduanController@index')->name('pengaduan');
Route::get('/pengaduan/create', 'PengaduanController@create')->name('pengaduan.create');
Route::post('/pengaduan/store', 'PengaduanController@store');
Route::GET('/pengaduan/update/{id_pengaduan}', 'PengaduanController@update');
Route::get('/pengaduan/edit/{id_pengaduan}', 'PengaduanController@edit');
Route::get('/pengaduan/destroy/{id_pengaduan}', 'PengaduanController@destroy');

//tanggapan
Route::get('/tanggapan', 'TanggapanController@index');
Route::get('/tanggapan/create', 'TanggapanController@create');
Route::post('/tanggapan/store', 'TanggapanController@store');
Route::GET('/tanggapan/update/{id_tanggapan}', 'TanggapanController@update');
Route::get('/tanggapan/edit/{id_tanggapan}', 'TanggapanController@edit');
Route::get('/tanggapan/destroy/{id_tanggapan}', 'TanggapanController@destroy');