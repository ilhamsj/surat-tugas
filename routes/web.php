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

Route::resource('dashboard/undangan', 'UndanganController');
Route::resource('dashboard/surat-tugas', 'SuratTugasController');
Route::resource('dashboard/pelaksana', 'PelaksanaController');
Route::resource('dashboard/pegawai', 'UserController');
Route::get('dashboard', 'DashboardController@index')->name('dashboard.index'); 
Route::post('dashboard', 'DashboardController@store')->name('dashboard.store'); 
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home/cetak/{id}', 'HomeController@print')->name('surat.cetak');
