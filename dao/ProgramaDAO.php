<?php

include_once ('../config/conexion.php');
include_once ('../dto/ProgramaDTO.php');

class ProgramaDAO {

    private $bd;

    function __construct() {
        $this->bd = conexion::getInstance();
    }

    public function RegistrarPrograma(ProgramaDTO $pro) {
        $this->bd->conection();
        $consulta = "INSERT INTO `programa`(`idPrograma`, `nomPrograma`) VALUES (".$pro->getCodPrograma().",'".$pro->getNomPrograma()."');";
        $result = $this->bd->ejecutarConsultaSQL($consulta);
        return $result;
    }
    
    public function ListarPrograma(){
        $this->bd->conection();
        $consulta = "SELECT `idPrograma`, `nomPrograma` FROM `programa`;";
        $result = $this->bd->ejecutarConsultaSQL($consulta);
        return $result;
    }
    
    public function EditarPrograma(ProgramaDTO $pro){
        $this->bd->conection();
        $consulta = "UPDATE `programa` SET `nomPrograma`='".$pro->getNomPrograma()."' WHERE `idPrograma`=".$pro->getCodPrograma().";";
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