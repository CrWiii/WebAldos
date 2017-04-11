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

Route::get('eventos','HomeController@events');
Route::get('evento','HomeController@event');
Route::get('ElMundoDeAldo','HomeController@ElMundoDeAldo');
Route::get('PatekPhilippe','HomeController@PatekPhilippe');
Route::get('Contactenos','HomeController@Contactenos');
Route::get('Joyeria','HomeController@Joyeria');
Route::get('Novios','HomeController@Novios');
Route::get('JoyeriaSub','HomeController@JoyeriaSub');
Route::get('Producto','HomeController@Producto');
Route::get('NoviosSub','HomeController@NoviosSub');
Route::get('ElMundoDeAldoSub','HomeController@ElMundoDeAldoSub');
// Route::get('','HomeController@');
// Route::get('','HomeController@');
// Route::get('','HomeController@');

Route::group(['middleware' => 'web'], function () {
	// Route::auth();
	Route::get('Inicio', 'AdminController@Inicio');
	Route::get('/admin', 'AdminController@index');
	Route::get('JoyasAdm', 'AdminController@Joyas');
	Route::get('NoviosAdm', 'AdminController@Novios');
	Route::get('MundoAldoAdm', 'AdminController@MundoAldoAdm');
	Route::get('Eventos', 'AdminController@Eventos');
	Route::get('NuevoProducto','ProductController@create');
	Route::post('storeProducto','ProductController@store');
	Route::get('EditarProducto', 'ProductController@Edit');

});

// Auth::routes();

// Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');
