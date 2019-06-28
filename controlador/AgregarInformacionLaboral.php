<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AgregarInformacionLaboral
 *
 * @author KRLOS
 */
include '../facade/facSiEgre.php';
$facade = facSiEgre::getInstance();
$documento =(int) $_POST['documento'];
$Entidad = $_POST['entidad'];
$Cargo = $_POST['cargo'];
$Inicio = $_POST['inicio'];
$Fin = $_POST['fin'];
$Ciudad = $_POST['ciudad'];
$Pais = $_POST['pais'];
if (empty($Fin)) {
    $Fin = "Actual";
}
$result = $facade->AgregarInformacionLaboral($documento, $Entidad, $Cargo, $Inicio, $Fin, $Ciudad, $Pais);
if ($result) {
    echo '<script>alert("Informacion Laboral Agregada!!") </script>';
    echo "<script language='javascript'>
              window.location.href = '../vista/FormAgregarInformacionLaboral.php';
              </script>";
} else {
    echo '<script>alert("Error!!") </script>';
    echo "<script language='javascript'>
              window.location.href = '../vista/FormAgregarInformacionLaboral.php';
              </script>";
}