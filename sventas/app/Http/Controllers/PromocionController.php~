<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Promocion;
use App\Producto;
use App\Sucursal;
use App\User;
use Carbon\Carbon;

//this was for me for Datatables
//use App\DataTables\ProductosDataTable;

class PromocionController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
	$promociones = Promocion::All();
	return view('promocion.index', compact('promociones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		$productos = Producto::All();
		$sucursales = Sucursal::All();
		$users = User::All();
		return view('promocion.create', ['users' => $users, 'productos' => $productos, 'sucursales' => $sucursales]);   
   
   
        //
	//return view('promocion.create');
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

	Promocion::create([
		'NombreProm' => $request->NombreProm,
		'ProductoProm' => $request->ProductoProm,
		'PrecioProm' => $request->PrecioProm,
		'FechainicioProm' => $request->FechainicioProm,
		'FechafinProm' => $request->FechafinProm,
		'SucursalProm' => $request->SucursalProm,
		'RaProm' => $request->RaProm
	]);
	return redirect('promocion');
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
   	$promociones = Promocion::find($id);
		return view('promocion.edit', compact('promociones'));
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
        //This was created by ME
        $promociones = Promocion::find($id);
        $promociones->update($request->all());
        return redirect('promocion');
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
