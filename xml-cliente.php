<?php
    include("session.php");
    include("config.php");

    $query = "SELECT persona.IdPersona, cliente.Cedula, persona.nombreC, persona.Direccion, persona.Correoe, telefono.Telefono FROM persona, cliente, telefono
	WHERE persona.IdPersona = cliente.IdPersona
	AND persona.IdPersona = telefono.IdPersona;";
    
    $result = mysqli_query($mysqli, $query);    
      
    $cadena= mysql_XML($result);
    
    function mysql_XML($result)
	{
		$contenido  = '<?xml version="1.0" encoding="utf8" ?>';
        $contenido .= '<informacion>';	
		while ($row = mysqli_fetch_array($result)) {
			$contenido.="<cliente>";
			$contenido.="<IdPersona>".$row['IdPersona']."</IdPersona>";
            $contenido.="<Cedula>".$row['Cedula']."</Cedula>";
            $contenido.="<Nombre>".$row['nombreC']."</Nombre>";
			$contenido.="<Direccion>".$row['Direccion']."</Direccion>";
			$contenido.="<Correo>".$row['Correoe'] ."</Correo>";
			$contenido.="<Telefono>".$row['Telefono']."</Telefono>";
			$contenido.="</cliente>";		
		}
		$contenido.='</informacion>';			
		
		//var_dump($contenido);	
		return $contenido;
    }

    $nombreArch="cliente.xml";
    $archivo = fopen($nombreArch,"w+");
    fwrite($archivo,$cadena);
    fclose($archivo);
    
    
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