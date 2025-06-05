<?php
class vistaControladorMesa2 {
public function registrarpersona2(){
if(!empty($_POST["btnregistrar"])){
    if (!empty($_POST["nombre"]) and !empty($_POST["apellidos"]) and !empty($_POST["correo"]) and !empty($_POST["reserva"]) and !empty($_POST["hora"])  ){
   $nombre=$_POST["nombre"];
   $apellido=$_POST["apellidos"];
   $correo=$_POST["correo"];
   $reserva=$_POST["reserva"];
   $hora=$_POST["hora"];
   include "modelo/conexion.php";    
   $sql=$conexion->query("insert into persona(nombres, apellidos, correo,reserva,hora) values 
   ('$nombre','$apellido','$correo','$reserva','$hora')");

   if($sql==1){
      echo '<div class="alert alert-danger"> Persona registrado correctamente</div>';       
   }
   else {
    echo '<div class="alert alert-danger"> Persona no registrado correctamente</div>';
   }
}
   else{
    echo '<div class="alert alert-dark"> Los campos estan vacios</div>';
   } ?>

<script>
  history.replaceState(null,null,location.pathname)
   </script>

<?php }
}

}
?>