<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ELiminarInfoAcademica
 *
 * @author KRLOS
 */
include '../facade/facSiEgre.php';
$facade = facSiEgre::getInstance();

$id = $_GET['id'];

$result = $facade->EliminarInformacionAcademica($id);
if ($result) {
    echo '<script>alert("Informacion Academica Eliminada!!") </script>';
    echo "<script language='javascript'>
              window.location.href = '../vista/FormInformacionAcademica.php';
              </script>";
} else {
    echo '<script>alert("Error!!") </script>';
    echo "<script language='javascript'>
              window.location.href = '../vista/FormInformacionAcademica.php';
              </script>";
}