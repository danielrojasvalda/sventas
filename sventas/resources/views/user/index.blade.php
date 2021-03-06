@extends('layouts.app')
@section('main-content')
<center><h2>USUARIOS - SYSVENTAS</h2></center>	
	<table id="example" class="table table-striped" width="100%" cellspacing="0" cellpadding="0" border="0">
	<thead>
		<th style="text-align:center" class="bg-primary">Nombre</th>
		<th style="text-align:center" class="bg-primary">Cargo</th>
		<th style="text-align:center" class="bg-primary">Correo</th>
		<th style="text-align:center" class="bg-primary">Celular</th>
		<th style="text-align:center" class="bg-primary">Nro. de Sucursal</th>
	</thead>	
	@foreach($users as $user)
	<tbody>
		<td>{{ $user->name }}</td>		
		<td>{{ $user->CargoUsuario }}</td>
		<td>{{ $user->email }}</td>
		<td>{{ $user->CelUsuario }}</td>
		<td>{{ $user->NroSucursal }}</td>
	</tbody>
	@endforeach
	</table>
	{{ $users->links() }}
	<center>	
	<a href="home" class="btn btn-default btn-block" role="button">Volver al Menu</a> 	 	
	</center>
@stop


