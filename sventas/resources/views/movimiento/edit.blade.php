@extends('layouts.app')
@section('main-content')


<h1><center>Editar Movimientos <img src="../../../public/img/movimiento_logo.png" alt="" width="80"></center></h1>
{!! Form::model($movimientos, ['method' => 'PATCH', 'action' => ['MovimientoController@update', $movimientos->id] ]) !!}
<div class="form-horizontal">
  
<div class="form-group">
	<label class="control-label col-sm-2">Razon del Movimiento: </label>
	<div class="col-sm-8">
		{!! Form::text('RazonMovimiento', null, ['class' => 'form-control', 'placeholder' => 'MOVIMIENTO:: ']) !!}
  	</div>
</div>  

<div class="form-group">	
	<label class="control-label col-sm-2">Observaciones: </label>
	<div class="col-sm-8">
		{!!  Form::select('ObsMovimiento', ['INGRESO' => 'INGRESO', 'SALIDA' => 'SALIDA' ],  '-', ['class' => 'form-control' ]) !!}	
	</div>
</div>	

<center>
	{!! Form::submit('Actualizar el Registro', ['class' => 'btn btn-lg btn-primary']) !!}
</center>
	{!! Form::close() !!}
	
</div>

@stop
