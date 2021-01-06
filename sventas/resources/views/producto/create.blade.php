@extends('layouts.app')
@section('main-content')

<div class="container spark-screen">
	<div class="row">
	<div class="col-md-7 col-md-offset-2">
	<div class="panel panel-primary">
	<div class="panel-heading"><center><h4><b>REGISTRAR NUEVO ITEM<img src="../../public/img/producto-logo.png" alt="" width="50"></b></h4></center></div>	
	{!!Form::open(['route' => 'producto.store', 'method' => 'POST'])!!}
	   <div class="panel-body"> 	
	  
		<div class="form-group">
			<label>Item Producto ::</label>
			<input class="form-control" placeholder="Item Producto" type="text" name="ItemProducto" required="required">
		</div>
		
		<div class="form-inline">
			<div class="form-group">			
				<label>Precio Prod. (Bs.) ::</label>
				<input class="form-control" placeholder="Precio Producto" type="text" pattern="[0-9]{1,}[.][0-9][0-9]" title="xxxx.xx (ej. 9323.90, 78.00, 2.30)" name="PrecioProducto" required>
			</div>
			<div class="form-group">
				<label>Categoria ::</label>
				<select class="form-control" name="ModeloProducto" required>
					<option>GENERAL</option>
					<option>PIEZAS Y PARTES</option>
				</select>				
			</div>	
		</div>
		<p>
		<div class="form-inline">
			<div class="form-group">
				<label>Stock Minimo ::</label>
				<input class="form-control" placeholder="Cantidad Mínima" type="text" pattern="[0-9]{1,}" title="solo números" name="StockminimoProducto">
			</div>
			<div class="form-group">
				<label>Stock Ideal ::</label>
				<input class="form-control" placeholder="Cantidad Ideal" type="text" pattern="[0-9]{1,}" title="solo números" name="StockidealProducto">
			</div>
		</div>
		<p>
		<div class="form-group">
			<label>Características del Producto ::</label>
			<textarea class="form-control" rows="5" placeholder="Hardware/Software del Equipo en detalle" name="ObsProducto" required="required"></textarea>
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
@stop
