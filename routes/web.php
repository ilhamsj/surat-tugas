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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/surat', 'HomeController@surat_tugas')->name('surat');

Route::resource('pegawai', 'PegawaiController');
Route::resource('surat_undangan', 'SuratUndanganController');
Route::resource('surat_tugas', 'SuratTugasController');

// middleware
// admin_kepegawaian, admin_bagian, pegawai