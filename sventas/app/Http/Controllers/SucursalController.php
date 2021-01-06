<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Sucursal;

use Session;

class SucursalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$sucursales = Sucursal::All();

		//return Datatables::eloquent(Sucursal::query())->make(true);

			return view('sucursal.index', compact('sucursales'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        
	return view('sucursal.create');
	
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

		Sucursal::create([
		'NroSucursal' => $request->NroSucursal,		
		'DptoSucursal' => $request->DptoSucursal,
		'CiudadSucursal' => $request->CiudadSucursal,
		'DirSucursal' => $request->DirSucursal,
		'TelSucursal' => $request->TelSucursal
		]);
		Session::flash('save', 'Se ha guardado correctamente');
		return redirect('sucursal');
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
        //ESTO YO LO CREE
        //$sucursal = Sucursal::find($id);
        //SEGUNDA VERSION PARA EDITAR SUCURSAL
        $sucursales = Sucursal::find($id);
        
			return view('sucursal.edit', compact('sucursales'));
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
	//This was created by ME
        //before: public function update(Request $request, $id)
        $sucursales = Sucursal::find($id);
        $sucursales->update($request->all());
        Session::flash('update', 'Se ha actualizado correctamente'); 
        return redirect('sucursal');
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
