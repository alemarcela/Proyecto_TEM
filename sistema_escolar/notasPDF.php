<?php 
	require_once __DIR__ . '/vendor/autoload.php';

	$grados = (new MongoDB\Client)->escuela->grados;
	$usuario = (new MongoDB\Client)->escuela->usuario;
	$notas = (new MongoDB\Client)->escuela->notas;
	$alumno = (new MongoDB\Client)->escuela->matricula;

	$codAlumno = $_POST["codNotaAlumno"];
	$nana = $_POST["nombre"];
	$usua = $_POST["codUsuario"];

	$consultar = array('codigoUsuario' => $usua);
	$datosGrado = $grados->find($consultar);

	foreach ($datosGrado as $grado) {
		$grad = $grado["grado"];
		$sec = $grado["seccion"];
	}

	$consultar1 = array('codigoUsuario' => $usua);
	$datosUsuario = $usuario->find($consultar1);

	foreach ($datosUsuario as $usuari) {
		$nom = $usuari["nombre"]." ".$usuari["apellido"];
		$ape = $usuari["apellido"];
	}

	$mpdf = new \Mpdf\Mpdf();
	$mpdf->WriteHTML('<center><h1>Centro Escolar Republica de Alemania</h1></center>');
	$mpdf->WriteHTML("<h4>Reporte de notas de presente año lectivo.</h4>
			<h4>Datos Principales.</h4>
			<h5>Nombre del estudiante: $nana</h5>
			<h5>Grado: $grad</h5>
			<h5>Sección: $sec</h5>
			<h5>Docente: $nom</h5>
			<br>
		");
	$mpdf->WriteHTML('<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">');

	$nL3= "0";
    	$nM3="0" ;
    	$nC3= "0";
    	$nS3="0" ;
    	$nInfor="0" ;
    	$nIn3="0";
    	$nA3="0" ;
    	$nF3="0";

    	$nL2= "0";
    	$nM2="0" ;
    	$nC2= "0";
    	$nS2="0" ;
    	$nI2="0" ;
    	$nI2="0";
    	$nA2="0" ;
    	$nF2="0";

    	$nL= "0";
    	$nM="0" ;
    	$nC= "0";
    	$nS="0" ;
    	$nI="0" ;
    	$nI="0";
    	$nA="0" ;
    	$nF="0";

	$consulta2 = array('codigoAlumno'=>$codAlumno, 'trimestre'=>"Tercer Trimestre");
    $dataNotas2 = $notas->find($consulta2);
    foreach ($dataNotas2 as $key2 ) {
    	$nL3= $key2["nLenguaje"];
    	$nM3= $key2["nMatematica"];
    	$nC3= $key2["nCiencia"];
    	$nS3= $key2["nSociales"];
    	$nInfor= $key2["nInformatica"];
    	$nIn3= $key2["nIngles"];
    	$nA3= $key2["nArtistica"];
    	$nF3= $key2["nFisia"];
	}

	$consulta = array('codigoAlumno'=>$codAlumno, 'trimestre'=>"Primer Trimestre");
    $dataNotas = $notas->find($consulta);
    foreach ($dataNotas as $key ) {
    	$nL= $key["nLenguaje"];
    	$nM= $key["nMatematica"];
    	$nC= $key["nCiencia"];
    	$nS= $key["nSociales"];
    	$nI= $key["nInformatica"];
    	$nIn= $key["nIngles"];
    	$nA= $key["nArtistica"];
    	$nF= $key["nFisia"];
	}

	$consulta1 = array('codigoAlumno'=>$codAlumno, 'trimestre'=>"Segundo Trimestre");
    $dataNotas1 = $notas->find($consulta1);
    foreach ($dataNotas1 as $key1 ) {
    	$nL2= $key1["nLenguaje"];
    	$nM2= $key1["nMatematica"];
    	$nC2= $key1["nCiencia"];
    	$nS2= $key1["nSociales"];
    	$nI2= $key1["nInformatica"];
    	$nIn2= $key1["nIngles"];
    	$nA2= $key1["nArtistica"];
    	$nF2= $key1["nFisia"];
	}

	$suma1 = ((int)$nL + (int)$nL2 + (int)$nL3)/3;
	$suma2 = ((int)$nM + (int)$nM2 + (int)$nM3)/3;
	$suma3 = ((int)$nC + (int)$nC2 + (int)$nC3)/3;
	$suma4 = ((int)$nS + (int)$nS2 + (int)$nS3)/3;
	$suma5 = ((int)$nI + (int)$nI2 + (int)$nInfor)/3;
	$suma6 = ((int)$nIn + (int)$nIn2 + (int)$nIn3)/3;
	$suma7 = ((int)$nA + (int)$nA2 + (int)$nA3)/3;
	$suma8 = ((int)$nF + (int)$nF2 + (int)$nF3)/3;


	$sumaL = number_format($suma1,2,'.','');
	$sumaM = number_format($suma2,2,'.','');
	$sumaC = number_format($suma3,2,'.','');
	$sumaS = number_format($suma4,2,'.','');
	$sumaI = number_format($suma5,2,'.','');
	$sumaIn = number_format($suma6,2,'.','');
	$sumaF = number_format($suma8,2,'.','');
	$sumaA = number_format($suma7,2,'.','');

	

	$cuerpo = '
		<table class="table table-bordered">
					    <tr>
					      <th scope="col">Materia</th>
					      <th scope="col">P1</th>
					      <th scope="col">P2</th>
					      <th scope="col">P3</th>
					      <th scope="col">NF</th>
					    </tr>
					  <tbody>
					    <tr>
					      <th scope="row">Lenguaje</th>
					     <td>'.htmlspecialchars($nL) .'</td>
					     <td>'.htmlspecialchars($nL2) .'</td>
					     <td>'.htmlspecialchars($nL3) .'</td>
					     <td>'.htmlspecialchars($sumaL) .'</td>
					    </tr>
					    <tr>
					      <th scope="row">Matematica</th>
					      <td>'.htmlspecialchars($nM) .'</td>
					     <td>'.htmlspecialchars($nM2) .'</td>
					     <td>'.htmlspecialchars($nM3) .'</td>
					     <td>'.htmlspecialchars($sumaM) .'</td>
					    </tr>
					    <tr>
					      <th scope="row">Ciencia</th>
					      <td>'.htmlspecialchars($nC) .'</td>
					     <td>'.htmlspecialchars($nC2) .'</td>
					     <td>'.htmlspecialchars($nC3) .'</td>
					     <td>'.htmlspecialchars($sumaC) .'</td>
					    </tr>
					    <tr>
					      <th scope="row">Estudios Sociales</th>
					      <td>'.htmlspecialchars($nS) .'</td>
					     <td>'.htmlspecialchars($nS2) .'</td>
					     <td>'.htmlspecialchars($nS3) .'</td>
					     <td>'.htmlspecialchars($sumaS) .'</td>
					    </tr>
					    <tr>
					      <th scope="row">Informática</th>
					      <td>'.htmlspecialchars($nI) .'</td>
					     <td>'.htmlspecialchars($nI2) .'</td>
					     <td>'.htmlspecialchars($nInfor) .'</td>
					     <td>'.htmlspecialchars($sumaI) .'</td>
					    </tr>
					    <tr>
					      <th scope="row">Inglés</th>
					      <td>'.htmlspecialchars($nIn) .'</td>
					     <td>'.htmlspecialchars($nIn2) .'</td>
					     <td>'.htmlspecialchars($nIn3) .'</td>
					     <td>'.htmlspecialchars($sumaIn) .'</td>
					     <td></td>
					    </tr>
					    <tr>
					      <th scope="row">Educación Física</th>
					      <td>'.htmlspecialchars($nF) .'</td>
					     <td>'.htmlspecialchars($nF2) .'</td>
					     <td>'.htmlspecialchars($nF3) .'</td>
					     <td>'.htmlspecialchars($sumaF) .'</td>
					     <td></td>
					    </tr>
					    <tr>
					      <th scope="row">Educación Artística</th>
					      <td>'.htmlspecialchars($nA) .'</td>
					     <td>'.htmlspecialchars($nA2) .'</td>
					     <td>'.htmlspecialchars($nA3) .'</td>
					     <td>'.htmlspecialchars($sumaA) .'</td>
					     <td></td>	
					    </tr>
								  </tbody>
					</table>
	';

	

	
	$mpdf->WriteHTML($cuerpo);
	$mpdf->Output();
 ?>

