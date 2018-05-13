<?php
<<<<<<< HEAD

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
=======
class FormaEnvio {
    /* CREATE TABLE forma_envio (
    id_forma_envio   INTEGER NOT NULL,
    nombre_envio     VARCHAR(30) NOT NULL
    ); */
    
    private $idFormaEnvio;
    private $nombreEnvio;
    
    public function __construct($idFormaEnvio, $nombreEnvio) {
        $this->idFormaEnvio = $idFormaEnvio;
        $this->nombreEnvio = $nombreEnvio;
    }

    public function getIdFormaEnvio() {
        return $this->idFormaEnvio;
    }

    public function getNombreEnvio() {
        return $this->nombreEnvio;
    }

    public function setIdFormaEnvio($idFormaEnvio) {
        $this->idFormaEnvio = $idFormaEnvio;
    }

    public function setNombreEnvio($nombreEnvio) {
        $this->nombreEnvio = $nombreEnvio;
    }
    
}
>>>>>>> 7b1c33b5b5cd4a1c7bf21e492454f6f11760bd51
