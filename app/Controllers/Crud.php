<?php namespace App\Controllers;

	use App\Models\CrudModel;

class Crud extends BaseController
{
	public function index()
	{
		$Crud = new CrudModel();
		$datos = $Crud->listarNombres();

		$mensaje = session('mensaje');

		$data = [
					"datos" => $datos
				
				];

		return view('listado', $data);
	}





	public function crear() {
		$datos = [
					"nombre" => $_POST['nombre'],
					"apellido_paterno" => $_POST['paterno'],
					"apellido_materno" => $_POST['materno'],
					"fechaNac" => $_POST['fechanc'],
					"direccion" => $_POST['direccion'],
					"correo" => $_POST['mail'],
					"telefono" => $_POST['tel']
				];
		$Crud = new CrudModel();
		$respuesta = $Crud->insertar($datos);

		if ($respuesta > 0) {
			return redirect()->to(base_url().'/')->with('mensaje','1');
		} else {
			return redirect()->to(base_url().'/')->with('mensaje','0');
		}

	}


	public function obtenerNombre($idNombre) {
		$data = ["id_nombre" => $idNombre];
		$Crud = new CrudModel();
		$respuesta = $Crud->obtenerNombre($data);

		$datos = ["datos" => $respuesta];

		return view('actualizar', $datos);
	}



	















}


?> 