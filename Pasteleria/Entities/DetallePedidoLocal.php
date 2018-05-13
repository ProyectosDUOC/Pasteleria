<?php

class DetallePedidoLocal {
    private $idDetalleLocal;  
    private $idPedidoLocal;   
    private $idProductoP;     
    private $precio;             
    private $cant;               
    private $total; 
    
    function __construct($idDetalleLocal, $idPedidoLocal, $idProductoP, $precio, $cant, $total) {
        $this->idDetalleLocal = $idDetalleLocal;
        $this->idPedidoLocal = $idPedidoLocal;
        $this->idProductoP = $idProductoP;
        $this->precio = $precio;
        $this->cant = $cant;
        $this->total = $total;
    }
    function getIdDetalleLocal() {
        return $this->idDetalleLocal;
    }

    function getIdPedidoLocal() {
        return $this->idPedidoLocal;
    }

    function getIdProductoP() {
        return $this->idProductoP;
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

    function setIdDetalleLocal($idDetalleLocal) {
        $this->idDetalleLocal = $idDetalleLocal;
    }

    function setIdPedidoLocal($idPedidoLocal) {
        $this->idPedidoLocal = $idPedidoLocal;
    }

    function setIdProductoP($idProductoP) {
        $this->idProductoP = $idProductoP;
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