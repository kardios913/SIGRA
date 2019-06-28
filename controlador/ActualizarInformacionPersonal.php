<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ActualizarInformacionPersonal
 *
 * @author KRLOS
 */
include_once '../facade/facSiEgre.php';
$facade = facSiEgre::getInstance();

$codEgresado = $_POST['codEgresado'];
$nomEgresado = $_POST['nomEgresado'];
$apeEgresado = $_POST['apeEgresado'];
$corEgresado = $_POST['corEgresado'];
$tipoEgresado = $_POST['tipoDocumento'];
$docEgresado = $_POST['docEgresado'];
$proEgresado = $_POST['proEgresado'];
$tel = $_POST['telEgresado'];
$cel = $_POST['celEgresado'];
$direccion = $_POST['dirEgresado'];
$barrio = $_POST['barrioEgresado'];
$ciudad = $_POST['ciudadEgresado'];
$depar = $_POST['deparEgresado'];
$pais = $_POST['paisEgresado'];

$result = $facade->ActualizarInfo($codEgresado, $nomEgresado, $apeEgresado, $corEgresado, $tipoEgresado, $docEgresado, $proEgresado, $tel, $cel, $direccion, $barrio, $ciudad, $depar, $pais);

if ($result) {
    echo '<script>alert("Datos Actualizados!!") </script>';
    echo "<script language='javascript'>
              window.location.href = '../vista/FormInformacionPersonal.php';
              </script>";
} else {
    echo '<script>alert("Error!!") </script>';
    echo "<script language='javascript'>
              window.location.href = '../vista/FormInformacionPersonal.php';
              </script>";
}
