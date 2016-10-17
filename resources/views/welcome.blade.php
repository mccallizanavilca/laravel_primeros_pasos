@extends('layouts.master')

@section('contenido')

        <div class="container">
            <div class="content">
                <h1>Ejemplo de la Clase</h1>
                <br>

                <a href="{!! url('ruta') !!}" class="btn btn-success">Ir a la ruta</a>
                <a href="{!! url('controlador') !!}" class="btn btn-primary"> Ir al Controlador</a>
                <a href="{!! url('front') !!}" class="btn btn-warning"> Ir la ruta Front</a>
            </div>
        </div>


        <div class="container">
            <div class="row"> 
            <p class="col-xs-12 col-md-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <p class="col-xs-12 col-md-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

            </div>
        </div>


    </body>
</html>
@stop
