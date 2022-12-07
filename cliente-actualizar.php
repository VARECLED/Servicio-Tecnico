<?php
include("config.php");
include("session.php");


$nombre = $_POST['cliente_nombre'];
$direccion = $_POST['cliente_direccion'];
$email = $_POST['cliente_email'];
$telefono = $_POST['cliente_telefono'];
$cedula = $_POST['cliente_cedula'];

$id= mysqli_query($mysqli,"SELECT IdPersona FROM persona WHERE nombreC= '$nombre' AND Correoe = '$email'");
$row = mysqli_fetch_array($id);

$persona = "UPDATE persona SET nombreC='$nombre',Direccion='$direccion',Correoe='$email' WHERE IdPersona='{$row['IdPersona']}'";

if(mysqli_query($mysqli, $persona)){

    $cliente="UPDATE cliente SET Cedula='$cedula' WHERE IdPersona='{$row['IdPersona']}' ";

    if(mysqli_query($mysqli, $cliente)){
        $telefono="UPDATE telefono SET Telefono = '$telefono' WHERE IdPersona='{$row['IdPersona']}' ";
        
        if(mysqli_query($mysqli, $telefono)){
            echo '<script language="javascript">';
	        echo 'alert("Cliente actualizado exitosamente");';
	        echo 'window.location="home.php";';
	        echo '</script>';
        }
    }
} else {
	echo '<script language="javascript">';
	echo 'alert("Cliente no actualizado");';
	echo 'window.location="home.php";';
	echo '</script>';
}
?>