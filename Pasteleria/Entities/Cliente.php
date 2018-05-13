<?php

class Cliente {

    private $idCliente;
    private $rutCliente;
    private $nombres;
    private $apellidos;
    private $fechaNacimiento;
    private $idComuna;
    private $telefono;
    private $correo;
    private $activo;

    function __construct($idCliente, $rutCliente, $nombres, $apellidos, $fechaNacimiento, $idComuna, $telefono, $correo, $activo) {
        $this->idCliente = $idCliente;
        $this->rutCliente = $rutCliente;
        $this->nombres = $nombres;
        $this->apellidos = $apellidos;
        $this->fechaNacimiento = $fechaNacimiento;
        $this->idComuna = $idComuna;
        $this->telefono = $telefono;
        $this->correo = $correo;
        $this->activo = $activo;
    }

    function getIdCliente() {
        return $this->idCliente;
    }

    function getRutCliente() {
        return $this->rutCliente;
    }

    function getNombres() {
        return $this->nombres;
    }

    function getApellidos() {
        return $this->apellidos;
    }

    function getFechaNacimiento() {
        return $this->fechaNacimiento;
    }

    function getIdComuna() {
        return $this->idComuna;
    }

    function getTelefono() {
        return $this->telefono;
    }

    function getCorreo() {
        return $this->correo;
    }

    function getActivo() {
        return $this->activo;
    }

    function setIdCliente($idCliente) {
        $this->idCliente = $idCliente;
    }

    function setRutCliente($rutCliente) {
        $this->rutCliente = $rutCliente;
    }

    function setNombres($nombres) {
        $this->nombres = $nombres;
    }

    function setApellidos($apellidos) {
        $this->apellidos = $apellidos;
    }

    function setFechaNacimiento($fechaNacimiento) {
        $this->fechaNacimiento = $fechaNacimiento;
    }

    function setIdComuna($idComuna) {
        $this->idComuna = $idComuna;
    }

    function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    function setCorreo($correo) {
        $this->correo = $correo;
    }

    function setActivo($activo) {
        $this->activo = $activo;
    }

}

?>
