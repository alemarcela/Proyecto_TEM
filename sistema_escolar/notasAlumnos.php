<?php 
  session_start();
  require_once __DIR__ . '/vendor/autoload.php';
  
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
  
<div class="row" style="padding-left: 5%;">
  <div class="col-md-12" style="position: absolute;">
      <h3 style="padding-top: 3%;">Notas Estudiantes</h3>
  </div>
  <div class="col-md-12" style="width: 1100px; position: absolute; top: 135px;">
    <table class="table">
      <thead>
        <tr style="font-size: 15px;">
          <th scope="col">ID Estudiante</th>
          <th scope="col">Nombre del estudiante</th>
          <th scope="col">Fecha de Nacimiento</th>
          <th scope="col">Sexo</th>
          <th scope="col"></th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
        <?php 
            require_once("pruebaC.php");
            $consulta = array('grado.codigo'=>$_SESSION['cod']);
            $datos = $alumno->find($consulta);
         foreach($datos as $dato){ ?>
            <tr style="font-size: 15px;">
                  <td style="width: 20%;"><?php echo $dato["_id"]; ?></td>
                  <td style="width: 25%;"><?php echo $dato["nombre"]. "  " . $dato['apellido']; ?></td>
                  <td style="width: 20%;"><?php echo $dato['fechaNacimiento']; ?></td>
                  <td style="width: 13%;"><?php echo $dato['sexo']; ?></td>
                  <td><a href="visualizarNota.php?codAlum=<?php echo $dato["codigoAlumno"];?>"><button type='button' class="btn btn-primary" style="font-size: 14px;">Ver Notas</button></a></td>
                  <td><a href="agregarNota.php?codAlum=<?php echo $dato["codigoAlumno"];?>"><button type='button' class="btn btn-primary" style="font-size: 14px;">Agregar notas</button></a></td>
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
