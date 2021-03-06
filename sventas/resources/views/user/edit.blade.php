@extends('layouts.app')
@section('htmlheader_title')
    Register
@endsection

@section('main-content')

<script language="JavaScript" type="text/JavaScript">
function verif(passwords)
{	
	if (passwords.password.value==passwords.password_confirmation.value) 
	{ 
		//document.location.href="../../logout";
		//window.location.href="../../logout";		
		//alert('CONTRASEÑA CAMBIADA SATISFACTORIAMENTE');
		document.getElementById('cambiarpassword').disabled = false; 
		return true 
	}
	else 
	{ 
		//alert('LA CONTRASEÑA DEBE SER LA MISMA EN AMBOS CAMPOS'); 
		return false 
	}
}
function dirigir() {
	window.location.href="../../logout";
}
</script>


<div class="container spark-screen">
	<div class="row">
	<div class="col-md-7 col-md-offset-2">
	<div class="panel panel-primary">
		<div class="panel-heading"><center><h4><b>MI PERFIL</b></h4></center></div>
	<div class="panel-body">

	<div class="form-horizontal">
	
		<div class="form-group">
			<label class="control-label col-sm-4">NOMBRE COMPLETO :: </label>
			<div class="col-sm-7">
			<label class="text-info">{{ Auth::user()->name }}</label>
			</div>	
		</div>
		
		<div class="form-group">
			<label class="control-label col-sm-4">CORREO ELECTRONICO :: </label>
			<div class="col-sm-7">
			<label class="text-info">{{ Auth::user()->email }}</label>
			</div>
		</div>
		
		<div class="form-group">
			<label class="control-label col-sm-4">CARGO :: </label>
			<div class="col-sm-7">
			<label class="text-info">{{ Auth::user()->CargoUsuario }}</label>
			</div>
		</div>
		
		<div class="form-group">
			<label class="control-label col-sm-4">CEDULA DE IDENTIDAD :: </label>
			<div class="col-sm-7">
			<label class="text-info">{{ Auth::user()->CiUsuario }}</label>
			</div>
		</div>
		
		<div class="form-group">
			<label class="control-label col-sm-4">NRO. DE CELULAR :: </label>
			<div class="col-sm-7">
			<label class="text-info">{{ Auth::user()->CelUsuario }}</label>
			</div>
		</div>
	{!! Form::model($users, ['method' => 'PATCH', 'action' => ['UserController@update', $users->id], 'name' => 'passwords' ]) !!}
	<hr>
		<center>		
		<div class="input-group col-sm-7">
       	<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
      	<input type="password" class="form-control" placeholder="Introduzca la nueva contraseña" name="password"/>
   	</div>

    	<div class="input-group col-sm-7">
			<span class="input-group-addon"><i class="glyphicon glyphicon-log-in"></i></span>    		
    		<!-- <input type="password" class="form-control" placeholder="Repita la nueva contraseña" onchange="return(verif(this.form)); MM_validateForm()" name="password_confirmation"/> -->
    		<input type="password" class="form-control" placeholder="Repita la nueva contraseña" onkeyup="return(verif(this.form)); " name="password_confirmation"/>
    	</div>
    	</center>
	<p>
	<center>
    	<!-- {!! Form::submit('Cambiar la Contraseña', ['class' => 'btn btn-lg btn-primary']) !!} -->
    	<input class="btn btn-lg btn-primary" type="submit" value="Cambiar la contraseña" disabled="true" id="cambiarpassword" onclick="dirigir();">
	</center>
	
	{!!Form::close()!!}
</div>
	<p>
</div>	
	<center>
	<a href="../../home" class="btn btn-default btn-block" role="button">Volver al Menu</a>
	</center>
		 
	</div>
	</div>
	</div>
</div><!-- end container-->
@stop
