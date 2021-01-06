<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Cliente;
use Session;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$clientes = Cliente::All();

		//return Datatables::eloquent(Sucursal::query())->make(true);

		return view('cliente.index', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        
	return view('cliente.create');
	
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

		Cliente::create([
		'NombreCliente' => $request->NombreCliente,
		'TipoCliente' => $request->TipoCliente,
		'NitCi' => $request->NitCi,
		'DirCliente' => $request->DirCliente,
		'TelCliente' => $request->TelCliente
		]);
		Session::flash('save', 'Se ha guardado correctamente');
		//return redirect('cliente');
		return redirect('venta/create');
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
        $clientes = Cliente::find($id);
			return view('cliente.edit', compact('clientes'));
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
        $clientes = Cliente::find($id);
        $clientes->update($request->all());
        Session::flash('update', 'Se ha actualizado correctamente');
        return redirect('cliente');
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