<?php
	include("verificarRol.php");
	if ($user_rol == 1) {
		echo "<option value='1'>ADMINISTRADOR</option>";
		echo "<option value='2'>FONOAUDIÓLOGO</option>";
		echo "<option value='3'>PACIENTE</option>";
	} else {
		echo "<option value='3'>PACIENTE</option>";
	}


?>