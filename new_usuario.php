<?php
	require_once("usuarioModel.php");
	$nuevo= new usuarioModel();
	$nuevo->new_usuario($_POST["usuario"],$_POST["clave"],$_POST["mail"],"usuario");
?>
?>