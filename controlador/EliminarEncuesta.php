<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EliminarEncuesta
 *
 * @author KRLOS
 */

include_once '../facade/facSiEgre.php';
$facade= facSiEgre::getInstance();
$idEncuesta= $_GET['idEncuesta'];

$result = $facade->EliminarEncuesta($idEncuesta);
if ($result) {
    echo '<script>alert("Encuesta Eliminada!!") </script>';
    echo "<script language='javascript'>
              window.location.href = '../vista/FormListarEncuesta.php';
              </script>";
} else {
    echo '<script>alert("Error!!") </script>';
    echo "<script language='javascript'>
              window.location.href = '../vista/FormCrearEncuesta.php';
              </script>";
}
