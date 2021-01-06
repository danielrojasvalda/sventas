@extends('layouts.app')
@section('main-content')
<center>
	
	<p class="bg-primary"><h2>STOCK EN LOS ALMACENES <img src="../public/img/bincard-logo.png" alt="" width="80"></h2></p>
</center>

<!--
<?php var_dump($var1); ?>
-->


	<table id="example" class="table table-striped">
	<thead>		
		
		<th style="text-align:center" class="bg-primary">Producto</th>
		<th style="text-align:center" class="bg-primary">STOCK</th>
		<th style="text-align:center" class="bg-primary">Stock Minimo</th>
		<th style="text-align:center" class="bg-primary">Stock Ideal</th>
	</thead>										
	@foreach($var1 as $kardex)
	<tbody>
		@if( ($kardex->Stock) < ($kardex->StockMinimo) )		
		<td class="danger">{{ $kardex->Producto }}</td>
		<td class="danger"><b>{{ $kardex->Stock }}</b></td>
		<td class="danger">{{ $kardex->StockMinimo }}</td>
		<td class="danger">{{ $kardex->StockIdeal }}</td>
		@elseif( ($kardex->Stock) < ($kardex->StockIdeal) )
		<td class="warning">{{ $kardex->Producto }}</td>
		<td class="warning"><b>{{ $kardex->Stock }}</b></td>
		<td class="warning">{{ $kardex->StockMinimo }}</td>
		<td class="warning">{{ $kardex->StockIdeal }}</td>
		@else
		<td>{{ $kardex->Producto }}</td>
		<td><b>{{ $kardex->Stock }}</b></td>
		<td>{{ $kardex->StockMinimo }}</td>
		<td>{{ $kardex->StockIdeal }}</td>
		@endif
	</tbody>
	@endforeach
	</table>
	<center>	
	<a href="home" class="btn btn-default btn-block" role="button">Volver al Menu</a> 	
	<a href="kardex/create" class="btn btn-default btn-block" role="button">Generar Kardex</a> 	
	</center>
@stop
