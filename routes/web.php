<?php

use Illuminate\Support\Facades\Route;

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
    return view('auth/login');
});


Route::get('registrarcliente', 'App\Http\Controllers\micontrolador@registracliente')->name('registrarcliente');
Route::post('guardarcliente', 'App\Http\Controllers\micontrolador@guardarcliente')->name('guardarcliente');

Route::get('registrarproducto', 'App\Http\Controllers\micontrolador@registraproducto')->name('registrarproducto');
Route::post('guardarproducto', 'App\Http\Controllers\micontrolador@guardarproducto')->name('guardarproducto');

Route::get('consultaclientes', 'App\Http\Controllers\micontrolador@consultaclientes')->name('consultaclientes');
Route::get('eliminar/{id}', 'App\Http\Controllers\micontrolador@eliminarcliente')->name('eliminarcliente');

Route::get('consultaproductos', 'App\Http\Controllers\micontrolador@consultaproductos')->name('consultaproductos');
Route::get('eliminar2/{id}', 'App\Http\Controllers\micontrolador@eliminarproducto')->name('eliminarproducto');

Route::get('muestra/{id}', 'App\Http\Controllers\micontrolador@muestracliente')->name('muestracliente');
Route::POST('editar/{id}', 'App\Http\Controllers\micontrolador@editacliente')->name('editarcliente');

Route::get('muestra2/{id}', 'App\Http\Controllers\micontrolador@muestraproducto')->name('muestraproducto');
Route::POST('editar2/{id}', 'App\Http\Controllers\micontrolador@editaproducto')->name('editarproducto');

Route::get('cancelaaccion1', 'App\Http\Controllers\micontrolador@consultaproductos')->name('cancelaaccion1');
Route::get('cancelaaccion', 'App\Http\Controllers\micontrolador@consultaclientes')->name('cancelaaccion');


Route::get('home','App\Http\Controllers\micontrolador2@home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

