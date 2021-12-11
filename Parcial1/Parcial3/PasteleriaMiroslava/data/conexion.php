<?php
    $server = 'localhost';
    $user = 'root';
    $pass = '';
    $dbName = 'pasteleria';

    $conexion = mysqli_connect($server,$user,$pass,$dbName);
    if (!$conexion) {
        die("No hay conexion: ".mysqli_connect_error());
    }
?>    
