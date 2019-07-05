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
Route::get('/pegawai', 'PegawaiController@index')->name('pegawai');#->middleware('pegawai');
Route::get('/admin_bagian', 'HomeController@index')->name('admin');#->middleware('admin_bagian');

Route::resource('admin_kepegawaian', 'AdminKepegawaianController');#->middleware('admin_kepegawaian');

Route::resource('surat_undangan', 'SuratUndanganController');
Route::resource('surat_tugas', 'SuratTugasController');
