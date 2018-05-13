<?php
<<<<<<< HEAD

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
=======
class FormaPago {
    /* CREATE TABLE forma_pago (
    id_forma_pago   INTEGER NOT NULL,
    nombre_pago     VARCHAR(30) NOT NULL
    );  */
    
    private $idFormaPago;
    private $nombrePago;
    
    public function __construct($idFormaPago, $nombrePago) {
        $this->idFormaPago = $idFormaPago;
        $this->nombrePago = $nombrePago;
    }
    
    public function getIdFormaPago() {
        return $this->idFormaPago;
    }

    public function getNombrePago() {
        return $this->nombrePago;
    }

    public function setIdFormaPago($idFormaPago) {
        $this->idFormaPago = $idFormaPago;
    }

    public function setNombrePago($nombrePago) {
        $this->nombrePago = $nombrePago;
    }

}
>>>>>>> 7b1c33b5b5cd4a1c7bf21e492454f6f11760bd51
