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

Route::resource('/siswas','SiswaController');

Route::get('export-pdf','PersyaratanController@exportPDF');

Route::get('/laporans', 'LaporanController@index')->name('laporans');
Route::get('/laporans/cari', 'LaporanController@cari');
Route::get('/laporans/print', 'LaporanController@print')->name('laporans.print');
Route::get('/cetak=siswa', 'App\Controllers\SiswaController@cetakSiswa')->name('cetak-siswa');