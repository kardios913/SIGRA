<?php

class AdminDTO {

    private $email;
    private $Contrasena;
    

    function __construct(){

    }
  
    function getEmail() {
        return $this->email;
    }

    function getContrasena() {
        return $this->Contrasena;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setContrasena($Contrasena) {
        $this->Contrasena = $Contrasena;
    }


    

}



?>
