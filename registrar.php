<?php
include "plantilla.php"
?>
   <h1 class ="text-center p-3"><p style="color: white">Listado de Reservas</p></h1> 
   
   <div class="text-center">
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#dialogo1">Registrar Nueva Mesa</button>
</div>

<div class="modal fade" id="dialogo1"  tabindex="-1" aria-labelledby="dialogolabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div  class="modal-header">
<h5 class="modal-title" id="dialogolabel">INICIAR SESION</h5>
<button type="button" class="btn-close" aria-label="Close" data-bs-dismiss="modal"></button>

</div>
<div class="modal-body">

<form class=" m-auto" method="POST">
    <h3 class="text-center text-dark">Registro de Mesa</p></h3>
    <?php
    include "modelo/conexion.php";
    include "controlador/vistaControladorMesa2.php";
    $registro= new vistaControladorMesa2();
    $registro->registrarpersona2();
    ?>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label"><p style="color: dark">Nombres</p></label>
    <input type="text" class="form-control" name="nombre">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label"><p style="color: dark">Apellidos</p></label>
    <input type="text" class="form-control" name="apellidos">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label"><p style="color: dark">Correo Electronico</p></label>
    <input type="text" class="form-control" name="correo">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label"><p style="color: dark">Fecha de reserva</p></label>
    <input type="date" class="form-control" name="reserva">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label"><p style="color: dark">Hora de reserva</p></label>
    <input type="time" class="form-control" name="hora">
  </div>
  <div class="text-center">
  <button type="submit" class="btn btn-primary" name="btnregistrar" value ="ok">Registrar</button>
</div>
</form>
</div>


</div>
<div class ="modal-footer">
<!--<button type="button" class="btn btn-primary" data-bs-dismiss="modal">SALIR</button>-->
</div>

</div>
</div>
</div>
   <?php
  include "modelo/conexion.php";
   include "controlador/vistaControladorEliminar.php";
  ?>
<div class="col-10  m-auto">
<table class="table">
  <thead class="table-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nombres</th>
      <th scope="col">Apellidos</th>
      <th scope="col">Correo</th>
      <th scope="col">Fecha de reserva</th>
      <th scope="col">Hora de reserva</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    <?php
     include "modelo/conexion.php";
     $sql=$conexion->query(" select * from persona");
     while ($datos=$sql->fetch_object()) {?>
       <tr> 
       <td><?= $datos->id_reserva?></td>
      <td><?= $datos ->nombres?></td>
      <td><?= $datos ->apellidos?></td>
      <td><?= $datos ->correo?></td>
      <td><?= $datos ->reserva?></td>
      <td><?= $datos ->hora?></td>
      <td>
        <a href= "modificar.php?id=<?= $datos->id_reserva?>" class="btn btn-small btn-primary"><i class="fa-solid fa-pen-to-square fa-flip"></i></a>
        <a href="registrar.php?id=<?= $datos->id_reserva?>"class="btn btn-small btn-warning"><i class="fa-solid fa-trash fa-shake"></i></a>     
        </td>
    </tr>
    <?php }
    ?>
  </tbody>
</table>
    </div>
   
