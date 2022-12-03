<?php

$fechaHoy = date('Y/m/d H:i:s');
$siguientesemana = time() + (7 + 24 * 60 *60);
$fechaexpira = date('Y/m/d H:i:s', $siguientesemana);

echo '<b>Fecha creacion de cookie : <b>' .$fechaHoy;
echo '<b>Fecha vencimiento de cookie : <b>' .$fechaexpira;

setcookie("ultimateVisita", $fechaHoy,time() + (7*24*60*60));

?>