<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Producto;

use Session;

//this was for me for Datatables
//use App\DataTables\ProductosDataTable;

class ProductoController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

	public function index()
  	{
		$productos = Producto::All();
		//->paginate(15);
		return view('producto.index', compact('productos'));
  	}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
	return view('producto.create');
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

	Producto::create([
		'ItemProducto' => $request->ItemProducto,
		'PrecioProducto' => $request->PrecioProducto,
		'ModeloProducto' => $request->ModeloProducto,
		'StockminimoProducto' => $request->StockminimoProducto,
		'StockidealProducto' => $request->StockidealProducto,
		'ObsProducto' => $request->ObsProducto,
	]);
	 
	Session::flash('save', 'Se ha guardado correctamente'); 
	 
	return redirect('producto');
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
   	$productos = Producto::find($id);
		return view('producto.edit', compact('productos'));
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
        $productos = Producto::find($id);
        $productos->update($request->all());
        Session::flash('update', 'Se ha actualizado correctamente'); 
        return redirect('producto');
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
