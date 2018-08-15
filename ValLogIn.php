<?php
session_start();
	require_once 'Lib.php';
	$usuario = $_POST['usuario'];
	$contraseña= $_POST['contraseña'];
	$ul = array();
	$ul = checkCredsUsuario($usuario, $contraseña);
	if($ul == NULL){
		header("location:Error.php");
	} else {
		$_SESSION['ul'] = $ul;
		header("location:Inicio.php");
	}
?>
