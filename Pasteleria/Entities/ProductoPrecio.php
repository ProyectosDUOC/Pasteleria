<?php
<<<<<<< HEAD

class ProductoPrecio {
    private $idProductoP;  
    private $idProducto;    
    private $descripcion;
    private $precio;
    
    function __construct($idProductoP, $idProducto, $descripcion, $precio) {
=======
class ProductoPrecio {
    /*
     CREATE TABLE producto_precio (
    id_producto_p   INTEGER NOT NULL,
    id_producto     INTEGER NOT NULL,
    descripcion     VARCHAR(40) NOT NULL,
    precio          INTEGER NOT NULL
    );  */
    
    private $idProductoP;
    private $idProducto;
    private $descripcion;
    private $precio;
    
    public function __construct($idProductoP, $idProducto, $descripcion, $precio) {
>>>>>>> 7b1c33b5b5cd4a1c7bf21e492454f6f11760bd51
        $this->idProductoP = $idProductoP;
        $this->idProducto = $idProducto;
        $this->descripcion = $descripcion;
        $this->precio = $precio;
    }
<<<<<<< HEAD
    
    function getIdProductoP() {
        return $this->idProductoP;
    }

    function getIdProducto() {
        return $this->idProducto;
    }

    function getDescripcion() {
        return $this->descripcion;
    }

    function getPrecio() {
        return $this->precio;
    }

    function setIdProductoP($idProductoP) {
        $this->idProductoP = $idProductoP;
    }

    function setIdProducto($idProducto) {
        $this->idProducto = $idProducto;
    }

    function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    function setPrecio($precio) {
=======
    public function getIdProductoP() {
        return $this->idProductoP;
    }

    public function getIdProducto() {
        return $this->idProducto;
    }

    public function getDescripcion() {
        return $this->descripcion;
    }

    public function getPrecio() {
        return $this->precio;
    }

    public function setIdProductoP($idProductoP) {
        $this->idProductoP = $idProductoP;
    }

    public function setIdProducto($idProducto) {
        $this->idProducto = $idProducto;
    }

    public function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    public function setPrecio($precio) {
>>>>>>> 7b1c33b5b5cd4a1c7bf21e492454f6f11760bd51
        $this->precio = $precio;
    }


}
<<<<<<< HEAD

?>
=======
>>>>>>> 7b1c33b5b5cd4a1c7bf21e492454f6f11760bd51
