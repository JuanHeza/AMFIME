<?php
require_once 'Main.php';
?>

	<script>
		document.getElementById("Titulo").innerHTML = 'Eventos';
		var div=document.getElementById("FecHora");
		div.parentNode.removeChild(div);
		document.getElementById("Cuerpo").innerHTML= '';
	</script>

		<div id="sidebar">
			<ul id="content" class="nav nav-pills nav-stacked" style="max-width: 250px;">
				<li><a href="Inicio.php"><span class="glyphicon glyphicon-home"></span>  Inicio</a></li>
				<li ><a href="QueEs.php"><span class="glyphicon glyphicon-info-sign"></span>  ¿Que es?</a></li>
				<li><a href="Error.php"><span class="glyphicon glyphicon-th-list"></span>  ¿Quienes la Integran?</a></li>
				<li><a href="Calendario.php"><span class="glyphicon glyphicon-calendar"></span>  Calendario</a></li>
				<li class="active"><a href="Evento.php"><span class="glyphicon glyphicon-picture"></span>  Eventos</a></li>
				<li><a href="Error.php"><span class="glyphicon glyphicon-comment"></span>  Avisos</a></li>
				<li><a href="Error.php"><span class="glyphicon glyphicon-user"></span>  Usuario</a></li>
				<li><a href="Error.php"><span class="glyphicon glyphicon-send"></span>  Contacto</a></li>
				<li><a href="Error.php"><span class="glyphicon glyphicon-asterisk"></span> Soporte</a></li>
				<li id="Cerrar"><a href="Error.php"><span class="glyphicon glyphicon-off"></span> Cerrar Sesion</a></li>
			</ul>
		</div>

<section class="main container">
	<div class="container">
			<section id = "Cuerpo">

				<div class="row">
				  <div class="col-sm-6 col-md-4">
					<div class="thumbnail">
					  <img src="src/Invitaciones/Mujer 1.jpg" alt="Mujeres">
					  <div class="caption">
						<h3>Dia de la Mujer</h3>
						<p>Descripcion y datos del evento</p>
						<p><a href="Galeria.php" class="btn btn-success" role="button">Ver</a></p>
					  </div>
					</div>
				  </div>
				  <div class="col-sm-6 col-md-4">
					<div class="thumbnail">
					  <img src="src/Invitaciones/Maestro 1.jpg" alt="Maestros">
					  <div class="caption">
						<h3>Dia del Maestro</h3>
						<p>Descripcion y datos del evento</p>
						<p><a href="Galeria.php" class="btn btn-success" role="button">Ver</a></p>
					  </div>
					</div>
				  </div>
				</div>

			</section>
	</div>
</section>
<?php
?>
