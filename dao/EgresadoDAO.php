<?php
include_once ('../config/conexion.php');
include_once ('../dto/EgresadoDTO.php');

class EgresadoDAO {

    private $bd;

    function __construct() {
        $this->bd = conexion::getInstance();
    }
    
    public function RegistrarEgresado(EgresadoDTO $egre){
         $this->bd->conection();
        $consulta = "INSERT INTO `egresado`(`idEgresado`, `contrasena`, `apellido`, `nombre`, `correo`, `tipodocumeto`, `numDocumento`,  `idPrograma`) "
                . "VALUES (".$egre->getCodEgresado().",'".$egre->getNDocumento()."SIGRA','".$egre->getApellido()."','".$egre->getNombre()."','".$egre->getCorreo()."','".$egre->getTDocumento()."','".$egre->getNDocumento()."',".$egre->getCodPrograma().");";
        $result = $this->bd->ejecutarConsultaSQL($consulta);
        return $result;
    }
    public function ListarEgresado(){
        $this->bd->conection();
        $consulta = "SELECT `idEgresado`,`apellido`, `nombre`, `correo`, `tipodocumeto`, `numDocumento`,  `idPrograma` FROM `egresado`;";
        $result = $this->bd->ejecutarConsultaSQL($consulta);
        return $result;
    }
    
    public function ListarVerEgresado($codEgresado){
        $this->bd->conection();
        $consulta = "SELECT * FROM `egresado` WHERE idEgresado=$codEgresado";
        $result = $this->bd->ejecutarConsultaSQL($consulta);
        return $result;
    }
    
    public function InformacionPersonal($Ndocumento){
        $this->bd->conection();
        $consulta = "SELECT * FROM `egresado` WHERE numDocumento=$Ndocumento";
        $result = $this->bd->ejecutarConsultaSQL($consulta);
        return $result;
    }
    
    public function EditarEgresado(EgresadoDTO $egre){
        $this->bd->conection();
        $consulta = "UPDATE `egresado` SET `apellido`='".$egre->getApellido()."',`nombre`='".$egre->getNombre()."',`correo`='".$egre->getCorreo()."',`tipodocumeto`='".$egre->getTDocumento()."',`numDocumento`='".$egre->getNDocumento()."',`idPrograma`=".$egre->getCodPrograma()." WHERE `idEgresado`=".$egre->getCodEgresado().";";
        $result = $this->bd->ejecutarConsultaSQL($consulta);
        return $result;
    }
    public function ActualizarInfo(EgresadoDTO $egre){
        $this->bd->conection();
        $consulta = "UPDATE `egresado` SET `apellido`='".$egre->getApellido()."'"
                . ",`nombre`='".$egre->getNombre()."'"
                . ",`correo`='".$egre->getCorreo()."'"
                . ",`tipodocumeto`='".$egre->getTDocumento()."'"
                . ",`numDocumento`='".$egre->getNDocumento()."'"
                . ",`idPrograma`=".$egre->getCodPrograma().""
                . ",`telefono`='".$egre->getTelefono()."'"
                . ",`celular`='".$egre->getCelular()."'"
                . ",`dirResidencia`='".$egre->getDirResidencia()."'"
                . ",`depResidencia`='".$egre->getDepResidencia()."'"
                . ",`ciudResidencia`='".$egre->getCiuResidencia()."'"
                . ",`paisResidencia`='".$egre->getPaisResidencia()."'"
                . ",`barrioResidencia`='".$egre->getBarriResidencia()."'"
                . " WHERE `idEgresado`=".$egre->getCodEgresado().";";
        $result = $this->bd->ejecutarConsultaSQL($consulta);
        return $result;
    }
    
    public function LoginGraduado(EgresadoDTO $egre){
        $this->bd->conection();
        $consulta = "SELECT `apellido`, `nombre`FROM `egresado` WHERE  `numDocumento` ='".$egre->getNDocumento()."' and `contrasena`='".$egre->getContrasena()."';";
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