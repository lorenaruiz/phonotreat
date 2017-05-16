<?php
	include("verificarRol.php");
	if (isset($_POST['idPersona'],$_POST['estructuras']) /*!empty($_POST['idPersona'],$_POST['estructuras'])*/) 
	{
		# code...
	
		$idPersona = $_POST['idPersona'];
		foreach ($_POST['estructuras'] as $key => $Estructura) {
			# code...
			$result = mysqli_query($conexion,"SELECT * FROM asignacion WHERE Fk_Estructura = '".$Estructura."' and Fk_Persona = '".$idPersona."'");
			if (!$result) {
				header("location: ../asignacion.php");
			} else if (mysqli_num_rows($result)==0) {

				$sql = "INSERT INTO asignacion (Fk_Estructura,Fk_Persona) VALUES ('$Estructura','$idPersona')";
					   	
				if (mysqli_query($conexion,$sql) === TRUE) {
					echo "New record created successfully";
					header("location: ../index.php");
				} else {
					echo "Error: " . $sql . "<br>" . $conexion->error;
				}
			} else {
				header("location: ../asignacion.php");
				//La asignacion ya existe!
			}

		}
	}else{
			?>
 			<script type="text/javascript">
 				alert("Debe asignar almenos un fonema,Gracias.");
 				document.location =window.location = "../asignacion.php";

 			</script>
 			<?php
	}
?>