<?php
include_once ('../config/conexion.php');
include_once ('../dto/EncuestaDTO.php');

class EncuestaDAO {

    private $bd;

    function __construct() {
        $this->bd = conexion::getInstance();
    }
    
    public function CrearEncuesta(EncuestaDTO $enc){
        $this->bd->conection();
        $consulta = "INSERT INTO `encuesta`( `nombre`, `fechaCreacion`) VALUES ('".$enc->getNombre()."','".$enc->getFechaCreacio()."');";
        $result = $this->bd->ejecutarConsultaSQL($consulta);
        return $result;
    }
    
    public function EditarEncuesta(EncuestaDTO $enc){
        $this->bd->conection();
        $consulta = "UPDATE `encuesta` SET `nombre`='".$enc->getNombre()."' WHERE `idEncuesta`=".$enc->getIdEncuesta().";";
        $result = $this->bd->ejecutarConsultaSQL($consulta);
        return $result;
    }
    
    public function EliminarEncuesta(EncuestaDTO $enc){
        $this->bd->conection();
        $consulta = "DELETE FROM `encuesta` WHERE idEncuesta=".$enc->getIdEncuesta().";";
        $result = $this->bd->ejecutarConsultaSQL($consulta);
        return $result;
    }
    
    public function ListarEncuesta(){
        $this->bd->conection();
        $consulta = "SELECT `idEncuesta`, `nombre`, `fechaCreacion` FROM `encuesta` ;";
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