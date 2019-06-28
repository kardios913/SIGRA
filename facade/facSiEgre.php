<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of facSiEgre
 *
 * @author KRLOS
 */
include_once '../negocio/negSiEgre.php';

class facSiEgre {

    //put your code here
    static $_instance;
    private $negSiEgre;

    function __construct() {
        $this->negSiEgre = new negSiEgre();
    }

    private function __clone() {
        
    }

    public static function getInstance() {
        if (!(self::$_instance instanceof self)) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    public function datetimeCompleto() {
        return $this->negSiEgre->datetimeCompleto();
    }

    public function datetime() {
        return $this->negSiEgre->datetime();
    }

    public function date() {
        return $this->negSiEgre->date();
    }

    public function LoginAdmin($mail, $pass) {
        return $this->negSiEgre->LoginAdmin($mail, $pass);
    }

    /* TABLA PROGRAMA* */

    public function RegistrarPrograma($codPrograma, $nomPrograma) {
        return $this->negSiEgre->RegistrarPrograma($codPrograma, $nomPrograma);
    }

    public function ListarPrograma() {
        return $this->negSiEgre->ListarPrograma();
    }

    public function EditarPrograma($codPrograma, $nomPrograma) {
        return $this->negSiEgre->EditarPrograma($codPrograma, $nomPrograma);
    }

    /* TABLA EGRESADO */

    public function RegistrarEgresado($codEgresado, $nomEgresado, $apeEgresado, $corEgresado, $tipoEgresado, $docEgresado, $proEgresado) {
        return $this->negSiEgre->RegistrarEgresado($codEgresado, $nomEgresado, $apeEgresado, $corEgresado, $tipoEgresado, $docEgresado, $proEgresado);
    }

    public function EditarEgresado($codEgresado, $nomEgresado, $apeEgresado, $corEgresado, $tipoEgresado, $docEgresado, $proEgresado) {
        return $this->negSiEgre->EditarEgresado($codEgresado, $nomEgresado, $apeEgresado, $corEgresado, $tipoEgresado, $docEgresado, $proEgresado);
    }

    public function ListarEgresado() {
        return $this->negSiEgre->ListarEgresado();
    }

    public function ListarVerEgresado($codEgresado) {
        return $this->negSiEgre->ListarVerEgresado($codEgresado);
    }

    public function CrearEncuesta($nomEncuesta, $fCreacionEncuesta) {
        return $this->negSiEgre->CrearEncuesta($nomEncuesta,$fCreacionEncuesta);
    }

    public function ListarEncuesta() {
        return $this->negSiEgre->ListarEncuesta();
    }

    public function isEmptyRespuesta($idEncuesta) {
        return $this->negSiEgre->isEmptyRespuesta();
    }

    public function EditarEncuesta($idEncuesta, $nomEncuesta) {
        return $this->negSiEgre->EditarEncuesta($idEncuesta, $nomEncuesta);
    }

    public function EliminarEncuesta($idEncuesta) {
        return $this->negSiEgre->EliminarEncuesta($idEncuesta);
    }

    public function GuardarOpciones($idEncuesta, $nomEncuesta, $tipoPregunta, $array) {
        return $this->negSiEgre->GuardarOpciones($idEncuesta, $nomEncuesta, $tipoPregunta, $array);
    }

    public function verEncuesta($idEncuestaxxx) {
        return $this->negSiEgre->verEncuesta($idEncuestaxxx);
    }

    /**
     * MODULO GRADUADO
     */
    public function LoginGraduado($documento, $pass) {
        return $this->negSiEgre->LoginGraduado($documento, $pass);
    }

    public function informacionPersonal($documento) {
        return $this->negSiEgre->informacionPersonal($documento);
    }

    public function ActualizarInfo($codEgresado, $nomEgresado, $apeEgresado, $corEgresado, $tipoEgresado, $docEgresado, $proEgresado, $tel, $cel, $direccion, $barrio, $ciudad, $depar, $pais) {
        return $this->negSiEgre->ActualizarInfo($codEgresado, $nomEgresado, $apeEgresado, $corEgresado, $tipoEgresado, $docEgresado, $proEgresado, $tel, $cel, $direccion, $barrio, $ciudad, $depar, $pais);
    }

    public function ListarInfoLaboral($documento) {
        return $this->negSiEgre->ListarInfoLaboral($documento);
    }

    public function AgregarInformacionLaboral($documento, $Entidad, $Cargo, $Inicio, $Fin, $Ciudad, $Pais) {
        return $this->negSiEgre->AgregarInformacionLaboral($documento, $Entidad, $Cargo, $Inicio, $Fin, $Ciudad, $Pais);
    }

    public function EditarInformacionLaboral($id, $Entidad, $Cargo, $Inicio, $Fin, $Ciudad, $Pais) {
        return $this->negSiEgre->EditarInformacionLaboral($id, $Entidad, $Cargo, $Inicio, $Fin, $Ciudad, $Pais);
    }
    
    public function EliminarInformacionLaboral($id){
        return $this->negSiEgre->EliminarInformacionLaboral($id);
    }
    public function ListarInfoAcademica($documento) {
        return $this->negSiEgre->ListarInfoAcademica($documento);
    }

    public function AgregarInformacionAcademica($documento, $Entidad, $Titulo, $Fecha, $Semestre) {
        return $this->negSiEgre->AgregarInformacionAcademica($documento, $Entidad, $Titulo, $Fecha, $Semestre);
    }

    public function EditarInformacionAcademica($id, $Entidad, $Titulo, $Fecha, $Semestre) {
        return $this->negSiEgre->EditarInformacionAcademica($id, $Entidad, $Titulo, $Fecha, $Semestre);
    }
    
    public function EliminarInformacionAcademica($id){
        return $this->negSiEgre->EliminarInformacionAcademica($id);
    }
    
    public function ListarEncuestaGraduado() {
        return $this->negSiEgre->ListarEncuestaGraduado();
    }
    
     public function verEncuestaGraduado($idEncuestaxxx) {
        return $this->negSiEgre->verEncuesta($idEncuestaxxx);
    }

}
