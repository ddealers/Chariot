<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'HomeController@index');
Route::get('categorias/{cat?}', 'HomeController@categorias');
Route::get('ofertas', 'HomeController@ofertas');
Route::get('detalle/{id}', 'HomeController@detalle');
Route::get('contacto', 'HomeController@contacto');
/*
Route::get('/create', function(){
	$user = new User;
	$user->email = 'admin@chariot.mx';
	$user->password = Hash::make('Ch4R107');
	$user->save(); 
});
*/
Route::get('gitupdate', function(){
	echo 'Hola git';
});
Route::group(array('prefix' => 'admin'), function(){
	Route::get('/', function(){
		if(Auth::check()){
			return Redirect::to('admin/dashboard');
		}else{
			return Redirect::to('admin/login');
		}
	});
	Route::get('login', 'AdminController@login');
	Route::post('login', 'AdminController@postLogin');
});
Route::group(array('prefix' => 'admin', 'before' => 'myAuth'), function(){
	Route::get('dashboard', 'AdminController@dashboard');
	Route::post('postItem', 'AdminController@postItem');
	Route::post('postCategory', 'AdminController@postCategory');
	Route::post('postOffer', 'AdminController@postOffer');
	Route::get('logout', 'AdminController@logout');
});
Route::filter('myAuth', function(){
  if (Auth::guest()) return Redirect::to('admin/login');
});