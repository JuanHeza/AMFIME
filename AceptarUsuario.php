<?php

require_once 'Lib.php';

$mat_user = $_POST['mat_user'];

if(aceptarUser($mat_user)) {
	}
else {
	echo "<h1 align = 'center'>No se logro aceptar </h1>";
}
 require_once 'RepAdmin.php';

?>
