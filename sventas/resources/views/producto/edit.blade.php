@extends('layouts.app')
@section('main-content')


<h1><center>Editar Producto<img src="../../../public/img/producto-logo.png" alt="" width="80"></center></h1>
{!! Form::model($productos, ['method' => 'PATCH', 'action' => ['ProductoController@update', $productos->id] ]) !!}
<div class="form-horizontal">
  
<div class="form-group">
	<label class="control-label col-sm-2">Item Producto: </label>
	<div class="col-sm-8">
		{!! Form::text('ItemProducto', null, ['class' => 'form-control', 'placeholder' => 'ITEM:: ']) !!}
  	</div>
</div>

<div class="form-group">
	<label class="control-label col-sm-2">Precio Producto: </label>	
	<div class="col-sm-8">
  		{!! Form::text('PrecioProducto', null, ['class' => 'form-control', 'placeholder' => 'PRECIO:: ']) !!}
  	</div>
</div>  	
  	
<div class="form-group">
	<label class="control-label col-sm-2">Categoría: </label>
	<div class="col-sm-8">
  		{!! Form::text('ModeloProducto', null, ['class' => 'form-control', 'placeholder' => 'MODELO:: ']) !!}
   </div>
</div>

<div class="form-group">
	<label class="control-label col-sm-2">Stock Minimo: </label>
	<div class="col-sm-8">
  		{!! Form::text('StockminimoProducto', null, ['class' => 'form-control', 'placeholder' => 'STOCK MINIMO:: ']) !!}
   </div>
</div>

<div class="form-group">
	<label class="control-label col-sm-2">Stock Ideal: </label>
	<div class="col-sm-8">
  		{!! Form::text('StockidealProducto', null, ['class' => 'form-control', 'placeholder' => 'STOCK IDEAL:: ']) !!}
   </div>
</div>

<div class="form-group">
	<label class="control-label col-sm-2">Detalle Producto: </label>
	<div class="col-sm-8">
  		{!! Form::text('ObsProducto', null, ['class' => 'form-control', 'placeholder' => 'DETALLE:: ']) !!}
   </div>
</div>

<center>
	<input class="btn btn-lg btn-primary" type="submit" value="Actualizar el Registro">
  	<a href="{{ url('producto') }}" class="btn btn-lg btn-primary" role="button">Cancelar</a>
</center>
	{!! Form::close() !!}
	
</div>

@stop
