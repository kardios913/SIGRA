<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EditarInformacionAcademica
 *
 * @author KRLOS
 */
include '../facade/facSiEgre.php';
$facade = facSiEgre::getInstance();
$id =(int)$_POST['idinfoEstudio'];
$Entidad = $_POST['entidad'];
$titulacion = $_POST['titulacion'];
$fecha = $_POST['fecha'];
$semestre = $_POST['semestre'];
if (empty($fecha)) {
    $fecha = "Cursando";
    if(empty($semestre)){
        $semestre="Por Definir";
    }
}
if (!empty($fecha)) {
    if(empty($semestre)){
        $semestre="Culminado";
    }
}
$result = $facade->EditarInformacionAcademica($id, $Entidad, $titulacion, $fecha, $semestre);
if ($result) {
    echo '<script>alert("Informacion Academica Actualizada!!") </script>';
    echo "<script language='javascript'>
              window.location.href = '../vista/FormInformacionAcademica.php';
              </script>";
} else {
    echo '<script>alert("Error!!") </script>';
    echo "<script language='javascript'>
              window.location.href = '../vista/FormInformacionAcademica.php';
              </script>";
}