<div class="d-flex flex-column p-3 text-white bg-dark" style="width: 280px;">
    <div class="dropdown">
      <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
        <?php 

          $collection = (new MongoDB\Client)->escuela->usuario;
          $consulta = array('codigoUsuario'=>$_SESSION['cod']);
          $nom = $collection->find($consulta);
          foreach ($nom as $key1) {
            $nombreU = $key1["nombre"];
            $apellidoU = $key1["apellido"];
          }
         ?>
        <strong><?php echo $nombreU . " " . $apellidoU;?></strong>
      </a>
      <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
        <li><a class="dropdown-item" href="salir.php">Salir</a></li>
      </ul>
    </div>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
      <li class="nav-item">
        <a href="indexDocente.php" class="nav-link active" aria-current="page">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"/></svg>
          Inicio
        </a>
      </li>
      <li>
        <a href="alumnosDoc.php" class="nav-link text-white">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"/></svg>
          Alumnos
        </a>
      </li>
      <li>
        <a href=" notasAlumnos.php" class="nav-link text-white">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"/></svg>
          Notas
        </a>
      </li>
     <!-- <li>
        <a href="matricula.php" class="nav-link text-white">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"/></svg>
          Asistencia
        </a>
      </li>-->
    </ul>
    <div style="padding-top: 215%;"></div>
    <hr>
  </div>