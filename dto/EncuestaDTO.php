<?php

class EncuestaDTO {

    private $IdEncuesta;
    private $Nombre;
    private $FechaCreacio;
    private $FechaFin;

    function __construct(){

    }
    
    function getIdEncuesta() {
        return $this->IdEncuesta;
    }

    function getNombre() {
        return $this->Nombre;
    }

    function getFechaCreacio() {
        return $this->FechaCreacio;
    }

    function getFechaFin() {
        return $this->FechaFin;
    }

    function setIdEncuesta($IdEncuesta) {
        $this->IdEncuesta = $IdEncuesta;
    }

    function setNombre($Nombre) {
        $this->Nombre = $Nombre;
    }

    function setFechaCreacio($FechaCreacio) {
        $this->FechaCreacio = $FechaCreacio;
    }

    function setFechaFin($FechaFin) {
        $this->FechaFin = $FechaFin;
    }


}



?>