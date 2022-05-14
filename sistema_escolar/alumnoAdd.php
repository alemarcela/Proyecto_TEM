<?php
	require_once __DIR__ . '/vendor/autoload.php';
	$nombreU = $_POST["nombresU"];
	$apellidoU = $_POST["apellidosU"];
	$fechaU = $_POST["fechaU"];
	$telefonoU = $_POST["telefonoU"];
	$sexoU = $_POST["sexoUsu"];
	$codigoUsuario = $_POST['contador'];


	$depaUsua = $_POST["dep"];
	$munUsua = $_POST["mun"];
	$caseUsua = $_POST["case"];
	$direcUsua = $_POST["direccion"];
	

	$usuario_ = new MongoDB\Client("mongodb://localhost:27017");
	$collection = $usuario_->escuela->alumnos;
	//$collection = (new MongoDB\Client)->escuela->usuario;
	$collection1 = $usuario_->escuela->residenciaAlumnos;
	
	
	//$collection1 = (new MongoDB\Client)->escuela->residenciaUsuario;
	//$collection2 = (new MongoDB\Client)->escuela->grados;

	$codU = strval($codigoUsuario);
	$nuevoCod= "00000" . $codU;




	$collection->insertOne(array(
		'codigoUsuario' => $nuevoCod,
     	'nombre' => $nombreU,
     	'apellido' => $apellidoU,
     	'fechaNacimiento' => $fechaU,
		'telefono' => $telefonoU,
		'sexo' => $sexoU,
		'tipoUsuario' => $tipoUsua
	));

	$collection1->insertOne(array(
			'codigoUsuario' => $nuevoCod,
			'departamento' => $depaUsua,
			'municipo' => $munUsua,
			'caserio' => $caseUsua,
			'direccion'=> $direcUsua
		));


	header("Location:alumnos.php");
?>