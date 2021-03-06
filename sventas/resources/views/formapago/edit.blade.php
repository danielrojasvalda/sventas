@extends('layouts.app')
@section('main-content')


<h1><center>Editar Sucursal</center></h1>
{!! Form::model($formapagos, ['method' => 'PATCH', 'action' => ['FormapagoController@update', $formapagos->id] ]) !!}
<div class="form-horizontal">
   
<div class="form-group">
	<label class="control-label col-sm-2">Forma de Pago: </label>
	<div class="col-sm-8">
		{!! Form::text('FormaPago', null, ['class' => 'form-control', 'placeholder' => 'FORMA DE PAGO:: ']) !!}
  	</div>
</div>

<div class="form-group">
	<label class="control-label col-sm-2">Observaciones: </label>	
	<div class="col-sm-8">
  		{!! Form::text('Observacion', null, ['class' => 'form-control', 'placeholder' => 'OBSERVACIONES:: ']) !!}
  	</div>
</div>  	
  	
<center>
	<input class="btn btn-lg btn-primary" type="submit" value="Actualizar el Registro">
  	<a href="{{ url('formapago') }}" class="btn btn-lg btn-primary" role="button">Cancelar</a>
</center>
	{!! Form::close() !!}
	
</div>

@stop
