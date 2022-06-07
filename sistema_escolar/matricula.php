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
  <center><h2 style="padding-top: 3%;">Matrícula</h2></center>
  <div class="col-md-6" style="padding-left: 15%;">
        <h3 style="font-size: 18px;">Datos Alumno</h3>
    <form class="row g-2" method="post" action="addMatricula.php" style="width: 900px;">
        <div class="col-md-7">
          <label for="inputEmail4" class="form-label">Nombres *</label>
          <input type="text" class="form-control" name="nombresA" required="" placeholder="Escribe tus nombres">
        </div>
        <div class="col-md-5"></div>
        <div class="col-md-7">
          <label for="inputPassword4" class="form-label">Apellidos *</label>
          <input type="text" class="form-control" name="apellidosA" required="" placeholder="Escribe tus apellidos">
        </div>
        <div class="col-md-5"></div>
        <div class="col-7">
          <label for="inputAddress" class="form-label">Fecha de Nacimiento *</label>
          <input type="text" class="form-control" name="fechaNA" required="" placeholder="##/##/####">
        </div>
        <div class="col-md-5"></div>
        <div class="col-md-4">
          <label for="inputState" class="form-label">Sexo *</label>
          <select id="sexo" name="sexo" class="form-select">
            <option selected>Elegir...</option>
            <option>Femenino</option>
            <option>Masculino</option>
          </select>
        </div>
        <br>
        <h3 style="padding-top: 5%;font-size: 18px;">Datos Responsable</h3>
        <div class="col-md-7">
          <label for="inputEmail4" class="form-label">Nombres *</label>
          <input type="text" class="form-control" name="nombresR" required="" placeholder="Escribe tus nombres">
        </div>
        <div class="col-md-5"></div>
        <div class="col-md-7">
          <label for="inputPassword4" class="form-label">Apellidos *</label>
          <input type="text" class="form-control" name="apellidosR" required="" placeholder="Escribe tus apellidos">
        </div>
        <div class="col-md-5"></div>
        <div class="col-7">
          <label for="inputAddress2" class="form-label">Teléfono *</label>
          <input type="text" class="form-control" name="telefonoR" required="" placeholder="Apartment, studio, or floor">
        </div>
        <div class="col-7">
          <label for="inputAddress2" class="form-label">DUI *</label>
          <input type="number" class="form-control" name="duiR" required="" placeholder="Apartment, studio, or floor">
        </div>
        <div class="col-md-5"></div>
        <div class="col-md-4">
          <label for="inputState" class="form-label">Sexo *</label>
          <select id="seccion" name="sexoR" required="" class="form-select">
            <option selected>Elegir...</option>
            <option>Femenino</option>
            <option>Masculino</option>
          </select>
        </div>
        <div class="col-md-8"></div>
        <div class="col-md-12">
          <h3 style="padding-top: 5%;font-size: 18px;">Residencia</h3>
        </div>
         <div class="col-md-7">
          <label for="inputEmail4" class="form-label">Departamento *</label>
          <input type="text" class="form-control" name="deparR" required="" placeholder="Ejemplo: Ahuachapán">
        </div>
         <div class="col-md-7">
          <label for="inputEmail4" class="form-label">Municipio *</label>
          <input type="text" class="form-control" name="municipioR" required="" placeholder="Ejemplo: Turín">
        </div>
         <div class="col-md-7">
          <label for="inputEmail4" class="form-label">Caserio, Colonia o Cantón *</label>
          <input type="text" class="form-control" name="caserioR" required="" placeholder="Ejemplo: Las pozas">
        </div>
         <div class="col-md-7">
          <label for="inputEmail4" class="form-label">Dirección completa *</label>
          <input type="text" class="form-control" name="direccionR" required="" placeholder="Ejemplo: Colonia las pozas, Turin, Ahuachapán">
        </div>
       <br>
       <h3 style="padding-top: 5%;font-size: 18px;">Inscripción</h3>
       <div class="col-md-4">
          <label for="inputState" class="form-label">Grado *</label>
          <select id="grado" name="grado" class="form-select">
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
        </div>
        <div class="col-md-4">
          <label for="inputState" class="form-label">Sección *</label>
          <select id="seccion" name="seccion" class="form-select">
            <option>A</option>
            <option>B</option>
          </select>
        </div>
        <?php 
            //Abrimos el fichero que almacena los clics
            $conteoA= file_get_contents('contadorAlumno.txt');
            //Reescribimos el fichero sumando un 1
            file_put_contents('contadorAlumno.txt',$conteoA+1);
           ?>
        <div class="col-12" style="padding-top: 3%;">
            <button type="submit" class="btn btn-primary">Matricular</button>
            <div class="col-7">
          <input type="hidden" class="form-control" name="contadorA" value="<?php echo $conteoA; ?>">
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
