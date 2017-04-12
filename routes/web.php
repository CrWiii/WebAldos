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

// Route::get('/', function () {
// 	$Types = App\Type::where('category_id',1)->get();
//     return view('welcome',compact('Types'));
// });

Route::get('/','HomeController@home');
Route::get('eventos','HomeController@events');
Route::get('evento','HomeController@event');
Route::get('ElMundoDeAldo','HomeController@ElMundoDeAldo');
Route::get('PatekPhilippe','HomeController@PatekPhilippe');
Route::get('Contactenos','HomeController@Contactenos');
Route::get('Joyeria','HomeController@Joyeria');
Route::get('Novios','HomeController@Novios');
Route::get('JoyeriaSub','HomeController@JoyeriaSub');
Route::get('Joyeria/{Type}','HomeController@JoyeriaSub');
Route::get('Producto/{id}','HomeController@Producto');
Route::get('Novios/{Type}','HomeController@NoviosSub');
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

	Route::get('NuevoEvento','ProductController@create');
	Route::post('storeEvento','ProductController@store');
	Route::get('EditarEvento/{id}', 'ProductController@edit');
	Route::post('ActualizarEvento/{id}', 'ProductController@update');
	Route::get('EliminarEvento/{id}','ProductController@delete');
	Route::get('DesactivarEvento/{id}','ProductController@desactive');
	Route::get('ActivarEvento/{id}','ProductController@active');





});

// Auth::routes();

// Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');
