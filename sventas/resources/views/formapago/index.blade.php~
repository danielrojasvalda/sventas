@extends('layouts.app')
@section('main-content')
<center>
	
	<p class="bg-primary"><h2>FORMAS DE PAGO <img src="../public/img/formapago-logo.png" alt="" width="80"></h2></p></center>
	@include('partials.messages')	
	<table id="example" class="table table-striped">
	<thead>
		<th style="text-align:center" class="bg-primary">Forma de Pago</th>
		<th style="text-align:center" class="bg-primary">Observaciones</th>
	</thead>

	<tfoot>
	
	<!--
		<tr>
			<th style="text-align:center">Forma de Pago</th>
			<th style="text-align:center">Observaciones</th>
		</tr>
	-->
	</tfoot>
	
	@foreach($formapagos as $formapago)
	<tbody>		
		<td>{{ $formapago->FormaPago }}</td>
		<td>{{ $formapago->Observacion }}</td>
		<!-- <td><a href="{{ url('formapago/'. $formapago->id . '/edit') }}"><i class='fa fa-pencil'></i><span> EDITAR</span></a></td> -->
	</tbody>
	@endforeach
	</table>
	<center>	
	<a href="home" class="btn btn-default btn-block" role="button">Volver al Menu</a> 	
	</center>
@stop


