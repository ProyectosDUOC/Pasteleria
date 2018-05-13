<?php

class Comuna { 
    private $idComuna;
    private $nombreComuna;
    
    function __construct($idComuna, $nombreComuna) {
        $this->idComuna = $idComuna;
        $this->nombreComuna = $nombreComuna;
    }
    function getIdComuna() {
        return $this->idComuna;
    }

    function getNombreComuna() {
        return $this->nombreComuna;
    }

    function setIdComuna($idComuna) {
        $this->idComuna = $idComuna;
    }

    function setNombreComuna($nombreComuna) {
        $this->nombreComuna = $nombreComuna;
    }

}

?>