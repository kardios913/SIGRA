<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EditarEncuesta
 *
 * @author KRLOS
 */
include_once '../facade/facSiEgre.php';
$facade= facSiEgre::getInstance();

$idEncuesta = $_POST['idEncuesta'];
$nomEncuesta= $_POST['nomEncuesta'];
$fCierreEncuesta= $_POST['fCierreEncuesta'];
$result = $facade->EditarEncuesta($idEncuesta,$nomEncuesta,$fCierreEncuesta);
if ($result) {
    echo '<script>alert("Encuesta Actualizada!!") </script>';
    echo "<script language='javascript'>
              window.location.href = '../vista/FormListarEncuesta.php';
              </script>";
} else {
    echo '<script>alert("Error!!") </script>';
    echo "<script language='javascript'>
              window.location.href = '../vista/FormCrearEncuesta.php';
              </script>";
}