<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ListarPrograma
 *
 * @author KRLOS
 */

include_once '../facade/facSiEgre.php';
$facade = facSiEgre::getInstance();

echo $facade->ListarPrograma();
