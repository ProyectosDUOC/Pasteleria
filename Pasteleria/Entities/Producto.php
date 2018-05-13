<?php
<<<<<<< HEAD

class Producto {
    private $idProducto;      
    private $codProducto;     
    private $nombreProducto;
    private $imagen;
    private $activo;           
    private $idCate;
       
    function __construct($idProducto, $codProducto, $nombreProducto, $imagen, $activo, $idCate) {
=======
class Producto {
    /*CREATE TABLE producto (
    id_producto       INTEGER NOT NULL,
    cod_producto      INTEGER NOT NULL,
    nombre_producto   VARCHAR(50) NOT NULL,
    imagen            VARCHAR(60),
    activo            INTEGER NOT NULL,
    id_cate           INTEGER NOT NULL
    );*/
    
    private $idProducto;
    private $codProducto;
    private $nombreProducto;
    private $imagen;
    private $activo;
    private $idCate;
    
    public function __construct($idProducto, $codProducto, $nombreProducto, $imagen, $activo, $idCate) {
>>>>>>> 7b1c33b5b5cd4a1c7bf21e492454f6f11760bd51
        $this->idProducto = $idProducto;
        $this->codProducto = $codProducto;
        $this->nombreProducto = $nombreProducto;
        $this->imagen = $imagen;
        $this->activo = $activo;
        $this->idCate = $idCate;
    }
<<<<<<< HEAD
    function getIdProducto() {
        return $this->idProducto;
    }

    function getCodProducto() {
        return $this->codProducto;
    }

    function getNombreProducto() {
        return $this->nombreProducto;
    }

    function getImagen() {
        return $this->imagen;
    }

    function getActivo() {
        return $this->activo;
    }

    function getIdCate() {
        return $this->idCate;
    }

    function setIdProducto($idProducto) {
        $this->idProducto = $idProducto;
    }

    function setCodProducto($codProducto) {
        $this->codProducto = $codProducto;
    }

    function setNombreProducto($nombreProducto) {
        $this->nombreProducto = $nombreProducto;
    }

    function setImagen($imagen) {
        $this->imagen = $imagen;
    }

    function setActivo($activo) {
        $this->activo = $activo;
    }

    function setIdCate($idCate) {
        $this->idCate = $idCate;
    }


}

?>
=======
    
    public function getIdProducto() {
        return $this->idProducto;
    }

    public function getCodProducto() {
        return $this->codProducto;
    }

    public function getNombreProducto() {
        return $this->nombreProducto;
    }

    public function getImagen() {
        return $this->imagen;
    }

    public function getActivo() {
        return $this->activo;
    }

    public function getIdCate() {
        return $this->idCate;
    }

    public function setIdProducto($idProducto) {
        $this->idProducto = $idProducto;
    }

    public function setCodProducto($codProducto) {
        $this->codProducto = $codProducto;
    }

    public function setNombreProducto($nombreProducto) {
        $this->nombreProducto = $nombreProducto;
    }

    public function setImagen($imagen) {
        $this->imagen = $imagen;
    }

    public function setActivo($activo) {
        $this->activo = $activo;
    }

    public function setIdCate($idCate) {
        $this->idCate = $idCate;
    }

}
>>>>>>> 7b1c33b5b5cd4a1c7bf21e492454f6f11760bd51
