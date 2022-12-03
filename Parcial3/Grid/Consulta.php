<?php
$servidor = "localhost";
$basedatos = "recetasmedicas";
$usuario = "root";
$password = "";
$port = "3308";

$con = mysqli_connect($servidor,$usuario,$password,$basedatos,$port) or die("No se pudo conectar al servidor");
$consulta = "select * from recetaspaci";
$registros = mysqli_query($con,$consulta) or die ("problemas si");
/*die($consulta);*/
$result = mysqli_fetch_all($registros, MYSQLI_ASSOC);

mysqli_close($con);
echo json_encode($result);

?>