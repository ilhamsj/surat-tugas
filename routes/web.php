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

Route::resource('undangan', 'UndanganController');
Route::resource('surat-tugas', 'SuratTugasController');
Route::resource('pelaksana', 'PelaksanaController');
Route::resource('pegawai', 'UserController');

Route::get('dashboard', 'DashboardController@index')->name('dashboard.index')->middleware('admin'); 
Route::post('dashboard', 'DashboardController@store')->name('dashboard.store'); 

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/home', 'HomeController@storeDokumentasi')->name('home.store');
Route::put('/home/dokumentasi/{id}', 'HomeController@updateDokumentasi')->name('home.update');
Route::delete('/home/dokumentasi/{id}', 'HomeController@destroyDokumentasi')->name('home.destroy');

Route::get('/home/cetak/{id}', 'HomeController@print')->name('surat.cetak');
