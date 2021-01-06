<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kardex extends Model
{
    //
	protected $table = 'kardex';
	protected $fillable = ['KFecha', 'KUsuario', 'KSucursal', 'KMovimiento', 'KReferencia', 'KProducto', 'KCantidad', 'KSerie'];
	
	public function setRefKardexAttribute($date) {
		//		$this->attributes['published_at']=Carbon::createFromFormat('Y-m-d', $date);
		// 	take care of .. $this->attributes['RefKardex']=Carbon::createFromFormat('Y-m-d', $date);
		//  	FOR MIDNIGHT $this->attributes['RefKardex']=Carbon::parse($date);
	}
	public function scopeBusqueda($query, $item, $fechaini="", $fechafin="") 
	{

	if($item=="0") 
	{
		if($fechaini=="0") 
		{
			$resultado = $query;
		}
		else 
		{
			$resultado = $query->whereBetween('KFecha', [$fechaini, $fechafin]);
		}
	}
	else 
	{
		if($fechaini=="0")
		{
			$resultado = $query->where('KProducto', '=', $item);
		}
		else 
		{
			$resultado = $query->where('KProducto', '=', $item)
										->whereBetween('KFecha', [$fechaini, $fechafin]);
		}
	}
	return $resultado;
	
	}//fin funcion		
}
