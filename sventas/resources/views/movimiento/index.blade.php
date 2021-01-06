@extends('layouts.app')
@section('main-content')

<center><h2>MOVIMIENTOS DE ALMACEN<img src="../public/img/movimiento_logo.png" alt="" width="80"></h2></center>

	<table id="table_id" class="table table-striped" width="100%" cellspacing="0">
	<thead>
	<tr>
		<th style="text-align:center" class="bg-primary">Razon del Movimiento</th>
		<th style="text-align:center" class="bg-primary">Tipo</th>
		<th style="text-align:center" class="bg-primary">Acción</th>
	</tr>
	</thead>
	@foreach($movimientos as $movimiento)
	<tbody>
	<tr>
		<td>{{ $movimiento->RazonMovimiento }}</td>
		<td>{{ $movimiento->ObsMovimiento }}</td>
	@if((Auth::user()->AccesoUsuario)==1)	
		<td><a href="{{ url('movimiento/'. $movimiento->id . '/edit') }}"><i class='fa fa-pencil'></i><span> EDITAR</span></a></td>
	@endif
	</tr>
	</tbody>
	@endforeach
	</table>
	<center>	
	<a href="home" class="btn btn-default btn-block" role="button">Volver al Menu</a> 	 	
	</center>
@stop
