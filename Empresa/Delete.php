<?php 

	include_once './php/config.php';
	if(isset($_GET['clave'])){
		//eliminar original 
		$clave=(int) $_GET['clave'];
		$delete=$connection->prepare('DELETE FROM original WHERE clave=:clave');
		$delete->execute(array(
			':clave'=>$clave
		));

		//eliminar centro
		$clave=(int) $_GET['clave'];
		$delete=$connection->prepare('DELETE FROM centro WHERE clave=:clave');
		$delete->execute(array(
			':clave'=>$clave
		));

		//eliminar aduana
		$clave=(int) $_GET['clave'];
		$delete=$connection->prepare('DELETE FROM aduana WHERE clave=:clave');
		$delete->execute(array(
			':clave'=>$clave
		));

		//eliminar FV1
		$clave=(int) $_GET['clave'];
		$delete=$connection->prepare('DELETE FROM fv1 WHERE clave=:clave');
		$delete->execute(array(
			':clave'=>$clave
		));

		//eliminar FV2
		$clave=(int) $_GET['clave'];
		$delete=$connection->prepare('DELETE FROM fv2 WHERE clave=:clave');
		$delete->execute(array(
			':clave'=>$clave
		));

		header('Location: inicio.php');
	}else{
		header('Location: inicio.php');
	}


 ?>