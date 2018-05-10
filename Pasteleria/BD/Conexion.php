<?php
    class BD{
        private $enlace;
        private $stHost='localhost';
        private $stUsuario='root'; 
        private $stClave='';
        private $stBd='pastel';

        public function BD()
        {
            $this->enlace = new PDO("mysql:host=" . $this->stHost . ";dbname=" .$this->stBd ,$this->stUsuario ,$this->stClave);
        }
    }
?> 
