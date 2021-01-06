@extends('layouts.app')
@section('main-content')

<h1><center>Editar Sucursal
<img src="../../../public/img/logo-sucursal.png" alt="" width="80"></center></h1>
{!! Form::model($sucursales, ['method' => 'PATCH', 'action' => ['SucursalController@update', $sucursales->id] ]) !!}
<div class="form-horizontal">


<div class="form-group">
	<label class="control-label col-sm-2">Nro. de Sucursal: </label>
	<div class="col-sm-8">
		{!! Form::text('NroSucursal', null, ['class' => 'form-control', 'placeholder' => 'NUMERO DE SUCURSAL:: ']) !!}
  	</div>
</div>

<div class="form-group">	
	<label class="control-label col-sm-2">Departamento Sucursal: </label>
	<div class="col-sm-8">
		{!!  Form::select('DptoSucursal', ['La Paz' => 'La Paz', 'Cochabamba' => 'Cochabamba', 'Santa Cruz' => 'Santa Cruz', 'Chuquisaca' => 'Chuquisaca', 'Oruro' => 'Oruro', 'Potosi' => 'Potosi', 'Tarija' => 'Tarija', 'Beni' => 'Beni', 'Pando' => 'Pando'],  'La Paz', ['class' => 'form-control' ]) !!}	
	</div>
</div>
   
<div class="form-group">
	<label class="control-label col-sm-2">Ciudad Sucursal: </label>
	<div class="col-sm-8">
		{!! Form::text('CiudadSucursal', null, ['class' => 'form-control', 'placeholder' => 'CIUDAD:: ']) !!}
  	</div>
</div>

<div class="form-group">
	<label class="control-label col-sm-2">Direccion Sucursal: </label>	
	<div class="col-sm-8">
  		{!! Form::text('DirSucursal', null, ['class' => 'form-control', 'placeholder' => 'DIRECCION:: ']) !!}
  	</div>
</div>  	
  	
<div class="form-group">
	<label class="control-label col-sm-2">Telefono Sucursal: </label>
	<div class="col-sm-8">
  		{!! Form::text('TelSucursal', null, ['class' => 'form-control', 'placeholder' => 'TELEFONO:: ']) !!}
   </div>
</div>

<center>
	<input class="btn btn-lg btn-primary" type="submit" value="Actualizar el Registro">
  	<a href="{{ url('sucursal') }}" class="btn btn-lg btn-primary" role="button">Cancelar</a>
</center>
	{!! Form::close() !!}
	
</div>



@stop
