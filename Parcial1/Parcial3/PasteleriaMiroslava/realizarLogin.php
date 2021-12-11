<?php
require_once 'data/conexion.php';

session_start();

$email = $_POST['email'];
$pass = $_POST['password'];

$query = "SELECT COUNT(*) AS cantidad FROM clientes WHERE email = '$email' AND contrasena = '$pass'";
$result = mysqli_query($conexion,$query);
$array = mysqli_fetch_array($result);

if ($array['cantidad'] > 0) {
    $_SESSION['username'] = $email;
    header("location: index.php");
}else{
    echo "<script> alert('Usuario y/o contraseña incorrectos'); </script>";
    require_once 'login.php';
}
?>
