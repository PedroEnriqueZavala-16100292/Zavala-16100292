<?php
	include_once './php/config.php';

	$sentencia_select=$connection->prepare('SELECT * FROM original ORDER BY clave DESC');
	$sentencia_select->execute();
	$resultado=$sentencia_select->fetchAll();

	// metodo buscar
	if(isset($_POST['btn_buscar'])){
		$buscar_text=$_POST['buscar'];
		$select_buscar=$connection->prepare('
			SELECT *FROM original WHERE clave LIKE :campo OR clave LIKE :campo;'
		);

		$select_buscar->execute(array(
			':campo' =>"%".$buscar_text."%"
		));

		$resultado=$select_buscar->fetchAll();

	}

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Inicio</title>
	<link rel="stylesheet" href="./css/HojaEstilosEmpresa.css">
</head>
<body>
	<div class="contenedor">
		<h2>CRUD BASICO EMPRESA</h2>
		<div class="barra__buscador">
			<form action="" class="formulario" method="post">
				<input type="text" name="buscar" placeholder="Buscar por clave" 
				value="<?php if(isset($buscar_text)) echo $buscar_text; ?>" class="input__text">
				<input type="submit" class="btn" name="btn_buscar" value="Buscar">
				<a href="./insert.html" class="btn btn__nuevo">Nuevo</a>
			</form>
		</div>
		<table>
			<tr class="head">
				<td>clave</td>
				<td>nombre</td>
				<td>direccion</td>
				<td>sucursal</td>
				<td>saldo</td>
				<td>codigo_postal</td>
				<td>rfc</td>
				<td colspan="2">Acción</td>
			</tr>
			<?php foreach($resultado as $fila):?>
				<tr >
					<td><?php echo $fila['clave']; ?></td>
					<td><?php echo $fila['nombre']; ?></td>
					<td><?php echo $fila['direccion']; ?></td>
					<td><?php echo $fila['sucursal']; ?></td>
					<td><?php echo $fila['saldo']; ?></td>
					<td><?php echo $fila['codigo_postal']; ?></td>
					<td><?php echo $fila['rfc']; ?></td>
					<td><a href="./Update.php?clave=<?php echo $fila['clave']; ?>"  class="btn__update" >Editar</a></td>
					<td><a href="./Delete.php?clave=<?php echo $fila['clave']; ?>" class="btn__delete">Eliminar</a></td>
				</tr>
			<?php endforeach ?>

		</table>
	</div>
</body>
</html>