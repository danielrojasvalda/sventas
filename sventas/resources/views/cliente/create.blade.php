@extends('layouts.app')
@section('main-content')

	<div class="container spark-screen">
	<div class="row">
	<div class="col-md-7 col-md-offset-2">
	<div class="panel panel-primary">
	<div class="panel-heading"><center><h4><b>REGISTRAR CLIENTE <!--<img src="../../public/img/cliente-logo.png" alt="" width="80">--></b></h4></center></div>
	
	{!!Form::open(['route' => 'cliente.store', 'method' => 'POST'])!!}

   <div class="panel-body"> 	   
  	  	
	<div class="form-horizontal has-danger">
                {!! Form::label(' Nombre Completo :: ') !!}
                <input class="form-control" placeholder="Nombre del Cliente" type="text" name="NombreCliente" required="required">
        </div>
        <p>
	<div class="form-inline">	
		<div class="form-horizontal">
                {!! Form::label('NIT / Cédula de Identidad') !!}
                <input class="form-control" placeholder="NIT / C.I." type="text" name="NitCi" required="required">
    	</div>
  	</div>
   <p>
   <div class="form-group">
   	<label>Tipo de Cliente :: </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   	<label><input type="radio" name="TipoCliente" value="JURIDICO"> Jurídico</label>
   	<label><input type="radio" name="TipoCliente" value="PRIVADO"> Privado</label>
   	<label><input type="radio" name="TipoCliente" value="PUBLICO"> Público</label>
   </div>     
        
        <p>
	<div class="form-group">
                {!! Form::label('Dirección Cliente ::') !!}
                {!! Form::text('DirCliente', null, ['class' => 'form-control', 'placeholder' => 'Dirección del Cliente']) !!}
        </div>
 	<div class="form-inline">         
        <div class="form-group">
                {!! Form::label('Teléfono Cliente ::') !!}
                {!! Form::text('TelCliente', null, ['class' => 'form-control', 'placeholder' => 'Tel. o Móvil del Cliente']) !!}
        </div>
 	</div>
 	<p>
        
<center>
    	<!-- {!! Form::submit('Registrar', ['class' => 'btn btn-lg btn-primary']) !!} -->
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
