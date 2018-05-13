<?php
    if (!isset($rootDir)) $rootDir = $_SERVER['DOCUMENT_ROOT'];

    require_once($rootDir . "/BD/bd.php");
    require_once($rootDir . "/Entities/Boleta.php");

    class BoletaDAO {
        public static function sqlInsert($boleta){

            $sentencia = "insert into boleta ".
                "(id_boleta, total, id_empleado, id_forma_pago, id_sucursal, id_pedido_local)".
                "values ("
                    .$boleta->getIdBoleta().","
                    .$boleta->getTotal().","
                    .$boleta->getIdEmpleado().","
                    .$boleta->getIdFormaPago().","
                    .$boleta->getIdSucursal().","
                    .$boleta->getIdPedidoLocal()
                .")";

            return BD::getInstance()->sqlEjecutar($sentencia);
        }

        public static function sqlUpdate($boleta){
            
        }

        public static function sqlDelete($boleta){

        }

        public static function sqlSelect($boleta){

        }

    }
?>