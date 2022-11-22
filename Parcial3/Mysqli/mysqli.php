<?php
$servidor = "localhost";
$basedatos = "recetas";
$usuario = "root";
$password = "";

$con = mysqli_connect($servidor,$usuario,$password,$basedatos) or die("No se pudo conectar al servidor");
$consulta = "select * from recetaspacientes";
$registros = mysqli_query($con,$consulta) or die ("problemas si");

$result = mysqli_fetch_all($registros);

mysqli_close($con);
echo json_encode($result);

?>