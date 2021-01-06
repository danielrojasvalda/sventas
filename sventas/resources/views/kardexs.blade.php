@extends('layouts.app')
@section('main-content')

<center><h2>PRODUCTOS DISPONIBLES<img src="../public/img/producto-logo.png" alt="" width="80"></h2></center>
	
	<table id="example" class="table table-striped">
	<thead>
		<th style="text-align:center">Fecha</th>
		<th style="text-align:center">Sucursal</th>
		<th style="text-align:center">Movimiento</th>
		<th style="text-align:center">Referencia</th>	
		<th style="text-align:center">Producto</th>
		<th style="text-align:center">Cantidad</th>
		<th style="text-align:center">Serie</th>
	</thead>
	@foreach($productos as $producto)
	<tbody>
		<td>{{ $producto->ItemProducto }}</td>
		<td>{{ $producto->PrecioProducto }}</td>
		<td>{{ $producto->ModeloProducto }}</td>
		<td>{{ $producto->StockminimoProducto }}</td>
		<td>{{ $producto->StockidealProducto }}</td>
		<td>{{ $producto->ObsProducto }}</td>
		<td><a href="{{ url('producto/'. $producto->id . '/edit') }}"><i class='fa fa-pencil'></i><span> EDITAR</span></a></td>
	</tbody>
	@endforeach
	</table>
		<center>	
	<div class="btn-group">	
		<a href="producto/create" class="btn btn-lg btn-primary" role="button">Añadir Nuevo Item</a>
		<a href="home" class="btn btn-lg btn-primary" role="button">Volver al Menu</a>
	</div>
	</center>
@stop


