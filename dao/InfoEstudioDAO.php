<?php
include_once ('../config/conexion.php');
include_once ('../dto/InfoEstudioDTO.php');

class InfoEstudioDAO {

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
    
       public function RegistrarInformacionAcademica(InfoEstudioDTO $info){
         $this->bd->conection();
        $consulta = "INSERT INTO `infoestudio`( `titulo`, `entidad`, `fechaTitulacion`, `semestre`,idEgresado) "
                . "VALUES ('".$info->getTitulo()."','".$info->getEntidad()."','".$info->getFechaTitulacion()."','".$info->getSemestre()."',".$info->getCodEgresado().");";
        $result = $this->bd->ejecutarConsultaSQL($consulta);
        return $result;
    }
    public function ListarInformacionAcademica($graduado){
        $this->bd->conection();
        $consulta = "SELECT `idinfoEstudio`, `titulo`, `entidad`, `fechaTitulacion`, `semestre` FROM `infoestudio` WHERE idEgresado =".$graduado.";";
        $result = $this->bd->ejecutarConsultaSQL($consulta);
        return $result;
    }
    public function ActualizarInformacionAcademica(InfoEstudioDTO $i){
        $this->bd->conection();
        $consulta = "UPDATE `infoestudio` SET "
                . "`titulo`='".$i->getTitulo()."',"
                . "`entidad`='".$i->getEntidad()."',"
                . "`fechaTitulacion`='".$i->getFechaTitulacion()."',"
                . "`semestre`='".$i->getSemestre()."'"
                . "WHERE `idinfoEstudio`=".$i->getCodEstudio().";";
        $result = $this->bd->ejecutarConsultaSQL($consulta);
        return $result;
    }
    public function EliminarInformacionAcademica($id){
        $this->bd->conection();
        $consulta = "DELETE FROM `infoestudio` WHERE idinfoEstudio = ".$id.";";
        $result = $this->bd->ejecutarConsultaSQL($consulta);
        return $result;
    }

}

?>