<?php
require_once'Main.php';
?>
<script>
	document.getElementById("Titulo").innerHTML = 'Soporte Tecnico'
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
				<li class="active"><a href="Soporte.php"><span class="glyphicon glyphicon-asterisk"></span> Soporte</a></li>
				<li id="Cerrar"><a href="Error.php""><span class="glyphicon glyphicon-off"></span> Cerrar Sesion</a></li>
			</ul>
		</div>
<section class="main container">
		<div class="container">

			<section id = "Cuerpo">
			<center><img src="src/ST.png" width="55%"></center>

<?php
if (!isset($_POST['Email'])) {
?>
	<br><br><form class="form-horizontal" action="<?=$_SERVER['PHP_SELF']?>" method="post">
		<div class="form-group">
		<label for="Nombre" class="col-sm-4 control-label">Nombre</label>
			<div class="col-sm-6">
			  <input type="text" class="form-control" name="Nombre" id="Nombre" placeholder="Nombre">
			</div>
		</div>
		<div class="form-group">
		<label for="Email" class="col-sm-4 control-label">Email</label>
			<div class="col-sm-6">
			  <input type="email" class="form-control" name="Email" id="Email" placeholder="Email">
			</div>
		</div>
		<div class="form-group">
		<label for="Email" class="col-sm-4 control-label">Asunto</label>
			<div class="radio col-sm-2">
				<label>
					<input type="radio" name="Asunto" value="Problema" >
					Problema
				</label>
			</div>
			<div class="radio col-sm-2">
				  <label>
					<input type="radio" name="Asunto" value="Sugerencia">
					Sugerencia
				  </label>
			</div>
			<div class="radio col-sm-2">
				  <label>
					<input type="radio" name="Asunto" value="Otro">
					Otro
				  </label>
			</div>
		</div>
		<center><div class="form-group">
		<label for="Mensaje" class="col-sm-4 control-label">Mensaje</label>
			<div class="col-sm-7">
			<textarea class="form-control" name="Mensaje" rows="6" id="Mensaje"></textarea>
			</div>
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-danger">Enviar</button>
			<button type="reset" class="btn btn-primary">Borrar</button>
			</center>
		</div>
</form>
<?php
}else{
  $mensaje="Reporte de Soporte Tecnico";
  $mensaje.= "\n\nNombre: ". $_POST['Nombre'];
  $mensaje.= "\n\nEmail: ".$_POST['Email'];
  $mensaje.= "\n\nAsunto: ". $_POST['Asunto'];
  $mensaje.= "\n\nMensaje: \n".$_POST['Mensaje'];
  $destino= "juanehza@hotmail.com";
  $remitente = $_POST['Email'];
  $asunto = "AMFIME - ".$_POST['Asunto'];
  mail($destino,$asunto,$mensaje,"FROM: $remitente");
?>
  <p><strong>Mensaje enviado.</strong></p>
<?php
	echo "<p><center><strong>Nombre: </strong>". $_POST['Nombre']."<br>";
	echo "<strong>Remitente: </strong>".$remitente."<br>";
	echo "<strong>Asunto: </strong>". $asunto."<br>";
	echo "<strong>Mensaje: </strong>".$_POST['Mensaje']."<br></p>";
}
?>

			</section>
		</div>
</section>
<?php
?>
