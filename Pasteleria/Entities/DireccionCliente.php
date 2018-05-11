<?php
//17:09
    class DireccionCliente{
        //put your code here
    private $idDireccion;
    private $idCliente;
    private $nombres;
    private $apellidos;
    private $informacion;
    private $code;
    private $idComuna;
    private $celular;
    private $telefono;
    
    function __construct($idDireccion, $idCliente, $nombres, $apellidos, $informacion, $code, $idComuna, $celular, $telefono) {
        $this->idDireccion = $idDireccion;
        $this->idCliente = $idCliente;
        $this->nombres = $nombres;
        $this->apellidos = $apellidos;
        $this->informacion = $informacion;
        $this->code = $code;
        $this->idComuna = $idComuna;
        $this->celular = $celular;
        $this->telefono = $telefono;
    }
    function getIdDireccion() {
        return $this->idDireccion;
    }

    function getIdCliente() {
        return $this->idCliente;
    }

    function getNombres() {
        return $this->nombres;
    }

    function getApellidos() {
        return $this->apellidos;
    }

    function getInformacion() {
        return $this->informacion;
    }

    function getCode() {
        return $this->code;
    }

    function getIdComuna() {
        return $this->idComuna;
    }

    function getCelular() {
        return $this->celular;
    }

    function getTelefono() {
        return $this->telefono;
    }

    function setIdDireccion($idDireccion) {
        $this->idDireccion = $idDireccion;
    }

    function setIdCliente($idCliente) {
        $this->idCliente = $idCliente;
    }

    function setNombres($nombres) {
        $this->nombres = $nombres;
    }

    function setApellidos($apellidos) {
        $this->apellidos = $apellidos;
    }

    function setInformacion($informacion) {
        $this->informacion = $informacion;
    }

    function setCode($code) {
        $this->code = $code;
    }

    function setIdComuna($idComuna) {
        $this->idComuna = $idComuna;
    }

    function setCelular($celular) {
        $this->celular = $celular;
    }

    function setTelefono($telefono) {
        $this->telefono = $telefono;
    }


        public function __toString(){
            return 
            "{" . chr(34) . "IdComuna" . chr(34) . ":" . chr(34) . $this->getIdComuna() . chr(34) 
                . "," . chr(34) . "NombreComuna" . chr(34) . ":" . chr(34) . $this->getNombreComuna() . chr(34) 
                . "," . chr(34) . "Activo" . chr(34) . ":" . chr(34) . $this->getActivo() . chr(34) 
            . "}";
        }   

        public function imprimir(){
            echo $this->__toString();
        }
    }




?>