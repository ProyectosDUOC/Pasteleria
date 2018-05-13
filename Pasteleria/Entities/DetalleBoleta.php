<?php


class DetalleBoleta {
    private $idDetalle;     
    private $idProductoP;  
    private $idBoleta;      
    private $precio;          
    private $cant;            
    private $total;  
    
    function __construct($idDetalle, $idProductoP, $idBoleta, $precio, $cant, $total) {
        $this->idDetalle = $idDetalle;
        $this->idProductoP = $idProductoP;
        $this->idBoleta = $idBoleta;
        $this->precio = $precio;
        $this->cant = $cant;
        $this->total = $total;
    }
    function getIdDetalle() {
        return $this->idDetalle;
    }

    function getIdProductoP() {
        return $this->idProductoP;
    }

    function getIdBoleta() {
        return $this->idBoleta;
    }

    function getPrecio() {
        return $this->precio;
    }

    function getCant() {
        return $this->cant;
    }

    function getTotal() {
        return $this->total;
    }

    function setIdDetalle($idDetalle) {
        $this->idDetalle = $idDetalle;
    }

    function setIdProductoP($idProductoP) {
        $this->idProductoP = $idProductoP;
    }

    function setIdBoleta($idBoleta) {
        $this->idBoleta = $idBoleta;
    }

    function setPrecio($precio) {
        $this->precio = $precio;
    }

    function setCant($cant) {
        $this->cant = $cant;
    }

    function setTotal($total) {
        $this->total = $total;
    }


}

?>