<?php 
	require_once "rcs/Autoload.php";
	Config\Autoload::run();

	$est = new Models\Estudiante();
	$est->hola();
/*$est->set("id", 1);
$datos = $est->view();
print $datos['nombre'];*/
?>
