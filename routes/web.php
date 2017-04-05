<?php

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
Route::get('El-Mundo-de-Aldo','AldosWorldController@show');
Route::get('events','HomeController@events');
Route::get('event','HomeController@event');

Auth::routes();

Route::get('/home', 'HomeController@index');
