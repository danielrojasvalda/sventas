<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Formapago;
use Session;

class FormapagoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$formapagos = Formapago::All();

		//return Datatables::eloquent(Sucursal::query())->make(true);

			return view('formapago.index', compact('formapagos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        
	return view('formapago.create');
	
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

		Formapago::create([
		'FormaPago' => $request->FormaPago,
		'Observacion' => $request->Observacion
		]);
			Session::flash('save', 'Se ha guardado correctamente'); 
		return redirect('formapago');
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
        $formapagos = Formapago::find($id);
			return view('formapago.edit', compact('formapagos'));
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
        $formapagos = Formapago::find($id);
        $formapagos->update($request->all());
        Session::flash('update', 'Se ha actualizado correctamente'); 
        return redirect('formapago');
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
