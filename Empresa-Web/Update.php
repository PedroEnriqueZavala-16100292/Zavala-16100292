<?php
	include_once './php/config.php';
    
	if(isset($_GET['clave'])){    
		$clave = (int)$_GET['clave'];

		$buscar_clave=$connection->prepare('SELECT * FROM original WHERE clave=:clave LIMIT 1');
		$buscar_clave->execute(array(
			':clave'=>$clave
		));
		$resultado=$buscar_clave->fetch();
    }else{
		header('Location: Automoviles.php');
	}



	if(isset($_POST['Guardar']))
	{
		$clave = (int)$_GET['clave'];
		$nombre = $_POST['nombre'];
		$direccion = $_POST['direccion'];
		$sucursal = $_POST['sucursal'];
		$saldo = $_POST['saldo'];
		$codigo_postal = $_POST['codigo_postal'];
		$rfc = $_POST['rfc'];

		$consulta_update=$connection->prepare('UPDATE original SET  
		nombre=:nombre,
		direccion=:direccion,
		sucursal=:sucursal,
		saldo=:saldo,
		codigo_postal=:codigo_postal,
		rfc=:rfc
		WHERE clave=:clave;'
		);
		$consulta_update->execute(array(
		':clave'=>$clave,
		':nombre'=>$nombre,
		':direccion'=>$direccion,
		':sucursal'=>$sucursal,
		':saldo'=>$saldo,
		':codigo_postal'=>$codigo_postal,
		':rfc'=>$rfc
		));
		header('Location: inicio.php');	
	}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Editar usuario</title>
	<link rel="stylesheet"
    href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
	<link rel="stylesheet"  href ="css/HojaEstilos.css">
</head>
<body>
    <form class="formulario" method="post">
		<h1>Editar usuario</h1>
		<div class="contenedor">
            <div class ="input-contenedor">
				<label>Clave:     </label>
				<input type="text" name="clave" value="<?php if($resultado) echo $resultado['clave']; ?>" class="input__text" disabled>
			</div>
			<div class ="input-contenedor">
				<label>Nombre:    </label>
				<input type="text" name="nombre" value="<?php if($resultado) echo $resultado['nombre']; ?>" class="input__text">
		    </div>
			<div class ="input-contenedor">
			    <label>Direccion: </label>	
			    <input type="text" name="direccion" value="<?php if($resultado) echo $resultado['direccion']; ?>" class="input__text">
		    </div>
			<div class ="input-contenedor">	
				<label>Sucursal:  </label>
				<input type="text" name="sucursal" value="<?php if($resultado) echo $resultado['sucursal']; ?>" class="input__text">
			</div>
			<div class ="input-contenedor">
			    <label>Saldo:      </label>
			    <input type="text" name="saldo" value="<?php if($resultado) echo $resultado['saldo']; ?>" class="input__text">
			</div>
			<div class ="input-contenedor">	
				<label>Codigo postal: </label>
				<input type="text" name="codigo_postal" value="<?php if($resultado) echo $resultado['codigo_postal']; ?>" class="input__text">
		    </div>
			<div class ="input-contenedor">
			    <label>RFC:        </label>
			    <input type="text" name="rfc" value="<?php if($resultado) echo $resultado['rfc']; ?>" class="input__text left">
			</div>
			<div class="btn__group">
				<button href="inicio.php" class="">Cancelar</button>
				<input type="submit" name="Guardar" value="Guardar" class="button">
			</div>
        </div>
	</form>
</body>
</html>
