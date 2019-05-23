<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of LoginAdmin
 *
 * @author KRLOS
 */
include '../facade/facSiEgre.php';
$facade = facSiEgre::getInstance();

$mail = $_POST['mail'];
$pass = $_POST['password'];

$result = $facade->LoginAdmin($mail, $pass);


if ($result) {
    session_start();
    $_SESSION['mail'] = $mail;
    echo "<script language='javascript'>
              window.location.href = '../vista/FormAdmin.php';
              </script>";
} else {
    echo '<script>alert("Usuario o Contraseña INCORRECTA!!") </script>';
    echo "<script language='javascript'>
              window.location.href = '../Admin/index.php';
              </script>";
}
