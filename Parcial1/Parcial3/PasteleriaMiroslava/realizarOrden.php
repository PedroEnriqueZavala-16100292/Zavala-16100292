<?php
session_start();
require 'data/conexion.php';

if (isset($_SESSION['carrito'])) {
    $email = $_SESSION['username'];
    $arregloCarrito = $_SESSION['carrito'];

    $cliente = "SELECT clienteID FROM clientes WHERE email='$email'";
    $resulCliente = mysqli_query($conexion, $cliente);
    $fecha = date('d-m-Y');
        
    while($e = mysqli_fetch_array($resulCliente)){
        $cliente_id= $e['clienteID'];
        $query = "INSERT INTO ordenes(cliente_id,fecha) VALUES($cliente_id,'$fecha')";
        $resultOrden = mysqli_query($conexion,$query);
        if($resultOrden){
            echo "<script> alert('Orden OK') </script>";    
        }else{
            echo "<script> alert('E R R O R') </script>";
        }
    }


 
    

    $consultOrden = "SELECT MAX(ordenID) FROM ordenes";
    $rest = mysqli_query($conexion, $consultOrden);
    while($e = mysqli_fetch_array($rest)){
        $orden_id= $e['MAX(ordenID)'];
        for ($i=0; $i < count($arregloCarrito) ; $i++) { 
            $id = $arregloCarrito[$i]['ID'];
            $cantidad = $arregloCarrito[$i]['Cantidad'];
    
            $query = "INSERT INTO pedidos(pastel_id,cantidad,orden_id) VALUES($id,$cantidad,$orden_id)";
            $resultquery = mysqli_query($conexion,$query);
        }
        if($resultquery){
            echo "<script> alert('Pedido OK') </script>";
        }else{
            echo "<script> alert('E R R O R PEDIDO') </script>";
        }
    }
    
   
    $_SESSION['carrito'] = null;
    require 'index.php';

}else{
    echo "<script> alert ('No hay nada que ordenar'); </script>";
    require 'menu.php';
}
