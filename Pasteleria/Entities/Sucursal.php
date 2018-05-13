<?php

class Sucursal {
  private $idSucursal;
  private $nombreSucursal;
  
  function __construct($idSucursal, $nombreSucursal) {
      $this->idSucursal = $idSucursal;
      $this->nombreSucursal = $nombreSucursal;
  }
  function getIdSucursal() {
      return $this->idSucursal;
  }

  function getNombreSucursal() {
      return $this->nombreSucursal;
  }

  function setIdSucursal($idSucursal) {
      $this->idSucursal = $idSucursal;
  }

  function setNombreSucursal($nombreSucursal) {
      $this->nombreSucursal = $nombreSucursal;
  }


    
}

?>