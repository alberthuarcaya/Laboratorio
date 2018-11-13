<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use GestorImagenes\Album;
use GestorImagenes\Foto;
use GestorImagenes\Usuario;

class AlbumesSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$usuarios=Usuario::all();//eloquent
		$contador=0;
        foreach ($usuarios as $usuario)
	  {
	  	$cantidad=mt_rand(0,15);
	  	for ($i=0; $i < $cantidad; $i++){
	  		$contandor++;
	  		Album::create(
              [
             'nombre' => "Nombre Album$contador",
             'descripcion' => "Descripcion album$contador",
              'usuario_id' => $usuario->id

              ]
	  		);
	  	}


	  }
}


}


		/*
       
		DB::statement('SET FOREIGN_KEY_CHECKS = 0');

		Foto::truncate();
		Album::truncate();
		Usuario::truncate();

		$this->call('UsuariosSeeder');
		$this->call('AlbumesSeeder');
		$this->call('FotosSeeder');



		/*
		Model::unguard();

		// $this->call('UserTableSeeder');

*/


	

