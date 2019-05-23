<?php

class InfoLaboralDTO {

    private $CodigoLaboral;
    private $Entidad;
    private $Cargo;
    private $FechaInicio;
    private $Pais;
    private $Ciudad;
    private $CodEgresado;


    function __construct(){

    }
    
    function getCodigoLaboral() {
        return $this->CodigoLaboral;
    }

    function getEntidad() {
        return $this->Entidad;
    }

    function getCargo() {
        return $this->Cargo;
    }

    function getFechaInicio() {
        return $this->FechaInicio;
    }

    function getPais() {
        return $this->Pais;
    }

    function getCiudad() {
        return $this->Ciudad;
    }

    function getCodEgresado() {
        return $this->CodEgresado;
    }

    function setCodigoLaboral($CodigoLaboral) {
        $this->CodigoLaboral = $CodigoLaboral;
    }

    function setEntidad($Entidad) {
        $this->Entidad = $Entidad;
    }

    function setCargo($Cargo) {
        $this->Cargo = $Cargo;
    }

    function setFechaInicio($FechaInicio) {
        $this->FechaInicio = $FechaInicio;
    }

    function setPais($Pais) {
        $this->Pais = $Pais;
    }

    function setCiudad($Ciudad) {
        $this->Ciudad = $Ciudad;
    }

    function setCodEgresado($CodEgresado) {
        $this->CodEgresado = $CodEgresado;
    }

   
    
}



?>