<?php
    $usuario = $_POST['usuario'];
    $pass = $_POST['pass'];

    echo "$usuario y $pass";


    if($usuario=="1"){
        echo "Hola Administrador";
    }    
    if($usuario=="2"){
        echo "Hola Vendedor";
    }    
    if($usuario=="3"){
        echo "Hola cajero";
    }
?>