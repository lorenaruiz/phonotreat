<?php 
	//require 'index.php';

	
	include("../php/conexion.php");
	$username = "";
	$password = "";
	$contador= 0;
	
	if(isset($_POST['username'])){
		$username = $_POST['username'];
	}
	if (isset($_POST['password'])) {
		$password = $_POST['password'];
	}
	
	echo $username ." : ".$password;
	
	 $resultado = mysqli_query($conexion , "SELECT * FROM persona where Usuario_Persona = '$username' and Password_Persona = '$password' " ); 
  	if(!$resultado) {
	    die("Error: no se pudo realizar la consulta");	
	 	 while($fila = mysqli_fetch_assoc($resultado)) 
	  		{ 
	   	 		$_SESSION['sesson_usser_id']= $fila['idPersona'];
	   	 		$_SESSION['sesson_usser_name']= $fila['Nombre_Persona'];
	   	 		$_SESSION['sesson_usser_rol']= $fila['fk_rol_persona'];
	 	 	} 
	 	 if (mysql_num_rows($resultado)==0) {
	 	 	print "No existe el usuario en el sistema";
	 	 }
 	}
 	header("location: ../index.php");
?>