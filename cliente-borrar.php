<?php
include("config.php");
include("session.php");


$id = $_GET['id'];
echo "$id";

$telefono = "DELETE FROM telefono WHERE IdPersona='$id'";
$persona = "DELETE FROM cliente WHERE IdPersona='$id'";
$cliente = "DELETE FROM persona WHERE IdPersona='$id'";

if(mysqli_query($mysqli, $telefono) && mysqli_query($mysqli, $cliente) && mysqli_query($mysqli, $persona)){
    echo '<script language="javascript">';
	echo 'alert("Registro eliminado exitósamente");';
	echo 'window.location="users.php";';
	echo '</script>';
	
} else {
	echo '<script language="javascript">';
	echo 'alert("Error eliminando registro!");';
	echo 'window.location="users.php";';
	echo '</script>';
}

?>