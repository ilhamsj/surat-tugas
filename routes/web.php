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

Route::get('/dashboard', 'SuratTugasController@index')->name('dashboard');
Route::get('/dashboard/{id}', 'SuratTugasController@show');

Route::resource('undangan', 'UndanganController');
Route::resource('surat-tugas', 'SuratTugasController');
Route::resource('pelaksana', 'PelaksanaController');