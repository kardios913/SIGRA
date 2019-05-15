<?php

class EgresadoDTO {

    private $CodEgresado;
    private $Apellido;
    private $Nombre;
    private $CodPrograma;
    private $Correo;
    private $TDocumento;
    private $NDocumento;
    private $Telefono;
    private $Celular;
    private $DirResidencia;
    private $DepResidencia;
    private $CiuResidencia;
    private $PaisResidencia;
    private $BarriResidencia;

    function __construct(){

    }
    
    function getCodEgresado() {
        return $this->CodEgresado;
    }

    function getApellido() {
        return $this->Apellido;
    }

    function getNombre() {
        return $this->Nombre;
    }

    function getCodPrograma() {
        return $this->CodPrograma;
    }

    function getCorreo() {
        return $this->Correo;
    }

    function getTDocumento() {
        return $this->TDocumento;
    }

    function getNDocumento() {
        return $this->NDocumento;
    }

    function getTelefono() {
        return $this->Telefono;
    }

    function getCelular() {
        return $this->Celular;
    }

    function getDirResidencia() {
        return $this->DirResidencia;
    }

    function getDepResidencia() {
        return $this->DepResidencia;
    }

    function getCiuResidencia() {
        return $this->CiuResidencia;
    }

    function getPaisResidencia() {
        return $this->PaisResidencia;
    }

    function getBarriResidencia() {
        return $this->BarriResidencia;
    }

    function setCodEgresado($CodEgresado) {
        $this->CodEgresado = $CodEgresado;
    }

    function setApellido($Apellido) {
        $this->Apellido = $Apellido;
    }

    function setNombre($Nombre) {
        $this->Nombre = $Nombre;
    }

    function setCodPrograma($CodPrograma) {
        $this->CodPrograma = $CodPrograma;
    }

    function setCorreo($Correo) {
        $this->Correo = $Correo;
    }

    function setTDocumento($TDocumento) {
        $this->TDocumento = $TDocumento;
    }

    function setNDocumento($NDocumento) {
        $this->NDocumento = $NDocumento;
    }

    function setTelefono($Telefono) {
        $this->Telefono = $Telefono;
    }

    function setCelular($Celular) {
        $this->Celular = $Celular;
    }

    function setDirResidencia($DirResidencia) {
        $this->DirResidencia = $DirResidencia;
    }

    function setDepResidencia($DepResidencia) {
        $this->DepResidencia = $DepResidencia;
    }

    function setCiuResidencia($CiuResidencia) {
        $this->CiuResidencia = $CiuResidencia;
    }

    function setPaisResidencia($PaisResidencia) {
        $this->PaisResidencia = $PaisResidencia;
    }

    function setBarriResidencia($BarriResidencia) {
        $this->BarriResidencia = $BarriResidencia;
    }


}



?>