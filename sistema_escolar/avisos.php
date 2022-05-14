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

<div class="row">
  <center><h2 style="padding-top: 3%;">Agregar aviso</h2></center>
  <div class="col-md-6" style="padding-left: 15%;top: -175px;position: relative;">
        <h3 style="font-size: 18px;">Datos del aviso</h3>
      <form class="row g-2" method="post" action="addAviso.php" style="width: 900px;">
          <div class="col-md-7">
            <label for="inputEmail4" class="form-label">Título del aviso</label>
            <input type="text" class="form-control" required="" name="tituloAviso" placeholder="Ejemplo: Reunión de docentes">
          </div>
          <div class="form-group">
            <label for="exampleFormControlTextarea1">Información del aviso</label>
            <textarea class="form-control" id="infoAviso" required="" rows="3" name="infoAviso" placeholder="Escribe la Información completa del aviso"></textarea>
          </div>
          <div class="col-md-6" style="padding-top: 3%;">
              <button type="submit" class="btn btn-primary">Agregar</button>
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
