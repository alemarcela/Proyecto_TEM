<?php 
  session_start();
  require_once __DIR__ . '/vendor/autoload.php';
  $codAlumno = $_GET["codAlum"];
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
      if(!strcmp($_SESSION["xswA/:azb"], "azyb145ps") && isset($_SESSION['cod'])) {
     ?>
    <?php  
    include("disenos/imgSvg.php");
  ?>
<main>
  <?php  
    include("disenos/navbarDocente.php");
  ?>

<div class="row">
  <div class="col-md-12" style="width: 1000px;">
    <center><h2 style="padding-top: 4%; padding-left: 25%;">Obtener Notas</h2></center>
  </div>
  
  <div class="col-md-6" style="padding-left: 15%;">
    <?php 
            require_once("pruebaC.php");
            $consulta = array('grado.codigo'=>$_SESSION['cod']);
            $datos = $alumno->find($consulta);
         foreach($datos as $dato){ ?>

        <h3 style="font-size: 18px; position: absolute;top: 125px; left: 25%;">Alumno : <?php  echo $dato["nombre"]." ".$dato["apellido"]; ?></h3>
        <?php 
        $collection = (new MongoDB\Client)->escuela->usuario;
        $consulta1 = array('codigoUsuario'=>$_SESSION['cod']);
        $data = $collection->find($consulta1);
        foreach ($data as $key ) {
       ?>
      <h3  style="font-size: 18px; position: absolute;top: 165px; left: 25%;">Docente : <?php  echo $key["nombre"]." ". $key["apellido"]; ?></h3>
      <?php
          }
        ?>

        <?php 
            $collection1 = (new MongoDB\Client)->escuela->grados;
            $consulta2 = array('codigoUsuario'=>$_SESSION['cod']);
            $dataGrado = $collection1->find($consulta2);
            foreach ($dataGrado as $key1) {
         ?>
        <h3 style="font-size: 18px; position: absolute;top: 205px; left: 25%;">Grado : <?php  echo $key1["grado"]; ?></h3>
        <h3 style="font-size: 18px; position: absolute;top: 245px; left: 25%;" >Sección : <?php  echo $key1["seccion"]; ?></h3>
        <form class="row g-2" method="post" action="notasPDF.php" style="width: 1000px; position: absolute;top: 255px;left: 25%;" target="_blank">
      <input type="hidden" class="form-control" name="codNotaAlumno" placeholder="Agregar un comentario" value="<?php echo $dato["codigoAlumno"]; ?>">
       <input type="hidden" class="form-control" name="codUsuario" placeholder="Agregar un comentario" value="<?php echo $key1["codigoUsuario"]; ?>">   
       <input type="hidden" class="form-control" name="nombre" placeholder="Agregar un comentario" value="<?php echo $dato["nombre"]." ".$dato["apellido"]; ?>">
      <?php
          }
        ?>
        <?php
          }
        ?>
        
        <div class="col-12" style="padding-top: 5%;">
            <button type="submit" class="btn btn-primary" >Obtener notas en PDF</button>
            <div class="col-7">
        </div>
        </div>
      </form>
      <div style="padding-top: 10%;"></div>
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

