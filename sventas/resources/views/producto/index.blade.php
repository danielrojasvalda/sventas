@extends('layouts.app')
@section('main-content')

<center><h2>PRODUCTOS DISPONIBLES<img src="../public/img/producto-logo.png" alt="" width="80"></h2></center>
	
@include('partials.messages')	
	<table id="example" class="table table-striped">
	<thead>
		<th style="text-align:center" class="bg-primary">Item Producto</th>
		<th style="text-align:center" class="bg-primary">Precio Producto (Bs.)</th>
		<th style="text-align:center" class="bg-primary">Categoría</th>
		<th style="text-align:center" class="bg-primary">Stock Minimo</th>	
		<th style="text-align:center" class="bg-primary">Stock Ideal</th>
		<th style="text-align:center" class="bg-primary">Detalle del Producto</th>
		<th style="text-align:center" class="bg-primary">Acción</th>
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
	<a href="home" class="btn btn-default btn-block" role="button">Volver al Menu</a>
	<a href="producto/create" class="btn btn-default btn-block" role="button">Añadir Nuevo Item</a>
	</center>	
@stop


