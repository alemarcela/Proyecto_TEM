<?php 
	require_once __DIR__ . '/vendor/autoload.php';
	$id = $_POST["valor"];
	$nombreU = $_POST["nombresU"];
	$apellidoU = $_POST["apellidosU"];
	$fechaU = $_POST["fechaU"];
	$duiU = $_POST["duiU"];
	$telefonoU = $_POST["telefonoU"];

	$collection = (new MongoDB\Client)->escuela->usuario;

	$condicion = array('_id' => new MongoDB\BSON\ObjectID($id));
	$nuevoDato = array('$set' => array(
		'nombre' => $nombreU,
		'apellido' =>$apellidoU,
		'fechaNacimiento' =>$fechaU,
		'telefono' => $telefonoU
	));
	$collection->updateOne($condicion,$nuevoDato);

	header("Location:usuario.php");

 ?>