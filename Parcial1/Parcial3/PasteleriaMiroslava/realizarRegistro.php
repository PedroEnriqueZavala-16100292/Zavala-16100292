<?php
require_once 'data/conexion.php';

if(strlen($_POST['nombre']) <= 1 
   || strlen($_POST['apellido']) <= 1 
   || strlen($_POST['telefono']) <= 1 
   || strlen($_POST['codpostal']) <= 1 
   || strlen($_POST['email']) <= 1 
   ||strlen($_POST['pass']) <= 1){
    echo "<script> alert('No dejar campos vacios'); </script>";
    require 'registro.php';
}else{
    $nombre = trim($_POST['nombre']);
    $apellido = trim($_POST['apellido']);
    $telefono = trim($_POST['telefono']);
    $codpostal = trim($_POST['codpostal']);
    $email = trim($_POST['email']);
    $pass = trim($_POST['pass']);

    $query = "INSERT INTO clientes (nombre,apellido,telefono,codigoPostal,email,contrasena) VALUES ('$nombre','$apellido','$telefono','$codpostal','$email','$pass')";
    $result = mysqli_query($conexion,$query); 
    if($query){
        echo "<script> alert('Registrado correctamente'); </script>";
    }else{
        echo "<script> alert('Error al registrarse'); </script>";
    }
    require 'login.php';
}

?>