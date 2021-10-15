<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\AdministradorController;
use App\Http\Controllers\PublicacionController;


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

Route::resource('usuario', UsuarioController::class)->middleware('auth');
Route::resource('registro', RegistroController::class)->middleware('auth');
Route::resource('publicacion', PublicacionController::class)->middleware('auth');
Route::resource('administrador', AdministradorController::class)->middleware('auth');
