@extends('layouts.app')
@section('main-content')


<h1><center>Editar Cliente</center></h1>
{!! Form::model($clientes, ['method' => 'PATCH', 'action' => ['ClienteController@update', $clientes->id] ]) !!}
<div class="form-horizontal">
   
<div class="form-group">
	<label class="control-label col-sm-2">Nombre Cliente: </label>
	<div class="col-sm-8">
		{!! Form::text('NombreCliente', null, ['class' => 'form-control', 'placeholder' => 'NOMBRE CLIENTE:: ']) !!}
  	</div>
</div>

<div class="form-group">	
	<label class="control-label col-sm-2">Tipo Cliente: </label>
	<div class="col-sm-8">
		{!!  Form::select('TipoCliente', ['Juridico' => 'Juridico', 'Privado' => 'Privado', 'Publico' => 'Publico'],  'Juridico', ['class' => 'form-control' ]) !!}
	
	</div>
</div>




<div class="form-group">
	<label class="control-label col-sm-2">NIT / C.I.: </label>	
	<div class="col-sm-8">
  		{!! Form::text('NitCi', null, ['class' => 'form-control', 'placeholder' => 'NIT / C.I.:: ']) !!}
  	</div>
</div>  	
  	
<div class="form-group">
	<label class="control-label col-sm-2">Dirección Cliente: </label>
	<div class="col-sm-8">
  		{!! Form::text('DirCliente', null, ['class' => 'form-control', 'placeholder' => 'DIRECCIÓN CLIENTE:: ']) !!}
   </div>
</div>

<div class="form-group">
	<label class="control-label col-sm-2">Teléfono Cliente: </label>
	<div class="col-sm-8">
  		{!! Form::text('TelCliente', null, ['class' => 'form-control', 'placeholder' => 'TELEFONO CLIENTE:: ']) !!}
   </div>
</div>

<center>
	<input class="btn btn-lg btn-primary" type="submit" value="Actualizar el Registro">
  	<a href="{{ url('cliente') }}" class="btn btn-lg btn-primary" role="button">Cancelar</a>
</center>
	{!! Form::close() !!}
	
</div>

@stop
