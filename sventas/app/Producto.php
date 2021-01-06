<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
  	// tabla producto
	protected $table = 'producto';
	// Este tipo de validación impide que se registre información que no cuente con los criterios definidos.
	// Los criterios fueron definidos en PHPMYADMIN required, unique, default
	protected $fillable = ['ItemProducto', 'PrecioProducto', 'StockminimoProducto','StockidealProducto','ObsProducto'];
}
