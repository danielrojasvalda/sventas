<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
	    return view('auth/login');
//	return view('home');
});

Route::get('/formapago', function() {
	return view('formapago/index');
});

Route::get('/solproducto', function() {
	return view('solproducto/index');
});	

Route::get('/registroventa', function() {
	return view('registroventa/index');
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();
    Route::get('/admin', 'HomeController@getIndex');
});


//ESTE ULTIMO PARA LOS GRAFICOS


Route::resource('sucursal', 'SucursalController');
Route::resource('producto', 'ProductoController'); //REGISTRAR PRODUCTO
Route::resource('movimiento', 'MovimientoController');
Route::resource('kardex', 'KardexController');
Route::resource('temporal', 'TemporalController');
//NUEVO
Route::resource('user', 'UserController');
//PRUEBA
Route::get('user/password', 'UserController@password');
Route::post('user/updatepassword', 'UserController@updatePassword');
//FIN PRUEBA
Route::resource('cliente', 'ClienteController');
Route::resource('formapago', 'FormapagoController');
Route::resource('stock', 'StockController');
Route::resource('stockalmacen', 'StockalmacenController');
Route::resource('venta', 'VentaController');
Route::resource('chart', 'ChartController');
//ROUTE
Route::resource('reporteproducto', 'ReporteproductoController');
Route::resource('promocion', 'PromocionController');
Route::resource('reporteventas', 'ReporteventasController');
Route::resource('reportealmacenes', 'ReportealmacenesController');
//PROPUESTA PARA LOS CONTROLADORES
//Route::controllers([
//	'users' => 'UsersController',
//]);

//PARA LOS FILTROS
//este es un anterior
//Route::get('buscar_ventas/{sucursal}/{dato?}', 'ReporteventasController@buscar_ventas');
Route::get('buscar_ventas/{sucursal}/{dato?}/{fechaini?}/{fechafin?}', 'ReporteventasController@buscar_ventas');
Route::get('buscar_almacen/{item}/{fechaini?}/{fechafin?}', 'ReportealmacenesController@buscar_almacen');
//Route::get('buscar_usuarios/{pais}/{dato?}', 'UsuariosController@buscar_usuarios');

