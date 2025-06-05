<?php


if(!empty($_POST["btnactualizar"])) {
    if (!empty($_POST["nombre"]) and !empty($_POST["apellidos"]) and !empty($_POST["correo"]) and !empty($_POST["reserva"]) and !empty($_POST["hora"]) ){
        $id=$_POST["id"];
        $nombre=$_POST["nombre"];
        $apellido=$_POST["apellidos"];
        $correo=$_POST["correo"];
        $reserva=$_POST["reserva"];
        $hora=$_POST["hora"];
        include "modelo/conexion.php";    
        $sql=$conexion->query("update  persona set nombres='$nombre',apellidos='$apellido', correo='$correo',reserva='$reserva',hora='$hora' where id_reserva=$id ");
    if($sql==1){
      header("location:registrar.php");
    }else{
        echo '<div class="alert alert-dark"> ERROR AL MODIFICAR</div>';
    }
}else{
    echo '<div class="alert alert-dark"> Los campos estan vacios</div>';

 
}
}




?>