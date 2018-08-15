<<?php
require_once 'Conexion.php';

function checkCredsUsuario($usuario, $contraseña){
	$pwd = md5($contraseña);
	$query = " SELECT mat_user, nom_user,tel_user,mail_user, dir_user,admin
	FROM user
	WHERE mat_user = '{$usuario}' AND contra_user = '{$pwd}' ";
	$conn = getdb();
	$result = mysqli_query($conn, $query);
	$dataset = null;
	while ($a = mysqli_fetch_object($result) ) {
		$dataset = $a;
	}
	mysqli_close($conn);
	return $dataset;
}

function agregarUsuario($nombre,$usuario,$rfc,$contraseña) {
	$pwd = md5($contraseña);
	$sql = " INSERT INTO user
				(nom_user, mat_user, rfc_user, contra_user, admin)
				VALUES ('{$nombre}','{$usuario}','{$rfc}','{$pwd}',2)";
	$conn = getdb();
	$result;
	if($conn->query($sql) === TRUE) {
		$result = TRUE;
	} else {
		$result = FALSE;
	}
	return $result;
}

function getUser() {

	$query = "SELECT mat_user, nom_user, rfc_user FROM user WHERE admin=2";
	$conn = getdb();
	$result = mysqli_query($conn, $query);
	$dataset = Array();
	while ($a = mysqli_fetch_object($result) ) {
		$dataset[] = $a;
	}
	mysqli_close($conn);
	return $dataset;
}

function aceptarUser($mat_user){
 	$sql = "UPDATE user SET admin = 0 WHERE mat_user = '{$mat_user}' ";
	$conn = getdb();
	$result;
	if ($conn -> query($sql) === TRUE) {
		$result = TRUE;
	} else {
		$result = FALSE;
	}
 	return $result;
 }

 function descartarUser($mat_user){
	$sql = "DELETE FROM user WHERE mat_user = '{$mat_user}'";
	$conn = getdb();
	$result;
	if($conn->query($sql) === TRUE) {
		$result = TRUE;
	} else {
		$result = FALSE;
	}
	return $result;
}

 ?>
