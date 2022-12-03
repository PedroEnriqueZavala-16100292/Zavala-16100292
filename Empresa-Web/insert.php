<?php
 
include('./php/config.php');
session_start();
 
/*if (isset($_POST['Registro'])) {*/
    $clave = $_POST['clave'];
    $nombre = $_POST['nombre'];
    $direccion = $_POST['direccion'];
    $sucursal = $_POST['sucursal'];
    $saldo = $_POST['saldo'];
    $codigo_postal = $_POST['codigo_postal'];
    $rfc = $_POST['rfc'];
    

        $query = $connection->prepare("INSERT INTO original(clave,nombre,direccion,sucursal,saldo,codigo_postal,rfc) 
        VALUES (:clave,:nombre,:direccion,:sucursal,:saldo,:codigo_postal,:rfc)");
        $query->bindParam("clave", $clave, PDO::PARAM_INT);
        $query->bindParam("nombre", $nombre,PDO::PARAM_STR);
        $query->bindParam("direccion", $direccion,PDO::PARAM_STR);
        $query->bindParam("sucursal", $sucursal,PDO::PARAM_STR);
        $query->bindParam("saldo", $saldo,PDO::PARAM_INT);
        $query->bindParam("codigo_postal", $codigo_postal,PDO::PARAM_INT);
        $query->bindParam("rfc", $rfc,PDO::PARAM_STR);
        

        $result = $query->execute();
 
        if ($result) {
            echo '<p class="success">Se agrego un registro!</p>';
            header('Location: inicio.php');
            exit;
        } else {
            echo $result;
            echo '<p class="error">Algo salió mal, verifique los datos!</p>';
        }
/*}*/

?>