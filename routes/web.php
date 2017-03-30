<?php

use Illuminate\Http\Request;

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

// Games collection routes
Route::get('/players', 'PlayerController@index');
Route::post('/players', 'PlayerController@create');

// Games singular routes
Route::get('/players/{id}', 'PlayerController@show');
Route::put('/players/{id}', 'PlayerController@update');
Route::delete('/players/{id}', 'PlayerController@destroy');

// HTML/view responses
Route::get('/', function() {
  return view('home');
});