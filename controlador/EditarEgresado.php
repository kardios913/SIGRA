<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EditarEgresado
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

$result = $facade->EditarEgresado($codEgresado, $nomEgresado, $apeEgresado, $corEgresado, $tipoEgresado, $docEgresado, $proEgresado);

if ($result) {
    echo '<script>alert("Egresado Actualizado!!") </script>';
    echo "<script language='javascript'>
              window.location.href = '../vista/FormListarEgresado.php';
              </script>";
} else {
    echo '<script>alert("Error!!") </script>';
    echo "<script language='javascript'>
              window.location.href = '../vista/FormRegistrarEgresado.php';
              </script>";
}
