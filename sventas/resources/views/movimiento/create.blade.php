@extends('layouts.app')
@section('main-content')

	<div class="container spark-screen">
	<div class="row">
	<div class="col-md-10 col-md-offset-1">
	<div class="panel panel-default">
	<div class="panel-heading"><center><h4><u><b>MOVIMIENTOS DE ALMACEN <img src="../../public/img/movimiento_logo.png" alt="" width="80"></b></u></h4></center></div>	

	{!!Form::open(['route' => 'movimiento.store', 'method' => 'POST'])!!}
	
		   <div class="panel-body"> 	
	
    	<div class="form-group">
        	{!! Form::label('Razon del Movimiento') !!}
        	{!! Form::text('RazonMovimiento', null, ['class' => 'form-control', 'placeholder' => 'RAZON MOVIMIENTO:: ']) !!}
    	</div>
    	
		<div class="form-group">
                {!! Form::label('Observaciones del Movimiento') !!}
                {!! Form::select('ObsMovimiento', ['INGRESO' => 'INGRESO', 'SALIDA' => 'SALIDA'], '-', ['class' => 'form-control' ]) !!}
     	</div>   	
 
		<center>
    	{!! Form::submit('Registrar', ['class' => 'btn btn-lg btn-primary']) !!}
    	</center>
	{!!Form::close()!!}
	</div>
	</div>
	</div>
	</div>
	</div>
@stop
