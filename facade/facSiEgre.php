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

include '../negocio/negSiEgre.php';
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
    
    public function LoginAdmin($mail,$pass) {
        return $this->negSiEgre->LoginAdmin($mail, $pass);
    }
    
    /*TABLA PROGRAMA**/
    public function RegistrarPrograma($codPrograma,$nomPrograma){
        return $this->negSiEgre->RegistrarPrograma($codPrograma,$nomPrograma);
    }
    
    public function ListarPrograma(){
        return $this->negSiEgre->ListarPrograma();
        
    }
    
    public function  EditarPrograma($codPrograma,$nomPrograma){
        return $this->negSiEgre->EditarPrograma($codPrograma,$nomPrograma);
    }
    
    /*TABLA EGRESADO*/
    public function RegistrarEgresado($codEgresado,$nomEgresado,$apeEgresado,$corEgresado,$tipoEgresado,$docEgresado,$proEgresado){
        return $this->negSiEgre->RegistrarEgresado($codEgresado,$nomEgresado,$apeEgresado,$corEgresado,$tipoEgresado,$docEgresado, $proEgresado);
    }
    
    public function EditarEgresado($codEgresado, $nomEgresado, $apeEgresado, $corEgresado, $tipoEgresado, $docEgresado, $proEgresado){
        return $this->negSiEgre->EditarEgresado($codEgresado, $nomEgresado, $apeEgresado, $corEgresado, $tipoEgresado, $docEgresado, $proEgresado);
    }
    
    public function ListarEgresado(){
        return $this->negSiEgre->ListarEgresado();
    }
    
    public function ListarVerEgresado($codEgresado){
        return $this->negSiEgre->ListarVerEgresado($codEgresado);
    }
}
