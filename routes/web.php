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

Route::get('/appointments', 'App\Http\Controllers\PatientController@index');
Route::get('/appointments/{id}', 'App\Http\Controllers\PatientController@show');
Route::get('/appointment/create', 'App\Http\Controllers\PatientController@create');
Route::get('/appointments/{id}/edit', 'App\Http\Controllers\PatientController@edit');
Route::post('/appointments', 'App\Http\Controllers\PatientController@store');
Route::put('/appointments/{id}', 'App\Http\Controllers\PatientController@update');
Route::delete('/appointments/{id}', 'App\Http\Controllers\PatientController@destroy');
