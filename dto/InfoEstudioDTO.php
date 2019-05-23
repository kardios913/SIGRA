<?php

class InfoEstudioDTO {

    private $CodEstudio;
    private $Titulo;
    private $Entidad;
    private $FechaTitulacion;
    private $Semestre;
    private $CodEgresado;

    function __construct(){

    }
    
    function getCodEstudio() {
        return $this->CodEstudio;
    }

    function getTitulo() {
        return $this->Titulo;
    }

    function getEntidad() {
        return $this->Entidad;
    }

    function getFechaTitulacion() {
        return $this->FechaTitulacion;
    }

    function getSemestre() {
        return $this->Semestre;
    }

    function getCodEgresado() {
        return $this->CodEgresado;
    }

    function setCodEstudio($CodEstudio) {
        $this->CodEstudio = $CodEstudio;
    }

    function setTitulo($Titulo) {
        $this->Titulo = $Titulo;
    }

    function setEntidad($Entidad) {
        $this->Entidad = $Entidad;
    }

    function setFechaTitulacion($FechaTitulacion) {
        $this->FechaTitulacion = $FechaTitulacion;
    }

    function setSemestre($Semestre) {
        $this->Semestre = $Semestre;
    }

    function setCodEgresado($CodEgresado) {
        $this->CodEgresado = $CodEgresado;
    }

}



?>