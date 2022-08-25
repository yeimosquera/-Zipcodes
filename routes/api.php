<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/zip-codes', 'App\Http\Controllers\ZipcodesController@index');// Mostrar todos los registros
Route::get('/zip-codes/{zip_code}', 'App\Http\Controllers\ZipcodesController@show');// Mostrar un registro 
Route::post('/zip-codes', 'App\Http\Controllers\ZipcodesController@store');// Crear articulos
Route::put('/zip-codes/{id}', 'App\Http\Controllers\ZipcodesController@update');// Actualizar articulos
Route::delete('/zip-codes/{id}', 'App\Http\Controllers\ZipcodesController@destroy');// Eliminar articulos

