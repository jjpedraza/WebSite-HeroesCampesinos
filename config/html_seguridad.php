<?php
//AUTORIZACION PARA ADMINISTRADOR

	
	session_start();	
	if (isset($_SESSION['userx'])){
		$nuc = $_SESSION['userx']; // refrescamos la variable
	}
	else
	{		
		header("location:login/index.php");		
	}

	
?>