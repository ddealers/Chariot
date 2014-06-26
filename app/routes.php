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