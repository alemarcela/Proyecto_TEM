<?php 
	require_once __DIR__ . '/vendor/autoload.php';
	$lenguaje =$_POST["lengua"];
	$matematica =$_POST["matema"];
	$ciencia =$_POST["ciencia"];
	$sociales =$_POST["sociales"];
	$informatica =$_POST["informatica"];
	$ingles =$_POST["ingles"];
	$fisica =$_POST["fisica"];
	$artistica =$_POST["artistica"];

	$fecha = $_POST["calendario"];
	$trimestre = $_POST["trimestre"];
	$comentario = $_POST["comentario"];
	$cod = $_POST["codNotaAlumno"];

	$collection = (new MongoDB\Client)->escuela->notas;

	$collection->insertOne(array(
		'codigoAlumno' => $cod,
		'nLenguaje' => $lenguaje,
		'nMatematica' => $matematica,
		'nCiencia' => $ciencia,
		'nSociales' => $sociales,
		'nInformatica' => $informatica,
		'nIngles' => $ingles,
		'nFisia' => $fisica,
		'nArtistica' => $artistica,
		'comentario' => $comentario,
		'fechaAddNota'=> $fecha,
		'trimestre' => $trimestre

	));

	header("Location:alumnosDoc.php");

 ?>