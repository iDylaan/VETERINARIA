<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "Intclosesiando";
    $conexion = mysqli_connect($host, $user, $pass, $db);
    if ( !$conexion ){
        echo "Conexion fallida";
        exit;
    }
