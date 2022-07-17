<?php

require_once("procesos.php");

session_start();

$procesos = new procesos();

if (isset($_SESSION["USUARIO_LOGEADO"])) {
        header("Location: ../inicio.php");
}
else
{
    if (isset($_REQUEST["user"]))
    	{	            
        	$usuario = $_REQUEST["user"];
			$password = $_REQUEST["pass"];
			
			$passwordHash = password_hash($password, PASSWORD_DEFAULT);
        
    		$usuarios = $procesos->login($usuario);            		
            	if (!$usuarios == $usuario)
        		{
        		    header("Location: ../login.php?msg=El usuario y/o contraseña son incorrectos");
        		}
            
            	if ( password_verify($password, $passwordHash) == $usuarios->contraseña )
            	{
        			$_SESSION["USUARIO_LOGEADO"] = $usuario;
        			header("Location: ../inicio.php");
        		}
            	else
            	{
        			header("Location: ../login.php?msg=El usuario y/o contraseña son incorrectos");
        		}
        	}
            else
        	{
        		header("Location: ../login.php?msg=El usuario y/o contraseña son incorrectos");		
        	}
}
?>