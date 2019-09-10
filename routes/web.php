<?php

use App\Dokumentasi;

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

Route::get('/', 'DokumentasiController@index')->name('home');

Auth::routes();

Route::resource('undangan', 'UndanganController');
Route::resource('surat-tugas', 'SuratTugasController');
Route::resource('pelaksana', 'PelaksanaController');
Route::resource('pegawai', 'UserController');
Route::resource('dokumentasi', 'DokumentasiController');

Route::get('/dashboard', 'HomeController@index')->name('dashboard');

Route::get('/home/cetak/{id}', 'HomeController@print')->name('surat.cetak');
