@extends('layouts.master')

@section('contenido')


	<h1>Consulta de usuarios</h1>

		<table class="table">
			<tr>
				<td>Nombre</td>
				<td>Nombre</td>
				<td>Contraseña</td>
			</tr>
			<!--Dato viene de otro lado-->
			@foreach ($datos  as $valores)
			<tr>
				<td>{{ $valores->name }}</td>
				<td>{{ $valores->email }}</td>
				<td>{{ $valores->password }}</td>
			</tr> 


			@endforeach
			
		</table>

		{!! $datos->render() !!}

@stop