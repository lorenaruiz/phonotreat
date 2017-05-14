<?php

	@$conexion = mysqli_connect("127.0.0.1", "PhonoTreat","Colombia2017" );		 
	@$base = mysqli_select_db ($conexion, "dbphonotreat");
	if (!$conexion )
		{
    		print "Error: No se pudo conectar a MySQL." . PHP_EOL;
    	}
    	elseif(!$base)
	    	{
				print "Error: No se pudo conectar a La base de datos." . PHP_EOL;								
	    	}
	    	else
	    		{
	    				$tildes = $conexion->query("SET NAMES 'utf8'");		
	    		}



?>