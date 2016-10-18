<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;

class MainController extends Controller
{
    
    public function index(){

    	return "Hola mundo desde el controlador";
    }


    //este metodo realiza consulta de datos

    public function getMain(){

    	//del modelo user voy a hacer una paginacion
    	$datos = User::paginate();  
    	//ahora returono una vista llamada consulta

    	return view('consulta', compact('datos')); //datos viaja como variable a la vista

    }




}
