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

Route::get('consulta', 'MainController@getMain');





Route::get('vista', function(){

	$usuarios = App\User::all();

	return view('ver', compact('usuarios'));
});


//incia aca un crud simple

use App\Curso;

Route::get('/create', function(){

	//creo e invocono el metodo crear
	$curso = Curso::create([
		'nombre' 	=>'juan ',
		'apellido' 	=>'perez',

		]);

	return 'registro con exito guardado....';
});


//ver y buscar el contenido de la tabla con la funcion find
Route::get('leer/{id}', function($id){

	$consulta = Curso::find($id);	

	return $consulta;

});


//actualizar los datos para su uso

Route::get('actaulizar/{id}', function($id){

		$modificar = Curso::find($id);	
		
		$modificar->nombre = 'mariano';
		$modificar->apellido = 'flores';
		$modificar->save();

		return 'Registro actualizado '. $modificar;
});


Route::get('eliminar/{id}', function($id){

	$eliminar = Curso::find($id);
	$eliminar->delete(); 

	return 'Registro Eliminado';

});



