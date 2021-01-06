<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promocion extends Model
{
    //
	protected $table = 'promocion';
	protected $fillable = ['NombreProm', 'ProductoProm', 'PrecioProm', 'FechainicioProm', 'FechafinProm','SucursalProm','RaProm'];
}
