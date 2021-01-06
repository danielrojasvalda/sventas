@extends('layouts.app')
@section('main-content')

	<div class="container spark-screen">
	<div class="row">
	<div class="col-md-7 col-md-offset-2">
	<div class="panel panel-primary">
	<div class="panel-heading"><center><h4><b>REGISTRAR NUEVA FORMA DE PAGO  <!-- <img src="../../public/img/formapago-logo.png" alt="" width="80"> --></b></h4></center></div>	
	
	{!!Form::open(['route' => 'formapago.store', 'method' => 'POST'])!!}
	
	   <div class="panel-body"> 	
	
    	<div class="form-group">
        	{!! Form::label('Forma de Pago') !!}
        	<input class="form-control" placeholder="Forma de Pago" type="text" name="FormaPago" required="required">
    	</div>
	<div class="form-group">
                {!! Form::label('R.A./Observaciones') !!}
                <input class="form-control" placeholder="Comentarios" type="text" name="Observacion" required="required">
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
