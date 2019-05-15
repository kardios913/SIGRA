<?php

class AdminDTO {

    private $Usuario;
    private $Contrasena;

    function __construct(){

    }
    
    function getUsuario() {
        return $this->Usuario;
    }

    function getContrasena() {
        return $this->Contrasena;
    }

    function setUsuario($Usuario) {
        $this->Usuario = $Usuario;
    }

    function setContrasena($Contrasena) {
        $this->Contrasena = $Contrasena;
    }


    
}



?>