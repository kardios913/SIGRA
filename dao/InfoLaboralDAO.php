<?php
include_once ('../config/conexion.php');
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
    
    public function RegistrarInformacionLaboral(InfoLaboralDTO $info){
         $this->bd->conection();
        $consulta = "INSERT INTO `infolaboral`( `entidad`, `cargo`, `fechaInicio`, `fechaFin`, `pais`, `ciudad`, `idEgresado`) "
                . "VALUES ('".$info->getEntidad()."','".$info->getCargo()."','".$info->getFechaInicio()."','".$info->getFechaFin()."','".$info->getPais()."','".$info->getCiudad()."',".$info->getCodEgresado().");";
        $result = $this->bd->ejecutarConsultaSQL($consulta);
        return $result;
    }
    public function ListarInformacionLaboral($graduado){
        $this->bd->conection();
        $consulta = "SELECT `idinfoLaboral`, `entidad`, `cargo`, `fechaInicio`, `fechaFin`, `pais`, `ciudad` FROM `infolaboral` WHERE idEgresado = ".$graduado.";";
        $result = $this->bd->ejecutarConsultaSQL($consulta);
        return $result;
    }
    public function ActualizarInformacionLaboral(InfoLaboralDTO $i){
        $this->bd->conection();
        $consulta = "UPDATE `infolaboral` SET "
                . "`entidad`='".$i->getEntidad()."',"
                . "`cargo`='".$i->getCargo()."',"
                . "`fechaInicio`='".$i->getFechaInicio()."',"
                . "`fechaFin`='".$i->getFechaFin()."',"
                . "`pais`='".$i->getPais()."',"
                . "`ciudad`='".$i->getCiudad()."'"
                . "WHERE `idinfoLaboral`=".$i->getCodigoLaboral().";";
        $result = $this->bd->ejecutarConsultaSQL($consulta);
        return $result;
    }
    public function EliminarInformacionLaboral($id){
        $this->bd->conection();
        $consulta = "DELETE FROM `infolaboral` WHERE idinfoLaboral = ".$id.";";
        $result = $this->bd->ejecutarConsultaSQL($consulta);
        return $result;
    }

}

?>