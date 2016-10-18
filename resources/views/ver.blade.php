@extends('layouts.master')

@section('contenido')


	<h1>ver los usuarios </h1>

		<table class="table table-bordered">
			<tr>
				<td>id</td>
				<td>Nombre</td>
				<td>email</td>
			</tr>
			<!--Dato viene de otro lado-->
			@foreach ($usuarios  as $valores)
			<tr>
				<td>{{ $valores->id }}</td>
				<td>{{ $valores->name }}</td>
				<td>{{ $valores->email }}</td>
			</tr> 


			@endforeach
			
		</table>

	

@stop