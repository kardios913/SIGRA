<?php

class RespuestasDTO {

    private $IdRespuesta;
	private $IdTIpo;
	private $IdEncuesta;
	private $IdPregunta;
	private $FechaEncuesta;
	private $CodEgresado;

    function __construct(){

    }
    
    function getIdRespuesta() {
        return $this->IdRespuesta;
    }

    function getIdTIpo() {
        return $this->IdTIpo;
    }

    function getIdEncuesta() {
        return $this->IdEncuesta;
    }

    function getIdPregunta() {
        return $this->IdPregunta;
    }

    function getFechaEncuesta() {
        return $this->FechaEncuesta;
    }

    function getCodEgresado() {
        return $this->CodEgresado;
    }

    function setIdRespuesta($IdRespuesta) {
        $this->IdRespuesta = $IdRespuesta;
    }

    function setIdTIpo($IdTIpo) {
        $this->IdTIpo = $IdTIpo;
    }

    function setIdEncuesta($IdEncuesta) {
        $this->IdEncuesta = $IdEncuesta;
    }

    function setIdPregunta($IdPregunta) {
        $this->IdPregunta = $IdPregunta;
    }

    function setFechaEncuesta($FechaEncuesta) {
        $this->FechaEncuesta = $FechaEncuesta;
    }

    function setCodEgresado($CodEgresado) {
        $this->CodEgresado = $CodEgresado;
    }


}



?>