<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldToUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            //
		$table->string('CargoUsuario', 32);
		$table->string('CiUsuario', 8);
		$table->string('CelUsuario', 10);
		$table->string('AccesoUsuario', 2);
		$table->integer('sucursal_id')->unsigned();
		$table->foreign('sucursal_id')->references('nrosucursal')->on('sucursal');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
