<?php 

	include_once './php/config.php';
	if(isset($_GET['clave'])){
		$clave=(int) $_GET['clave'];
		$delete=$connection->prepare('DELETE FROM original WHERE clave=:clave');
		$delete->execute(array(
			':clave'=>$clave
		));
		header('Location: inicio.php');
	}else{
		header('Location: inicio.php');
	}
 ?>