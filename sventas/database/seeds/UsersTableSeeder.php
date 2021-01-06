<?php

use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder {
	public function run()
	{
		User::create([
			'NombreUsuario' => 'Danny Grovers Tito Laura',
			'PassUsuario' => Hash::make('secreto'),
			'CargoUsuario' => 'Desarrollo de Imagenes',
			'CiUsuario' => '5974530',
			'CelUsuario' => '67144483',
			'EmailUsuario' => 'danny.tito@quipus.gob.bo',
			'IdSucursal' => '1',
			'AccesoUsuario' => '1'
		]);
	}
}
?>
