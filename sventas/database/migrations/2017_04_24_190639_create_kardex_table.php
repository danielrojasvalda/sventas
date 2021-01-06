<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKardexTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kardex', function (Blueprint $table) {
            $table->increments('id');
		$table->integer('producto_id')->unsigned();
		$table->foreign('producto_id')->references('id')->on('producto');
		$table->integer('users_id')->unsigned();
		$table->foreign('users_id')->references('id')->on('users');
		$table->integer('sucursal_id')->unsigned();
		$table->foreign('sucursal_id')->references('id')->on('sucursal');
		$table->integer('movimiento_id')->unsigned();
		$table->foreign('movimiento_id')->references('id')->on('movimiento');
		$table->date('FechaKardex');
		$table->integer('CantidadKardex');
		$table->string('RefKardex', 32);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('kardex');
    }
}
