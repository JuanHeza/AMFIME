<?php
require_once'Main.html';
?>



<section class="main container">
		<div class="container">

			<section id = "Cuerpo">
			<center><br><br><br>
<form action="" method="post" enctype="multipart/form-data">
	Nombre de la Galeria: <input type="text" name="Nombre" id="Nombre"><br><br>
    Fecha: <input type="text" name="Fecha" id="Fecha" placeholder="AAAA - MM - DD"><br><br>
    Select image to upload:
    <input type="file" name="NuevArch" id="NuevArch"><br><br>
    <input type="submit" value="Subir Imagen" name="submit">
</form>

			</section>
		</div>
</section>

<?php
function Subir(){
	$Fecha = $_POST['Fecha'];
	$Directorio = "src/Fotos/";
	$Galeria=$Directorio.$_POST['Nombre']."/";
	if (!file_exists($Galeria)) {
		mkdir($Galeria, 0777, true);
		require_once("conexion.php");
		//mysqli_query($conexion,"INSERT INTO `galeria`(`ID`, `Nombre`, `Fecha`) VALUES ('','$Nombre','$Fecha')") or die("Problemas en el select".mysql_error());
	}

	$Archivo = $Galeria . basename($_FILES["NuevArch"]["name"]);
	$uploadOk = 1;
	$imageFileType = pathinfo($Archivo,PATHINFO_EXTENSION);

	if(isset($_POST["submit"])) {
		$check = getimagesize($_FILES["NuevArch"]["tmp_name"]);
		if($check == false) {
			echo "El Archivo No Es Una Imagen.";
			$uploadOk = 0;
		}
	}

	if (file_exists($Archivo)) {
		echo "EL Archivo Ya Existe.";
		$uploadOk = 0;
	}

	if ($_FILES["NuevArch"]["size"] > 500000000) {
		echo "El Archivo Es Muy Grande.";
		$uploadOk = 0;
	}

	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
	&& $imageFileType != "gif" ) {
		echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
		$uploadOk = 0;
	}

	if ($uploadOk == 0) {
		echo "La Carga No Se Pudo Realizar.";
	} else{
		if (move_uploaded_file($_FILES["NuevArch"]["tmp_name"], $Archivo)) {
			echo "The file ". basename( $_FILES["NuevArch"]["name"]). " has been uploaded.";
		} else {
			echo "Hubo Un Error En La Carga.";
		}
	}
}
	if(isset($_POST['Nombre']) && isset($_POST['Fecha'])) 
	Subir(); 

?>
