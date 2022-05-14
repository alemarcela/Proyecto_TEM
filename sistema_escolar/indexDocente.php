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
      if(!strcmp($_SESSION["xswA/:azb"], "azyb145ps") && isset($_SESSION['cod'])) {
     ?>
<?php  
    include("disenos/imgSvg.php");
  ?>
<main>
  <?php  
    include("disenos/navbarDocente.php");
  ?>
  
  <div class="d-flex flex-column align-items-stretch bg-white" style="width: 700px; padding-top: 1%;">
    <a href="/" class="d-flex align-items-center flex-shrink-0 p-3 link-dark text-decoration-none border-bottom">
      <span class="fs-5 fw-semibold">Avisos Institucionales</span>
    </a>
    <?php 
      $collectionA = (new MongoDB\Client)->escuela->avisos;
      $avis = $collectionA->find();
      foreach($avis as $keyavi){ ?>
    <div class="row">
      <div class="col-md-12" style="width: 700px;">
        <div class="list-group list-group-flush border-bottom scrollarea">
          <a href="#" class="list-group-item list-group-item-action py-3 lh-tight">
            <div class="d-flex w-100 align-items-center justify-content-between">
              <strong class="mb-1"><?php echo $keyavi["titulo"]; ?></strong>
              <small class="text-muted"><?php echo $keyavi["fecha"]; ?></small>
            </div>
            <div class="col-10 mb-1 small"><?php echo $keyavi["informacion"]; ?></div>
          </a>
           <?php
          }
        ?>
      </div>
      </div>
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
