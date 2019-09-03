<?php

use Illuminate\Http\Request;
use App\User;
use App\Http\Resources\UserCollection;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::resource('undangan', 'UndanganController');
// Route::resource('surat-tugas', 'SuratTugasController');
// Route::resource('pelaksana', 'PelaksanaController');

Route::get('/user', function() {
    return new UserCollection(User::paginate());
    // return User::all();
})->name('user.api.index');

Route::get('/user/{id}', function($id) {
    return new UserCollection(User::where('id', $id)->get());
});