<?php
require_once'Main.html';
?>
<script>
	document.getElementById("Titulo").innerHTML = 'Error'
	document.getElementById("Cuerpo").innerHTML= '';
</script>

<div id="sidebar">
			<ul id="content" class="nav nav-pills nav-stacked" style="max-width: 250px;">
				<li><a href="Inicio.php"><span class="glyphicon glyphicon-home"></span>  Inicio</a></li>
				<li><a href="QueEs.php"><span class="glyphicon glyphicon-info-sign"></span>  ¿Que es?</a></li>
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
						<a href="#">Lo Sentimos</a>
					</h2>
						<p><span class="post-fecha">2016 </span><span class="post-autor"><a href="#"> AMFIME</a></span></p>
						<p class="post-contenido text-justify">
							<center>
								Esta pagina esta actualmente en deshabilitata favor de volver mas tarde <br><br><br>
								<img src="src/anigif.gif" alt="Amfime" style="width:304px;height:228px;">
							</center>
						</p>
				</section>
			</center>
		</div>
</section>
<?php
?>
