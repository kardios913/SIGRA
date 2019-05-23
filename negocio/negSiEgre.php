<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of negSiEgre
 *
 * @author KRLOS
 */
include_once '../dao/AdminDAO.php';
include_once '../dao/EgresadoDAO.php';
include_once '../dao/EncuestaDAO.php';
include_once '../dao/InfoEstudioDAO.php';
include_once '../dao/InfoLaboralDAO.php';
include_once '../dao/OpcionesPreguntasDAO.php';
include_once '../dao/PreguntasDAO.php';
include_once '../dao/ProgramaDAO.php';
include_once '../dao/RespuestasDAO.php';

include_once '../dto/AdminDTO.php';
include_once '../dto/EgresadoDTO.php';
include_once '../dto/EncuestaDTO.php';
include_once '../dto/InfoEstudioDTO.php';
include_once '../dto/InfoLaboralDTO.php';
include_once '../dto/OpcionesPreguntasDTO.php';
include_once '../dto/PreguntasDTO.php';
include_once '../dto/ProgramaDTO.php';
include_once '../dto/RespuestasDTO.php';

class negSiEgre {

    //put your code here

    public function datetimeCompleto() {
        date_default_timezone_set("America/Bogota");
        $date = date("Y-m-d H:i:s");
        return $date;
    }

    public function datetime() {
        date_default_timezone_set("America/Bogota");
        $date = date("Y-m-d");
        return $date;
    }

    public function date() {
        date_default_timezone_set("America/Bogota");
        $date = date("Y-m");
        return $date;
    }

    public function LoginAdmin($mail, $pass) {
        $modto = new AdminDTO();
        $modto->setContrasena($pass);
        $modto->setEmail($mail);
        $modao = new AdminDAO();
        $result = $modao->LoginAdmin($modto);
        return $result;
    }

    public function RegistrarPrograma($codPrograma, $nomPrograma) {
        $modto = new ProgramaDTO();
        $modto->setCodPrograma($codPrograma);
        $modto->setNomPrograma($nomPrograma);
        $modao = new ProgramaDAO();
        $result = $modao->RegistrarPrograma($modto);
        return $result;
    }
    
    /*TABLA PROGRAMA*/
    public function ListarPrograma() {
        $modao = new ProgramaDAO();
        $listado = $modao->ListarPrograma();
        $result = " <table id='mytable' class='table table-bordred table-striped table-responsive'>
                            <thead>
                                <tr>
                                    <th>Codigo</th>
                                    <th>Nombre Programa</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody id='myTable'>";
        if ($row = $modao->getArray($listado)) {
            do {
                $result .= "               <tr>
                                    <td>".$row['idPrograma']."</td>
                                    <td>".$row['nomPrograma']."</td>
                                    <td><a href = './FormEditarPrograma.php?idPrograma=".$row['idPrograma']."&nomPrograma=".$row['nomPrograma']."' class = 'btn btn-info' ><i class = 'glyphicon glyphicon-edit'></i></a></td>";
            } while ($row = $modao->getArray($listado));
            $result .= "          </tbody>
                        </table>";
            return $result;
        } else {
            $result .= "No Hay Programas Academicos Registrados";
            return $result;
        }
    }
    
    public function EditarPrograma($codPrograma,$nomPrograma){
        $modto = new ProgramaDTO();
        $modto->setCodPrograma($codPrograma);
        $modto->setNomPrograma($nomPrograma);
        $modao = new ProgramaDAO();
        $resul= $modao->EditarPrograma($modto);
        return $resul;
        
    }

}
