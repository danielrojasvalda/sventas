@extends('layouts.app')
@section('main-content')

<script>

function eliminar_ceros(NroFactura) 
{
	NroFactura.value = Number(NroFactura.value);	
}

function habilita_buscar() 
{
	document.registroventa.base_cliente.disabled = false; //OK
}

function habilita_nuevo() 
{
	document.registroventa.base_cliente.disabled = true; //no
	window.location.href = '../cliente/create';
	//window.open('../cliente/create', 'popup', 'width=800, height=480');
	//window.alert('../cliente/create');
	//window.confirm('../cliente/create');
	//window.prompt('../cliente/create');
	
}

function habilita_credito() {
	document.getElementById('plandepago').style.display='block'; //OK
	document.getElementById('mediodepago').style.display='block';
	//document.getElementById('salidas').style.display='none'; //NO
	//document.kardex.ingreso.disabled = false; //OK
	//document.kardex.salida.disabled = true; //NO
	//document.getElementById('selecciona_almacen').style.display='block'; //OK
	//document.getElementById('selecciona_sucursales').style.display='none'; //NO
	//document.kardex.id_almacen.disabled = false; //OK
	//document.kardex.id_sucursales.disabled = true; //NO
}
function habilita_contado() {
	document.getElementById('plandepago').style.display='none'; //NO
	document.getElementById('mediodepago').style.display='block';	
}

//This function get the quantity of productos and gets result from price

function countLines()
{
	//gets quantity from textarea series
	var area = document.getElementById("series")
  	var text = area.value.replace(/\s+$/g,"")
  	var split = text.split("\n")
  	var cantidad = split.length;
  	//prints quantity in textbox
  	document.getElementById("VCantidad").value=cantidad;
 	//gets price by one
 	//var costo_unitario = parseFloat(document.getElementById("vproducto").value);
 	var valor = document.getElementById("vproducto").value;
	var valor2 = valor.split("|");	
 	var costo_unitario = parseFloat(valor2[1]);
 	var idProducto = valor2[0];
 	//get id product send to form name id_producto
 	document.registroventa.id_producto.value = idProducto;
 	//alert(idProducto);
 	//gets quantity product
	var mount = parseFloat(document.getElementById("VCantidad").value);
	//prints the result queantity * product
	document.registroventa.Importe.value = (parseFloat(costo_unitario * mount)).toFixed(2);
	
}
function countLines2() {
	//ESta funcion divide la cadena en base a |
//	var costo_unitario = parseFloat(document.getElementById("vproducto").value);
	var valor = document.getElementById("vproducto").value;
	var valor2 = valor.split("|");	
 	var costo_unitario = parseFloat(valor2[1]);
 	var idProducto = valor2[0];
 	document.registroventa.id_producto.value = idProducto;
 	//alert(idProducto);
	var cant = parseFloat(document.getElementById("VCantidad").value);
	document.registroventa.Importe.value = (parseFloat(costo_unitario * cant)).toFixed(2);
}

function habilita(checkboxElem)
{
		//var chk = document.getElementById("empaque").value;		
		//document.kardex.series.disabled = true;
		//
		if (checkboxElem.checked) {
		//alert('checked');
			document.registroventa.VCantidad.readOnly = false;
			document.registroventa.series.disabled = true;
		}
		else {
		//unchecked			
			document.registroventa.VCantidad.readOnly = true;
			document.registroventa.series.disabled = false;
			document.registroventa.VCantidad.value = "";
		}
}
function verificaitem() {
	var costo_unitario = parseFloat(document.getElementById("vproducto").value);
	var cant = parseFloat(document.getElementById("VCantidad").value);
	document.registroventa.Importe.value = (costo_unitario * cant);  
}    
function numberFormat() {
		var numero = document.getElementById("Importe").value;
     	// Variable que contendra el resultado final
     	var resultado = "";
     	// Si el numero empieza por el valor "-" (numero negativo)
     	if(numero[0]=="-")
     	{
            // Cogemos el numero eliminando los posibles puntos que tenga, y sin
            // el signo negativo
            nuevoNumero=numero.replace(/\,/g,'').substring(1);
        }else{
            // Cogemos el numero eliminando los posibles puntos que tenga
            nuevoNumero=numero.replace(/\,/g,'');
           	// alert(nuevoNumero);
        }
        // Si tiene decimales, se los quitamos al numero
        if(numero.indexOf(",")>=0)
            nuevoNumero=nuevoNumero.substring(0,nuevoNumero.indexOf(","));
            alert(nuevoNumero); 23
        // Ponemos un punto cada 3 caracteres
        for (var j, i = nuevoNumero.length - 1, j = 0; i >= 0; i--, j++)
            resultado = nuevoNumero.charAt(i) + ((j > 0) && (j % 3 == 0)? ".": "") + resultado;
        if(numero.indexOf(",")>=0)
			alert(resultado);
            resultado+=numero.substring(numero.indexOf(","));
        if(numero[0]=="-")
        {
            return "-"+resultado;
        }else{
            document.registroventa.Importe.value = resultado.toFixed(2);
        }
    }
function buscapromo_vigencia() {	
	//obtenemos el valor del nombre y precio usando split
	var item = document.getElementById("vproducto").value;
	var itemx = item.split("|");
	var itemproducto_js = itemx[0];
	//pasamos las variables a php
	var itemprecio_js = parseFloat(itemx[1]);
	document.getElementById("ITEM").value=itemproducto_js;
	document.getElementById("PRECIO").value =itemprecio_js;
	//return itemproducto;
}
</script>




<?php //var_dump($verpromo); ?>
	<div class="container spark-screen">
	<div class="row">
	<div class="col-md-7 col-md-offset-2">
	<div class="panel panel-primary">
	<div class="panel-heading"><center><h4><b>REGISTRO DE VENTAS<!-- <img src="../../public/img/venta-logo.png" alt="" width="80">--></b></h4></center></div>
	@include('partials.messages')
	{!! Form::open(['route' => 'venta.store', 'method' => 'POST', 'name' => 'registroventa']) !!}   
   
   <div class="panel-body">
    
  	<div class="form-horizontal">  	
  		<input type="hidden" class="form-control" name="VUsuario" value="{{ Auth::user()->id }}"/>
  	</div>
  	
  	<div class="form-horizontal">  	
  		<input type="hidden" class="form-control" name="VSucursal" value="{{ Auth::user()->IdSucursal }}"/>
  	</div>
  	<center>
  	<hr/>
  	{!! Form::label('published_at', 'Fecha Venta:') !!}
  		<!-- {!! Form::input('date', 'published_at', date('Y-m-d'), ['class'=>'form-control']) !!} -->
  		<!-- {!! Form::input('date', 'FechaVenta', date('Y-m-d'), ['class'=>'form-inline', 'readonly']) !!} -->
  		<!-- <input type="text" class="form-control" name="FechaVenta"> -->
    
				<div class="form-group">
                <div class='input-group date' id='datetimepicker'>
                    <input type="text" class="form-control" name="FechaVenta" required="true">
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>
  	</center>  	  	
  	
  	</p>
		
	<div class="form-horizontal">
	<center>
                {!! Form::label('Cliente ') !!}
               <select name="VCliente" class="form-inline" id="base_cliente" required="true">
  	              		<option disabled selected value>-- seleccione al cliente --</option>
        					@foreach($clientes as $cliente)	
         				<option value="{{ $cliente->id }}"> {{ $cliente->NombreCliente }}</option>
        					@endforeach
    				</select>                  					
					<input type="radio" name="tipo_cliente" onclick="habilita_nuevo()"> Nuevo </input>
    </center>
  	</div>
  	  	
  	 </p> 	
  	<div class="form-horizontal">
  		{!! Form::label('Nro. de Factura ::') !!}
    <!-- 	<input type="text" name="NroFactura" class="form-inline" placeholder="Número de Factura" pattern="[0-9]{1,}" required="true" title="Introducir sólo números"> -->
     	<input type="text" name="NroFactura" class="form-inline" placeholder="Número de Factura" pattern="[0-9]{1,}" required="true" title="Introducir sólo números" onblur="eliminar_ceros(this)">   			 		
  	</div>  	
 	<p>
	
	<!-- PRODUCTO **************************  SIN VALOR-->	
<center>  	
	<div class="form-inline">
		<img src="../../public/img/efectivo.jpg" alt="Contado" height="60" width="60" onclick="habilita_ingresos()">
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<img src="../../public/img/credito.jpg" alt="Credito" height="60" width="60" onclick="habilita_salidas()">
		
	</div>
	</center>
	
	<center>
	<div class="form-inline">
		<input type="radio" name="VTipoventa" onclick="habilita_contado()" value="CONTADO" required> Contado</input>
		<input type="radio" name="VTipoventa" onclick="habilita_credito()" value="CREDITO"> Crédito</input>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	
	</div>
	</center>
	<p>	
<div class="form-horizontal" id="plandepago" hidden>
					{!! Form::label('Plan de Pago ::') !!}
             	<select name="VFormapago" class="form-inline">
                		<option disabled selected value>-- seleccione una opción --</option>
        					@foreach($formapagos as $formapago)
         				<option value="{{ $formapago->id }}"> {{ $formapago->FormaPago }}</option>
        					@endforeach
    				</select>
<p>
</div>

<hr/>
<div class="form-group" id="mediodepago">
   	<label>Medio de Pago :: </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   	<label><input type="radio" name="VMediodepago" value="EFECTIVO" required> Efectivo</label>
   	<label><input type="radio" name="VMediodepago" value="CHEQUE"> Cheque</label>
   	<label><input type="radio" name="VMediodepago" value="DEPOSITO"> Depósito</label>
   	<label><input type="radio" name="VMediodepago" value="TRANSFERENCIA"> Transferencia</label>
</div>


<div class="form-inline">
						{!! Form::label('Item Producto') !!}
                	<select class="form-control" id="vproducto" onchange="buscapromo_vigencia()" required> 
							<option disabled selected value>-- seleccione un ítem --</option>        					
        					@foreach($productos as $producto)
         				<option value="{{ $producto->id }}|{{ $producto->PrecioProducto }}">{{ $producto->ItemProducto }}</option>
        					@endforeach
    					</select>	
</div>
<p>
<div class="form-inline">
	<label><input type="checkbox" value="empaque" name="empaque" id="empaque" onchange="habilita(this)"> Empaque / Cantidad </label>&nbsp;&nbsp;&nbsp;
    					<input type="text" name="VCantidad" id="VCantidad" size="6" maxlength="6" readonly onchange="countLines2()" pattern="[0-9]{1,}" required>
</div>

  	
  	
  	
  	
  	<!-- FIN PRODUCTO ************************ -->
  	<!-- PRODUCTO **************************  CON VALOR-->
  	<input type="hidden" value="" id="id_producto" name="VProducto">
  	<!-- FIN PRODUCTO ************************ -->
  	
	<div class="form-group">	   			
  			<label for="comment">Series:</label><br>
		  	<textarea wrap="soft" name="VSerie"  rows="3" cols="75" id="series" onchange="countLines()"></textarea>
  	</div>  	
  		<?php //$content = DB::table('producto')->select('PrecioProducto')->where('id', '=', '<script>document.write(x);</script>')->get(); ?>  		
  	  	<div class="form-inline">
                {!! Form::label('Importe (Bs.)') !!}
                <input type="text" value="" id="Importe" name="Importe" onchange="numberFormat()" required="required">               
					<label>Promoción:: </label>	                
                @foreach($verpromo as $verpromo1)           	
                		{{ $verpromo1->ItemProducto }}
                		<label>Precio: {{ $verpromo1->PrecioProm }}</label>	
                @endforeach
					<label id="PROMO" hidden>PRECIO PROMOCIONAL</label>
  		</div>
 	<p>
 	<div class="form-horizontal">
                {!! Form::label('Observaciones ') !!}
                {!! Form::text('Obs', null, ['class' => 'form-control', 'placeholder' => 'OBSERVACIONES:: ']) !!}
  	</div>
<!-- AQUI EMPEZAMOS CON LA RECUPERACION DE VARIABLES DE JS -->

<input type="text" id="ITEM" value="" hidden>
<input type="text" id="PRECIO" value="" hidden>  	  	
  	
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
    $('.input-group.date').datepicker({
        format: "yyyy/mm/dd",
        language: "es",
        autoclose: true
    });
</script>
		
@stop
