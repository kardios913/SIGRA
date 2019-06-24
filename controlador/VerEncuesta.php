<?php

include '../facade/facSiEgre.php';
$facade = facSiEgre::getInstance();
$idEncuestaxxx = $_GET['idEncuestaxxx'];

$result = $facade->verEncuesta($idEncuestaxxx);
echo $result;