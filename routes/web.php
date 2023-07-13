<?php

use Illuminate\Support\Facades\Route;
use App\Models\ModelMasterYosi;


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
    $myakun = new ModelMasterYosi();
        $views_master_yosi = $myakun->tampil_master_yosi();
        $data = array('views_master_yosi' => $views_master_yosi);
    return view('views_master_yosi/index', $data);
});


Route::get('views_yosi', 'App\Http\Controllers\ControllerYosi@index');
Route::get('views_yosi/tambah_yosi', 'App\Http\Controllers\ControllerYosi@tambah_yosi');
Route::post('views_yosi/tambah_proses_yosi', 'App\Http\Controllers\ControllerYosi@tambah_proses_yosi');
Route::get('views_yosi/edit_yosi/{id}', 'App\Http\Controllers\ControllerYosi@edit_yosi');
Route::post('views_yosi/edit_proses_yosi', 'App\Http\Controllers\ControllerYosi@edit_proses_yosi');
Route::get('views_yosi/delete_yosi/{id}', 'App\Http\Controllers\ControllerYosi@delete_yosi');

Route::get('views_master_yosi', 'App\Http\Controllers\ControllerMasterYosi@index');
Route::get('views_master_yosi/tambah_yosi', 'App\Http\Controllers\ControllerMasterYosi@tambah_yosi');
Route::post('views_master_yosi/tambah_proses_yosi', 'App\Http\Controllers\ControllerMasterYosi@tambah_proses_yosi');
Route::get('views_master_yosi/edit_yosi/{id}', 'App\Http\Controllers\ControllerMasterYosi@edit_yosi');
Route::post('views_master_yosi/edit_proses_yosi', 'App\Http\Controllers\ControllerMasterYosi@edit_proses_yosi');
Route::get('views_master_yosi/delete_yosi/{id}', 'App\Http\Controllers\ControllerMasterYosi@delete_yosi');

Route::get('views_induk_user_yosi', 'App\Http\Controllers\ControllerIndukUserYosi@index');
Route::get('views_induk_user_yosi/tambah_yosi', 'App\Http\Controllers\ControllerIndukUserYosi@tambah_yosi');
Route::post('views_induk_user_yosi/tambah_proses_yosi', 'App\Http\Controllers\ControllerIndukUserYosi@tambah_proses_yosi');
Route::get('views_induk_user_yosi/edit_yosi/{id}', 'App\Http\Controllers\ControllerIndukUserYosi@edit_yosi');
Route::post('views_induk_user_yosi/edit_proses_yosi', 'App\Http\Controllers\ControllerIndukUserYosi@edit_proses_yosi');
Route::get('views_induk_user_yosi/delete_yosi/{id}', 'App\Http\Controllers\ControllerIndukUserYosi@delete_yosi');

Route::get('views_backup_yosi', 'App\Http\Controllers\ControllerBackupYosi@index');
Route::get('views_backup_yosi/tambah_yosi', 'App\Http\Controllers\ControllerBackupYosi@tambah_yosi');
Route::post('views_backup_yosi/tambah_proses_yosi', 'App\Http\Controllers\ControllerBackupYosi@tambah_proses_yosi');
Route::get('views_backup_yosi/edit_yosi/{id}', 'App\Http\Controllers\ControllerBackupYosi@edit_yosi');
Route::post('views_backup_yosi/edit_proses_yosi', 'App\Http\Controllers\ControllerBackupYosi@edit_proses_yosi');
Route::get('views_backup_yosi/delete_yosi/{id}', 'App\Http\Controllers\ControllerBackupYosi@delete_yosi');

Route::get('views_tutupbuku_yosi', 'App\Http\Controllers\ControllerTutupBukuYosi@index');
Route::get('views_tutupbuku_yosi/tambah_yosi', 'App\Http\Controllers\ControllerTutupBukuYosi@tambah_yosi');
Route::post('views_tutupbuku_yosi/tambah_proses_yosi', 'App\Http\Controllers\ControllerTutupBukuYosi@tambah_proses_yosi');
Route::get('views_tutupbuku_yosi/edit_yosi/{id}', 'App\Http\Controllers\ControllerTutupBukuYosi@edit_yosi');
Route::post('views_tutupbuku_yosi/edit_proses_yosi', 'App\Http\Controllers\ControllerTutupBukuYosi@edit_proses_yosi');
Route::get('views_tutupbuku_yosi/delete_yosi/{id}', 'App\Http\Controllers\ControllerTutupBukuYosi@delete_yosi');

Route::get('views_jurnalmasuk_yosi', 'App\Http\Controllers\ControllerJurnalMasukYosi@index');
Route::get('views_jurnalmasuk_yosi/tambah_yosi', 'App\Http\Controllers\ControllerJurnalMasukYosi@tambah_yosi');
Route::post('views_jurnalmasuk_yosi/tambah_proses_yosi', 'App\Http\Controllers\ControllerJurnalMasukYosi@tambah_proses_yosi');
Route::get('views_jurnalmasuk_yosi/edit_yosi/{id}', 'App\Http\Controllers\ControllerJurnalMasukYosi@edit_yosi');
Route::post('views_jurnalmasuk_yosi/edit_proses_yosi', 'App\Http\Controllers\ControllerJurnalMasukYosi@edit_proses_yosi');
Route::get('views_jurnalmasuk_yosi/delete_yosi/{id}', 'App\Http\Controllers\ControllerJurnalMasukYosi@delete_yosi');

Route::get('views_jurnalkeluar_yosi', 'App\Http\Controllers\ControllerJurnalKeluarYosi@index');
Route::get('views_jurnalkeluar_yosi/tambah_yosi', 'App\Http\Controllers\ControllerJurnalKeluarYosi@tambah_yosi');
Route::post('views_jurnalkeluar_yosi/tambah_proses_yosi', 'App\Http\Controllers\ControllerJurnalKeluarYosi@tambah_proses_yosi');
Route::get('views_jurnalkeluar_yosi/edit_yosi/{id}', 'App\Http\Controllers\ControllerJurnalKeluarYosi@edit_yosi');
Route::post('views_jurnalkeluar_yosi/edit_proses_yosi', 'App\Http\Controllers\ControllerJurnalKeluarYosi@edit_proses_yosi');
Route::get('views_jurnalkeluar_yosi/delete_yosi/{id}', 'App\Http\Controllers\ControllerJurnalKeluarYosi@delete_yosi');

Route::get('views_jurnalumum_yosi', 'App\Http\Controllers\ControllerJurnalUmumYosi@index');
Route::get('views_jurnalumum_yosi/tambah_yosi', 'App\Http\Controllers\ControllerJurnalUmumYosi@tambah_yosi');
Route::post('views_jurnalumum_yosi/tambah_proses_yosi', 'App\Http\Controllers\ControllerJurnalUmumYosi@tambah_proses_yosi');
Route::get('views_jurnalumum_yosi/edit_yosi/{id}', 'App\Http\Controllers\ControllerJurnalUmumYosi@edit_yosi');
Route::post('views_jurnalumum_yosi/edit_proses_yosi', 'App\Http\Controllers\ControllerJurnalUmumYosi@edit_proses_yosi');
Route::get('views_jurnalumum_yosi/delete_yosi/{id}', 'App\Http\Controllers\ControllerJurnalUmumYosi@delete_yosi');
