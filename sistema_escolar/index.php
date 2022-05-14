<?php
session_start();
require_once __DIR__ . '/vendor/autoload.php';
$conn = new MongoDB\Client("mongodb://localhost:27017");
$docente = $conn->escuela->usuario;
$aviso = $conn->escuela->avisos;
$aviso_ = $aviso->find();
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

    .aviso{
      display: inline-flex;
      justify-content: center;
    }
  </style>


  <!-- Custom styles for this template -->
  <link href="sidebars.css" rel="stylesheet">
</head>

<body>
  <?php
  if (!strcmp($_SESSION["xswA/:azb"], "azyb145ps")) {
  ?>
    <?php
    include("disenos/imgSvg.php");
    ?>
    <main>
      <?php
      include("disenos/navbar.php");

      ?>

      <div class="d-flex flex-column align-items-stretch bg-white">

        <div class="row">
          <div class="col-md-12" style="padding-left: 25%;width: 1000px; padding-top: 5%;">
            <center>
              <h1>BIENVENIDOS AL SISTEMA ESCOLAR</h1>
            </center><br><br>
            <center>
              <h1>CENTRO ESCOLAR COLONIA EL ÁNGEL</h1>
            </center>
            <center><img src="imagenes/school1.jpg" width="600px;" height="450px;"></center>
            <br>
          </div>
        </div>
        <?php 
          foreach ($aviso_ as $document ) {
            # code...
            $documento = $document['titulo'];
            echo "<h2 class='aviso'>$documento</h2>";
            $documento_ = $document['informacion'];
            echo "<p class='aviso'>$documento_</p>";
          }
        
        ?>
      </div>
    </main>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

    <script src="sidebars.js"></script>
  <?php
  } else {
    header('Location: login.php');
  }

  ?>
</body>

</html>