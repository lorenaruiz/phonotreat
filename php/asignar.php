<?php
include("verificarRol.php");
if(isset($_POST['id'])){
		$id = $_POST['id'];
	}

	 $consulta = mysqli_query($conexion , "SELECT * FROM persona where Identificacion_Persona = '$id'" );
	 if(!$consulta) {
	    die("Error: no se pudo realizar la consulta");	
	 	 while($fila = mysqli_fetch_assoc($consulta)) 
	  		{ 
	  			echo "<input type=text name=id value='$fila[idPersona]'>";
	 	 	} 
	 	 if (mysql_num_rows($resultado)==0) {
	 	 	print "No existe el usuario en el sistema";
	 	 }
 	}
 	header("location: ../asignacion.php"); 
?>