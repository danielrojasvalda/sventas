<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Kardex;
use App\Producto;
use App\Sucursal;
use App\Movimiento;
use App\User;
use Carbon\Carbon;
use App\DataTables\KardexDataTable;
use DB;
use Session;

class KardexController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
/*	          
		public function getIndex()
		{	
			return view('kardex.index');	
		}
		
		public function anyData() {
			return Kardex::of(Kardex::query())->make(true);
		}
 */      
    public function index()
    {
    	$kardexs = Kardex::All();
	return view('kardex.index', compact('kardexs'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
	//
		$productos = Producto::All();
		$sucursales = Sucursal::All();
		//$movimientos = Movimiento::All();
		$users = User::All();
		//return view('kardex.create', ['users' => $users, 'productos' => $productos, 'sucursales' => $sucursales, 'movimientos' => $movimientos]);
		//return view('kardex.create');
		
		//$kardexs = DB::table('kardex')->get();
		$var1 = DB::table('movimiento')->select(			
			'id',			
			'RazonMovimiento',			
			'ObsMovimiento' 
			) 				
			//	->join('movimiento', 'kardex.KMovimiento', '=', 'movimiento.id')			
			->where('movimiento.ObsMovimiento', '=', 'INGRESO')
			->groupBy('RazonMovimiento', 'ObsMovimiento')
			->get();
		$var2 = DB::table('movimiento')->select(
			'id',
			'RazonMovimiento',
			'ObsMovimiento'
		)
			->where('movimiento.ObsMovimiento', '=', 'SALIDA')
			->groupBy('RazonMovimiento', 'ObsMovimiento')
			->get();
		
		$var3 = DB::table('sucursal')->select(
			'id',
			'NroSucursal'
		)
			->where('sucursal.NroSucursal', '<>', 'ALMACEN')
			->groupBy('NroSucursal')
			->get();

		$var4 = DB::table('sucursal')->select(
                        'id',
                        'NroSucursal'
                )
                        ->where('sucursal.NroSucursal', '=', 'ALMACEN')
                        ->groupBy('NroSucursal')
                        ->get();

			return view('kardex.create', ['users' => $users, 'productos' => $productos, 'sucursales' => $sucursales, 'var1' => $var1, 'var2' => $var2, 'var3' => $var3, 'var4' => $var4]);
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

	Kardex::create([
		'KFecha' => $request->KFecha,
		'KUsuario' => $request->KUsuario,
		'KSucursal' => $request->KSucursal,
		'KMovimiento' => $request->KMovimiento,
		'KReferencia' => $request->KReferencia,
		'KProducto' => $request->KProducto,
		'KCantidad' => $request->KCantidad,
		'KSerie' => $request->KSerie
	]);
	 Session::flash('save', 'Se ha guardado correctamente');	
	return redirect('kardex');
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
