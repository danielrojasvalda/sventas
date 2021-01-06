<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Datatables;
use DB;
use App\Kardex;
use App\Sucursal;

class PostController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function datatable()
    {
        return view('datatable');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function getPosts()
    {
/*    	
    	users = DB::table('kardex')->select('*');
        return Datatables::of($users)
            ->make(true);
*/
		
		$kardex = DB::table('kardex')->join('sucursal', 'kardex.KSucursal', '=', 'sucursal.id' )
				
		->select(['kardex.id', 'kardex.KFecha', 'kardex.KSucursal', 'kardex.KMovimiento', 'kardex.KReferencia', 'kardex.KProducto', 'kardex.KCantidad', 'kardex.KSerie']);
			return Datatables::of($kardex)
            //->editColumn('kardex.KFecha', '{!! str_limit($title, 60) !!}')
            //->editColumn('name', function ($model) {
             //   return \HTML::mailto($model->email, $model->name);
            
    //    return Datatables::of($users)
            ->make(true);
		
      
    }
}