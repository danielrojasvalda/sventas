<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{
    //
	protected $table = 'sucursal';
	protected $fillable = ['NroSucursal', 'DptoSucursal', 'CiudadSucursal', 'DirSucursal', 'TelSucursal'];
	/*
	public function () {
		return $this->hasMany('App\Venta', 'VSucursal', 'id');
	}
	*/
}
