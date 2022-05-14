<?php 
session_start();
  require_once __DIR__ . '/vendor/autoload.php';

  /*if (isset($_GET["eliminarAlumn"]) && !empty($_GET)) {
    $dato = $_GET["codigo"];
    $alumno_= new MongoDB\Client("mongodb://localhost:27017");
    $collection = $alumno_->escuela->matricula;
    $collection->deleteMany(['_id' => new MongoDB\BSON\ObjectID($dato)]);
  } */

  if(isset($_GET["eliminarAlumn"]) && !empty($_GET)){ 
    $dato = $_GET["codi"];
    $collection = (new MongoDB\Client)->escuela->matricula;
    $collection->deleteMany(['codigoAlumno' => $dato]);
  }
 ?>
 

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.83.1">
    <title>Centro Escolar Colonia El Ángel</title>

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

      body{
        overflow-x: hidden!important;
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
      if(!strcmp($_SESSION["xswA/:azb"], "azyb145ps")) {
     ?>
    <?php  
    include("disenos/imgSvg.php");
  ?>
<main>
  <?php  
    include("disenos/navbar.php");
  ?>
<div class="row" style="padding-left: 5%;">
  <div class="col-md-12" style="position: absolute;">
      <h3 style="padding-top: 3%;">Alumnos</h3>
  </div>
  <form class="row g-2" method="get" action="alumnos.php">
    <div class="row">
      <div class="col-md-2" style="position: absolute;top: 100px;">
          <label for="inputState" class="form-label">visualizar por grado</label>
          <select id="gradoA" name="gradoA" class="form-select">
            <option>Primer Grado</option>
            <option>Segundo Grado</option>
            <option>Tercer Grado</option>
            <option>Cuarto Grado</option>
            <option>Quinto Grado</option>
            <option>Sexto Grado</option>
            <option>Septimo Grado</option>
            <option>Octavo Grado</option>
            <option>Noveno Grado</option>
          </select>
          <button type="submit" class="btn btn-primary" style="position: absolute; left: 105%; top: 45%;">Buscar</button>
          <div class="col-md-4" style="position: absolute;top: 35px; left:500px"><a href="addMatricula.php"><button type='button' class="btn btn-primary">Agregar</button></a></div>
        </div>
    </div>
  </form>
  <div class="col-md-12" style="width: 1100px; position: absolute; top: 200px;">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Nombres</th>
          <th scope="col">Fecha de Nacimiento</th>
          <th scope="col">Sexo</th>
          <th></th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <?php   
        
        require_once __DIR__ . '/vendor/autoload.php';
        $alumno =  new MongoDB\Client("mongodb://localhost:27017");
        $collection = $alumno->escuela->matricula;
        $datos_ = $collection->find();

       /* $gradoAA = "Primer Grado";      
        if(!empty($_GET)){ 
            $gradoAA = $_GET["gradoA"];
           }
           require_once("pruebaC.php");
           $consulta1 = array('grado.grado' => $gradoAA);
           $datos = $alumno->find($consulta1); */

          foreach($datos_ as $dato){ ?>
            <tr>
            <th><?php echo $dato["_id"]; ?></th>
                  <td><?php echo $dato["nombre"]." ".$dato['apellido'];?></td>
                  <td><?php echo $dato['fechaNacimiento']; ?></td>
                  <td><?php echo $dato['sexo']; ?></td>
                  <td><a href="modificarA.php?idA=<?php echo $dato["codigoAlumno"];?>"><button type='button' class="btn btn-primary">Modificar</button></a>
                  <a style="padding-left: 2%;" href="EliminarA.php?id=<?php echo $dato["codigoAlumno"];?>"><button type='button' class="btn btn-danger">Eliminar</button></a></td>
                </tr>
            <?php
          }
        ?>
      </tbody>
    </table>
  </div>
</div>
</main>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="sidebars.js"></script>
  <?php 
  }else{
    header('Location: login.php');
  }
?>
  </body>
</html>
