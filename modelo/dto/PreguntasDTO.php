<?php

class PreguntasDTO {

    private $IdPregunta;
	private $IdEncuesta;
	private $Enunciado;
	private $TipoPregunta;

    function __construct(){

    }
    
    function getIdPregunta() {
        return $this->IdPregunta;
    }

    function getIdEncuesta() {
        return $this->IdEncuesta;
    }

    function getEnunciado() {
        return $this->Enunciado;
    }

    function getTipoPregunta() {
        return $this->TipoPregunta;
    }

    function setIdPregunta($IdPregunta) {
        $this->IdPregunta = $IdPregunta;
    }

    function setIdEncuesta($IdEncuesta) {
        $this->IdEncuesta = $IdEncuesta;
    }

    function setEnunciado($Enunciado) {
        $this->Enunciado = $Enunciado;
    }

    function setTipoPregunta($TipoPregunta) {
        $this->TipoPregunta = $TipoPregunta;
    }


}



?>