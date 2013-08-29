<?php

		include("conexion.php"); 


	$nombre = $_POST['nombre'];
	$email = $_POST['email'];

		if ($nombre == "admin")
		{
			$query = mysql_query("INSERT INTO registros (ID, Nombre, Email) VALUES ('', '$nombre', '$email')");
			echo "Tus datos son los siguientes: <br /><br /> Nombre: <strong>$nombre</strong> <br /> Email: <strong>$email</strong>";
		}
		else
		{
			echo "Tus datos no se han enviado";
		}
		

			
?>