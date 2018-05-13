<?php

class Producto {
    private $idProducto;      
    private $codProducto;     
    private $nombreProducto;
    private $imagen;
    private $activo;           
    private $idCate;
       
    function __construct($idProducto, $codProducto, $nombreProducto, $imagen, $activo, $idCate) {
        $this->idProducto = $idProducto;
        $this->codProducto = $codProducto;
        $this->nombreProducto = $nombreProducto;
        $this->imagen = $imagen;
        $this->activo = $activo;
        $this->idCate = $idCate;
    }
    function getIdProducto() {
        return $this->idProducto;
    }

    function getCodProducto() {
        return $this->codProducto;
    }

    function getNombreProducto() {
        return $this->nombreProducto;
    }

    function getImagen() {
        return $this->imagen;
    }

    function getActivo() {
        return $this->activo;
    }

    function getIdCate() {
        return $this->idCate;
    }

    function setIdProducto($idProducto) {
        $this->idProducto = $idProducto;
    }

    function setCodProducto($codProducto) {
        $this->codProducto = $codProducto;
    }

    function setNombreProducto($nombreProducto) {
        $this->nombreProducto = $nombreProducto;
    }

    function setImagen($imagen) {
        $this->imagen = $imagen;
    }

    function setActivo($activo) {
        $this->activo = $activo;
    }

    function setIdCate($idCate) {
        $this->idCate = $idCate;
    }


}

?>