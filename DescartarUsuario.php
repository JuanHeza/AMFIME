<?php

require_once 'Lib.php';

$mat_user = $_POST['mat_user'];

if(descartarUser($mat_user)) {
	}
else {
	echo "<h1 align = 'center'>No se logro descartar </h1>";
}

require_once 'RepAdmin.php';

?>
