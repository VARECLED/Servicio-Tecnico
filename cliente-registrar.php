<?php
include("config.php");
include("session.php");


$nombre = $_POST['cliente_nombre'];
$direccion = $_POST['cliente_direccion'];
$email = $_POST['cliente_email'];
$telefono = $_POST['cliente_telefono'];
$cedula = $_POST['cliente_cedula'];

$persona = "INSERT INTO persona VALUES('null','$nombre', '$direccion', '$email');";

if(mysqli_query($mysqli, $persona)){

    $id= mysqli_query($mysqli,"SELECT IdPersona FROM persona WHERE nombreC= '$nombre' AND Correoe = '$email'");
    $row = mysqli_fetch_array($id);
    $cliente="INSERT INTO cliente 
    VALUES('null', '{$row['IdPersona']}','$cedula');";

    if(mysqli_query($mysqli, $cliente)){
        $telefono="INSERT INTO telefono 
        VALUES('null', '{$row['IdPersona']}','$telefono');";
        
        if(mysqli_query($mysqli, $telefono)){
            echo '<script language="javascript">';
	        echo 'alert("Cliente registrado exitosamente");';
	        echo 'window.location="home.php";';
	        echo '</script>';
        }
    }
} else {
	echo '<script language="javascript">';
	echo 'alert("Cliente no registrado");';
	echo 'window.location="home.php";';
	echo '</script>';
}
?>