<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controller\HomeController;
use App\Http\Controller\RolesController;
use App\Http\Controller\UsuarioController;
use App\Http\Controller\BlogController;
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

Route::get('search_usuario', 'UsuarioController@search')->name('search_usuario');
Route::resource('/usuarios','UsuarioController');

Route::get('search_role', 'RolesController@search')->name('search_role');
Route::resource('/roles','RolesController');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware'=> ['auth']], function(){
    Route::get('roles',[App\Http\Controllers\RolesController::class, 'index']);
    Route::get('usuarios', [App\Http\Controllers\UsuarioController::class, 'index']);
});
