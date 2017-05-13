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
Route::get('lang/{lang}', ['as'=>'lang.switch', 'uses'=>'LanguageController@switchLang']);
Route::get('eventos','HomeController@events');
Route::get('evento/{id}','HomeController@event');
Route::get('ElMundoDeAldo','HomeController@ElMundoDeAldo');
Route::get('PatekPhilippe','HomeController@PatekPhilippe');
Route::get('Contactenos','HomeController@Contactenos');
Route::get('Joyeria','HomeController@Joyeria');
Route::get('Novios','HomeController@Novios');
Route::get('JoyeriaSub','HomeController@JoyeriaSub');
Route::get('Joyeria/{Type}','HomeController@JoyeriaSub');
Route::get('Producto/{id}','HomeController@Producto');
Route::get('Novios/{Type}','HomeController@NoviosSub');
Route::get('ElMundoDeAldo/{slug}','HomeController@ElMundoDeAldoSub');


Route::group(['middleware' => 'web'], function () {
	// Route::auth();
	Route::get('Inicio', 'AdminController@Inicio');
	Route::get('/admin', 'AdminController@index');
	Route::get('JoyasAdm', 'AdminController@Joyas');
	Route::get('NoviosAdm', 'AdminController@Novios');
	Route::get('MundoAldoAdm', 'AdminController@MundoAldoAdm');
	Route::get('Marcket','AdminController@Marcket');
	Route::get('Eventos', 'AdminController@Eventos');
	Route::get('SubframeList/{frame_id}', 'AdminController@Subframe');
	
	Route::get('NuevoProducto/{category_id}','ProductController@create');
	Route::post('storeProducto','ProductController@store');
	Route::get('EditarProducto/{id}', 'ProductController@edit');
	Route::post('ActualizarProducto/{id}', 'ProductController@update');
	Route::get('EliminarProducto/{id}','ProductController@delete');
	Route::get('DesactivarProducto/{id}','ProductController@desactive');
	Route::get('ActivarProducto/{id}','ProductController@active');
	
	Route::get('NuevoEvento','EventController@create');
	Route::post('storeEvento','EventController@store');
	Route::get('EditarEvento/{id}', 'EventController@edit');
	Route::post('ActualizarEvento/{id}', 'EventController@update');
	Route::get('EliminarEvento/{id}','EventController@delete');
	Route::get('DesactivarEvento/{id}','EventController@desactive');
	Route::get('ActivarEvento/{id}','EventController@active');
	Route::get('EliminarImagen/{id}','EventController@deleteImg');

	Route::get('NuevaTienda','MarcketController@create');
	Route::post('storeTienda','MarcketController@store');
	Route::get('EditarTienda/{id}', 'MarcketController@edit');
	Route::post('ActualizarTienda/{id}', 'MarcketController@update');
	Route::get('EliminarTienda/{id}','MarcketController@delete');
	Route::get('DesactivarTienda/{id}','MarcketController@desactive');
	Route::get('ActivarTienda/{id}','MarcketController@active'); 

	Route::get('NuevaPregunta','QuestionController@create');
	Route::post('storePregunta','QuestionController@store');
	Route::get('EditarPregunta/{id}', 'QuestionController@edit');
	Route::post('ActualizarPregunta/{id}', 'QuestionController@update');
	Route::get('EliminarPregunta/{id}','QuestionController@delete');
	Route::get('DesactivarPregunta/{id}','QuestionController@desactive');
	Route::get('ActivarPregunta/{id}','QuestionController@active'); 

	Route::get('NuevoFrame/{category_id}','FrameController@create');
	Route::post('storeFrame','FrameController@store');
	Route::get('EditarFrame/{id}', 'FrameController@edit');
	Route::post('ActualizarFrame/{id}', 'FrameController@update');
	Route::get('EliminarFrame/{id}','FrameController@delete');
	Route::get('DesactivarFrame/{id}','FrameController@desactive');
	Route::get('ActivarFrame/{id}','FrameController@active');

	
	Route::get('NuevoSubFrame/{frame_id}','SubframeController@create');
	Route::post('storeSubFrame','SubframeController@store');
	Route::get('EditarSubFrame/{id}', 'SubframeController@edit');
	Route::post('ActualizarSubFrame/{id}', 'SubframeController@update');
	Route::get('EliminarSubFrame/{id}','SubframeController@delete');
	Route::get('DesactivarSubFrame/{id}','SubframeController@desactive');
	Route::get('ActivarSubFrame/{id}','SubframeController@active');
	Route::get('EditarFrameN/{id}','ProductController@EditarFrameN');
	Route::post('ActualizarFrameN/{id}','ProductController@ActualizarFrameN');
	Route::get('Slide','FrameController@createSlide');
	Route::post('storeSlide','FrameController@storeSlide');
	Route::get('EliminarSlide/{id}','FrameController@deleteSlide');
	Route::post('uploadvideo','FrameController@uploadvideo');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

