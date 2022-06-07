<?php 
session_start();
require_once __DIR__ . '/vendor/autoload.php';
$id = $_GET["idA"];
//echo "$id";
$collection = (new MongoDB\Client)->escuela->matricula;
$collection1 = (new MongoDB\Client)->escuela->responsable;
$collection2 = (new MongoDB\Client)->escuela->residenciaAlumno;

$arreglo = array('codigoAlumno' => $id);
$data = $collection->find($arreglo);

//var_dump($data);
 /*foreach ($data as $key) {
 	echo $key["nombre"];
 }*/
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.83.1">
    <title>Centro Escolar Colonia El Angel</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sidebars/">

    

    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="sidebars.css" rel="stylesheet">
  </head>
  <body>
    
    <?php  
    include("disenos/imgSvg.php");
  ?>
<main>
  <?php  
    include("disenos/navbar.php");
  ?>

<div class="row">
  <div class="col-md-12">
    <center><h2 style="padding-top: 5%; width: 300px;">Modificar Alumno</h2></center>
  </div>
  
  <div class="col-md-6" style="padding-left: 15%;position: relative;top: 25px;">
        <h3 style="font-size: 18px;">Datos Alumnos</h3>
     <?php 
     	foreach ($data as $key) {
        $variable = $key["codigoAlumno"];
      ?>
    <form class="row g-2" method="post" action="modificacionAlumnoAdmin.php" style="width: 950px;position: relative;">
    	<div class="col-md-7">
        <input type="hidden" class="form-control" name="valor" value=<?php echo $key['_id']; ?>>
          <input type="hidden" class="form-control" name="codAlumno" value=<?php echo $key['codigoAlumno']; ?>>
        </div>
        <div class="col-md-5"></div>
        <div class="col-7" > 
          <label for="inputAddress" class="form-label">Nombre completo</label>
          <input type="text" class="form-control" readonly="" required=""  value="<?php echo $key['nombre']." ".$key['apellido']; ?>">
        </div>
        <div class="col-md-5"></div>
        <div class="col-7" style="width:300px;padding-top: 2%;"> 
          <label for="inputAddress" class="form-label">Fecha de Nacimiento</label>
          <input type="text" class="form-control" name="fechaA" required="" value=<?php echo $key['fechaNacimiento']; ?>>
        </div>
        <div class="col-md-5"></div>
        <br>
        <?php 
          $arregloCodigo = array('codigoAlumno'=>$variable);
          $dataResponsable = $collection1->find($arregloCodigo);
          foreach ($dataResponsable as $key1) {
         ?>
         <h3 style="font-size: 18px;padding-top: 2%;">Datos del responsable</h3>
         <div class="col-7" > 
          <label for="inputAddress" class="form-label">Nombres</label>
          <input  type="text" class="form-control" name="nombreR" required="" value="<?php echo $key1['nombre']; ?>">
        </div>
        <div class="col-7"> 
          <label for="inputAddress" class="form-label">Apellidos</label>
          <input  type="text" class="form-control" name="apellidoR" required="" value="<?php echo $key1['Apellido']; ?>">
        </div>
        <div class="col-7" > 
          <label for="inputAddress" class="form-label">Teléfono</label>
          <input  type="tel" class="form-control" name="telR" pattern="[0-9]{4}[ -][0-9]{4}" title="El número de telefono debe tener la estructur #### - ####" required="" value="<?php echo $key1['telefono']; ?>">
        </div>
         <?php 
        }
       ?>
       <?php 
        $arregloCodigoResidencia = array('codigoAlumno'=>$variable);
        $dataResidencia = $collection2->find($arregloCodigoResidencia);
        foreach ($dataResidencia as $key2) {
        ?>
        <h3 style="font-size: 18px;padding-top: 2%;">Datos de la residencia</h3>
        <div class="col-7" > 
          <label for="inputAddress" class="form-label">Departamento</label>
          <input  type="text" class="form-control" name="depR" required="" value="<?php echo $key2['deartamento']; ?>">
        </div>
        <div class="col-7" > 
          <label for="inputAddress" class="form-label">Municipio</label>
          <input  type="text" class="form-control" name="munR" required="" value="<?php echo $key2['municipio']; ?>">
        </div>
        <div class="col-7" > 
          <label for="inputAddress" class="form-label">Caserio o Cantón</label>
          <input  type="text" class="form-control" name="caseR" required="" value="<?php echo $key2['caserio']; ?>">
        </div>
        <div class="col-7" > 
          <label for="inputAddress" class="form-label">Dirección general</label>
          <input  type="text" class="form-control" re name="direcR" required="" value="<?php echo $key2['direccion']; ?>" >
        </div>

        <?php 
        }
       ?>
        <?php 
        }
       ?>
       <div class="col-12" style="padding-top: 3%;">
            <button type="submit" class="btn btn-primary">Modificar</button>
        </div>
      </form>
      <a href="alumnos.php"><button  name="salir" class="btn btn-danger" id="salir" value="Eliminar" style="position: absolute; top: 898px;left: 50%;">Cancelar</button></a>
      <div style="padding-top: 15%;"></div>
  </div>
    </div>

</main>



    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="sidebars.js"></script>

  
  </body>
</html>

