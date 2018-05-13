<?php

class ProductoPrecio {
    private $idProductoP;  
    private $idProducto;    
    private $descripcion;
    private $precio;
    
    function __construct($idProductoP, $idProducto, $descripcion, $precio) {
        $this->idProductoP = $idProductoP;
        $this->idProducto = $idProducto;
        $this->descripcion = $descripcion;
        $this->precio = $precio;
    }
    
    function getIdProductoP() {
        return $this->idProductoP;
    }

    function getIdProducto() {
        return $this->idProducto;
    }

    function getDescripcion() {
        return $this->descripcion;
    }

    function getPrecio() {
        return $this->precio;
    }

    function setIdProductoP($idProductoP) {
        $this->idProductoP = $idProductoP;
    }

    function setIdProducto($idProducto) {
        $this->idProducto = $idProducto;
    }

    function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    function setPrecio($precio) {
        $this->precio = $precio;
    }


}

?>