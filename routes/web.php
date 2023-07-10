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

Route::get('/', function () {
    return view('welcome');
});

Route::get('adit_akun', 'App\Http\Controllers\AkunController@index');
Route::get('adit_akun/tambah', 'App\Http\Controllers\AkunController@tambah');
Route::post('adit_akun/tambah_proses', 'App\Http\Controllers\AkunController@tambah_proses');
Route::get('adit_akun/edit/{id}', 'App\Http\Controllers\AkunController@edit');
Route::post('adit_akun/edit_proses', 'App\Http\Controllers\AkunController@edit_proses');
Route::get('adit_akun/delete/{id}', 'App\Http\Controllers\AkunController@delete');

Route::get('kelompok', 'App\Http\Controllers\kevin\KelompokController@index');

Route::get('akuntansitransaksi', 'App\Http\Controllers\akuntansitransaksiController@index');

Route::get('supplier', 'App\Http\Controllers\ControllerSupplier@index');

Route::get('jadwal', 'App\Http\Controllers\JadwalController@index');


Route::get('indukuser', 'App\Http\Controllers\ControllerIndukUser@index');

Route::get('views_yosi', 'App\Http\Controllers\ControllerYosi@index');
Route::get('views_yosi/tambah_yosi', 'App\Http\Controllers\ControllerYosi@tambah_yosi');
Route::post('views_yosi/tambah_proses_yosi', 'App\Http\Controllers\ControllerYosi@tambah_proses_yosi');
Route::get('views_yosi/edit_yosi/{id}', 'App\Http\Controllers\ControllerYosi@edit_yosi');
Route::post('views_yosi/edit_proses_yosi', 'App\Http\Controllers\ControllerYosi@edit_proses_yosi');
Route::get('views_yosi/delete_yosi/{id}', 'App\Http\Controllers\ControllerYosi@delete_yosi');

require('galehludi.php');
require('dika.php');
require('sephiarst.php');
require('adit.php');
require('ReskiUtama.php');
