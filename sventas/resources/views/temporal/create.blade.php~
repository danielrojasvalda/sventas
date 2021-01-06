@extends('layouts.app')
@section('main-content')

	<div class="container spark-screen">
	<div class="row">
	<div class="col-md-10 col-md-offset-1">
	<div class="panel panel-default">
	<div class="panel-heading"><center><h4><u><b>SALIDA TEMPORAL</b></u></h4></center>
	
	<center><h5>Sucursal: <b>Oficina Central - La Paz</b> | Solicitante: <b> Danny Grovers Tito Laura</b></h5></center>	
	
	</div>	
	
	{!!Form::open(['route' => 'producto.store', 'method' => 'POST'])!!}
	
	   <div class="panel-body"> 	
	
  			<div class="form-group">
            {!! Form::label('radios', 'Salida', ['class' => 'col-lg-2 control-label']) !!}
            <div class="col-lg-10">
               
                    {!! Form::label('ferias', 'FERIAS') !!}
                    {!! Form::radio('radio', 'option1', true, ['id' => 'radio1']) !!} &nbsp; &nbsp;              
                
                    {!! Form::label('radio2', 'DEMOSTRACIONES') !!}
                    {!! Form::radio('radio', 'option2', false, ['id' => 'radio2']) !!} &nbsp; &nbsp;
                   
                    {!! Form::label('radio3', 'PRESTAMO') !!} 
                    {!! Form::radio('radio', 'option3', false, ['id' => 'radio3']) !!} &nbsp; &nbsp;
            </div>
        	</div>
        	

	<div class="form-group">
        	{!! Form::label('Item Producto') !!}
        	{!! Form::text('ItemProducto', null, ['class' => 'form-control', 'placeholder' => 'ITEM PRODUCTO:: ']) !!}
  	</div>
	<div class="form-group">
                {!! Form::label('Precio Producto') !!}
                {!! Form::text('PrecioProducto', null, ['class' => 'form-control', 'placeholder' => 'PRECIO PRODUCTO:: ']) !!}
   </div>
	<div class="form-group">
                {!! Form::label('Modelo Producto') !!}
                {!! Form::text('ModeloProducto', null, ['class' => 'form-control', 'placeholder' => 'MODELO PRODUCTO:: ']) !!}
   </div>
	<div class="form-group">
                {!! Form::label('Detalle del Producto') !!}
                {!! Form::textarea('ObsProducto', null, ['class' => 'form-control', 'placeholder' => 'DETALLE DEL PRODUCTO:: ']) !!}
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
