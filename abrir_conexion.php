<?php
    $host="localhost";
    $basededatos="tienda";
    $usuariobd="ANGEL";
    $clavebd="12345";
    
    $tabla_bd1="clientes";

    error_reporting(0);

    $conexion=new mysqli($host,$usuariobd,$clavebd,$basededatos);

    if ($conexion->connect_errno){
        echo "La tienda presenta fallos en el servidor...";
        exit();
    }
?>