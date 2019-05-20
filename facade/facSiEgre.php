<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of facSiEgre
 *
 * @author KRLOS
 */

include '../negocio/negSiEgre.php';
class facSiEgre {
    //put your code here
    static $_instance;
    private $negSiEgre;

    function __construct() {
        $this->negSiEgre = new negSiEgre();
    }

    private function __clone() {
        
    }

    public static function getInstance() {
        if (!(self::$_instance instanceof self)) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }
}
