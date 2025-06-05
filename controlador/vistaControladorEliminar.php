<?php
if (!empty($_GET["id"])){
$id=$_GET["id"];
$sql=$conexion->query ("delete from persona where id_reserva=$id");
if ($sql==1){
    //echo '<div class="alert alert-danger"> Persona eliminado correctamente</div>';  

}else{
    echo '<div class="alert alert-danger"> Persona no eliminado correctamente</div>';  
}
}

?>