<?php
session_start();
session_destroy();
 ?>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>AMFIME</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/estilos.css">
<link rel="icon" href="src/Amfime.ico" type="image/x-icon" />
</head>
<body>
	<section class="jumbotron jumbotron-ar">
	<header>
		<center><img src="src/Head3.png" width="85%"></center>
    </header>
	</section>
	<div class="forms">
		<ul class="tab-group">
			<li class="tab active"><a href="#login">Log In</a></li>
			<li class="tab"><a href="#signup">Sign Up</a></li>
		</ul>
		<form action="ValLogIn.php" id="login" method="post">
			  <h1>Iniciar Sesion</h1>
			  <div class="input-field">
				<input type="text" 		id="usuario" name="usuario" 		required="Usuario" 	placeholder="Usuario"/>
				<input type="password" 	id="contraseña" name="contraseña" 	required 			placeholder="Contraseña"/>
				<input type="submit" value="Ingresar" class="button"/>
				<p class="text-p"> <a href="#">¿Olvidaste tu constrseña?</a> </p>
			  </div>
		  </form>
		  <form action="ValRegistro.php" id="signup" method="post">
			  <h1>Registrarte</h1>
			  <div class="input-field">
				<input type="text" id="nombre" name="nombre" 	required="nombre" 	 placeholder="Nombre"/>
				<input type="text" id="matricula" name="matricula" required="matricula" placeholder="Matricula" pattern="[0-9]*"/>
				<input type="text" id="rfc" name="rfc" 	required="rfc"  placeholder="RFC"	 />
				<input  id="contraseña" name="contraseña" required placeholder="Contraseña"/>
				<input  id="valcontraseña" name="valcontraseña" required placeholder="Confirmar Contraseña"/>
				<input type="submit" value="Registrar" class="button" />
			  </div>
		  </form>
	</div>
	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	<script type="text/javascript">
	$(document).ready(function(){
		  $('.tab a').on('click', function (e) {
		  e.preventDefault();

		  $(this).parent().addClass('active');
		  $(this).parent().siblings().removeClass('active');

		  var href = $(this).attr('href');
		  $('.forms > form').hide();
		  $(href).fadeIn(500);
		});
	});
	</script>
</body>
</html>
