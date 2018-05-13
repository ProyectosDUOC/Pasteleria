<?php

class Categoria {
    private $idCate;      
    private $nombreCate;   
    private $activo; 
    
    function __construct($idCate, $nombreCate, $activo) {
        $this->idCate = $idCate;
        $this->nombreCate = $nombreCate;
        $this->activo = $activo;
    }
    function getIdCate() {
        return $this->idCate;
    }

    function getNombreCate() {
        return $this->nombreCate;
    }

    function getActivo() {
        return $this->activo;
    }

    function setIdCate($idCate) {
        $this->idCate = $idCate;
    }

    function setNombreCate($nombreCate) {
        $this->nombreCate = $nombreCate;
    }

    function setActivo($activo) {
        $this->activo = $activo;
    }


}

?>