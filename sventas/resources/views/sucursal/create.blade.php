@extends('layouts.app')
@section('main-content')

	<div class="container spark-screen">
	<div class="row">
	<div class="col-md-7 col-md-offset-2">
	<div class="panel panel-primary">
	<div class="panel-heading"><center><h4><u><b>REGISTRAR NUEVA SUCURSAL<img src="../../public/img/logo-sucursal.png" alt="" width="50"></b></u></h4>
		
	</center></div>
	
	{!!Form::open(['route' => 'sucursal.store', 'method' => 'POST'])!!}

   <div class="panel-body"> 	
    	
		<div class="form-horizontal has-danger">
                {!! Form::label('Nro. de Sucursal ') !!}
                <input class="form-control" placeholder="Código de la Sucursal" type="text" name="NroSucursal" required="required">
        </div>	

		<div class="form-group">
			{!! Form::label('Departamento Sucursal') !!}
			{!!  Form::select('DptoSucursal', [null=> '-', 'La Paz' => 'La Paz', 'Cochabamba' => 'Cochabamba', 'Santa Cruz' => 'Santa Cruz', 'Chuquisaca' => 'Chuquisaca', 'Oruro' => 'Oruro', 'Potosi' => 'Potosi', 'Tarija' => 'Tarija', 'Beni' => 'Beni', 'Pando' => 'Pando'],  null, ['class' => 'form-control' ]) !!}
		</div>   
  	  	
	<div class="form-horizontal has-danger">
                {!! Form::label('Ciudad Sucursal ') !!}
                <input class="form-control" placeholder="Ciudad de la Sucursal" type="text" name="CiudadSucursal" required="required">
        </div>
	<div class="form-horizontal">
                {!! Form::label('Dirección Sucursal') !!}
                <input class="form-control" placeholder="Dirección de la Sucursal" type="text" name="DirSucursal">
        </div>
	<div class="form-group">
                {!! Form::label('Teléfono Sucursal') !!}
                <input class="form-control" placeholder="Teléfono de la Sucursal" type="text" name="TelSucursal">
        </div>  
        
	<center>
    	<input class="btn btn-lg btn-primary" type="submit" value="Registrar">
    	<input class="btn btn-lg btn-primary" type="reset" value="Borrar">
   </center>
	{!!Form::close()!!}
	</div>
	<center><a href="../home" class="btn btn-default btn-block" role="button">Volver al Menu</a></center>
	</div>
	</div>
	</div>
	</div>
@stop
