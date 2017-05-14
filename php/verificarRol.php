 <?php

     include("conexion.php");

     //se verifica si la sesion exsiste y si el usuario tiene permisos para entrar a la pag
     if (!isset($_SESSION['session_usser_id']) || $_SESSION['session_usser_rol']==3) { 
	    header("location: index.php");
	    die();
	}


 ?>

