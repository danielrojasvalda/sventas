<!-- Main Header -->
<header class="main-header">

    <!-- Logo -->
    <a href="{{ url('/home') }}" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels 
        <span class="logo-mini"><b>Sys</b>Ventas ver1.0</span> 
	-->

        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Sys</b>Ventas <small>ver1.0</small></span>
    </a>

    <!-- Header Navbar -->
   <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">{{ trans('adminlte_lang::message.togglenav') }}</span>
	<!--<img src="{{ asset('/img/left.png') }}" />-->
        </a>
	<!-- MENU REPORTES ALMACENES VENTAS
	<nav class="navbar" navbar-static-stop>
		<div class="collapse navbar-collapse" id="navbar-collapse">
			<ul class="nav navbar-nav">
				<li class="active"><a href="#">Link<span class="sr-only">(current)</span></a></li>
			</ul>
		</div>
	</nav>
-->
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                


              

           
                @if (Auth::guest())
                    <li><a href="{{ url('/register') }}">Registrarse</a></li>
                    <li><a href="{{ url('/login') }}">Acceder</a></li>
                @else
                    <!-- User Account Menu -->
                    <li class="dropdown user user-menu">
                        <!-- Menu Toggle Button -->
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <!-- The user image in the navbar-->
                            <img src="{{asset('/img/user2-160x160.jpg')}}" class="user-image" alt="User Image"/>
                            <!-- hidden-xs hides the username on small devices so only the image appears. -->
                            <span class="hidden-xs">{{ Auth::user()->name }}</span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- The user image in the menu -->
                            <li class="user-header">
                                <img src="{{asset('/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image" />
                                <p>
                                    {{ Auth::user()->name }}
                                    <small>{{ Auth::user()->email }}</small>
                                </p>
                            </li>
                            <!-- Menu Body
                            <li class="user-body">
											                                
                                <div class="col-xs-4 text-center">
                                    <a href="#">{{ trans('adminlte_lang::message.followers') }}</a>
                                </div>
                                
                                <div class="col-xs-4 text-center">
                                    <a href="#">{{ trans('adminlte_lang::message.sales') }}</a>
                                </div>
										                                
                                <div class="col-xs-4 text-center">
                                    <a href="#">{{ trans('adminlte_lang::message.friends') }}</a>
                                </div>
                                
                            </li>
                            -->
		
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="{{ url('user/'. Auth::user()->id . '/edit') }}" class="btn btn-info btn-flat"> Mi Perfil</a>
                                </div>
										<!--                                
                                <div class="pull-center">
                                		<a href="#" class="btn btn-default btn-flat">Ventas</a>
                                </div>
                                -->
                                <div class="pull-right">
                                    <a href="{{ url('/logout') }}" class="btn btn-info btn-flat">Desconectarme</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                @endif

            
            </ul>
        </div>
    </nav>
</header>
