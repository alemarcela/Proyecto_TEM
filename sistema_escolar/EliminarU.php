<?php  
session_start();
	require_once __DIR__ . '/vendor/autoload.php';
	$datoU = $_GET["id"];
/*$collection = (new MongoDB\Client)->escuela->usuario;

$collection->deleteMany(['dui' => $dato]);

header("Location:usuario.php");*/
?>
<script type="text/javascript">
	function eliminarCliente() {
		var pregunta=confirm("Deseas eliminar el usuario");
		if(pregunta==true){
			return true;
		}else{
			return false;
		}
	}
</script>
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
  <h3 style="padding-top: 10%;">Eliminar Usuario</h3>
  <div class="col-md-8"></div>
  
  
  <div class="col-md-12" style="width: 600px; position: absolute;top: 150px; left: 25%;">
    <table class="table">
      <thead>
      </thead>
      <tbody>
      	<form method="GET" action="usuario.php">
        <?php
          require_once __DIR__ . '/vendor/autoload.php';
          $usuario = (new MongoDB\Client)->escuela->usuario;
          $arreglo = array('codigoUsuario' => $datoU);
          $datos = $usuario->find($arreglo);

          foreach($datos as $dato){ ?>
            	<tr>
            		<th>Nombre:</th>
	                 <td><?php echo $dato["nombre"]." ".$dato['apellido']; ?></td>
                </tr>
                <tr>
                	<th>Usuario tipo:</th>
                	<td><?php echo $dato['tipoUsuario']; ?></td>
                </tr>
                <tr>
                	<th>DUI:</th>
                	<td><?php echo $dato['dui']; ?></td>
                </tr>
                <tr>
                	<th>Teléfono:</th>
                	<td><?php echo $dato['telefono']; ?></td>
                </tr>
                <tr>
                	<th>Sexo:</th>
                	<td><?php echo $dato['sexo']; ?></td>
                </tr>
                <tr>
                	<th>Estado civil:</th>
                	<td><?php echo $dato['estadoCivil']; ?></td>
                </tr>
                <tr>
                	<th></th>
                	<th></th>
                </tr>
                <tr>
					<th style="padding-right: 35%;"><center><button onclick="return eliminarCliente()" name="eliminarUsuario" class="btn btn-danger" id="almacenamiento" value="Eliminar">Eliminar</button></center><input type="hidden" class="form-control" name="codi" value="<?php echo $dato['codigoUsuario']; ?>" ></th>	
					<th></th>
				</tr>
				</form>
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
