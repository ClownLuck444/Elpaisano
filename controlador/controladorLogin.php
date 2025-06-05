<?php
session_start();
if (!empty($_SESSION['active'])) {
  header('location: plantilla.php');
} else {
  if (!empty($_POST)) {
      $alert = '';
      if (empty($_POST['correo']) || empty($_POST['pass'])) {
          $alert = '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                      Ingrese correo y contraseña
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>';
      } else {
          require_once "modelo/conexion.php";
          $user = mysqli_real_escape_string($conexion, $_POST['correo']);
          $pass = md5(mysqli_real_escape_string($conexion, $_POST['pass']));
          $query = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo = '$user' AND pass = '$pass'");
          mysqli_close($conexion);
          $resultado = mysqli_num_rows($query);
          if ($resultado > 0) {
              $dato = mysqli_fetch_array($query);
              $_SESSION['active'] = true;
              $_SESSION['idUser'] = $dato['id'];
              $_SESSION['nombre'] = $dato['nombre'];
              $_SESSION['rol'] = $dato['rol'];
              header('Location: plantilla.php');
          } else {
              $alert = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                      Contraseña incorrecta
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>';
              session_destroy();
          }
      }
  }
}
?>
