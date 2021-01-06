@extends('layouts.app')
@section('main-content')

<center>
<p class="bg-primary"><h2>STOCK DE PRODUCTOS <img src="../public/img/bincard-logo.png" alt="" width="80"></h2></p>
</center>

 <?php //var_dump($var1); ?>

	<!-- <?php echo Auth::user()->IdSucursal; ?> -->
	<table id="example" class="table table-striped">
	<thead>		
		<th style="text-align:center" class="bg-primary">Sucursal</th>
		<th style="text-align:center" class="bg-primary">Producto</th>
		<th style="text-align:center" class="bg-primary">Caracteristicas</th>
		<th style="text-align:center" class="bg-primary">Precio (Bs.)</th>
		<th style="text-align:center" class="bg-primary">STOCK</th>
		<th style="text-align:center" class="bg-primary">Stock Minimo</th>
		<th style="text-align:center" class="bg-primary">Stock Ideal</th>
	</thead>
<!--	
	<tfoot>		
		<th style="text-align:center">SUCURSAL</th>
		<th style="text-align:center">Producto</th>
		<th style="text-align:center">Caracteristicas</th>
		<th style="text-align:center">Precio (Bs.)</th>
		<th style="text-align:center"><u>STOCK</u></th>
		<th style="text-align:center">Stock Minimo</th>
		<th style="text-align:center">Stock Ideal</th>
	</tfoot>
-->
									
	@foreach($var1 as $kardex)
	<tbody>
		@if( ($kardex->Stock) < ($kardex->StockminimoProducto) )
			<td class="danger">{{ $kardex->NroSucursal }}</td>		
			<td class="danger">{{ $kardex->ItemProducto }}</td>
			<td class="danger">{{ $kardex->ObsProducto }}</td>
			<td class="danger">{{ $kardex->PrecioProducto }}</td>	
			<td class="danger"><b>{{ $kardex->Stock }}</b></td>
			<td class="danger">{{ $kardex->StockidealProducto }}</td>
			<td class="danger">{{ $kardex->StockminimoProducto }}</td>
		@elseif( ($kardex->Stock) < ($kardex->StockidealProducto) )
			<td class="warning">{{ $kardex->NroSucursal }}</td>		
			<td class="warning">{{ $kardex->ItemProducto }}</td>
			<td class="warning">{{ $kardex->ObsProducto }}</td>
			<td class="warning">{{ $kardex->PrecioProducto }}</td>	
			<td class="warning"><b>{{ $kardex->Stock }}</b></td>
			<td class="warning">{{ $kardex->StockidealProducto }}</td>
			<td class="warning">{{ $kardex->StockminimoProducto }}</td>
		@else
			<td>{{ $kardex->NroSucursal }}</td>		
			<td>{{ $kardex->ItemProducto }}</td>
			<td>{{ $kardex->ObsProducto }}</td>
			<td>{{ $kardex->PrecioProducto }}</td>	
			<td><b>{{ $kardex->Stock }}</b></td>
			<td>{{ $kardex->StockidealProducto }}</td>
			<td>{{ $kardex->StockminimoProducto }}</td>
		@endif						
	</tbody>
	@endforeach
	</table>
	<center>	
	<a href="home" class="btn btn-default btn-block" role="button">Volver al Menu</a> 	
	<a href="venta/create" class="btn btn-default btn-block" role="button">Registrar Venta</a>
	</center>
@stop

