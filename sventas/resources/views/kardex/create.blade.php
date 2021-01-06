@extends('layouts.app')
@section('main-content')

	
<script>	
function countLines()
{
	var area = document.getElementById("series")
  	var text = area.value.replace(/\s+$/g,"")
  	var split = text.split("\n")
  	var cantidad = split.length;
  	document.getElementById("KCantidad").value=cantidad;
  	return cantidad
}
function habilita(checkboxElem)
{
		//var chk = document.getElementById("empaque").value;		
		//document.kardex.series.disabled = true;
		//
		if (checkboxElem.checked) {
		//alert('checked');
			document.kardex.KCantidad.readOnly = false;
			document.kardex.series.disabled = true;
		}
		else {
		//unchecked			
			document.kardex.KCantidad.readOnly = true;
			document.kardex.series.disabled = false;
			document.kardex.KCantidad.value = "";
		}
}
function habilita_ingresos() {
	document.getElementById('ingresos').style.display='block'; //OK
	document.getElementById('salidas').style.display='none'; //NO
	document.kardex.ingreso.disabled = false; //OK
	document.kardex.salida.disabled = true; //NO
	document.getElementById('selecciona_almacen').style.display='block'; //OK
	document.getElementById('selecciona_sucursales').style.display='none'; //NO
	document.kardex.id_almacen.disabled = false; //OK
	document.kardex.id_sucursales.disabled = true; //NO
}
function habilita_salidas() {
	document.getElementById('salidas').style.display='block';
	document.getElementById('ingresos').style.display='none';
	document.kardex.salida.disabled = false;
	document.kardex.ingreso.disabled = true;
	document.getElementById('selecciona_sucursales').style.display='block';
	document.getElementById('selecciona_almacen').style.display='none';
	document.kardex.id_almacen.disabled = true;
	document.kardex.id_sucursales.disabled = false;
}
</script>
<!-- <?php var_dump($var1); ?> -->	
	<div class="container spark-screen">
	<div class="row">
	<div class="col-md-7 col-md-offset-2">
	<div class="panel panel-primary">
	<div class="panel-heading"><center><h4><b>KARDEX DE PRODUCTOS <!-- <img src="../../public/img/bincard-logo.png" alt="" width="80">--> </b></h4></center></div>
	
	{!!Form::open(['route' => 'kardex.store', 'method' => 'POST', 'name' => 'kardex'])!!}   
   
<div class="panel-body">

		
	<div class="form-horizontal">	
  	
  		{!! Form::label('published_at', 'Fecha Movimiento: ') !!}
   		
  		
	<?php 
		//$fecha_actual = date('Y-m-d'); 
		//echo "". $fecha_actual;
	// <input type="date" name="KFecha" value="<?php echo $fecha_actual; " disabled 
	?>  			
  		{!! Form::input('date', 'KFecha', date('Y-m-d'), ['class'=>'form-inline', 'readonly']) !!}
  		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  	</div>
  	<input type="hidden" class="form-control" name="KUsuario" value="{{ Auth::user()->id }}"/>
  	<p/>
  	<center>  	
	<div class="form-inline">
		<img src="../../public/img/ingreso.png" alt="Ingreso" height="60" width="60" onclick="habilita_ingresos()">
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<img src="../../public/img/salida.png" alt="Salida" height="60" width="60" onclick="habilita_salidas()">
		
	</div>
	</center>
	<center>
	<div class="form-inline">
		<input type="radio" name="tipo_movimiento" onclick="habilita_ingresos()"> Ingreso</input>
		<input type="radio" name="tipo_movimiento" onclick="habilita_salidas()"> Salida</input>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	
	</div>
	</center>
  	<br/>
	<div class="form-horizontal" id="ingresos" hidden>
	{!! Form::label("Tipo de Movimiento") !!} 
   <select name="KMovimiento" class="form-control" disabled="true" id="ingreso">
   <option disabled selected value>-- seleccione una opcion --</option>
   	@foreach($var1 as $movimiento)
   	<option value="{{ $movimiento->id }}">{{ $movimiento->RazonMovimiento }}
   	</option>
   	@endforeach
   </select>
 	</div>
 	
 	
 	<div class="form-horizontal" id="salidas" hidden>
	{!! Form::label("Tipo de Movimiento") !!} 
   <select name="KMovimiento" class="form-control" disabled="true" id="salida">
    <option disabled selected value>-- seleccione una opcion --</option>
   	@foreach($var2 as $movimiento)
   	<option value="{{ $movimiento->id }}">{{ $movimiento->RazonMovimiento }}
   	</option>
   	@endforeach
   </select>
 	</div>
 	 	 	 	
 	<div class="form-horizontal" id="selecciona_sucursales" hidden>
                {!! Form::label('Destino Sucursal') !!}
                <select name="KSucursal" class="form-control" id="id_sucursales" disabled="true">
                		<option disabled selected value>-- seleccione una sucursal --</option>
        					@foreach($var3 as $sucursal)
         				<option value="{{ $sucursal->id}}"> {{ $sucursal->NroSucursal }}</option>
        					@endforeach
    				</select>
 	</div>
 	
 	<div class="form-horizontal" id="selecciona_almacen" hidden>
                {!! Form::label('Destino Sucursal') !!}
                <select name="KSucursal" class="form-control" id="id_almacen" disabled="true">
				@foreach($var4 as $sucursal)
                		<option value="{{ $sucursal->id }}">{{ $sucursal->NroSucursal }}</option>
				@endforeach
    		</select>
 	</div>
 	
 	<div class="form-horizontal">
                
                <label>Doc. Referencia</label>
 	</div>
                <input type="text" name="KReferencia" class="form-control" placeholder="Código de Referencia" maxlength="12" size="12" required="required">	
 	
	</div>   
	<div class="panel-body">
	<div class="form-inline">
                {!! Form::label('Item Producto') !!}
                 	<select name="KProducto" class="form-control">
							<option disabled selected value>-- seleccione un ítem --</option>        					
        					@foreach($productos as $producto)
         				<option value="{{ $producto->id }}"> {{ $producto->ItemProducto }}</option>
        					@endforeach
    					</select>
    					<p>
    					<div class="form-group">
    					<label><input type="checkbox" value="empaque" name="empaque" id="empaque" onchange="habilita(this)"> Empaque / Cantidad </label>&nbsp;&nbsp;&nbsp;
    					<input type="text" name="KCantidad" id="KCantidad" size="6" maxlength="6" required="required" readonly>
    					</div>
  	</div>
  	
  	<div class="form-group">	   			
  			<label for="comment">Series:</label>
		  	<textarea wrap="soft" name="KSerie" class="form-control" rows="5" id="series" onchange="alert('ITEMS CONTABILIZADOS:: ' + countLines())"></textarea>
  	</div>
  	<p>                
  	<center>
    	<input class="btn btn-lg btn-primary" type="submit" value="Guardar">
    	<input class="btn btn-lg btn-primary" type="reset" value="Limpiar">
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
@stop
