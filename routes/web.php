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
	$Types = App\Type::where('category_id',1)->get();
    return view('welcome',compact('Types'));
});

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
	Route::get('NuevoProducto/{category_id}','ProductController@create');
	Route::post('storeProducto','ProductController@store');
	Route::get('EditarProducto/{id}', 'ProductController@edit');
	Route::post('ActualizarProducto/{id}', 'ProductController@update');
	Route::get('EliminarProducto/{id}','ProductController@delete');
	Route::get('DesactivarProducto/{id}','ProductController@desactive');
	Route::get('ActivarProducto/{id}','ProductController@active');

});

// Auth::routes();

// Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');
