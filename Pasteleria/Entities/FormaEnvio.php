<?php

class FormaEnvio {
  private $idFormaEnvio;  
  private $nombreEnvio;
  
  function __construct($idFormaEnvio, $nombreEnvio) {
      $this->idFormaEnvio = $idFormaEnvio;
      $this->nombreEnvio = $nombreEnvio;
  }
  function getIdFormaEnvio() {
      return $this->idFormaEnvio;
  }

  function getNombreEnvio() {
      return $this->nombreEnvio;
  }

  function setIdFormaEnvio($idFormaEnvio) {
      $this->idFormaEnvio = $idFormaEnvio;
  }

  function setNombreEnvio($nombreEnvio) {
      $this->nombreEnvio = $nombreEnvio;
  }


}

?>