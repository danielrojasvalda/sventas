<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use App\Kardex;
use App\Producto;
use App\Sucursal;
use App\Movimiento;
use App\User;
use App\Venta;
use DB;

class StockalmacenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		
	$var1 = DB::table('kardex')->select(
			//'id',			
			'KSucursal',
			'NroSucursal',
			'KProducto',
			'ItemProducto',
			'ObsProducto',
			'PrecioProducto',
			DB::Raw('
				SUM(CASE WHEN movimiento.ObsMovimiento = "SALIDA" THEN kardex.KCantidad END) 
				- (select SUM(VCantidad) from venta where VSucursal = kardex.KSucursal and VProducto = kardex.KProducto) AS Stock
			'),
			'StockidealProducto',
			'StockminimoProducto',			
			DB::Raw('COUNT(1) AS Reg')
		)
		->join('movimiento', 'kardex.KMovimiento', '=', 'movimiento.id')
		->join('sucursal', 'kardex.KSucursal', '=', 'sucursal.id')
		->join('producto', 'kardex.KProducto', '=', 'producto.id')
		->where('kardex.KSucursal', auth()->user()->IdSucursal)
		->groupBy(
			'KSucursal',
			'NroSucursal',
			'KProducto',
			'ItemProducto'
		)->get();		
		//return $var1;	
				return view('stockalmacen.index', ['var1' => $var1]);								 
    }
		

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
	//return view('stock.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
//	return "Hola Mundo store";
//	return $request;
/*
		'DptoSucursal' => $request->DptoSucursal,
		Sucursal::create([
		'CiudadSucursal' => $request->CiudadSucursal,
		'DirSucursal' => $request->DirSucursal,
		'TelSucursal' => $request->TelSucursal
	]);
	return redirect('sucursal');
*/
	}
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
