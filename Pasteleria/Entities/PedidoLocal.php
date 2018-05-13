<?php

class PedidoLocal {
    private $idPedidoLocal;  
    private $idCliente;       
    private $glosa;
    private $descuento;
    private $total;
    private $fechaTermino;
    private $fechaInscrita;
    private $idFormaEnvio;   
    private $idSucursal; 
    
    function __construct($idPedidoLocal, $idCliente, $glosa, $descuento, $total, $fechaTermino, $fechaInscrita, $idFormaEnvio, $idSucursal) {
        $this->idPedidoLocal = $idPedidoLocal;
        $this->idCliente = $idCliente;
        $this->glosa = $glosa;
        $this->descuento = $descuento;
        $this->total = $total;
        $this->fechaTermino = $fechaTermino;
        $this->fechaInscrita = $fechaInscrita;
        $this->idFormaEnvio = $idFormaEnvio;
        $this->idSucursal = $idSucursal;
    }

    function getIdPedidoLocal() {
        return $this->idPedidoLocal;
    }

    function getIdCliente() {
        return $this->idCliente;
    }

    function getGlosa() {
        return $this->glosa;
    }

    function getDescuento() {
        return $this->descuento;
    }

    function getTotal() {
        return $this->total;
    }

    function getFechaTermino() {
        return $this->fechaTermino;
    }

    function getFechaInscrita() {
        return $this->fechaInscrita;
    }

    function getIdFormaEnvio() {
        return $this->idFormaEnvio;
    }

    function getIdSucursal() {
        return $this->idSucursal;
    }

    function setIdPedidoLocal($idPedidoLocal) {
        $this->idPedidoLocal = $idPedidoLocal;
    }

    function setIdCliente($idCliente) {
        $this->idCliente = $idCliente;
    }

    function setGlosa($glosa) {
        $this->glosa = $glosa;
    }

    function setDescuento($descuento) {
        $this->descuento = $descuento;
    }

    function setTotal($total) {
        $this->total = $total;
    }

    function setFechaTermino($fechaTermino) {
        $this->fechaTermino = $fechaTermino;
    }

    function setFechaInscrita($fechaInscrita) {
        $this->fechaInscrita = $fechaInscrita;
    }

    function setIdFormaEnvio($idFormaEnvio) {
        $this->idFormaEnvio = $idFormaEnvio;
    }

    function setIdSucursal($idSucursal) {
        $this->idSucursal = $idSucursal;
    }


}

?>