<?php
require_once'Main.php';
?>
<script>
	document.getElementById("Titulo").innerHTML = '¿Que Es?'
	document.getElementById("Cuerpo").innerHTML= '';
</script>

<div id="sidebar">
			<ul id="content" class="nav nav-pills nav-stacked" style="max-width: 250px;">
				<li><a href="Inicio.php"><span class="glyphicon glyphicon-home"></span>  Inicio</a></li>
				<li class="active"><a href="QueEs.php"><span class="glyphicon glyphicon-info-sign"></span>  ¿Que es?</a></li>
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
<section class="main container">
		<div class="container">
			<center>
			<section id = "Cuerpo">
				<h2 class="post-title">
					<a href="#">Bienvenid@</a>
				</h2>
				<p><span class="post-fecha">2016</span> <span class="post-autor"> <a href="#"> </a> </span> </p>
				<p class="post-contenido text-justify">
					<center>
						Bienvenido a la pagina oficial de AMFIME cuyo<br>
						objetivo principal es fomentar todo genero de<br>
						actividades culturales, recreativas y cientificas<br>
						que tiendan al desarrollo social y profesional de<br>
						sus agremiados, así como estrechar las relaciones<br>
						entre sus asociados.<br>
						<br><br> <i>
						Si deseas formar parte de la Asociación de Maestros<br>
						de la Facultad de Ingeniería Mecánica y Eléctrica<br>
						(AMFIME), de la UANL.<br><br>
						Favor de comunicarte con algún miembro del comité<br>
						directivo a su correo o al teléfono ...<br><br>
						Requisitos:<br>
						- Estar impartiendo clases en la FIME.<br>
						- Participar activamente en los eventos que emprenda<br>
						  la asociación, en beneficio de los mismo socios.
						</i>
					</center>
				</p>
			</section>
		</div>
</section>
<?php
?>
