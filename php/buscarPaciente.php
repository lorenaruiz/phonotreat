<?php
	include("verificarRol.php");
	$identificacion = $_POST['idpaciente'];

	$sql = "SELECT * FROM persona WHERE Identificacion_Persona = $identificacion";
	$result = mysqli_query($conexion,$sql);
	$data = array();

	if(mysqli_num_rows($result) == 1) {
		$genre = "";
		$name_patiente = "";
		$idPersona ="";
		while($row = mysqli_fetch_assoc($result)) {
			$genre = $row['Genero_Persona'];
			$genre = ($genre == "F")? "Femenino" : "Masculino";
			$name_patiente = $row['Nombre_Persona'];
			$idPersona = $row['idPersona'];
		}

		$sql = "SELECT * FROM vw_estructuras_activas";
		$result = mysqli_query($conexion, $sql);
		$htmlStructures = "";

		if($result) {
			while($row = mysqli_fetch_assoc($result)) {
				$idEstructura = $row["idEstructura"];
				$fonema = $row["Fonema"];
				$nivel = $row["Nivel"];
				$htmlStructures .= "<input type='checkbox' name='estructuras[]' value='$idEstructura'>"
				                  ."Fonema /$fonema/ $nivel<br/>";
			}
		}

		$data = array(
			'name' => $name_patiente,
			'genre' => $genre,
			'idPersona' => $idPersona,
			'htmlStructures' => $htmlStructures
		);
	}

	echo json_encode($data);
?>