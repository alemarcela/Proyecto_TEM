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

<div class="row">
  <div class="col-md-12" style="width: 1000px;">
    <center><h2 style="padding-top: 4%; padding-left: 25%;">Agregar Notas</h2></center>
  </div>
  
  <div class="col-md-6" style="padding-left: 15%;">
    <?php 
            require_once("pruebaC.php");
            $consulta = array('grado.codigo'=>$_SESSION['cod']);
            $datos = $alumno->find($consulta);
         foreach($datos as $dato){ ?>

        <h3 style="font-size: 18px; position: absolute;top: 125px; left: 25%;">Alumno : <?php  echo $dato["nombre"]." ".$dato["apellido"]; ?></h3>
        
    <form class="row g-2" method="post" action="addNotaAlum.php" style="width: 1000px; position: absolute;top: 175px;left: 25%;">
      <input type="hidden" class="form-control" name="codNotaAlumno" placeholder="Agregar un comentario" value="<?php echo $dato["codigoAlumno"]; ?>">
      <?php
          }
        ?>
      <div class="col-md-4">
          <label for="inputState" class="form-label">Periodo de agregación de notas</label>
          <select id="grado" name="trimestre" class="form-select">
            <option>Primer Trimestre</option>
            <option>Segundo Trimestre</option>
            <option>Tercer Trimestre</option>
          </select>
        </div>

      <table class="table table-bordered">
  <thead>
    <tr style="font-size: 14px;">
      <th scope="col">Lenguaje</th>
      <th scope="col">Matemática</th>
      <th scope="col">Ciencia</th>
      <th scope="col">Estudios Sociales</th>
      <th scope="col">Informática</th>
      <th scope="col">Inglés</th>
      <th scope="col">Educación Física</th>
      <th scope="col">Educación Artística</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><input type="number" min="0.0" max="10.00" class="form-control" name="lengua" placeholder="Nota" ></td>
      <td><input type="number" min="0.0" max="10.00" class="form-control" name="matema" placeholder="Nota"></td>
      <td><input type="number" min="0.0" max="10.00" class="form-control" name="ciencia" placeholder="Nota"></td>
      <td><input type="number" min="0.0" max="10.00" class="form-control" name="sociales" placeholder="Nota"></td>
      <td><input type="number" min="0.0" max="10.00" class="form-control" name="informatica" placeholder="Nota"></td>
      <td><input type="number" min="0.0" max="10.00" class="form-control" name="ingles" placeholder="Nota"></td>
      <td><input type="number" min="0.0" max="10.00" class="form-control" name="fisica" placeholder="Nota"></td>
      <td><input type="number" min="0.0" max="10.00" class="form-control" name="artistica" placeholder="Nota"></td>
    </tr>
  </tbody>
</table>
        <div class="col-md-7">
          <label for="inputEmail4" class="form-label">Agregar comentario</label>
          <input type="text" class="form-control" name="comentario" placeholder="Agregar un comentario">
        </div>
        <div class="col-md-7">
          <label for="inputEmail4" class="form-label">Fecha de agregación de notas</label>
          <input type="date" id="start" name="calendario" value="2022-05-14" min="2022-01-01" max="2022-12-31">
        </div>
        
        <div class="col-12" style="padding-top: 3%;">
            <button type="submit" class="btn btn-primary">Agregar</button>
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
