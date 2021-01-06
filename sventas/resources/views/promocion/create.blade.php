@extends('layouts.app')
@section('main-content')
	
	<div class="container spark-screen">
	<div class="row">
	<div class="col-md-7 col-md-offset-2">
	<div class="panel panel-primary">
	<div class="panel-heading"><center><h4><b>HABILITAR PROMOCION<img src="../../public/img/producto-logo.png" alt="" width="80"></b></h4></center></div>	
	
	{!!Form::open(['route' => 'promocion.store', 'method' => 'POST'])!!}
	
	   <div class="panel-body"> 	
	    	
		<div class="form-group">
			<label>Nombre de la Promoción ::</label>
			<input class="form-control" type="text" name="NombreProm">
		</div>
		
		<div class="form-inline">
			<div class="form-group">
				<label>Item Producto ::</label>
				<select name="ProductoProm" class="form-control">
					<option disabled selected value>-- seleccione un ítem --</option>        					
        			@foreach($productos as $producto)
         		<option value="{{ $producto->id }}"> {{ $producto->ItemProducto }}</option>
        			@endforeach
    			</select>
    		</div>
    		<p>
    		<div class="form-group">
    			<label>Precio Promoción ::</label>
				<input class="form-control" type="text" name="PrecioProm">
			</div>
		</div>
		<p>
		
	<div class="form-inline">
	
		<label>Validez de la Promocion ::</label>
    	<div class="input-daterange input-group" id="datepicker">        
        <input type="text" class="input-sm form-control" name="FechainicioProm" />
        <span class="input-group-addon">al</span>
        <input type="text" class="input-sm form-control" name="FechafinProm" />
     	</div>
   
    </div>		
	<p>			
  	<div class="form-horizontal">
                {!! Form::label('Sucursal') !!}
              	<select name="SucursalProm" class="form-control">
                		<option disabled selected value>-- seleccione una sucursal --</option>
        					@foreach($sucursales as $sucursal)
         				<option value="{{ $sucursal->id}}"> {{ $sucursal->NroSucursal }}</option>
        					@endforeach
    				</select>
 	</div>
 	<p>
	<div class="form-group">
                {!! Form::label('R.A. / DOC. REF.') !!}
                {!! Form::text('RaProm', null, ['class' => 'form-control', 'placeholder' => 'DOCUMENTO DE REFERENCIA:: ']) !!}
   </div>

	<center>
    	<input class="btn btn-lg btn-primary" type="submit" value="Registrar">
    	<input class="btn btn-lg btn-primary" type="reset" value="Borrar">
  	</center>
	{!!Form::close()!!}
		</div>
<center>
	<a href="../home" class="btn btn-default btn-block" role="button">Volver al Menu</a>
	</center>		
		
	</div>
	</div>
	</div>
	</div>
<script>
    $('.input-daterange').datepicker({
        format: "yyyy/mm/dd",
        language: "es",
        autoclose: true
    });
</script>
@stop
