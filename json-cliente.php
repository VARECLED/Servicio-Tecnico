<?php
    include("session.php");
    //$arch = $_GET['arch'];
    include("config.php");
    $query = "SELECT persona.IdPersona, cliente.Cedula, persona.nombreC, persona.Direccion, persona.Correoe, telefono.Telefono FROM persona, cliente, telefono
	WHERE persona.IdPersona = cliente.IdPersona
	AND persona.IdPersona = telefono.IdPersona;";
    
    $result = mysqli_query($mysqli, $query);    
      
    $clientes= mysql_JSON($result);   
    //Creamos el JSON   
    $json_string = json_encode($clientes, JSON_UNESCAPED_UNICODE);
    //echo $json_string;

    
    $nombreArch="cliente.json";
    $archivo = fopen($nombreArch,"w+");
    fwrite($archivo,$json_string);
    fclose($archivo);
    
    //echo '<script language="javascript">';
    //echo 'alert("Archivo creado exitósamente");';
    //echo 'window.location="users.php";';
    //echo '</script>';
    
    function mysql_JSON($result)
    {
        $clientes = array(); //creamos un array
        while($row = mysqli_fetch_array($result)) 
        { 	
            $idpersona=$row['IdPersona'];
            $cedula=$row['Cedula'];
            $nombre=$row['nombreC'];
            $direccion=$row['Direccion'];            
            $correo=$row['Correoe'];
            $telefono=$row['Telefono'];            
            $clientes[] = array('IdPersonsa'=> $idpersona, 'Cedula'=> $cedula, 'Nombre'=> $nombre,
                                'Direccion'=> $direccion, 'Correo'=> $correo, 'Telefono'=> $telefono);

        }
        return $clientes;	
    }
    
    if(file_exists($nombreArch)){
        // Define headers
        header("Cache-Control: public");
        header("Content-Description: File Transfer");
        header("Content-Disposition: attachment; filename=$nombreArch");
        header("Content-Type: application/zip");
        header("Content-Transfer-Encoding: binary");        
        // Read the file
        readfile($nombreArch);       
        exit;
    }else
        echo 'El archivo no existe'; 
?>