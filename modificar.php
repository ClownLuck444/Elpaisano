<?php
include "plantilla.php";
include "modelo/conexion.php";
   $id = $_GET["id"];
   $sql=$conexion->query("SELECT * FROM persona WHERE id_reserva=$id ");

?>

<form class="col-4 p-3 m-auto" method="POST">
    <h3 class="text-center text-dark">Modificar Reserva</h3>
    <input type="hidden" name ="id" value="<?= $_GET["id"]?>">
    <?php
    include "controlador/vistaControladorModificar.php";
while ($datos=$sql->fetch_object()){ ?>
<div class="mb-1">
    <label for="exampleInputEmail1" class="form-label">Nombres </label>
    <input type="text" class="form-control" name="nombre" value ="<?= $datos->nombres ?>">
  </div>
  <div class="mb-1">
    <label for="exampleInputEmail1" class="form-label">Apellidos</label>
    <input type="text" class="form-control" name="apellidos"  value ="<?= $datos->apellidos ?>">
  </div>
  <div class="mb-1">
    <label for="exampleInputEmail1" class="form-label">Correo Electronico</label>
    <input type="text" class="form-control" name="correo"  value ="<?= $datos->correo ?>">
  </div>
  <div class="mb-1">
    <label for="exampleInputEmail1" class="form-label">Fecha de reserva</label>
    <input type="date" class="form-control" name="reserva" value ="<?= $datos->reserva ?>">
  </div>
  <div class="mb-1">
    <label for="exampleInputEmail1" class="form-label">Hora de reserva</label>
    <input type="time" class="form-control" name="hora" value ="<?= $datos->hora ?>">
  </div>
<?php  }
?>
<div class="text-center">
  <button type="submit" class="btn btn-primary" name="btnactualizar" value ="ok">Actualizar</button>
  </div>

  
</form>
</body>
</html>