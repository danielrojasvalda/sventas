@extends('layouts.auth')

@section('htmlheader_title')
    Register
@endsection

@section('content')

    <body class="hold-transition register-page">
    <div class="register-box">
        <div class="register-logo">
            <a href="{{ url('/home') }}"><b>Sys</b>Ventas</a>
        </div>

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> {{ trans('adminlte_lang::message.someproblems') }}<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="register-box-body">
            <p class="login-box-msg">{{ trans('adminlte_lang::message.registermember') }}</p>
            <form action="{{ url('/register') }}" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group has-feedback">
                    <input type="text" class="form-control" placeholder="Nombre Completo" name="name" value="{{ old('name') }}"/>
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>

		<div class="form-group has-feedback">
			<input type="text" class="form-control" placeholder="Cargo Funcionario" name="CargoUsuario" value="">
			<span class="glyphicon glyphicon-user form-control-feedback"></span>
		</div>

		<div class="form-group has-feedback">
			<input type="text" class="form-control" placeholder="Cédula de Identidad" name="CiUsuario" value="">
			<span class="glyphicon glyphicon-user form-control-feedback"></span>
		</div>

		<div class="form-group has-feedback">
			<input type="text" class="form-control" placeholder="Móvil" name="CelUsuario" value="">
			<span class="glyphicon glyphicon-user form-control-feedback"></span>
		</div>

		<div class="form-group has-feedback">
       	<input type="email" class="form-control" placeholder="Correo Electrónico" name="email" value="{{ old('email') }}"/>
       	<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>


		<div class="form-group has-feedback">
			<input type="text" class="form-control" placeholder="Sucursal" name="IdSucursal" value=""/>
			<span class="glyphicon glyphicon-user form-control-feedback"></span>
		</div>
		
		<div class="form-group has-feedback">
		<label>Otorgar Acceso</label>
			<select name="AccesoUsuario">				
				<option value="4">4</option>
				<option value="3">3</option>
				<option value="2">2</option>
				<option value="1">1</option>
			</select>		
		</div>		
				
		<!-- TESTING GENERAR PASSWORD POR DEFECTO -->
		<input type="hidden" class="form-control" placeholder="{{ trans('adminlte_lang::message.password') }}" name="password" value="quipus"/>
		<input type="hidden" class="form-control" placeholder="{{ trans('adminlte_lang::message.retrypepassword') }}" name="password_confirmation" value="quipus"/>

<!--
		
		<div class="form-group has-feedback">
      	<input type="password" class="form-control" placeholder="{{ trans('adminlte_lang::message.password') }}" name="password"/>
       	<span class="glyphicon glyphicon-lock form-control-feedback"></span>
   	</div>

    	<div class="form-group has-feedback">
    		<input type="password" class="form-control" placeholder="{{ trans('adminlte_lang::message.retrypepassword') }}" name="password_confirmation"/>
     		<span class="glyphicon glyphicon-log-in form-control-feedback"></span>
    	</div>
    	
-->

                <div class="row">
                    
						<!--                    
                    <div class="col-xs-1">
                        <label>
                            <div class="checkbox_register icheck">
                                <label>
                                    <input type="checkbox" name="terms">
                                </label>
                            </div>
                        </label>
                    </div>
                    -->
                    <!-- /.col -->
<!-- ESTOY DE ACUERDO CON LAS
                    <div class="col-xs-6">
                         
                        <div class="form-group">
                            <button type="button" class="btn btn-block btn-flat" data-toggle="modal" data-target="#termsModal">aaa{{ trans('adminlte_lang::message.terms') }}</button>
                        </div>
                    </div> col -->
                    
                        <center><button type="submit" class="btn btn-lg btn-primary">Registrar Usuario</button></center>
                    
                </div>
            </form>

            @include('auth.partials.social_login')

            <center><a href="{{ url('/login') }}" class="text-center">Listar Usuarios</a></center>
        </div><!-- /.form-box -->
    </div><!-- /.register-box -->
<!--
    @include('layouts.partials.scripts_auth')

    @include('auth.terms')

    <script>
        $(function () {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' // optional
            });
        });
    </script>
-->
</body>

@endsection
