<?php

include "conectar.php";

try {
    $consultaSql = "Id_Doctor,NombreDoctor from Doctor";
    $consultaSql1 = "Id_Paciente,Nombre,ApellidoPaterno,ApellidoMaterno,Peso,Estatura,Edad,Alergico,CorreoElectronico,IndicacionesMedicas from Paciente";
    $consulta = $con -> prepare($consultaSql);
    $consulta1 = $con -> prepare($consultaSql1);
    $consulta -> execute();
    $consulta1 -> execute();
    $resultado = $consulta->fetch(PDO::FETCH_ASSOC);
    $resultado1 = $consulta1->fetch(PDO::FETCH_ASSOC);


    //Siguiente registro como array asaociativo
    //--------------------------------------------------------------------
    print"<h2><pre>PDO::FETCH_ASOC</pre></h2>";
    print "<br>";
    var_dump($resultado);
    print "<br>";
    printf("<b>Id_Doctor    = </b> %s <br>",$resultado['Id_Doctor']);
    printf("<b>NombreDoctor = </b> %s <br>",$resultado['NombreDoctor']);
    print "<br><br><br>";

    print"<h2><pre>PDO::FETCH_ASOC</pre></h2>";
    print "<br>";
    var_dump($resultado1);
    print "<br>";
    printf("<b>Id_Paciente    = </b> %s <br>",$resultado1['Id_Paciente']);
    printf("<b>Nombre = </b> %s <br>",$resultado1['Nombre']);
    printf("<b>ApellidoPaterno = </b> %s <br>",$resultado1['ApellidoPaterno']);
    printf("<b>ApellidoMaterno = </b> %s <br>",$resultado1['ApellidoMaterno']);
    printf("<b>Peso = </b> %s <br>",$resultado1['Peso']);
    printf("<b>Estatura = </b> %s <br>",$resultado1['Estatura']);
    printf("<b>Edad = </b> %s <br>",$resultado1['Edad']);
    printf("<b>Alergico = </b> %s <br>",$resultado1['Alergico']);
    printf("<b>CorreoElectronico = </b> %s <br>",$resultado1['CorreoElectronico']);
    printf("<b>IndicacionesMedicas = </b> %s <br>",$resultado1['IndicacionesMedicas']);
    print "<br><br><br>";

    $consulta->closeCursor();
    $consulta1->closeCursor();

} catch(PDOException $e) {
    echo "Error de consulta a la base de datos";
    echo $e->getMessage();
}
?>
