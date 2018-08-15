<?php
require_once'Main.php';

//print_r($_SESSION['ul']);
$nom = $_SESSION['ul']->nom_user;
echo "<center><h1>Bienvenido ";
echo "$nom";
echo "</h1></center>";
?>
<script>
		document.getElementById("Titulo").innerHTML = 'Inicio'
		document.getElementById("Cuerpo").innerHTML= '';
</script>
<!--
<div id="sidebar">
			<ul id="content" class="nav nav-pills nav-stacked" style="max-width: 250px;">
				<li class="active"><a href="Inicio.php"><span class="glyphicon glyphicon-home"></span>  Inicio</a></li>
				<li ><a href="QueEs.php"><span class="glyphicon glyphicon-info-sign"></span>  ¿Que es?</a></li>
				<li><a href="Error.php"><span class="glyphicon glyphicon-th-list"></span>  ¿Quienes la Integran?</a></li>
				<li><a href="Calendario.php"><span class="glyphicon glyphicon-calendar"></span>  Calendario</a></li>
				<li><a href="Evento.php"><span class="glyphicon glyphicon-picture"></span>  Eventos</a></li>
				<li><a href="Error.php"><span class="glyphicon glyphicon-comment"></span>  Avisos</a></li>
				<li><a href="Error.php"><span class="glyphicon glyphicon-user"></span>  Usuario</a></li>
				<li><a href="Error.php"><span class="glyphicon glyphicon-send"></span>  Contacto</a></li>
				<li><a href="Soporte.php"><span class="glyphicon glyphicon-asterisk"></span> Soporte</a></li>
				<li id="Cerrar"><a href="Error.php"><span class="glyphicon glyphicon-off"></span> Cerrar Sesion</a></li>
			</ul>
		</div>
	-->
	<section class="main container">
	<div class="container">
	</div>
</section>
<?php
?>
