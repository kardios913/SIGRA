<?php
include_once ('../../config/conexion.php');
include_once ('../dto/InfoLaboralDTO.php');

class InfoLaboralDAO {

    private $bd;

    function __construct() {
        $this->bd = conexion::getInstance();
    }

    public function getArray($result) {
        return ($this->bd->getArray($result));
    }

    public function getObject($result) {
        return ($this->bd->getObject($result));
    }

}

?>