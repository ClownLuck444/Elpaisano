<?php



class vistaControlador {


public function obtener_plantilla2(){
   header("location:plantilla.php");
}

public function obtener_login(){
    return require_once "login.php";
}

}

