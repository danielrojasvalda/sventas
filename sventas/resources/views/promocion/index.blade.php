@extends('layouts.app')
@section('main-content')
<center>
<?php //var_dump($promociones); ?>	
	<p class="bg-primary"><h2>PROMOCIONES<img src="../public/img/logo-sucursal.png" alt="" width="80"></h2></p>
	</center>
	<table id="example" class="table table-striped">
	<thead>
		<th style="text-align:center" class="bg-primary">Nombre de la Promoción</th>
		<th style="text-align:center" class="bg-primary">Producto</th>
		<th style="text-align:center" class="bg-primary">Precio Promoción (Bs.)</th>
		<th style="text-align:center" class="bg-primary">Fecha Inicio Promo</th>
		<th style="text-align:center" class="bg-primary">Fecha Fin Promo</th>
		<th style="text-align:center" class="bg-primary">Sucursal</th>
		<th style="text-align:center" class="bg-primary">R.A. / REF.</th>
	</thead>
	

	@foreach($promociones as $promocion)
	<tbody>
		<td>{{ $promocion->NombreProm }}</td>
		<td><?php echo (DB::table('producto')->where('id', $promocion->ProductoProm)->value('ItemProducto')); ?></td>
		<td>{{ $promocion->PrecioProm }}</td>
		<td>{{ $promocion->FechainicioProm }}</td>
		<td>{{ $promocion->FechafinProm }}</td>
		<td><?php echo (DB::table('sucursal')->where('id', $promocion->SucursalProm)->value('NroSucursal')); ?></td>
		<td>{{ $promocion->RaProm }}</td>
	</tbody>
	@endforeach
	
	
	</table>
	<center>	
	<a href="home" class="btn btn-default btn-block" role="button">Volver al Menu</a> 	
	<!-- <a href="venta/create" class="btn btn-default btn-block" role="button">Registrar Venta</a> -->
	</center>
@stop


