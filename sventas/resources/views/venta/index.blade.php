@extends('layouts.app')
@section('main-content')
<center>
	<p class="bg-primary"><h2>VENTAS REALIZADAS<img src="../public/img/venta-logo.png" alt="" width="80"></h2></p></center>
	@include('partials.messages')	
	<table id="example" class="table table-striped">
	<thead>
		<th style="text-align:center" class="bg-primary">Fecha Venta</th>
		<th style="text-align:center" class="bg-primary">Nro. de Factura</th>
		<th style="text-align:center" class="bg-primary">Tipo de Venta</th>
		<th style="text-align:center" class="bg-primary">Forma de Pago</th>
		<th style="text-align:center" class="bg-primary">Medio de Pago</th>
		<th style="text-align:center" class="bg-primary">Cliente</th>
		<th style="text-align:center" class="bg-primary">Importe (Bs.)</th>
		<th style="text-align:center" class="bg-primary">Observaciones</th>
	</thead>
<!--	
	<tfoot>
		<tr>
			<th style="text-align:center">Fecha Venta</th>
			<th style="text-align:center">Nro. de Factura</th>
			<th style="text-align:center">Forma de Pago</th>
			<th style="text-align:center">Cliente</th>
			<th style="text-align:center">Importe (Bs.)</th>
			<th style="text-align:center">Observaciones</th>
		</tr>
	</tfoot>
-->
	@foreach($ventas as $venta)
	<tbody>
		<td>{{ $venta->FechaVenta }}</td>
		<td>{{ $venta->NroFactura }}</td>
		<td>{{ $venta->VTipoventa }}</td>
		<!-- <td>{{ $venta->VFormapago }}</td> -->
		<td><?php echo (DB::table('formapago')->where('id', $venta->VFormapago)->value('FormaPago')); ?></td>
		<td>{{ $venta->VMediodepago }}</td>
		<!-- <td>{{ $venta->VCliente }}</td> -->
		<td><?php echo (DB::table('cliente')->where('id', $venta->VCliente)->value('NombreCliente')); ?></td>
		<td>{{ $venta->Importe }}</td>
		<td>{{ $venta->Obs }}</td>
		<!-- <td><a href="{{ url('venta/'. $venta->id . '/edit') }}"><i class='fa fa-pencil'></i><span> EDITAR</span></a></td> -->
	</tbody>
	@endforeach
	</table>
	<center>	
	<a href="home" class="btn btn-default btn-block" role="button">Volver al Menu</a>
	<a href="venta/create" class="btn btn-default btn-block" role="button">Registrar Venta</a>
	</center>
@stop
