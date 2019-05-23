<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EditarPrograma
 *
 * @author KRLOS
 */
include_once '../facade/facSiEgre.php';
$facade = facSiEgre::getInstance();
$codPrograma = $_POST['codPrograma'];
$nomPrograma = $_POST['nomPrograma'];


$result = $facade->EditarPrograma($codPrograma,$nomPrograma);
if ($result) {
    echo '<script>alert("Programa Actualizado!!") </script>';
    echo "<script language='javascript'>
              window.location.href = '../vista/FormListarPrograma.php';
              </script>";
} else {
    echo '<script>alert("Error!!") </script>';
    echo "<script language='javascript'>
              window.location.href = '../vista/FormRegistrarPrograma.php';
              </script>";
}
