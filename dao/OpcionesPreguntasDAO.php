<?php
include_once ('../config/conexion.php');
include_once ('../dto/OpcionesPreguntasDTO.php');

class OpcionesPreguntasDAO {

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
    
     public function InsertarOpciones(OpcionesPreguntasDTO $opc) {
        $this->bd->conection();
        $consulta = "INSERT INTO `opcionespregunta`(`idPregunta`, `idEncuesta`, `opcion`)"
                . "VALUES (" . $opc->getIdPregunta() . "," . $opc->getIdEncuesta() . ",'".$opc->getOpcion()."');";
        $result = $this->bd->ejecutarConsultaSQL($consulta);
        return $result;
    }

    public function EditarOpciones(OpcionesPreguntasDTO $opc) {
        $this->bd->conection();
        $consulta = "UPDATE `opcionespregunta` "
                . "SET `opcion`= '".$opc->getIdOpcion()."' "
                . "WHERE `idOpcionesPregunta`= ".$opc->getIdOpcion().";";
        $result = $this->bd->ejecutarConsultaSQL($consulta);
        return $result;
    }

    public function EliminarOpciones($idopc) {
        $this->bd->conection();
        $consulta = "DELETE FROM `opcionespregunta` "
                . "WHERE `idEncuesta`= " . $idopc . ";";
        $result = $this->bd->ejecutarConsultaSQL($consulta);
        return $result;
    }

    public function ListarOpciones() {
        $this->bd->conection();
        $consulta = "SELECT `idOpcionesPregunta`, `idPregunta`, `idEncuesta`, `opcion` FROM `opcionespregunta;";
        $result = $this->bd->ejecutarConsultaSQL($consulta);
        return $result;
    }

    public function ListarPregunta(OpcionesPreguntasDTO $opc) {
        $this->bd->conection();
        $consulta = "SELECT `idOpcionesPregunta`, `idPregunta`, `idEncuesta`, `opcion` FROM `opcionespregunta"
                . "WHERE `idOpcionesPregunta`= " . $opc->getIdOpcion() . ";";
        $result = $this->bd->ejecutarConsultaSQL($consulta);
        return $result;
    } 
    public function PintarEncuesta($idEncuesta, $idPregunta) {
        $this->bd->conection();
        $consulta = "SELECT p.idOpcionesPregunta, p.opcion "
                . "FROM `opcionespregunta` p "
                . "WHERE p.idEncuesta = ".$idEncuesta." and p.idPregunta = ".$idPregunta.";";
        $result = $this->bd->ejecutarConsultaSQL($consulta);
        return $result;
    } 

}

?>