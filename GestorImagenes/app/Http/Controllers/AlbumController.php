<?php namespace GestorImagenes\Http\Controllers;

class AlbumController extends Controller {
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}
	public function getIndex()
	{
		return 'mostrando Albumnes del Usuario';
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function getCrearAlbum()
	{
		return 'formulario de crearAlbum';
	}

		public function postCrearAlbum()
	{
		return 'almacenando Album';
	}

		public function getActualizarAlbum()
	{
		return 'formulario de actualizar fotos';
	}

		public function postActualizarAlbum()
	{
		return 'actualizar Album';
	}

		public function getEliminarAlbum()
	{
		return 'formulario de Eliminar Album';
	}

		public function postEliminarAlbum()
	{
		return 'Eliminar Album';
	}



		public function missingMethod($parameters=array())
	{
		abort(404);
	}
	

}
