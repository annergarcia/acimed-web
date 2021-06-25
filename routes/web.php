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
    return view('login');
});

Route::get('/ingresar', [UsuarioController::class, 'index'])
    ->name('ingresar.index');

//mostrar formulario
Route::get('/cuenta/crear', [CuentaController::class, 'create'])
    ->name('crear_cuenta.crear');

Route::get('/crear', function () {
    return view('fomulario');
});
