<?php

include_once ('../config/conexion.php');
include_once ('../dto/PreguntasDTO.php');

class PreguntasDAO {

    private $bd;

    function __construct() {
        $this->bd = conexion::getInstance();
    }

    public function InsertarPregunta(PreguntasDTO $pre) {
        $this->bd->conection();
        $consulta = "INSERT INTO `pregunta`(`idEncuesta`, `pregunta`, `tipoPregunta`) "
                . "VALUES (" . $pre->getIdEncuesta() . ",'" . $pre->getEnunciado() . "','" . $pre->getTipoPregunta() . "');";
        $result = $this->bd->ejecutarConsultaSQL($consulta);
        return $result;
    }

    public function EditarPregunta(PreguntasDTO $pre) {
        $this->bd->conection();
        $consulta = "UPDATE `pregunta` "
                . "SET `pregunta`='" . $pre->getEnunciado() . "',`tipoPregunta`= '" . $pre->getTipoPregunta() . "' "
                . "WHERE `idPregunta`= " . $pre->getIdPregunta() . ";";
        $result = $this->bd->ejecutarConsultaSQL($consulta);
        return $result;
    }

    public function EliminarPregunta($pre) {
        $this->bd->conection();
        $consulta = "DELETE FROM `pregunta` "
                . "WHERE `idEncuesta`= " . $pre. ";";
        $result = $this->bd->ejecutarConsultaSQL($consulta);
        return $result;
    }

    public function ListarPreguntas() {
        $this->bd->conection();
        $consulta = "SELECT idPregunta, idEncuesta, pregunta, tipoPregunta FROM `pregunta`;";
        $result = $this->bd->ejecutarConsultaSQL($consulta);
        return $result;
    }

    public function ListarPregunta(PreguntasDTO $pre) {
        $this->bd->conection();
        $consulta = "SELECT idPregunta, idEncuesta, pregunta, tipoPregunta FROM `pregunta`"
                . "WHERE `idPregunta`= " . $pre->getIdPregunta() . ";";
        $result = $this->bd->ejecutarConsultaSQL($consulta);
        return $result;
    }
    
    public function ListarPreguntaIdEncuesta($idEncuesta) {
        $this->bd->conection();
        $consulta = "SELECT idPregunta, pregunta, tipoPregunta FROM `pregunta`"
                . "WHERE `idEncuesta`= " . $idEncuesta. ";";
        $result = $this->bd->ejecutarConsultaSQL($consulta);
        return $result;
    }
    
    public function getIdPregunta(PreguntasDTO $pre) {
        $this->bd->conection();
        $consulta = "SELECT idPregunta FROM `pregunta` "
                . "WHERE idEncuesta=".$pre->getIdEncuesta()." "
                . "and pregunta='".$pre->getEnunciado()."' "
                . "and tipoPregunta='".$pre->getTipoPregunta()."';";
        $result = $this->bd->ejecutarConsultaSQL($consulta);
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