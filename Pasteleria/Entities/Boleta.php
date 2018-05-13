<?php
<<<<<<< HEAD

class Boleta {   
    private $idBoleta;        
    private $total;             
    private $idEmpleado;      
    private $idFormaPago;    
    private $idSucursal;      
    private $idPedidoLocal;
    
    function __construct($idBoleta, $total, $idEmpleado, $idFormaPago, $idSucursal, $idPedidoLocal) {
=======
class Boleta {    
    /*  CREATE TABLE boleta (
    id_boleta         INTEGER NOT NULL,
    total             INTEGER,
    id_empleado       INTEGER NOT NULL,
    id_forma_pago     INTEGER NOT NULL,
    id_sucursal       INTEGER NOT NULL,
    id_pedido_local   INTEGER
    );   */

    private $idBoleta;
    private $total;
    private $idEmpleado;
    private $idFormaPago;
    private $idSucursal;
    private $idPedidoLocal;
    
    public function __construct($idBoleta, $total, $idEmpleado, $idFormaPago, $idSucursal, $idPedidoLocal) {
>>>>>>> 7b1c33b5b5cd4a1c7bf21e492454f6f11760bd51
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
<<<<<<< HEAD

    function getTotal() {
        return $this->total;
    }

    function getIdEmpleado() {
=======
    public function getTotal() {
        return $this->total;
    }
    public function getIdEmpleado() {
>>>>>>> 7b1c33b5b5cd4a1c7bf21e492454f6f11760bd51
        return $this->idEmpleado;
    }
    public function getIdFormaPago() {
        return $this->idFormaPago;
    }
    public function getIdSucursal() {
        return $this->idSucursal;
    }
    public function getIdPedidoLocal() {
        return $this->idPedidoLocal;
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
<<<<<<< HEAD

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
=======
    public function setTotal($total) {
        $this->total = $total;
    }
    public function setIdEmpleado($idEmpleado) {
        $this->idEmpleado = $idEmpleado;
    }
    public function setIdFormaPago($idFormaPago) {
        $this->idFormaPago = $idFormaPago;
    }
    public function setIdSucursal($idSucursal) {
        $this->idSucursal = $idSucursal;
    }
    public function setIdPedidoLocal($idPedidoLocal) {
        $this->idPedidoLocal = $idPedidoLocal;
    }
    
}
>>>>>>> 7b1c33b5b5cd4a1c7bf21e492454f6f11760bd51
