<?php 
	//require 'index.php';

	session_start();

	$username = "";
	$password = "";
	
	if(isset($_POST['username'])){
		$username = $_POST['username'];
	}
	if (isset($_POST['password'])) {
		$password = $_POST['password'];

	}
	
	echo $username ." : ".$password;

	$q = 'SELECT * FROM Persona WHERE Usuario_Persona=:username AND Password_Persona=:password';

	$query = $dbh->prepare($q);

	$query->execute(array(':username' => $username, ':password' => $password));


	if($query->rowCount() == 0){
		header('Location: index.php?err=1');
	}else{

		$row = $query->fetch(PDO::FETCH_ASSOC);

		session_regenerate_id();
		$_SESSION['sess_user_id'] = $row['Nombre_Persona'];
		$_SESSION['sess_username'] = $row['Usuario_Persona'];
        $_SESSION['sess_userrole'] = $row['fk_rol_persona'];

        echo $_SESSION['sess_userrole'];
		session_write_close();

		if( $_SESSION['sess_userrole'] == "admin"){
			header('Location: index.php');
		}else{
			header('Location: index.php');
		}
		
		
	}


?>