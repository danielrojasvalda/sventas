@extends('layouts.app')
@section('main-content')
<center>
	
	<p class="bg-primary"><h2>BINCARD <img src="../public/img/bincard-logo.png" alt="" width="80"></h2></p></center>
	@include('partials.messages')
	<table id="example" class="table table-striped">
	<thead>
		<th style="text-align:center" class="bg-primary">ID</th>
		<th style="text-align:center" class="bg-primary">Fecha del Kardex</th>		
		<th style="text-align:center" class="bg-primary">Sucursal</th>
		<th style="text-align:center" class="bg-primary">Movimiento</th>
		<th style="text-align:center" class="bg-primary">Razon</th>
		<th style="text-align:center" class="bg-primary">Doc. Referencial</th>
		<th style="text-align:center" class="bg-primary">Producto</th>
		<th style="text-align:center" class="bg-primary">Cantidad</th>
		<th style="text-align:center" class="bg-primary">Series</th>
	</thead>
	@foreach($kardexs as $kardex)
	<tbody>						
		<!-- <td>{{ $kardex->IdProducto }}</td> -->
		<td>{{ $kardex->id }}</td>		
		<td>{{ $kardex->KFecha }}</td>		
		<td><?php echo (DB::table('sucursal')->where('id', $kardex->KSucursal)->value('NroSucursal')); ?></td>
		<td><?php echo (DB::table('movimiento')->where('id', $kardex->KMovimiento)->value('ObsMovimiento')); ?></td>
		<td><?php echo (DB::table('movimiento')->where('id', $kardex->KMovimiento)->value('RazonMovimiento')); ?></td>
		<td>{{ $kardex->KReferencia }}</td>
		<td><?php echo (DB::table('producto')->where('id', $kardex->KProducto)->value('ItemProducto')); ?></td>
		<td>{{ $kardex->KCantidad }}</td>
		<td>{{ $kardex->KSerie }}</td>
		<!--
		<td>{{ $kardex->FechaKardex }}</td>
		<td>{{ $kardex->CantidadKardex }}</td>
		<td>{{ $kardex->RKardex }}</td>
		-->
	</tbody>
	@endforeach
	</table>
<center>	
	<a href="home" class="btn btn-default btn-block" role="button">Volver al Menu</a>
	<a href="kardex/create" class="btn btn-default btn-block" role="button">Generar Kardex</a>
	</center>	
	
	

<script>
$(document).ready( function () {
    $('#example').DataTable();
} );
</script>

@stop
