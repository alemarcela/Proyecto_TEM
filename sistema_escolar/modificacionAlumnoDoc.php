<?php 
	require_once __DIR__ . '/vendor/autoload.php';
	$id = $_POST["valor"];
	$codigoA = $_POST["codAlumno"];
	$fechaA = $_POST["fechaA"];

	$nombreA = $_POST["nombreR"];
	$apellidoA = $_POST["apellidoR"];
	$telefonoA = $_POST["telR"];

	$departamento = $_POST["depR"];
	$municipio = $_POST["munR"];
	$caserio = $_POST["caseR"];
	$direccion = $_POST["direcR"];

	$collection = (new MongoDB\Client)->escuela->matricula;
	$collection1 = (new MongoDB\Client)->escuela->responsable;
	$collection2 = (new MongoDB\Client)->escuela->residenciaAlumno;

	$condicion = array('_id' => new MongoDB\BSON\ObjectID($id));
	$nuevoDato = array('$set' => array(
		'fechaNacimiento' => $fechaA,
	));
	$collection->updateOne($condicion,$nuevoDato);

	$condicion1 = array('codigoAlumno' => $codigoA);
	$nuevoDato1 = array('$set' => array(
		'nombre' => $nombreA,
		'Apellido' => $apellidoA,
		'telefono' => $telefonoA
	));
	$collection1->updateOne($condicion1,$nuevoDato1);

	$condicion2 = array('codigoAlumno' => $codigoA);
	$nuevoDato2 = array('$set' => array(
		'deartamento' => $departamento,
		'municipio' => $municipio,
		'caserio' => $caserio,
		'direccion' => $direccion
	));
	$collection2->updateOne($condicion2,$nuevoDato2);

	header("Location:alumnosDoc.php");

 ?>
