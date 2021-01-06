<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Kardex;
use App\Producto;
use App\Sucursal;
use App\Movimiento;
use DB;


class ReportealmacenesController extends Controller
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
		$productos = Producto::All();
		$kardexs = DB::table('kardex')->select(
			//'NroSucursal as Sucursal',
			'KFecha as Fecha',
			'ItemProducto as Producto',
			'KReferencia as Referencia',
			DB::Raw('CASE WHEN ObsMovimiento = "INGRESO" THEN KCantidad END AS StockIngreso' ),
			DB::Raw('CASE WHEN ObsMovimiento = "SALIDA" THEN KCantidad END AS StockEgreso' )
			//DB::Raw('SUM(CASE WHEN ObsMovimiento = "INGRESO" THEN KCantidad ELSE -KCantidad END) AS Stock')
			//DB::Raw('SUM(CASE WHEN ObsMovimiento = "INGRESO" THEN KCantidad ELSE -KCantidad END) AS Stock')
		)
		//->join('sucursal', 'kardex.KSucursal', '=', 'sucursal.id')		
		->join('producto', 'kardex.KProducto', '=', 'producto.id')
		->join('movimiento', 'kardex.KMovimiento', '=', 'movimiento.id')
		//->where('')
		//->groupBy('ItemProducto')
		->get();
		//return $kardexs;
		return view('reportealmacenes.index', ['kardexs' => $kardexs, 'productos' => $productos]);
		*/
    }
    
    public function buscar_almacen($item=0, $fechaini="", $fechafin="") 
	{
		$kardexs = Kardex::Busqueda($item, $fechaini, $fechafin)->select(
			'NroSucursal',
			'KFecha',
			'ItemProducto',
			'KReferencia',
			DB::Raw('CASE WHEN ObsMovimiento = "INGRESO" THEN KCantidad END AS StockIngreso' ),
			DB::Raw('CASE WHEN ObsMovimiento = "SALIDA" THEN KCantidad END AS StockEgreso' )
		)
		->join('sucursal', 'kardex.KSucursal', '=', 'sucursal.id')
		->join('producto', 'kardex.KProducto', '=', 'producto.id')
		->join('movimiento', 'kardex.KMovimiento', '=', 'movimiento.id')		
		->paginate(15);
		$productos = Producto::all();
		$productosel = $productos->find($item);
		return view('reportealmacenes/index')
		->with("productos", $productos)
		->with("kardexs", $kardexs);	 		
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
