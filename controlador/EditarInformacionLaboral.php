<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EditarInformacionLaboral
 *
 * @author KRLOS
 */
include '../facade/facSiEgre.php';
$facade = facSiEgre::getInstance();
$id =(int)$_POST['idinfoLaboral'];
$Entidad = $_POST['entidad'];
$Cargo = $_POST['cargo'];
$Inicio = $_POST['inicio'];
$Fin = $_POST['fin'];
$Ciudad = $_POST['ciudad'];
$Pais = $_POST['pais'];
if (empty($Fin)) {
    $Fin = "Actual";
}
$result = $facade->EditarInformacionLaboral($id, $Entidad, $Cargo, $Inicio, $Fin, $Ciudad, $Pais);
if ($result) {
    echo '<script>alert("Informacion Laboral Actualizada!!") </script>';
    echo "<script language='javascript'>
              window.location.href = '../vista/FormInformacionLaboral.php';
              </script>";
} else {
    echo '<script>alert("Error!!") </script>';
    echo "<script language='javascript'>
              window.location.href = '../vista/FormInformacionLaboral.php';
              </script>";
}