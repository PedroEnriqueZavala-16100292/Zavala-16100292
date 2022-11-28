<?php
$servidor = "localhost";
$basedatos = "recetas";
$usuario = "root";
$password = "";

$con = mysqli_connect($servidor,$basedatos,$usuario,$password) or die("No se pudo conectar al servidor");
$consulta = "SELECT * FROM  recetaspacientes";
$registros = mysqli_query($con,$consulta) or die ("problemas si");
/*die($consulta);*/


$result = mysqli_fetch_all($registros);

mysqli_close($con);
return json_encode($result);

?>