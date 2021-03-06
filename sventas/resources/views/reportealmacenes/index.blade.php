@extends('layouts.app')
@section('main-content')

<script>
function elegir_sucursal()
{
			var sucursal = document.getElementById("sucursalventa").value;
			alert(sucursal);
}
function buscaralmacen()
{  	  	
  	var item=$("#select_filtro_item").val();
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
	url=""+item+"/"+fechaini+"/"+fechafin+"";
	//alert(url);		
 	location.href="../../"+url;
}	

</script>

<center>
	<p class="bg-primary"><h2>REPORTE ALMACENES <img src="" alt="" width="80"></h2></p></center>


<table>
<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
<th>Filtrar por: </th>
<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>

<th>
Producto
<select class="form-control" id="select_filtro_item">
	<option value="0" selected="">-</option>	
	@foreach($productos as $producto)
		<option value="{{ $producto->id }}">{{ $producto->ItemProducto }}</option>
	@endforeach
</select>
</th>
<th>
<center>Rango de Fecha</center>
		<div class="input-daterange input-group" id="datepicker">        
        <input type="text" class="input-sm form-control" name="FechainicioProm" id="fechaini_buscado" />
        <span class="input-group-addon">a</span>
        <input type="text" class="input-sm form-control" name="FechafinProm" id="fechafin_buscado" />
       </div>
</th>
<th>
	<div class="btn btn-default btn-block" role="button" onclick="buscaralmacen();">BUSCAR</div>
</th>
</table>		
	<table id="example" class="table table-striped">
	<thead>
		<th style="text-align:center" class="bg-primary">Sucursal</th>
		<th style="text-align:center" class="bg-primary">Fecha</th>
		<th style="text-align:center" class="bg-primary">Producto</th>
		<th style="text-align:center" class="bg-primary">Nro. Documento</th>
		<th style="text-align:center" class="bg-primary">Ingresos</th>
		<th style="text-align:center" class="bg-primary">Egresos</th>
		<th style="text-align:center" class="bg-primary">Saldos</th>
	</thead>
	@foreach($kardexs as $kardex)
	<tbody>
		<td>ALMACEN - LOGISTICA</td>
		<td>{{ $kardex->KFecha }}</td>
		<td>{{ $kardex->ItemProducto }}</td>
		<td>{{ $kardex->KReferencia }}</td>
		<td>{{ $kardex->StockIngreso }}</td>
		<td>{{ $kardex->StockEgreso }}</td>
		<!-- <td><?php echo"".(($kardex->StockIngreso)-($kardex->StockEgreso)) ?></td> -->
		<td></td>
	</tbody>
	@endforeach
	</table>
	<center>	
	<a href="../../../home" class="btn btn-default btn-block" role="button">Volver al Menu</a>
	</center>
	<script>
    $('.input-daterange').datepicker({
        format: "yyyy/mm/dd",
        language: "es",
        autoclose: true
    });
</script>	
@stop
