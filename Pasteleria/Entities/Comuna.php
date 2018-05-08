<?php
    class Comuna{
        private $idComuna;
        private $nombreComuna;
        private $activo;

        public function getIdComuna(){
			return $this->idComuna;
		}
		public function setIdComuna($idComuna){
			$this->idComuna = $idComuna;
        }
        
        public function getNombreComuna(){
			return $this->nombreComuna;
		}
		public function setNombreComuna($nombreComuna){
            if($nombreComuna==null || strlen($nombreComuna)>1 && strlen($nombreComuna)<20)
                throw new Exception ("Error, nombre de comuna no cumple con los requisitos");
			$this->nombreComuna = $nombreComuna;
        }

        public function getActivo(){
			return $this->activo;
		}
		public function setActivo($activo){
			$this->activo = $activo;
        }

        public function Comuna($idComuna=0, $nombreComuna=null, $idComuna=0){
			$this->setIdComuna($idComuna);
			$this->setNombreComuna($nombreComuna);
			$this->setActivo($activo);
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