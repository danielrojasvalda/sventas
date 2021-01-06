@extends('layouts.app')
@section('main-content')
<center>
	
	<p class="bg-primary"><h2>CLIENTES <img src="../public/img/cliente-logo.png" alt="" width="80"></h2></p></center>
	@include('partials.messages')	
	<table id="example" class="table table-striped">
	<thead>
		<th style="text-align:center" class="bg-primary">Nombre Cliente</th>
		<th style="text-align:center" class="bg-primary">Tipo Cliente</th>		
		<th style="text-align:center" class="bg-primary">NIT / CI</th>
		<th style="text-align:center" class="bg-primary">Dirección Cliente</th>
		<th style="text-align:center" class="bg-primary">Telefono / FAX</th>
		<th style="text-align:center" class="bg-primary">Acción</th>
	</thead>
	
	@foreach($clientes as $cliente)
	<tbody>
		<td>{{ $cliente->NombreCliente }}</td>
		<td>{{ $cliente->TipoCliente }}</td>
		<td>{{ $cliente->NitCi }}</td>
		<td>{{ $cliente->DirCliente }}</td>
		<td>{{ $cliente->TelCliente }}</td>
		<td><a href="{{ url('cliente/'. $cliente->id . '/edit') }}"><i class='fa fa-pencil'></i><span> EDITAR</span></a></td>
	</tbody>
	@endforeach
	</table>
	<center>	
	<a href="home" class="btn btn-default btn-block" role="button">Volver al Menu</a> 	
	<a href="cliente/create" class="btn btn-default btn-block" role="button">Registrar a un Cliente</a>
	</center>
@stop


