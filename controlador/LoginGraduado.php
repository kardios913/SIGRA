<?php
include '../facade/facSiEgre.php';
$facade = facSiEgre::getInstance();

$documento = $_POST['documento'];
$pass = $_POST['password'];

$result = $facade->LoginGraduado($documento, $pass);


if ($result) {
    session_start();
    $_SESSION['documento'] = $documento;
    echo "<script language='javascript'>
              window.location.href = '../vista/FormGraduado.php';
              </script>";
} else {
    echo '<script>alert("Usuario o Contraseña INCORRECTA!!") </script>';
    echo "<script language='javascript'>
              window.location.href = '../index.php';
              </script>";
}
