<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('ruta', function(){
	return "hola mundo desde la ruta";
});

Route::get('ruta/{parametro}', function($parametro){

return "Hola " . $parametro;
});


Route::get('controlador', 'MainController@index');

Route::get('front', 'FrontController@index');




