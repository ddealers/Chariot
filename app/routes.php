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

Route::get('/', function(){
	return View::make('index');
});
Route::get('/categoria', function(){
	return View::make('categorias');
});
Route::get('/detalle', function(){
	return View::make('ficha_tecnica');
});
Route::get('/contacto', function(){
	return View::make('contacto');
});