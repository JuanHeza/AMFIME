<?php
session_start();
	require_once 'Lib.php';
  $nombre = $_POST['nombre'];
	$usuario = $_POST['matricula'];
	$rfc = $_POST['rfc'];
	$contraseña= $_POST['contraseña'];
	$valcontraseña = $_POST['valcontraseña'];
	if ($valcontraseña == $contraseña) {
		$ul = array();
		$ul = agregarUsuario($nombre, $usuario,$rfc, $contraseña);
		if($ul == NULL){
			header("location:Error.php");
		} else {
			$_SESSION['ul'] = $ul;
			header("location:Main.php");
		}
	}
	else {
		echo "<script> alert('Confirme denuevo su contraseña') </script>";
		header("location:Login.php");
	}
?>
