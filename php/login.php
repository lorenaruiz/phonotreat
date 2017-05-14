<?php 
	include("../php/conexion.php");	
	if(isset($_POST['username'] ,$_POST['password'])) 
	{	
		$resultado = mysqli_query($conexion , "SELECT * FROM persona where Usuario_Persona = '".$_POST['username']."' and Password_Persona = '".$_POST['password']."' " ); 
  		if(!$resultado) 
  		{
	    	die("Error: no se pudo realizar la consulta");	
	    }
	 	 else{
	 	 	while($fila = mysqli_fetch_assoc($resultado)) 
	  			{ 
	   	 			$_SESSION['session_usser_id']= $fila['idPersona'];
	   	 			$_SESSION['session_usser_name']= $fila['Nombre_Persona'];
	   	 			$_SESSION['session_usser_rol']= $fila['fk_rol_persona'];
	 	 		} 
		 	 if (mysqli_num_rows($resultado)!=0) 
		 	 	{
		 	 		
		 	 	}
		 	 	else
		 	 		{	 	 			
		 	 			
		 	 			?>
		 	 			<script type="text/javascript">
		 	 				alert("Joder");

		 	 			</script>
		 	 			<?php
		 	 			//header("location: ../index.php");
		 	 		}
 		}
	}
	 header("location: ../index.php");