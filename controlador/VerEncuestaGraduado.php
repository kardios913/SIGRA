<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of VerEncuestaGraduado
 *
 * @author KRLOS
 */
include '../facade/facSiEgre.php';
$facade = facSiEgre::getInstance();
$idEncuestaxxx = $_GET['idEncuestaxxx'];

$result = $facade->verEncuestaGraduado($idEncuestaxxx);
echo $result;