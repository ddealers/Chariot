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
Route::get('/categorias/{cat?}', 'HomeController@categorias');
Route::get('/ofertas', 'HomeController@ofertas');
Route::get('/detalle', 'HomeController@detalle');
Route::get('/contacto', 'HomeController@contacto');
Route::get('/login', 'AdminController@login');
Route::get('/gitupdate', function(){
	echo 'Hola git';
});
Route::group(array('prefix' => 'admin', 'before' => 'auth'), function(){
	Route::get('/categorias', function(){
		echo 'categorias';
	});
	Route::get('/ofertas', function(){
		echo 'ofertas';
	});
	Route::get('/detalle', function(){
		echo 'detalle';
	});
	/*
    Route::get('/', function()
    {
        // Has Auth Filter
    });

    Route::get('user/profile', function()
    {
        // Has Auth Filter
    });
    */
});