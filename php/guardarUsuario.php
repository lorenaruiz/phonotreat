<?php
	include("verificarRol.php");
	/*nombre 	id    fecha   genres username password*/
	$username = $_POST['username'];
	$id = $_POST['id'];
	$fecha = $_POST['fecha'];
	$genres = $_POST['genero'];
	$pass = $_POST['password'];
	$nombre = $_POST['nombre'];

	$result = mysqli_query($conexion,"SELECT * FROM persona WHERE Usuario_persona = '$username'");
	if (!$result) {
		header("location: ../crearpersona.php");
	} else if (mysqli_num_rows($result)==0) {
		$genres = ($genres == "Masculino")? "M" : "F";
		$sql = "INSERT INTO persona (Nombre_Persona,Fecha_Nacimiento_Persona,Identificacion_Persona,Genero_Persona,Password_Persona,Usuario_Persona".
			   ",fk_rol_persona,Estado_persona) VALUES ('$nombre','$fecha',$id,'$genres','$pass','$username',3,1)";
		if (mysqli_query($conexion,$sql) === TRUE) {
			echo "New record created successfully";
		} else {
			echo "Error: " . $sql . "<br>" . $conexion->error;
		}
	} else {
		echo "usuario ya existe";
	}

?>