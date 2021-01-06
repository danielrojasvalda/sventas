<!-- ***************************** MENU ***************************-->
<!-- Left side column. contains the logo and sidebar -->
<!-- <script src="https://use.fontawesome.com/d99a037d0a.js"></script> -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{asset('/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->name }}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('adminlte_lang::message.online') }}</a>
                </div>
            </div>
        @endif

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="{{ trans('adminlte_lang::message.search') }}..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

		<!-- INICIO DE MENUS ADMINISTRADOR -->
		@if((Auth::user()->AccesoUsuario)==1)

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">::: MENU PRINCIPAL :::</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="{{ url('home') }}"><i class='fa fa-home'></i><span> INICIO</span></a></li>
		<!-- ARBOL DE MENUS -->		
		
		<!-- VENTAS -->
		<li class="treeview">
			<a href="#"><i class='fa fa-sellsy'></i><span> VENTAS</span><i class="fa fa-angle-left pull-right"></i></a>
			<ul class="treeview-menu">
				<li><a href="{{ url('stock') }}" class="fa fa-circle-o"> Verificar Stock</a></li>
				<li><a href="{{ url('venta/create') }}" class="fa fa-circle-o"> Registrar Venta</a></li>
				<li><a href="{{ url('venta') }}" class="fa fa-circle-o"> Ventas Realizadas</a></li>
			</ul>
		</li>
		
		<!-- FORMAS DE PAGO -->
		<li class="treeview">
			<a href="#"><i class='fa fa-money'></i><span> PLANES DE PAGO</span><i class="fa fa-angle-left pull-right"></i></a>
			<ul class="treeview-menu">
				<li><a href="{{ url('formapago') }}" class="fa fa-circle-o"> Planes de Pago</a></li>
				<li><a href="{{ url('formapago/create') }}" class="fa fa-circle-o"> Registrar Planes de Pago</a></li>
	
				<li><a href="{{ url('promocion') }}" class="fa fa-circle-o"> Promociones</a></li>
				<li><a href="{{ url('promocion/create') }}" class="fa fa-circle-o"> Habilitar Promociones</a></li>
								
			</ul>
		</li>
		
		<!-- CLIENTES -->		
		<li class="treeview">
			<a href="#"><i class='fa fa-male'></i><span> CLIENTES</span><i class="fa fa-angle-left pull-right"></i></a>
			<ul class="treeview-menu">
				<li><a href="{{ url('cliente/create') }}" class="fa fa-circle-o"> Registrar a un Cliente</a></li>
				<li><a href="{{ url('cliente') }}" class="fa fa-circle-o"> Lista de Clientes</a></li>
			</ul>
		</li>		
				
		<!-- ALMACENES -->
		<li class="treeview">
			<a href="#"><i class='fa fa-share-square-o'></i><span> ALMACENES</span><i class="fa fa-angle-left pull-right"></i></a>
			<ul class="treeview-menu">
				<li><a href="{{ url('kardex/create') }}" class="fa fa-circle-o"> Generar Kardex</a></li>
				<li><a href="{{ url('kardex') }}" class="fa fa-circle-o"> Movimiento de Bincard</a></li>
			</ul>
		</li>
		<!-- TIPOS DE MOVIMIENTO -->
		<li class="treeview">
			<a href="#"><i class='fa fa-bars'></i><span> TIPOS DE MOVIMIENTO</span><i class="fa fa-angle-left pull-right"></i></a>
			<ul class="treeview-menu">
				<li><a href="{{ url('movimiento/create') }}" class="fa fa-circle-o"> Registrar</a></li>
				<li><a href="{{ url('movimiento') }}" class="fa fa-circle-o"> Listar tipo de Movimientos</a></li>
			</ul>
		</li>
		<!-- REPORTES -->
		<li class="treeview">
			<a href="#"><i class='fa fa-bars'></i><span> REPORTES</span><i class="fa fa-angle-left pull-right"></i></a>
			<ul class="treeview-menu">
				<li><a href="#" class="fa fa-circle-o"> Reporte de Ventas</a></li>
				<li><a href="#" class="fa fa-circle-o"> Reporte de Almacenes</a></li>
			</ul>
		</li>
		<!-- PRODUCTO -->
		<li class="treeview">
			<a href="#"><i class='fa fa-shopping-cart'></i><span> PRODUCTOS</span><i class="fa fa-angle-left pull-right"></i></a>
			<ul class="treeview-menu">
				<li><a href="{{ url('producto/create') }}" class="fa fa-circle-o"> Registrar Nuevo Item</a></li>
				<li><a href="{{ url('producto') }}" class="fa fa-circle-o"> Listar Items Disponibles</a></li>
			</ul>
		</li>

		<!-- SUCURSALES -->
		<li class="treeview">
			<a href="#"><i class='fa fa-map-marker'></i><span> SUCURSALES</span><i class="fa fa-angle-left pull-right"></i></a>
			<ul class="treeview-menu">
				<li><a href="{{ url('sucursal/create') }}" class="fa fa-circle-o"> Registrar Nueva Sucursal</a></li>
				<li><a href="{{ url('sucursal') }}" class="fa fa-circle-o"> Sucursales - QUIPUS</a></li>
			</ul>
		</li>
		<!-- USUARIOS -->
		<li class="header">::: USUARIOS  :::</li>
		<li><a href="{{ url('user/'. Auth::user()->id . '/edit') }}"><i class='fa fa-male'></i><span>MI PERFIL</span></a></li>
		<li><a href="{{ url('user') }}"><i class='fa fa-users'></i><span>LISTAR USUARIOS</span></a></li>
		<!-- <li><a href="{{ url('register') }}"><i class='fa fa-user-plus'></i><span>CREAR NUEVO PERFIL</span></a></li> -->
		
     </ul><!-- /.sidebar-menu -->
     
	<!-- FIN DE MENUS ADMINISTRADOR -->     
   
	@elseif((Auth::user()->AccesoUsuario)==2)   
   <!-- INICIO MENU GERENTES -->
		
	<!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">::: MENU PRINCIPAL :::</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="{{ url('home') }}"><i class='fa fa-home'></i><span> INICIO</span></a></li>
	<!-- ARBOL DE MENUS -->			
		
		<!-- REPORTES -->
		<li class="treeview">
			<a href="#"><i class='fa fa-bars'></i><span> REPORTES</span><i class="fa fa-angle-left pull-right"></i></a>
			<ul class="treeview-menu">
				<li><a href="{{ url('buscar_ventas/0/0/0/0') }}" class="fa fa-circle-o"> Reporte de Ventas</a></li>
				<li><a href="{{ url('buscar_almacen/0/0/0') }}" class="fa fa-circle-o"> Reporte de Almacenes</a></li>
			</ul>
		</li>
		<!-- PRODUCTO -->
		<li class="treeview">
			<a href="#"><i class='fa fa-shopping-cart'></i><span> PRODUCTOS</span><i class="fa fa-angle-left pull-right"></i></a>
			<ul class="treeview-menu">
				<li><a href="{{ url('producto/create') }}" class="fa fa-circle-o"> Registrar Nuevo Item</a></li>
				<li><a href="{{ url('producto') }}" class="fa fa-circle-o"> Listar Items Disponibles</a></li>
			</ul>
		</li>

		<!-- SUCURSALES -->
		<li class="treeview">
			<a href="#"><i class='fa fa-map-marker'></i><span> SUCURSALES</span><i class="fa fa-angle-left pull-right"></i></a>
			<ul class="treeview-menu">
				<li><a href="{{ url('sucursal/create') }}" class="fa fa-circle-o"> Registrar Nueva Sucursal</a></li>
				<li><a href="{{ url('sucursal') }}" class="fa fa-circle-o"> Sucursales - QUIPUS</a></li>
			</ul>
		</li>

		<!-- USUARIOS -->
		<li class="header">::: USUARIOS  :::</li>
		<li><a href="{{ url('user/'. Auth::user()->id . '/edit') }}"><i class='fa fa-male'></i><span>MI PERFIL</span></a></li>
		<li><a href="{{ url('user') }}"><i class='fa fa-users'></i><span>LISTAR USUARIOS</span></a></li>
		</ul><!-- /.sidebar-menu -->	     
    <!-- FIN MENU GERENTES -->
    
    @elseif((Auth::user()->AccesoUsuario)==3)   
   <!-- INICIO MENU LOGISTICA -->
   <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">::: MENU PRINCIPAL :::</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="{{ url('home') }}"><i class='fa fa-home'></i><span> INICIO</span></a></li>
	<!-- ARBOL DE MENUS -->
	<!-- ALMACENES -->
		<li class="treeview">
			<a href="#"><i class='fa fa-share-square-o'></i><span> ALMACENES</span><i class="fa fa-angle-left pull-right"></i></a>
			<ul class="treeview-menu">
				<li><a href="{{ url('kardex/create') }}" class="fa fa-circle-o"> Generar Kardex</a></li>
				<li><a href="{{ url('kardex') }}" class="fa fa-circle-o"> Movimiento de Bincard</a></li>
				<li><a href="{{ url('stock') }}" class="fa fa-circle-o"> Verificar Stock</a></li>
			</ul>
		</li>
		<!-- TIPOS DE MOVIMIENTO -->
		<li class="treeview">
			<a href="#"><i class='fa fa-bars'></i><span> TIPOS DE MOVIMIENTO</span><i class="fa fa-angle-left pull-right"></i></a>
			<ul class="treeview-menu">
				<li><a href="{{ url('movimiento') }}" class="fa fa-circle-o"> Listar tipo de Movimientos</a></li>
			</ul>
		</li>
		<!-- USUARIOS -->
		<li class="header">::: USUARIOS  :::</li>
		<li><a href="{{ url('user/'. Auth::user()->id . '/edit') }}"><i class='fa fa-male'></i><span>MI PERFIL</span></a></li>
		<li><a href="{{ url('user') }}"><i class='fa fa-users'></i><span>LISTAR USUARIOS</span></a></li>	
	
   		</ul><!-- /.sidebar-menu -->
	<!-- FIN MENU LOGISTICA -->
	@elseif((Auth::user()->AccesoUsuario)==4)
	<!-- INICIO MENU EJECUTIVOS VENTA -->
	<!-- Sidebar Menu -->
      	<ul class="sidebar-menu">
            <li class="header">::: MENU PRINCIPAL :::</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="{{ url('home') }}"><i class='fa fa-home'></i><span> INICIO</span></a></li>
            <!-- ARBOL DE MENUS -->
			<!-- VENTAS -->
		<li class="treeview">
			<a href="#"><i class='fa fa-sellsy'></i><span> VENTAS</span><i class="fa fa-angle-left pull-right"></i></a>
			<ul class="treeview-menu">
				<li><a href="{{ url('stockalmacen') }}" class="fa fa-circle-o"> Verificar Stock</a></li>
				<!-- <li><a href="{{ url('solproducto') }}" class="fa fa-circle-o"> Solicitar Producto</a></li> -->
				<li><a href="{{ url('venta/create') }}" class="fa fa-circle-o"> Registrar Venta</a></li>
				<li><a href="{{ url('venta') }}" class="fa fa-circle-o"> Ventas Realizadas</a></li>
			</ul>
		</li>
		<!-- FORMAS DE PAGO -->
		<li class="treeview">
			<a href="#"><i class='fa fa-money'></i><span> PLANES DE PAGO</span><i class="fa fa-angle-left pull-right"></i></a>
			<ul class="treeview-menu">
				<li><a href="{{ url('formapago') }}" class="fa fa-circle-o"> Planes de Pago</a></li>
				<li><a href="{{ url('formapago/create') }}" class="fa fa-circle-o"> Registrar Planes de Pago</a></li>
				<li><a href="{{ url('promocion') }}" class="fa fa-circle-o"> Promociones</a></li>
			</ul>
		</li> 
		
		<!-- CLIENTES -->		
		<li class="treeview">
			<a href="#"><i class='fa fa-male'></i><span> CLIENTES</span><i class="fa fa-angle-left pull-right"></i></a>
			<ul class="treeview-menu">
				<li><a href="{{ url('cliente/create') }}" class="fa fa-circle-o"> Registrar a un Cliente</a></li>
				<li><a href="{{ url('cliente') }}" class="fa fa-circle-o"> Lista de Clientes</a></li>
			</ul>
		</li>
		
		<!-- USUARIOS -->
		<li class="header">::: USUARIOS  :::</li>
		<li><a href="{{ url('user/'. Auth::user()->id . '/edit') }}"><i class='fa fa-male'></i><span>MI PERFIL</span></a></li> 
		<!-- <li><a href="{{url('user/password')}}">Cambiar mi password</a></li> -->
		<li><a href="{{ url('user') }}"><i class='fa fa-users'></i><span>LISTAR USUARIOS</span></a></li>			
				           
      	</ul><!-- /.sidebar-menu -->
	
	<!-- FIN MENU EJECUTIVOS VENTA -->
	
	
		    
    @endif      
    </section>
    <!-- /.sidebar -->
</aside>
