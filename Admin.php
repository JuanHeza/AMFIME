<?php
require_once'Main.php';
require_once 'Lib.php';
?>
  <script>
    function aceptar(mat_user) {

  		$.post("AceptarUsuario.php", {mat_user:mat_user})
  		.done (function (data) {
  			$('#estatus').html(data);
  		});
  	}

    function descartar(mat_user) {
		$.post("DescartarUsuario.php", { mat_user: mat_user})
		.done (function (data) {
			$('#estatus').html(data);
		});
	}
    </script>
    <section class="main container">
    		<div class="container">
    			<center>
    				<section id = "Cuerpo">
    					<h2 class="post-title">
    						<a href="#">Reporte Usuarios</a>
    					</h2>
              <div id="estatus">
              <?php
              require_once'RepAdmin.php'; ?>
            </div>
    				</section>
    			</center>
    		</div>
    </section>
