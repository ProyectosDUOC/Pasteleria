<?php

class CompraOnline {
    private $idCompraOnline;  
    private $idCliente;        
    private $descuento;          
    private $total;   
    private $glosa;              
    private $idFormaEnvio;   
    private $idFormaPago;     
    private $idSucursal; 
    
    function __construct($idCompraOnline, $idCliente, $descuento, $total, $glosa, $idFormaEnvio, $idFormaPago, $idSucursal) {
        $this->idCompraOnline = $idCompraOnline;
        $this->idCliente = $idCliente;
        $this->descuento = $descuento;
        $this->total = $total;
        $this->glosa = $glosa;
        $this->idFormaEnvio = $idFormaEnvio;
        $this->idFormaPago = $idFormaPago;
        $this->idSucursal = $idSucursal;
    }
    function getIdCompraOnline() {
        return $this->idCompraOnline;
    }

    function getIdCliente() {
        return $this->idCliente;
    }

    function getDescuento() {
        return $this->descuento;
    }

    function getTotal() {
        return $this->total;
    }

    function getGlosa() {
        return $this->glosa;
    }

    function getIdFormaEnvio() {
        return $this->idFormaEnvio;
    }

    function getIdFormaPago() {
        return $this->idFormaPago;
    }

    function getIdSucursal() {
        return $this->idSucursal;
    }

    function setIdCompraOnline($idCompraOnline) {
        $this->idCompraOnline = $idCompraOnline;
    }

    function setIdCliente($idCliente) {
        $this->idCliente = $idCliente;
    }

    function setDescuento($descuento) {
        $this->descuento = $descuento;
    }

    function setTotal($total) {
        $this->total = $total;
    }

    function setGlosa($glosa) {
        $this->glosa = $glosa;
    }

    function setIdFormaEnvio($idFormaEnvio) {
        $this->idFormaEnvio = $idFormaEnvio;
    }

    function setIdFormaPago($idFormaPago) {
        $this->idFormaPago = $idFormaPago;
    }

    function setIdSucursal($idSucursal) {
        $this->idSucursal = $idSucursal;
    }


}

?>