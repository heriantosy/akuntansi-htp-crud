<?php

Route::get('abari_akun', 'App\Http\Controllers\AbariAkunController@index');
Route::get('abari_akun/tambah', 'App\Http\Controllers\AbariAkunController@tambah');
Route::post('abari_akun/tambah_proses', 'App\Http\Controllers\AbariAkunController@tambah_proses');
Route::get('abari_akun/edit/{id}', 'App\Http\Controllers\AbariAkunController@edit');
Route::post('abari_akun/edit_proses', 'App\Http\Controllers\AbariAkunController@edit_proses');
Route::get('abari_akun/delete/{id}', 'App\Http\Controllers\AbariAkunController@delete');