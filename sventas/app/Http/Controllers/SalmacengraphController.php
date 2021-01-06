<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
//use App\Stock;
use App\Kardex;
use App\Producto;
use App\Sucursal;
use App\Movimiento;
use App\User;
use DB;

class SalmacengraphController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		//Identificar Sucursal del Usuario que consulta		
		//$kardexs = DB::table('kardex')->get();
		//$var0 = Auth:user();
		$var1 = DB::table('kardex')->select(	
		//$var0 = Auth::user()->IdSucursal
			'ItemProducto as Producto',
			
			//'ObsProducto as Descripcion',
			 //'PrecioProducto as Precio',
			 
			'NroSucursal as Sucursal', 
			DB::Raw('SUM(CASE WHEN ObsMovimiento = "INGRESO" THEN KCantidad ELSE -KCantidad END) AS Stock'),
		//	'StockidealProducto as StockIdeal',
		//	'StockminimoProducto as StockMinimo'
			)
				->join('sucursal', 'kardex.KSucursal', '=', 'sucursal.id')
				->join('producto', 'kardex.KProducto', '=', 'producto.id')
				//nuevo
				->join('movimiento', 'kardex.KMovimiento', '=', 'movimiento.id')
				->where('kardex.KSucursal', auth()->user()->IdSucursal)
				->where('kardex.KProducto', 2)
									
				//->where('id', $venta->VFormapago)
				->groupBy('ItemProducto', 'NroSucursal')
				->get(); 
		//return $var1;
		foreach($var1 as $var11){
			$arreglo = $var11 -> Stock;
			
		}
		//return $arreglo;
		//return view('stock.index', compact('var1'));
		return view('salmacengraph.index', ['var1' => $var1, 'arreglo' => $arreglo]);
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
