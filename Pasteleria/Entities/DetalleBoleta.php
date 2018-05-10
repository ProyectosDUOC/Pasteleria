<?php
class DetalleBoleta {
    private $idDetalle;
    private $idProductoP;
    private $idBoleta;
    private $cant;
    private $total;
    
    public function __construct($idDetalle, $idProductoP, $idBoleta, $cant, $total) {
        $this->idDetalle = $idDetalle;
        $this->idProductoP = $idProductoP;
        $this->idBoleta = $idBoleta;
        $this->cant = $cant;
        $this->total = $total;
    }
    
    public function getIdDetalle() {
        return $this->idDetalle;
    }

    public function getIdProductoP() {
        return $this->idProductoP;
    }

    public function getIdBoleta() {
        return $this->idBoleta;
    }

    public function getCant() {
        return $this->cant;
    }

    public function getTotal() {
        return $this->total;
    }

    public function setIdDetalle($idDetalle) {
        $this->idDetalle = $idDetalle;
    }

    public function setIdProductoP($idProductoP) {
        $this->idProductoP = $idProductoP;
    }

    public function setIdBoleta($idBoleta) {
        $this->idBoleta = $idBoleta;
    }

    public function setCant($cant) {
        $this->cant = $cant;
    }

    public function setTotal($total) {
        $this->total = $total;
    }

}

?>