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

Route::get('/dogs','DogsController@index');
Route::get('/dogs/{id}','DogsController@show');
Route::post('/dogs','DogsController@store');
Route::patch('/dogs/{id}','DogsController@update');
Route::delete('/dogs/{id}','DogsController@destroy');