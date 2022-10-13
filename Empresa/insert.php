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
    
    //insertar original
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

   
    //llenado de sucursal centro
    $claveC = $_POST['clave'];
    $nombreC = $_POST['nombre'];
    $direccionC = $_POST['direccion'];
    $sucursalC = $_POST['sucursal'];
    $saldoC = $_POST['saldo'];
    $codigo_postalC = $_POST['codigo_postal'];
    $rfcC = $_POST['rfc'];
        
if($sucursalC == 'centro'){
//insertar Centro
$query1 = $connection->prepare("INSERT INTO centro(clave,nombre,direccion,sucursal,saldo,codigo_postal,rfc) 
VALUES (:clave,:nombre,:direccion,:sucursal,:saldo,:codigo_postal,:rfc)");
$query1->bindParam("clave", $claveC, PDO::PARAM_INT);
$query1->bindParam("nombre", $nombreC,PDO::PARAM_STR);
$query1->bindParam("direccion", $direccionC,PDO::PARAM_STR);
$query1->bindParam("sucursal", $sucursalC,PDO::PARAM_STR);
$query1->bindParam("saldo", $saldoC,PDO::PARAM_INT);
$query1->bindParam("codigo_postal", $codigo_postalC,PDO::PARAM_INT);
$query1->bindParam("rfc", $rfcC,PDO::PARAM_STR);
$result1 = $query1->execute();
}


        
        
       
    //llenado de sucursal aduana
    $claveA = $_POST['clave'];
    $nombreA = $_POST['nombre'];
    $direccionA = $_POST['direccion'];
    $sucursalA = $_POST['sucursal'];
    $saldoA = $_POST['saldo'];
    $codigo_postalA = $_POST['codigo_postal'];
    $rfcA = $_POST['rfc'];
    

    if($sucursalA == 'aduana'){
 //insertar aduana
 $query2 = $connection->prepare("INSERT INTO aduana(clave,nombre,direccion,sucursal,saldo,codigo_postal,rfc) 
 VALUES (:clave,:nombre,:direccion,:sucursal,:saldo,:codigo_postal,:rfc)");
 $query2->bindParam("clave", $claveA, PDO::PARAM_INT);
 $query2->bindParam("nombre", $nombreA,PDO::PARAM_STR);
 $query2->bindParam("direccion", $direccionA,PDO::PARAM_STR);
 $query2->bindParam("sucursal", $sucursalA,PDO::PARAM_STR);
 $query2->bindParam("saldo", $saldoA,PDO::PARAM_INT);
 $query2->bindParam("codigo_postal", $codigo_postalA,PDO::PARAM_INT);
 $query2->bindParam("rfc", $rfcA,PDO::PARAM_STR);
 $result = $query2->execute();
    }
       

    
    //llenado de tabla FV1
    $claveFV1 = $_POST['clave'];
    $nombreFV1 = $_POST['nombre'];
    $direccionFV1 = $_POST['direccion'];
    $sucursalFV1 = $_POST['sucursal'];
    
        //insertar FV1
        $query3 = $connection->prepare("INSERT INTO fv1(clave,nombre,direccion,sucursal) 
        VALUES (:clave,:nombre,:direccion,:sucursal)");
        $query3->bindParam("clave", $claveFV1, PDO::PARAM_INT);
        $query3->bindParam("nombre", $nombreFV1,PDO::PARAM_STR);
        $query3->bindParam("direccion", $direccionFV1,PDO::PARAM_STR);
        $query3->bindParam("sucursal", $sucursalFV1,PDO::PARAM_STR);
        $result3 = $query3->execute();

       

     //llenado de tabla FV2
     $claveFV2 = $_POST['clave'];
     $saldoFV2 = $_POST['saldo'];
     $codigo_postalFV2 = $_POST['codigo_postal'];
     $rfcFV2 = $_POST['rfc'];

        //insertar FV2
        $query4 = $connection->prepare("INSERT INTO fv2(clave,saldo,codigo_postal,rfc) 
        VALUES (:clave,:saldo,:codigo_postal,:rfc)");
        $query4->bindParam("clave", $claveFV2, PDO::PARAM_INT);
        $query4->bindParam("saldo", $saldoFV2,PDO::PARAM_INT);
        $query4->bindParam("codigo_postal", $codigo_postalFV2,PDO::PARAM_INT);
        $query4->bindParam("rfc", $rfcFV2,PDO::PARAM_STR);
         $result4 = $query4->execute();

         
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