<?php
    //Conexión a base de datos
    include("config.php");
    session_start();

    $username = $_POST['usuario'];
    $password = $_POST['clave'];

    $username = $mysqli->real_escape_string($username);

    $query = "SELECT Usuario, Contrasena FROM usuario WHERE Usuario = '$username' AND Contrasena = '$password';";
    $result = $mysqli->query($query);

    if($result->num_rows == 1){
        $_SESSION['user']=$username;
        header('Location: home.php'); 
    }else{
        echo '<script>';
	    echo 'alert("USUARIO NO ENCONTRADO");';
	    echo 'window.location="index.html";';
	    echo '</script>';
        //header('Location: index.php');
    }
?>
