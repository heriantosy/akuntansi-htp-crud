<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('layout.main');
// });

// Route::get('/home', function () {
//     return view('layout.main');
// });

Route::get('/', 'App\Http\Controllers\AkunController@index');
Route::get('/akuntransaksi', 'App\Http\Controllers\akuntansitransaksiController@index');
Route::get('/home', 'App\Http\Controllers\AkunController@index');
Route::get('akun', 'App\Http\Controllers\AkunController@index');
Route::get('akun/tambah', 'App\Http\Controllers\AkunController@tambah');
Route::post('akun/tambah_proses', 'App\Http\Controllers\AkunController@tambah_proses');
Route::get('akun/edit/{id}', 'App\Http\Controllers\AkunController@edit');
Route::post('akun/edit_proses', 'App\Http\Controllers\AkunController@edit_proses');
Route::get('akun/delete/{id}', 'App\Http\Controllers\AkunController@delete');
Route::get('kelompok', 'App\Http\Controllers\kevin\KelompokController@index');



Route::get('supplier', 'App\Http\Controllers\ControllerSupplier@index');

Route::get('jadwal', 'App\Http\Controllers\JadwalController@index');

Route::get('indukuser', 'App\Http\Controllers\ControllerIndukUser@index');

Route::get('views_yosi', 'App\Http\Controllers\ControllerYosi@index');
Route::get('views_yosi/tambah_yosi', 'App\Http\Controllers\ControllerYosi@tambah_yosi');
Route::post('views_yosi/tambah_proses_yosi', 'App\Http\Controllers\ControllerYosi@tambah_proses_yosi');
Route::get('views_yosi/edit_yosi/{id}', 'App\Http\Controllers\ControllerYosi@edit_yosi');
Route::post('views_yosi/edit_proses_yosi', 'App\Http\Controllers\ControllerYosi@edit_proses_yosi');
Route::get('views_yosi/delete_yosi/{id}', 'App\Http\Controllers\ControllerYosi@delete_yosi');

Route::get('abari_akun', 'App\Http\Controllers\AbariAkunController@index');
Route::get('abari_akun/tambah','App\Http\Controllers\AbariAkunController@tambah');
Route::post('abari_akun/tambah_proses','App\Http\Controllers\AbariAkunController@tambah_proses');
Route::get('abari_akun/edit/{id}','App\Http\Controllers\AbariAkunController@edit');
Route::post('abari_akun/edit_proses','App\Http\Controllers\AbariAkunController@edit_proses');
Route::get('abari_akun/delete/{id}','App\Http\Controllers\AbariAkunController@delete');

require('galehludi.php');
require('dika.php');
require('ReskiUtama.php');
