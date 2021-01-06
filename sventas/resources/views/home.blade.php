@extends('layouts.app')

@section('htmlheader_title')
	Sistema de Seguimiento de Ventas y Productos
@endsection


@section('main-content')
	<div class="container spark-screen">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				
				
<head>

@if((Auth::user()->AccesoUsuario)==1)
			
<style type="text/css">
.uno a{
	text-decoration:none;
	display:block;
	border:1px solid #367fa9;
	width: 250px;
	height: 135px;
	text-align:center;
	padding-top: 15px;
	margin:auto;
	
	background-color:#367fa9;
	color:#FFF;
	font-family:arial;
	box-shadow: -3px 3px 10px #000;
	text-shadow:-3px 3px 10px #000;
	
	

     transition: 1s;
     -webkit-transition:1s;
     -o-transition:2s;
     -moz-transition:2s;
	 -ms-transition:2s;
	 }
 .uno a:before{
	 content:"";
	 background-image:url("../public/img/formadepago.png");
	 
	 /*background-repeat:no-repeat;
	 background-position:20px -5px;*/
	 
	 display:block;
	 float:inherit;
	 width:128px; /* 250px */
	 height:110px; /* 100px */
	 margin:auto;
	 }
	 
	.uno a:hover {
		 background-color:#367fa9;
		 width:300px;
		 }
		 
		 
		 .dos a{
	text-decoration:none;
	display:block;
	border:1px solid #367fa9;
	width: 250px;
	height: 135px;
	text-align:center;
	padding-top: 15px;
	margin:auto;
	
	background-color:#367fa9;
	color:#FFF;
	font-family:arial;
	box-shadow: -3px 3px 10px #000;
	text-shadow:-3px 3px 10px #000;
	
	

     transition: 1s;
     -webkit-transition:1s;
     -o-transition:2s;
     -moz-transition:2s;
	 -ms-transition:2s;
	 }
 .dos a:before{
	 content:"";
	 background-image:url("../public/img/movimiento.png");
	 	 
	 /*background-repeat:no-repeat;
	 background-position:20px -5px;*/
	 
	 display:block;
	 float:inherit;
	 width:128px;
	 height:110px;
	 margin:auto;
	 }
	 
	.dos a:hover {
		 background-color:#367fa9;
		 width:300px;
		 }
		 
		 
		 .tres a{
	text-decoration:none;
	display:block;
	border:1px solid #367fa9;
	width: 250px;
	height: 135px;
	text-align:center;
	padding-top: 15px;
	margin:auto;
	
	background-color:#367fa9;
	color:#FFF;
	font-family:arial;
	box-shadow: -3px 3px 10px #000;
	text-shadow:-3px 3px 10px #000;
	
	

     transition: 1s;
     -webkit-transition:1s;
     -o-transition:2s;
     -moz-transition:2s;
	 -ms-transition:2s;
	 }
 .tres a:before{
	 content:"";
	 background-image:url("../public/img/promocion.png");
	 
	 /*background-repeat:no-repeat;
	 background-position:20px -5px;*/
	 
	 display:block;
	 float:inherit;
	 width:128px;
	 height:110px;
	 margin:auto;
	 }
	 
	.tres a:hover {
		 background-color:#367fa9;
		 width:300px;
		 }
		 
		 .cuatro a{
	text-decoration:none;
	display:block;
	border:1px solid #367fa9;
	width: 250px;
	height: 135px;
	text-align:center;
	padding-top: 15px;
	margin:auto;
	
	background-color:#367fa9;
	color:#FFF;
	font-family:arial;
	box-shadow: -3px 3px 10px #000;
	text-shadow:-3px 3px 10px #000;
	
	

     transition: 1s;
     -webkit-transition:1s;
     -o-transition:2s;
     -moz-transition:2s;
	 -ms-transition:2s;
	 }
 .cuatro a:before{
	 content:"";
	 background-image:url("../public/img/sucursal.png");
	 
	 /*background-repeat:no-repeat;
	 background-position:20px -5px;*/
	 
	 display:block;
	 float:inherit;
	 width:128px;
	 height:110px;
	 margin:auto;
	 }
	 
	.cuatro a:hover {
		 background-color:#367fa9;
		 width:300px;
		 }
		 
		 
		 
		 .cinco a{
	text-decoration:none;
	display:block;
	border:1px solid #367fa9;
	width: 250px;
	height: 135px;
	text-align:center;
	padding-top: 15px;
	margin:auto;
	
	background-color:#367fa9;
	color:#FFF;
	font-family:arial;
	box-shadow: -3px 3px 10px #000;
	text-shadow:-3px 3px 10px #000;
	
	

     transition: 1s;
     -webkit-transition:1s;
     -o-transition:2s;
     -moz-transition:2s;
	 -ms-transition:2s;
	 }
 .cinco a:before{
	 content:"";
	 background-image:url("../public/img/usuario.png");
	 
	 /*background-repeat:no-repeat;
	 background-position:20px -5px;*/
	 
	 display:block;
	 float:inherit;
	 width:128px;
	 height:110px;
	 margin:auto;
	 }
	 
	.cinco a:hover {
		 background-color:#367fa9;
		 width:300px;
		 }


.seis a{
	text-decoration:none;
	display:block;
	border:1px solid #367fa9;
	width: 250px;
	height: 135px;
	text-align:center;
	padding-top: 15px;
	margin:auto;
	
	background-color:#367fa9;
	color:#FFF;
	font-family:arial;
	box-shadow: -3px 3px 10px #000;
	text-shadow:-3px 3px 10px #000;
	
	

     transition: 1s;
     -webkit-transition:1s;
     -o-transition:2s;
     -moz-transition:2s;
	 -ms-transition:2s;
	 }
 .seis a:before{
	 content:"";
	 background-image:url("../public/img/producto.png");
	 
	 /*background-repeat:no-repeat;
	 background-position:20px -5px;*/
	 
	 display:block;
	 float:inherit;
	 width:128px;
	 height:110px;
	 margin:auto;
	 }
	 
	.seis a:hover {
		 background-color:#367fa9;
		 width:300px;
		 }
		 

</style>

</head>

<body>
<table align="center">
<tr>
<td><div class="uno">
<h4>
<a href="formapago">FORMAS DE PAGO</a>
</h3>
</div>
</td>
<td>
<div class="dos">
<h4>
<a href="movimiento">TIPOS DE MOVIMIENTO</a>
</h3>
</div>
</td>
<td>
<div class="tres">
<h4>
<a href="promocion">PROMOCIONES</a>
</h3>
</div>
</td>
</tr>
</table>
<table align="center">
<tr>
<td><div class="cuatro">
<h4>
<a href="sucursal">SUCURSALES</a>
</h3>
</div>
</td>
<td>
<div class="cinco">
<h4>
<a href="user">USUARIOS</a>
</h3>
</div>
</td>
<td>
<div class="seis">
<h4>
<a href="producto">PRODUCTOS</a>
</h3>
</div>
</td>
</tr>
</table>

</body>
@elseif((Auth::user()->AccesoUsuario)==2)

<style type="text/css">
.uno a{
	text-decoration:none;
	display:block;
	border:1px solid #367fa9;
	width: 300px;
	height: 135px;
	text-align:center;
	padding-top: 15px;
	margin:auto;
	
	background-color:#367fa9;
	color:#FFF;
	font-family:arial;
	box-shadow: -3px 3px 10px #000;
	text-shadow:-3px 3px 10px #000;
	
	

     transition: 1s;
     -webkit-transition:1s;
     -o-transition:2s;
     -moz-transition:2s;
	 -ms-transition:2s;
	 }
 .uno a:before{
	 content:"";
	 background-image:url("../public/img/rep%20ventas.png");
	 
	 /*background-repeat:no-repeat;
	 background-position:20px -5px;*/
	 
	 display:block;
	 float:inherit;
	 width:128px;
	 height:110px;
	 margin:auto;
	 }
	 
	.uno a:hover {
		 background-color:#367fa9;
		 width:350px;
		 }
		 
		 
		 .dos a{
	text-decoration:none;
	display:block;
	border:1px solid #367fa9;
	width: 300px;
	height: 135px;
	text-align:center;
	padding-top: 15px;
	margin:auto;
	
	background-color:#367fa9;
	color:#FFF;
	font-family:arial;
	box-shadow: -3px 3px 10px #000;
	text-shadow:-3px 3px 10px #000;
	
	

     transition: 1s;
     -webkit-transition:1s;
     -o-transition:2s;
     -moz-transition:2s;
	 -ms-transition:2s;
	 }
 .dos a:before{
	 content:"";
	 background-image:url("../public/img/almacen.jpg");
	 
	 /*background-repeat:no-repeat;
	 background-position:20px -5px;*/
	 
	 display:block;
	 float:inherit;
	 width:128px;
	 height:110px;
	 margin:auto;
	 }
	 
	.dos a:hover {
		 background-color:#367fa9;
		 width:350px;
		 }
	

</style>

</head>

<body>
<table align="center">
<tr>

<td><div class="uno">

<h4>
<a href="buscar_ventas/0/0/0/0">REPORTE VENTAS</a>

</h3>

</div>
</td>

<td>
<div class="dos">

<h4>
<a href="buscar_almacen/0/0/0">REPORTE DE ALMACENES</a>
</h3>
</div>
</td>

</tr>
</table>
</body>
@elseif((Auth::user()->AccesoUsuario)==3)

<style type="text/css">
.uno a{
	text-decoration:none;
	display:block;
	border:1px solid #367fa9;
	width: 300px;
	height: 135px;
	text-align:center;
	padding-top: 15px;
	margin:auto;
	
	background-color:#367fa9;
	color:#FFF;
	font-family:arial;
	box-shadow: -3px 3px 10px #000;
	text-shadow:-3px 3px 10px #000;
	
	

     transition: 1s;
     -webkit-transition:1s;
     -o-transition:2s;
     -moz-transition:2s;
	 -ms-transition:2s;
	 }
 .uno a:before{
	 content:"";
	 background-image:url("../public/img/generar%20bind%20card.jpg");
	 
	 /*background-repeat:no-repeat;
	 background-position:20px -5px;*/
	 
	 display:block;
	 float:inherit;
	 width:250px;
	 height:100px;
	 margin:auto;
	 }
	 
	.uno a:hover {
		 background-color:#367fa9;
		 width:350px;
		 }
		 
		 
		 .dos a{
	text-decoration:none;
	display:block;
	border:1px solid #367fa9;
	width: 300px;
	height: 135px;
	text-align:center;
	padding-top: 15px;
	margin:auto;
	
	background-color:#367fa9;
	color:#FFF;
	font-family:arial;
	box-shadow: -3px 3px 10px #000;
	text-shadow:-3px 3px 10px #000;
	
	

     transition: 1s;
     -webkit-transition:1s;
     -o-transition:2s;
     -moz-transition:2s;
	 -ms-transition:2s;
	 }
 .dos a:before{
	 content:"";
	 background-image:url("../public/img/bin%20card.png");
	 
	 /*background-repeat:no-repeat;
	 background-position:20px -5px;*/
	 
	 display:block;
	 float:inherit;
	 width:250px;
	 height:100px;
	 margin:auto;
	 }
	 
	.dos a:hover {
		 background-color:#367fa9;
		 width:350px;
		 }
		 
		 
		 .tres a{
	text-decoration:none;
	display:block;
	border:1px solid #367fa9;
	width: 300px;
	height: 135px;
	text-align:center;
	padding-top: 15px;
	margin:auto;
	
	background-color:#367fa9;
	color:#FFF;
	font-family:arial;
	box-shadow: -3px 3px 10px #000;
	text-shadow:-3px 3px 10px #000;
	
	

     transition: 1s;
     -webkit-transition:1s;
     -o-transition:2s;
     -moz-transition:2s;
	 -ms-transition:2s;
	 }
 .tres a:before{
	 content:"";
	 background-image:url("../public/img/stock%20proc.png");
	 
	 /*background-repeat:no-repeat;
	 background-position:20px -5px;*/
	 
	 display:block;
	 float:inherit;
	 width:250px;
	 height:100px;
	 margin:auto;
	 }
	 
	.tres a:hover {
		 background-color:#367fa9;
		 width:350px;
		 }
		 
		 .cuatro a{
	text-decoration:none;
	display:block;
	border:1px solid #367fa9;
	width: 300px;
	height: 135px;
	text-align:center;
	padding-top: 15px;
	margin:auto;
	
	background-color:#367fa9;
	color:#FFF;
	font-family:arial;
	box-shadow: -3px 3px 10px #000;
	text-shadow:-3px 3px 10px #000;
	
	

     transition: 1s;
     -webkit-transition:1s;
     -o-transition:2s;
     -moz-transition:2s;
	 -ms-transition:2s;
	 }
 .cuatro a:before{
	 content:"";
	 background-image:url("../public/img/movimiento%20bing%20card.jpg");
	 
	 /*background-repeat:no-repeat;
	 background-position:20px -5px;*/
	 
	 display:block;
	 float:inherit;
	 width:250px;
	 height:100px;
	 margin:auto;
	 }
	 
	.cuatro a:hover {
		 background-color:#367fa9;
		 width:350px;
		 }
		 
		 
</style>

</head>

<body>
<table align="center">
<tr>

<td><div class="uno">

<h4>
<a href="kardex/create">GENERAR KARDEX</a>

</h3>

</div>
</td>

<td>
<div class="dos">

<h4>
<a href="kardex">MOVIMIENTO DE BINCARD</a>
</h3>
</div>
</td>

<td>
<div class="tres">
<h4>
<a href="stock">STOCK DE PRODUCTOS</a>
</h4>
</div>
</td>

</tr>
</table>
<table align="center">
<tr>

<div class="cuatro">
<h4>
<a href="movimiento">TIPOS DE MOVIMIENTO</a>
</h3>
</div>

</tr>
</table>

</body>
@elseif((Auth::user()->AccesoUsuario)==4)

<style type="text/css">
.uno a{
	text-decoration:none;
	display:block;
	border:1px solid #367fa9;
	width: 250px;
	height: 135px;
	text-align:center;
	padding-top: 15px;
	margin:auto;
	
	background-color:#367fa9;
	color:#FFF;
	font-family:arial;
	box-shadow: -3px 3px 10px #000;
	text-shadow:-3px 3px 10px #000;
	
	

     transition: 1s;
     -webkit-transition:1s;
     -o-transition:2s;
     -moz-transition:2s;
	 -ms-transition:2s;
	 }
 .uno a:before{
	 content:"";
	 background-image:url("../public/img/stockkkk.png");
	 
	 /*background-repeat:no-repeat;
	 background-position:20px -5px;*/
	 
	 display:block;
	 float:none;
	 width:250px;
	 height:100px;
	 margin:auto;
	 
	 
	 }
	 
	.uno a:hover {
		 background-color:#367fa9;
		 width:300px;
		 }
		 
		 
		 .dos a{
	text-decoration:none;
	display:block;
	border:1px solid #367fa9;
	width: 250px;
	height: 135px;
	text-align:center;
	padding-top: 15px;
	margin:auto;
	
	background-color:#367fa9;
	color:#FFF;
	font-family:arial;
	box-shadow: -3px 3px 10px #000;
	text-shadow:-3px 3px 10px #000;
	
	

     transition: 1s;
     -webkit-transition:1s;
     -o-transition:2s;
     -moz-transition:2s;
	 -ms-transition:2s;
	 }
 .dos a:before{
	 content:"";
	 background-image:url("../public/img/registrar%20venta%202.jpg");
	 alignment-adjust:;
	 
	 /*background-repeat:no-repeat;
	 background-position:20px -5px;*/
	 
	 display:block;
	 float:inherit;
	 width:250px;
	 height:100px;
	 margin:auto;
	 
	 }
	 
	.dos a:hover {
		 background-color:#367fa9;
		 width:300px;
		 ;		 }
		 
		 
		 .tres a{
	text-decoration:none;
	display:block;
	border:1px solid #367fa9;
	width: 250px;
	height: 135px;
	text-align:center;
	padding-top: 15px;
	margin:auto;
	
	background-color:#367fa9;
	color:#FFF;
	font-family:arial;
	box-shadow: -3px 3px 10px #000;
	text-shadow:-3px 3px 10px #000;
	
	

     transition: 1s;
     -webkit-transition:1s;
     -o-transition:2s;
     -moz-transition:2s;
	 -ms-transition:2s;
	 }
 .tres a:before{
	 content:"";
	 background-image:url("../public/img/venta%20realizada.jpg");
	 
	 /*background-repeat:no-repeat;
	 background-position:20px -5px;*/
	 
	 display:block;
	 float:inherit;
	 width:250px;
	 height:100px;
	 margin:auto;
	 
	 }
	 
	.tres a:hover {
		 background-color:#367fa9;
		 width:300px;
		 }
		 
		 .cuatro a{
	text-decoration:none;
	display:block;
	border:1px solid #367fa9;
	width: 250px;
	height: 135px;
	text-align:center;
	padding-top: 15px;
	margin:auto;
	
	background-color:#367fa9;
	color:#FFF;
	font-family:arial;
	box-shadow: -3px 3px 10px #000;
	text-shadow:-3px 3px 10px #000;
	
	

     transition: 1s;
     -webkit-transition:1s;
     -o-transition:2s;
     -moz-transition:2s;
	 -ms-transition:2s;
	 }
 .cuatro a:before{
	 content:"";
	 background-image:url("../public/img/forma%20de%20pago.png");
	 
	 /*background-repeat:no-repeat;
	 background-position:20px -5px;*/
	 
	 display:block;
	 float:inherit;
	 width:128px; /*250*/
	 height:110px; /*100*/
	 margin:auto;
	 
	 }
	 
	.cuatro a:hover {
		 background-color:#367fa9;
		 width:300px;
		 }
		 
		 
		 
		 .cinco a{
	text-decoration:none;
	display:block;
	border:1px solid #367fa9;
	width: 250px;
	height: 135px;
	text-align:center;
	padding-top: 15px;
	margin:auto;
	
	background-color:#367fa9;
	color:#FFF;
	font-family:arial;
	box-shadow: -3px 3px 10px #000;
	text-shadow:-3px 3px 10px #000;
	
	

     transition: 1s;
     -webkit-transition:1s;
     -o-transition:2s;
     -moz-transition:2s;
	 -ms-transition:2s;
	 }
 .cinco a:before{
	 content:"";
	 background-image:url("../public/img/promocion.png");
	 
	 /*background-repeat:no-repeat;
	 background-position:20px -5px;*/
	 
	 display:block;
	 float:inherit;
	 width:128px;
	 height:110px;
	 margin:auto;
	 }
	 
	.cinco a:hover {
		 background-color:#367fa9;
		 width:300px;
		 
		 }


</style>

</head>

<body>
<table align="center">
<tr>

<td align="center"><div class="uno">

<h4>
<a href="stockalmacen">VERIFICAR STOCK</a>

</h3>

</div>
</td>

<td align="center">
<div class="dos">

<h4>
<a href="venta/create">REGISTRAR VENTA</a>
</h3>
</div>
</td>

</tr>
</table>
<table align="center">
<tr>
<div class="tres">
<h4>
<a href="venta">VENTA REALIZADAS</a>
</h3>
</div>
</tr>
</table>

<table align="center">
<tr>
<td>
<div class="cuatro">
<h4>
<a href="formapago">FORMAS DE PAGO</a>
</h3>
</div>
</td>
<td>
<div class="cinco">
<h4>
<a href="promocion">PROMOCIONES</a>
</h3>
</div>
</td>
</tr>
</table>

</body>
@endif
				
			</div>
		</div>
	</div>
@endsection
