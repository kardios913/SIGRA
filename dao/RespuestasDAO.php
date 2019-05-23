<?php
include_once ('../config/conexion.php');
include_once ('../dto/RespuestasDTO.php');

class RespuestasDAO {

    private $bd;

    function __construct() {
        $this->bd = conexion::getInstance();
    }

    public function isEmptyRespuesta(RespuestasDTO $res){
        $this->bd->conection();
        $consulta = "SELECT * FROM `respuesta` WHERE idEncuesta= ".$res->getIdEncuesta().";";
        $consul = $this->bd->ejecutarConsultaSQL($consulta);
        $result = $this->bd->getCantidadFilas($consul);
        return $result;
    }
    public function getArray($result) {
        return ($this->bd->getArray($result));
    }

    public function getObject($result) {
        return ($this->bd->getObject($result));
    }

}

?>