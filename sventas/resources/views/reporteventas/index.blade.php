@extends('layouts.app')
@section('main-content')
<script>
function buscarventa()
{  	
	//var url="";  	
  	var sucursal=$("#select_filtro_sucursal").val();
  	var dato=$("#dato_buscado").val();
	var _fechaini=$("#fechaini_buscado").val();
	var _fechafin=$("#fechafin_buscado").val();
	if (_fechaini == "") {
		fechaini = 0;
		fechafin = 0;
	}
	else {
		var fechaini=_fechaini.replace(/\//g,"-");
		var fechafin=_fechafin.replace(/\//g,"-");	
	}
/*	
	if(dato == "")	
	{
		var url=""+sucursal+"";
	}
	else {
	}	
	*/
	url=""+sucursal+"/"+dato+"/"+fechaini+"/"+fechafin+"";
	//alert(url);		
 	//location.href="../"+url;
 	location.href="../../../"+url;
}
</script>
<center>
<?php //var_dump($ventas); ?>
<p class="bg-primary"><h2>REPORTE VENTAS<img src="" alt="" width="80"></h2></p>
</center>
<table>
<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
<th>Filtrar por: </th>
<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
<th>
Sucursal
<select class="form-control" id="select_filtro_sucursal" onchange="">
	<option value="0">-</option>
	@foreach($sucursales as $sucursal)
		<option value="{{ $sucursal->id }}">{{ $sucursal->NroSucursal }}</option>
	@endforeach
</select>
</th>
<th>
<center>Rango de Fecha</center>
		<div class="input-daterange input-group" >        
        <input type="text" class="input-sm form-control" name="FechainicioProm" id="fechaini_buscado" value="" />
        <span class="input-group-addon">a</span>
        <input type="text" class="input-sm form-control" name="FechafinProm" id="fechafin_buscado" value=""/>
       </div>
</th>
<th>
Tipo de Venta
<select class="form-control" id="dato_buscado" onchange="">
	<option value="0">-</option>
	<option value="CONTADO">CONTADO</option>
	<option value="CREDITO">CREDITO</option>
</select>
</th>
<th>
	<div class="btn btn-default btn-block" role="button" onclick="buscarventa();">BUSCAR</div>
</th>
</table>

	<table id="example" class="table table-striped">
	<thead>
		<th style="text-align:center" class="bg-primary">Sucursal</th>
		<th style="text-align:center" class="bg-primary">Fecha Venta</th>		
		<th style="text-align:center" class="bg-primary">Factura</th>
		<th style="text-align:center" class="bg-primary">Cliente</th>
		<th style="text-align:center" class="bg-primary">Importe (Bs.)</th>
		<th style="text-align:center" class="bg-primary">Medio de Pago</th>
		<th style="text-align:center" class="bg-primary">Tipo de Venta</th>
	</thead>
	
	@foreach($ventas as $venta)
	<tbody>
		<td>{{ $venta->NroSucursal }}</td>
		<td>{{ $venta->FechaVenta }}</td>
		<td>{{ $venta->NroFactura }}</td>
		<td>{{ $venta->NombreCliente }}</td>
		<td>{{ $venta->Importe }}</td>
		<td>{{ $venta->VMediodepago }}</td>
		<td>{{ $venta->VTipoventa }}</td>
	</tbody>
	@endforeach
	
	</table>
	<!-- This will display paginate result showing links to other pages -->
	{{ $ventas->links() }}	
	<center>	
	<a href="../../../../home" class="btn btn-default btn-block" role="button">Volver al Menu</a>
	</center>
	<script>
    $('.input-daterange').datepicker({
        format: "yyyy/mm/dd",
        language: "es",
        autoclose: true
    });
</script>
@stop
