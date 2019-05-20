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

include '../modelo/dao/AdminDAO.php';
include '../modelo/dao/EgresadoDAO.php';
include '../modelo/dao/EncuestaDAO.php';
include '../modelo/dao/InfoEstudioDAO.php';
include '../modelo/dao/InfoLaboralDAO.php';
include '../modelo/dao/OpcionesPreguntasDAO.php';
include '../modelo/dao/PreguntasDAO.php';
include '../modelo/dao/ProgramaDAO.php';
include '../modelo/dao/RespuestasDAO.php';

include '../modelo/dto/AdminDTO.php';
include '../modelo/dto/EgresadoDTO.php';
include '../modelo/dto/EncuestaDTO.php';
include '../modelo/dto/InfoEstudioDTO.php';
include '../modelo/dto/InfoLaboralDTO.php';
include '../modelo/dto/OpcionesPreguntasDTO.php';
include '../modelo/dto/PreguntasDTO.php';
include '../modelo/dto/ProgramaDTO.php';
include '../modelo/dto/RespuestasDTO.php';


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

}
