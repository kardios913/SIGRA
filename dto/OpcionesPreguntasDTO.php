<?php

class OpcionesPreguntasDTO {

    private $IdPregunta;
	private $IdEncuesta;
	private $IdOpcion;
	private $Opcion;

    function __construct(){

    }
    
    function getIdPregunta() {
        return $this->IdPregunta;
    }

    function getIdEncuesta() {
        return $this->IdEncuesta;
    }

    function getIdOpcion() {
        return $this->IdOpcion;
    }

    function getOpcion() {
        return $this->Opcion;
    }

    function setIdPregunta($IdPregunta) {
        $this->IdPregunta = $IdPregunta;
    }

    function setIdEncuesta($IdEncuesta) {
        $this->IdEncuesta = $IdEncuesta;
    }

    function setIdOpcion($IdOpcion) {
        $this->IdOpcion = $IdOpcion;
    }

    function setOpcion($Opcion) {
        $this->Opcion = $Opcion;
    }


}



?>