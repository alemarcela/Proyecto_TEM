<?php 
    //session_start();
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
      //if(!strcmp($_SESSION["xswA/:azb"], "azyb145ps")) {
     ?>
    <?php  
    include("disenos/imgSvg.php");
  ?>
<main>
  <?php  
    include("disenos/navbar.php");
  ?>

<div class="row">
  <center><h2 style="padding-top: 3%;">Agregar usuario</h2></center>
  <div class="col-md-6" style="padding-left: 15%;padding-top: 2%;">
        <h3 style="font-size: 18px;">Datos usuario</h3>
    <form class="row g-2" method="post" action="usuarioAdd.php" style="width: 900px;">
        <div class="col-md-7">
          <label for="inputEmail4" class="form-label">Nombres *</label>
          <input type="text" class="form-control" required="" name="nombresU" placeholder="Escribe tus nombres">
        </div>
        <div class="col-md-5"></div>
        <div class="col-md-7">
          <label for="inputPassword4" class="form-label">Apellidos *</label>
          <input type="text" class="form-control" required="" name="apellidosU" placeholder="Escribe tus apellidos">
        </div>
        <div class="col-md-5"></div>
        <div class="col-7">
          <label for="inputAddress" class="form-label">Fecha de Nacimiento *</label>
          <input type="text" class="form-control" required="" name="fechaU" placeholder="##/##/####">
        </div>
        <div class="col-7">
          <label for="inputAddress" class="form-label">DUI *</label>
          <input type="text" class="form-control" required="" name="duiU" placeholder="########-#">
        </div>
        <div class="col-7">
          <label for="inputAddress" class="form-label">Teléfono *</label>
          <input type="text" class="form-control" required="" name="telefonoU" placeholder="####-####">
        </div>
        <div class="col-7">
          <label for="inputAddress" class="form-label">Nombre de usuario</label>
          <input type="text" class="form-control" required="" name="nombreUsu" placeholder="Ejemplo: esteven1">
        </div>
        <div class="col-7">
          <label for="inputAddress" class="form-label">Contraseña</label>
          <input type="password" class="form-control" required="" name="contrasenaU" placeholder="**********">
        </div>
        <div class="col-md-5"></div>
        <div class="col-md-4">
          <label for="inputState" class="form-label">Sexo </label>
          <select id="sexoUsu" name="sexoUsu" class="form-select">
            <option selected>Elegir...</option>
            <option>Femenino</option>
            <option>Masculino</option>
          </select>
        </div>
        
        <div class="col-md-4">
          <label for="inputState" class="form-label">Tipo de usuario</label>
          <select id="tipoUsu" name="tipoUsu" class="form-select">
            <option>Administrador</option>
            <option>Docente</option>
          </select>
        </div>
        <div class="col-md-4"></div>
        <div class="col-md-4">
          <label for="inputState" class="form-label">Estado</label>
          <select id="tipoUsu" name="estadoUsu" class="form-select">
            <option selected>Elegir...</option>
            <option>Soltero</option>
            <option>Casado</option>
            <option>Viudo</option>
            <option>Acompañado</option>
          </select>
        </div>

        <div class=" col-md-12">
            <h3 style="padding-top: 5%;font-size: 18px;">Residencia</h3>
        </div>
        <div class="col-7">
          <label for="inputAddress" class="form-label">Departamento</label>
          <input type="text" class="form-control" required="" name="dep" placeholder="Ejemplo: Ahuachapán">
        </div>
        <div class="col-7">
          <label for="inputAddress" class="form-label">Municipio</label>
          <input type="text" class="form-control" required="" name="mun" placeholder="Ejemplo: Turín">
        </div>
        <div class="col-7">
          <label for="inputAddress" class="form-label">Caserio, Colonia o Cantón</label>
          <input type="text" class="form-control" required="" name="case" placeholder="Ejemplo: Las pozas">
        </div>
         <div class="col-7">
          <label for="inputAddress" class="form-label">Dirección completa</label>
          <input type="text" class="form-control" required="" name="direccion" placeholder="Ejemplo: Colonia las pozas, Turin, Ahuachapán">
        </div>
        <div class="col-md-5"></div>


       <h3 style="padding-top: 5%;font-size: 18px;">Datos Complementarios</h3>
       <div class="col-md-4">
          <label for="inputState" class="form-label">Grado a impartir *</label>
          <select id="grado" name="gradoU" class="form-select">
            <option selected>Elegir...</option>
            <option>Administrador</option>
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
          <label for="inputState" class="form-label">Sección a impartir*</label>
          <select id="seccion" name="seccionU" class="form-select">
            <option selected>Elegir...</option>
            <option>Administrador</option>
            <option>A</option>
            <option>B</option>
          </select>
        </div>
        <div class="col-12" style="padding-top: 3%;">
          <?php 
            //Abrimos el fichero que almacena los clics
            $conteo= file_get_contents('contador.txt');
            //Reescribimos el fichero sumando un 1
            file_put_contents('contador.txt',$conteo+1);
           ?>
            <a href="<?php $_SERVER['PHP_SELF'] ?>"><button type="submit" class="btn btn-primary">Agregar</button></a>
            <div class="col-7">
          <input type="hidden" class="form-control" name="contador" value="<?php echo $conteo; ?>">
        </div>
        
        </div>
        </form>
      <div style="padding-top: 10%;"></div>
  </div>
    </div>
<th><a href="usuario.php"><button  name="salir" class="btn btn-danger" id="salir" value="Eliminar" style="position: absolute; top: 1415px;left: 60%;">Cancelar</button></a></th>
</main>



    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="sidebars.js"></script>

  <?php 
  //}else{
    //header('Location: login.php');
  //}
?>
  </body>
</html>
