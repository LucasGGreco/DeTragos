<?php

use App\Http\Controllers\homeController;
use App\Http\Controllers\TragosController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Usar ' ->middleware('auth') ' para paginas donde solo se requira un usuario
|
*/

Route::view('/login','auth/login')->name('login.show');
Route::view('/registro','auth/register')->name('register.show');

Route::post('/validar-registro',[loginController::class,'register'])->name('validar-registro');
Route::post('/inicia-sesion',[loginController::class,'login'])->name('login');
Route::get('/logout',[loginController::class,'logout'])->name('logout');

Route::get('/',[homeController::class,'index'])->name('home');
Route::get('admin',[homeController::class,'admin'])->name('admin.show');


Route::post('/tragos',[TragosController::class,'busquedaTragos']);
Route::get('trago/{id}', [TragosController::class, 'mostrarTrago'])->name('trago.show');
Route::view('/favoritos','favoritos')->middleware('auth')->name('favoritos');


