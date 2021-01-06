<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    //
	protected $table = 'venta';
	protected $fillable = ['VUsuario', 'VSucursal', 'FechaVenta', 'NroFactura', 'VTipoventa', 'VFormapago', 'VMediodepago', 'VCliente', 'Importe', 'Obs', 'VProducto', 'VCantidad', 'VSerie'];
	
	public function scopeBusqueda($query, $sucursal, $dato="", $fechaini="", $fechafin="") 
	{
			
	if($sucursal==0)
	{
		if($dato=="0")
		{
			if($fechaini=="0")
			{
				$resultado = $query;							
			}
			else 
			{
				$resultado = $query->whereBetween('FechaVenta', [$fechaini, $fechafin]); 
			}
		}
		else 
		{
			if($fechaini=="0") 
			{
				$resultado = $query->where('VTipoventa', 'like', $dato);
			}
			else 
			{
				$resultado = $query->where('VTipoventa', 'like', $dato)
											->whereBetween('FechaVenta', [$fechaini, $fechafin]);
			}
		}
	}
	else 
	{
		if($dato=="0") 
		{
			if($fechaini=="0") 
			{
				$resultado = $query->where('VSucursal', '=', $sucursal);
			}
			else 
			{
				$resultado = $query->where('VSucursal', '=', $sucursal)
											->whereBetween('FechaVenta', [$fechaini, $fechafin]);							
			}
		}
		else 
		{
			if($fechaini=="0") 
			{
				$resultado = $query->where('VSucursal', '=', $sucursal)
											->where('VTipoventa', 'like', $dato);
			}
			else 
			{
				$resultado = $query->where('VSucursal', '=', $sucursal)
											->where('VTipoventa', 'like', $dato)
											->whereBetween('FechaVenta', [$fechaini, $fechafin]);
			}
		}
	}
	return $resultado;
}
}