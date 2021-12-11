<?php
session_start();
include 'data/conexion.php';
$email = $_SESSION['username'];

$query = "DELETE FROM clientes WHERE email = '$email'";
$result = mysqli_query($conexion,$query);
session_unset();

if($result){
    echo "<script> alert('Eliminación OK')</script>";
}else{
    echo "<script> alert('E R R O R')</script>";
}
require 'login.php'; 
?>