<?php

class BD {

    private $enlace;
    private $stHost = 'localhost';
    private $stUsuario = 'root';
    private $stClave = '';
    private $stBd = 'pasteleria';

    // Constructor de BD
    public function BD() {
        //$mbd = new PDO('mysql:host=localhost;dbname=prueba', $usuario, $contraseña);
        $this->enlace = new PDO("mysql:host=" . $this->stHost . ";dbname=" . $this->stBd
                , $this->stUsuario
                , $this->stClave);
    }

    // Ejecuta una instrucción Insert, Update o Delete
    // Recibe como parámetro la sentencia sql.
    public function sqlEjecutar($stSql) {
        // Prepara la sentencia sql
        // en la BD abierta, asociada al enlace
        $sentencia = $this->enlace->prepare($stSql);
        // Ejecuta la sentencia Sql
        $resultado = $sentencia->execute();
        // Si el resultado es true ejecuta la sentencia sin problemas
        if (!$resultado)
            print_r($sentencia->errorInfo());
        // El hecho que se ejecute
        // , no significa que existan registros afectados
        // por lo tanto retornamos la cantidad de registros afectados
        return $sentencia->rowCount();
    }

    private static $miConexion;
   
	public static function getInstance(){
	    if (self::$miConexion == null){
		   //echo "Instancia Nulla<br>";
		   self::$miConexion = new BD();
		}
	     return self::$miConexion;
	}
}

?>
