<?php
	require_once __DIR__ . '/vendor/autoload.php';
	//Capturamos los datos del formulario matricula
	$nombreAl = $_POST["nombresA"];
	$apellidoAl = $_POST["apellidosA"];
	$fechaAl = $_POST["fechaNA"];
	$sexoAl = $_POST["sexo"];

	$nombreR = $_POST["nombresR"];
	$apellidoR = $_POST["apellidosR"];
	$direccionR = $_POST["direccionR"];
	$telefonoR = $_POST["telefonoR"];
	$duiR = $_POST["duiR"];
	$sexoR = $_POST["sexoR"];
	$departamentoR = $_POST["deparR"];
	$municipioR = $_POST["municipioR"];
	$caserioR = $_POST["caserioR"];
	$direccionR = $_POST["direccionR"];

	$grado = $_POST["grado"];
	$seccion = $_POST["seccion"];
	$conteo = $_POST["contadorA"];
	
	$matricula_ = new MongoDB\Client("mongodb://localhost:27017");
	$collection =$matricula_->escuela->grados;
	$collection1 = $matricula_->escuela->matricula;
	$collection2 =$matricula_->escuela->responsable;
	$collection3 = $matricula_->escuela->residenciaAlumno;



	$dTo= array('grado'=>$grado,'seccion'=>$seccion);
	$aca=$collection->find($dTo);
	
	foreach ($aca as $uno) {
		$usua=$uno["codigoUsuario"];
	}

	$collection1->insertOne(array(
		'codigoAlumno' => $conteo,
		'nombre' => $nombreAl,
     	'apellido' => $apellidoAl,
     	'fechaNacimiento' => $fechaAl,
     	'sexo' =>$sexoAl,
     	'grado' => array(
     		'grado' => $grado,
     		'seccion'=> $seccion,
     		'codigo' => $usua
     	)
     	
	));

	$collection2->insertOne(array(
		'codigoAlumno' => $conteo,
		'nombre' => $nombreR,
 		'Apellido' => $apellidoR,
 		'direccion' => $direccionR,
 		'telefono' => $telefonoR,
 		'dui' => $duiR,
 		'sexo'=>$sexoR 
	));

	$collection3->insertOne(array(
		'codigoAlumno' => $conteo,
		'deartamento'=>$departamentoR,
		'municipio'=>$municipioR,
		'caserio'=>$caserioR,
		'direccion'=>$direccionR
	));

	header("Location:matricula.php");
?>
