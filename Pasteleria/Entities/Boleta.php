<?php

class Boleta {   
    private $idBoleta;        
    private $total;             
    private $idEmpleado;      
    private $idFormaPago;    
    private $idSucursal;      
    private $idPedidoLocal;
    
    function __construct($idBoleta, $total, $idEmpleado, $idFormaPago, $idSucursal, $idPedidoLocal) {
        $this->idBoleta = $idBoleta;
        $this->total = $total;
        $this->idEmpleado = $idEmpleado;
        $this->idFormaPago = $idFormaPago;
        $this->idSucursal = $idSucursal;
        $this->idPedidoLocal = $idPedidoLocal;
    }
    function getIdBoleta() {
        return $this->idBoleta;
    }

    function getTotal() {
        return $this->total;
    }

    function getIdEmpleado() {
        return $this->idEmpleado;
    }

    function getIdFormaPago() {
        return $this->idFormaPago;
    }

    function getIdSucursal() {
        return $this->idSucursal;
    }

    function getIdPedidoLocal() {
        return $this->idPedidoLocal;
    }

    function setIdBoleta($idBoleta) {
        $this->idBoleta = $idBoleta;
    }

    function setTotal($total) {
        $this->total = $total;
    }

    function setIdEmpleado($idEmpleado) {
        $this->idEmpleado = $idEmpleado;
    }

    function setIdFormaPago($idFormaPago) {
        $this->idFormaPago = $idFormaPago;
    }

    function setIdSucursal($idSucursal) {
        $this->idSucursal = $idSucursal;
    }

    function setIdPedidoLocal($idPedidoLocal) {
        $this->idPedidoLocal = $idPedidoLocal;
    }
}

?>