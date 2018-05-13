<?php

class FormaPago {
    private $idFormaPago;  
    private $nombrePago;
    
    function __construct($idFormaPago, $nombrePago) {
        $this->idFormaPago = $idFormaPago;
        $this->nombrePago = $nombrePago;
    }
    function getIdFormaPago() {
        return $this->idFormaPago;
    }

    function getNombrePago() {
        return $this->nombrePago;
    }

    function setIdFormaPago($idFormaPago) {
        $this->idFormaPago = $idFormaPago;
    }

    function setNombrePago($nombrePago) {
        $this->nombrePago = $nombrePago;
    }


}

?>