<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AgregarPregunta
 *
 * @author KRLOS
 */
include '../facade/facSiEgre.php';
$facade = facSiEgre::getInstance();
$idEncuesta = $_POST['idEncuesta'];
$nomEncuesta = $_POST['nomEncuesta'];
$tipoPregunta = $_POST['tipoPregunta'];
$cantidad = $_POST['cantidad'];
$array = array();
for ($index = 1; $index <= $cantidad; $index++) {
    $array[] = $_POST['opcion'.$index];
}
$result= $facade->GuardarOpciones($idEncuesta,$nomEncuesta,$tipoPregunta,$array);

if ($result) {
    echo '<script>alert("Pregunta Registrada!!") </script>';
    echo "<script language='javascript'>
              window.location.href = '../vista/FormListarEncuesta.php';
              </script>";
} else {
    echo '<script>alert("Error Al Registrar La pregunta!!") </script>';
    echo "<script language='javascript'>
              window.location.href = '../vista/FormListarEncuesta.php';
              </script>";
}