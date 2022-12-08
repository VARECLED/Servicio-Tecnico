<?php
include("config.php");
include("session.php");

$id = $_GET['id'];

$telefono = "DELETE FROM telefono WHERE IdPersona='$id'";
$persona = "DELETE FROM cliente WHERE IdPersona='$id'";
$cliente = "DELETE FROM persona WHERE IdPersona='$id'";


if((mysqli_query($mysqli, $telefono))){
	if(mysqli_query($mysqli, $persona)){
		if(mysqli_query($mysqli, $cliente)){
			echo '<script language="javascript">';
			echo 'alert("Registro borrado exitosamente");';
			echo 'window.location="home.php";';
			echo '</script>';
		}
	}
} else {
	echo '<script language="javascript">';
	echo 'alert("Error eliminando registro!");';
	echo 'window.location="home.php";';
	echo '</script>';
}

?>