<?php 
session_start();
  require_once __DIR__ . '/vendor/autoload.php';
  if(isset($_GET["eliminarUsuario"]) && !empty($_GET)){ 
    $dato = $_GET["codi"];
    $collection = (new MongoDB\Client)->escuela->usuario;
    $collection->deleteMany(['codigoUsuario' => $dato]);
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
  <h3 style="padding-top: 10%;">Usuarios</h3>
  <div class="col-md-4" style="position: absolute;top: 100px;"><a href="addUsuario.php"><button type='button' class="btn btn-primary">Agregar</button></a></div>
  <div class="col-md-8"></div>
  
  
  <div class="col-md-12" style="width: 1100px; position: absolute;top: 150px;">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Nombre completo</th>
          <th scope="col">DUI</th>
          <th scope="col">Fecha de Nacimiento</th>
          <th scope="col">Tipo de Usuario</th>
          <th scope="col">Teléfono</th>
        </tr>
      </thead>
      <tbody>
        <?php
          require_once __DIR__ . '/vendor/autoload.php';
          $usuario = (new MongoDB\Client)->escuela->usuario;
          $datos = $usuario->find();

          foreach($datos as $dato){ ?>
            <tr>
            
                  <td><?php echo $dato["nombre"]." ".$dato['apellido']; ?></td>
                  <td><?php echo $dato['dui']; ?></td>
                  <td><?php echo $dato['fechaNacimiento']; ?></td>
                  <td><?php echo $dato['tipoUsuario']; ?></td>
                  <td><?php echo $dato['telefono']; ?></td>
                  <td><a href="modificarU.php?idU=<?php echo $dato["dui"];?>"><button type='button' class="btn btn-primary">Modificar</button></a>
                  <a style="padding-left: 2%;" href="EliminarU.php?id=<?php echo $dato["codigoUsuario"];?>"><button type='button' class="btn btn-danger">Eliminar</button></a></td>
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
