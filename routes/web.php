<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalendarioController;

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

Route::get('/calendario', function () {
    return view('calendario');
});

Route::get('/form', function () {
    return view('formularioCalendario');
});

Route::get('Calendar/event/{mes}','ControllerCalendario@index_month');
Route::get('Calendar/event','ControllerCalendario@index');
