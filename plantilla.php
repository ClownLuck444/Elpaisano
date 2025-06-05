<?php
if (!isset($_SESSION)) {
  session_start();
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/306f61f092.js" crossorigin="anonymous"></script>
    <script src="js/sweetalert2.all.min.js"></script>
    <script src="js/funciones.js"></script>
    <link rel="stylesheet" href="css/estilo2.css">
    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE -->
  <script src="dist/js/adminlte.min.js"></script>

  <script src="plugins/chart.js/Chart.min.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <style>
        body {
            background-image: url(img/3.jpg); /* Ruta de la imagen de fondo */
            background-size: cover;
            background-position: center;
        }
    </style>
  </head>


<body >

      
<nav class="navbar navbar-light" style="background-color: #e3f2fd;">

<ul class="nav nav-tabs"> 
 <?php if ($_SESSION['rol'] == 1 || $_SESSION['rol'] == 3) {
    echo '<a class="nav-link" aria-current="page" href="registrar.php"><img src="img/reservado2.png" width="30px"> Reservas</a>
  </li>';
 } 
 ?>

  <?php if ($_SESSION['rol'] == 1 || $_SESSION['rol'] == 2) {
    echo '<li class="nav-item">
        <a href="platos.php" class="nav-link" ><img src="img/p.png" width="30px">Platos</a>
    </li>';
} if ($_SESSION['rol'] == 1) {
    echo '<li class="nav-item">
        <a href="sala.php" class="nav-link">Salas</a>
    </li>'; 
} ?>
   <?php if ($_SESSION['rol'] == 1) {
  echo '<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">
    <img src="img/categoria.png" width="30px"> Usuario</a>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="usuarios.php">Registro</a></li>
    </ul>
  </li>';
} ?>
      <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">
      <img src="img/dolar.png" width="30px"> Ventas</a>
    
    <ul class="dropdown-menu">
    <?php if ($_SESSION['rol'] == 1 || $_SESSION['rol'] == 3) {
    echo '<li><a class="dropdown-item" href="nueva_venta.php">Nueva venta</a>
    </li>';

    }if ($_SESSION['rol'] == 1 || $_SESSION['rol'] == 2) {
      echo '<li><a class="dropdown-item" href="ventas.php">Historial de ventas</a>
      </li>';
    }?>
    </ul>
  </li>
  
  <li class="nav-item">
        <a href="salir.php" class="nav-link" ><i class="nav-icon fas fa-power-off"></i> Salir </a>
  </li>
  </ul>
    <div class="user-panel mt-2 pb-2 mb-2 d-flex justify-content-end " style="position: absolute; top: 10px; right: 50px; ">
                    <div class="image">
                        <i class="fas fa-user-circle fa-2x text-info"></i>
                    </div>
                    <div class="info">
                        <a href="#" class="d-block"><?php echo $_SESSION ['nombre'] ; ?></a>
                    </div>
                    </div>
    </div>
</nav>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>


     