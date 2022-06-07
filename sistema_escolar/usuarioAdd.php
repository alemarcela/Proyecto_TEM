<?php
	require_once __DIR__ . '/vendor/autoload.php';
	$nombreU = $_POST["nombresU"];
	$apellidoU = $_POST["apellidosU"];
	$fechaU = $_POST["fechaU"];
	$duiU = $_POST["duiU"];
	$telefonoU = $_POST["telefonoU"];
	$nombreUsuario =$_POST["nombreUsu"];
	$contrasenaU = $_POST["contrasenaU"];
	$sexoU = $_POST["sexoUsu"];
	$tipoUsua = $_POST["tipoUsu"];
	$estadoUsua = $_POST["estadoUsu"];
	$codigoUsuario = $_POST['contador'];


	$depaUsua = $_POST["dep"];
	$munUsua = $_POST["mun"];
	$caseUsua = $_POST["case"];
	$direcUsua = $_POST["direccion"];
	
	$grado = $_POST["gradoU"];
	$seccion = $_POST["seccionU"];

	$usuario_ = new MongoDB\Client("mongodb://localhost:27017");
	$collection = $usuario_->escuela->usuario;
	//$collection = (new MongoDB\Client)->escuela->usuario;
	$collection1 = $usuario_->escuela->residenciaUsuario;
	$collection2 = $usuario_->escuela->grados;
	
	//$collection1 = (new MongoDB\Client)->escuela->residenciaUsuario;
	//$collection2 = (new MongoDB\Client)->escuela->grados;

	$codU = strval($codigoUsuario);
	$nuevoCod= "00000" . $codU;




	$collection->insertOne(array(
		'codigoUsuario' => $nuevoCod,
     	'nombre' => $nombreU,
     	'apellido' => $apellidoU,
     	'fechaNacimiento' => $fechaU,
     	'dui' => $duiU,
		'telefono' => $telefonoU,
		'nomUsuario'=> $nombreUsuario,
		'contrasena' => $contrasenaU,
		'sexo' => $sexoU,
		'tipoUsuario' => $tipoUsua,
		'estadoCivil' => $estadoUsua
	));

	$collection1->insertOne(array(
			'codigoUsuario' => $nuevoCod,
			'departamento' => $depaUsua,
			'municipo' => $munUsua,
			'caserio' => $caseUsua,
			'direccion'=> $direcUsua
		));

	$collection2->insertOne(array(
		'codigoUsuario' => $nuevoCod,
 		'grado'=>$grado,
 		'seccion'=>$seccion
     	));

	header("Location:usuario.php");
?>