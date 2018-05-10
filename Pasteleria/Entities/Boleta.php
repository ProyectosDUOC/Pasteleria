<?php
class Boleta {

    private $idBoleta;
    private $total;
    private $idEmpleado;
    
    public function __construct($idBoleta, $total, $idEmpleado) {
        $this->idBoleta = $idBoleta;
        $this->total = $total;
        $this->idEmpleado = $idEmpleado;
    }
    
    public function getIdBoleta() {
        return $this->idBoleta;
    }

    public function getTotal() {
        return $this->total;
    }

    public function getIdEmpleado() {
        return $this->idEmpleado;
    }

    public function setIdBoleta($idBoleta) {
        $this->idBoleta = $idBoleta;
    }

    public function setTotal($total) {
        $this->total = $total;
    }

    public function setIdEmpleado($idEmpleado) {
        $this->idEmpleado = $idEmpleado;
    }

}
?>