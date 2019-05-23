<?php

class ProgramaDTO {

    private $CodPrograma;
	private $NomPrograma;

    function __construct(){

    }
    
    function getCodPrograma() {
        return $this->CodPrograma;
    }

    function getNomPrograma() {
        return $this->NomPrograma;
    }

    function setCodPrograma($CodPrograma) {
        $this->CodPrograma = $CodPrograma;
    }

    function setNomPrograma($NomPrograma) {
        $this->NomPrograma = $NomPrograma;
    }


}



?>