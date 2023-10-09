<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\Farmacia\CategoriasController;

use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/* Route::get('/', function () {
    return view('welcome');
}); */

/* 
    Route::view('/login', "login")->name('login');
    Route::view('/prueba', "prueba")->name('prueba');
    Route::middleware('authsesionapi')->group(function () {
        Route::view('/home', "home")->name('home');
    });
    Route::post('inicia-sesion', [LoginController::class, 'login'])->name('inicia-sesion');
    */

Route::get('logout', [LoginController::class, 'logout'])->name('logout'); 
Route::view('/', "home")->name('home');

Route::resource('usuarios', UsuariosController::class);
Route::resource('categorias', CategoriasController::class);

