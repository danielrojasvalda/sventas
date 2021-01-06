<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Venta;
use App\Sucursal;
use DB;


class ReporteventasController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	          
    public function index()
    {
/*    	
		THIS WORKING WELL WITHOUT FILTER    	
    	$sucursales = Sucursal::All();
		$ventas = DB::table('venta')
		->select(
			'NroSucursal as Sucursal',
			'FechaVenta as Fecha',
			'NroFactura as Factura',
			'NombreCliente as Cliente',	
			'VMediodepago as Medio',
			'VTipoventa as Tipo',
			DB::raw('SUM(Importe) as Importe')
		)
		->join('sucursal', 'venta.VSucursal', '=', 'sucursal.id')
		->join('cliente', 'venta.VCliente', '=', 'cliente.id')
		->groupBy('NroSucursal', 'FechaVenta', 'NroFactura', 'NombreCliente')
		->paginate(15);
		//->get();	
		return view('reporteventas.index', ['ventas' => $ventas, 'sucursales' => $sucursales]);
*/
		//->get();	
		
	//	return view('reporteventas.index', ['ventas' => $ventas, 'sucursales' => $sucursales]);
    }
    
	public function buscar_ventas($sucursal=0, $dato="", $fechaini="", $fechafin="") 
	{
		$ventas = Venta::Busqueda($sucursal, $dato, $fechaini, $fechafin)->select(
			'NroSucursal',
			'FechaVenta',
			'NroFactura',
			'NombreCliente',
			'Importe',
			'VMediodepago',
			'VTipoventa'
		)
		->join('sucursal', 'venta.VSucursal', '=', 'sucursal.id')
		->join('cliente', 'venta.VCliente', '=', 'cliente.id')		
		->paginate(15);
		$sucursales = Sucursal::all();
		$sucursalsel = $sucursales->find($sucursal);
		return view('reporteventas/index')
		->with("sucursales", $sucursales)
		->with("ventas", $ventas);	 		
	}    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
   {

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
