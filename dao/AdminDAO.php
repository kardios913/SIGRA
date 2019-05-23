<?php
include_once ('../config/conexion.php');
include_once ('../dto/AdminDTO.php');

class AdminDAO {

    private $bd;

    function __construct() {
        $this->bd = conexion::getInstance();
    }
    
     public function LoginAdmin(AdminDTO $adm) {
        $this->bd->conection();
        $consulta = "SELECT `usuario`, `contrasena` FROM `admin` WHERE `usuario`= '".$adm->getEmail()."' and `contrasena`= '".$adm->getContrasena()."';";
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
