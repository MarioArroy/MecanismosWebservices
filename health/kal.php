<?php

    session_start();
    require_once("../process/procesos.php");

    if (isset($_SESSION["USUARIO_LOGEADO"])) 
      {
        $usuarioLogeado = $_SESSION["USUARIO_LOGEADO"];  
        $pp = new procesos();
        $user = $pp->verUsuario($usuarioLogeado);
      }

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../bootstrap-5.0.0/css/bootstrap.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	 <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> 
  	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
	<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
	<link rel="stylesheet" type="text/css" href="../CSS/fluent.css">
	<title>(Empresa) | Proyecto</title>
</head>
<body class="no-select contentScroll">
	<header>

        <nav class="navbar navbar-expand-md navDesign fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <li class="logo lis navbar-brand"><img src="" alt="Brand Logo" height="auto"></li>
                </div>

                <ul class="nav nav-pills">

                    <?php
                    if (isset($_SESSION["USUARIO_LOGEADO"])) 
                    {
                    ?>

                    <li class="nav-item dropdown">
                        <a href="#" class="button btn btns navhov"><img src="process/vista.php?id=<?=$user->id?>" style="width: 25px; height: 25px; border-radius: 50%"></a>
                        <div class="dropdown-menu submenu dropdown_menu--animated dropdown_menu-7">
                        <center>
                            <h2 class="dropdown-header" style="color: black;">
                                <span><img src="process/vista.php?id=<?=$user->id?>" style="width: 55px; height: 55px; border-radius: 50%;">
                                    <p></p>
                                    <p style="font-size: 16xpx"><b><?=$user->nombre?> <?=$user->apellido?></b></p>
                                </span>
                            </h2>
                        </center>
                        <?php
                        if ($cuenta == 2) 
                        {
                        ?>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item dropdown-item_Hover" href="logout.php"><span class="fas" style="margin-right: 7px">&#xf013;</span>Config. del sitio</a>
                        <?php
                        }
                        ?>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item dropdown-item_Hover" href="process/logout.php"><span class="fas" style="margin-right: 7px">&#xf2f5;</span>Cerrar sesión</a>
                      </div>
                    </li>

                    <?php
                    }
                    else
                    {
                    ?>
                    <li class="nav-item"><a href="login.php" class="fas button btn btns navhov" style='font-size:25px'>&#xf2bd;</a></li>
                    <?php
                    }
                    ?>
            </div>
        </nav>

    </header>

    <br>
    <br>
    <br>
    <br>
    <br>

	<div class="row">
    	
    	<div class="col-sm-1"></div>

    	<div class="col-sm-10">

    		<div class="">
    			<header class="hs-main-header" style="background-image: url(../imagenes/caloria.jpg);background-size:cover; border-radius: 20px;">
            <div class="hs-container">
            <h1 class="hs-main-title" _msthash="784914" _msttexthash="528970">Calorías quemadas</h1>
			    </header>
    		  </div>  
      	</div>

    	<div class="col-sm-1"></div>

    </div>

    <div class="row">
    	
    	<div class="col-sm-1"></div>
    		
    	<div class="col-sm-10">	

    		<div class="container-fluid fluentContaint">
    			<p style="padding: 25px;">Aquí se muestra el registro diario de la cantidad de calorías quemadas (Kal) por día.</p>
    		</div>

    		<br>

    		<div class="fluentContaint">
    			<br>
    			<center>
    			<div>
    				<li class="lis lisHover"><a href="" data-toggle="tooltip" title="Deepin Boot Maker"><img src="https://www.deepin.org/wp-content/uploads/2020/04/deepin-boot-maker-24x24.png"></a></li>
    				<li class="lis lisHover"><a href="" data-toggle="tooltip" title="Deepin Installer"><img src="https://www.deepin.org/wp-content/uploads/2020/04/deepin-installer-24x24.png"></a></li>
    				<li class="lis lisHover"><a href="" data-toggle="tooltip" title="Deepin File Manager"><img src="https://www.deepin.org/wp-content/uploads/2020/04/dde-file-manager-24x24.png"></a></li>
    				<li class="lis lisHover"><a href="" data-toggle="tooltip" title="Deepin System Monitor"><img src="https://www.deepin.org/wp-content/uploads/2020/04/deepin-system-monitor-24x24.png"></a></li>
    				<li class="lis lisHover"><a href="" data-toggle="tooltip" title="Deepin Deb Installer"><img src="https://www.deepin.org/wp-content/uploads/2020/04/deepin-deb-installer-24x24.png"></a></li>
    				<li class="lis lisHover"><a href="" data-toggle="tooltip" title="Deepin Font Manager"><img src="https://www.deepin.org/wp-content/uploads/2020/04/deepin-font-manager-24x24.png"></a></li>
    				<li class="lis lisHover"><a href="" data-toggle="tooltip" title="Deepin App Store"><img src="https://www.deepin.org/wp-content/uploads/2020/04/deepin-app-store-24x24.png"></a></li>
    				<li class="lis lisHover"><a href="" data-toggle="tooltip" title="Deepin Screen Recorder"><img src="https://www.deepin.org/wp-content/uploads/2020/04/deepin-screen-recorder-24x24.png"></a></li>
    				<li class="lis lisHover"><a href="" data-toggle="tooltip" title="Deepin Voice Note"><img src="https://www.deepin.org/wp-content/uploads/2020/04/deepin-voice-note-24x24.png"></a></li>
    				<li class="lis lisHover"><a href="" data-toggle="tooltip" title="Deepin Screenshot"><img src="https://www.deepin.org/wp-content/uploads/2020/04/deepin-screen-recorder-24x24.png"></a></li>
    				<li class="lis lisHover"><a href="" data-toggle="tooltip" title="Deepin Terminal"><img src="https://www.deepin.org/wp-content/uploads/2017/01/deepin-terminal-24px.png"></a></li>
    				<li class="lis lisHover"><a href="" data-toggle="tooltip" title="Deepin Image Viewer"><img src="https://www.deepin.org/wp-content/uploads/2020/04/deepin-image-viewer-24x24.png"></a></li>
    				<li class="lis lisHover"><a href="" data-toggle="tooltip" title="Deepin Movie"><img src="https://www.deepin.org/wp-content/uploads/2020/04/deepin-movie-24x24.png"></a></li>
    				<li class="lis lisHover" data-toggle="tooltip" title="Deepin Music"><a href=""><img src="https://www.deepin.org/wp-content/uploads/2020/04/deepin-music-24x24.png"></a></li>
    				<li class="lis lisHover"><a href="" data-toggle="tooltip" title="Deepin Calendar"><img src="https://www.deepin.org/wp-content/uploads/2020/04/dde-calendar-24x24.png"></a></li>
    				<li class="lis lisHover"><a href="" data-toggle="tooltip" title="Deepin Manual"><img src="https://www.deepin.org/wp-content/uploads/2020/04/deepin-manual-24x24.png"></a></li>
    				<li class="lis lisHover"><a href="" data-toggle="tooltip" title="Deepin Calculator"><img src="https://www.deepin.org/wp-content/uploads/2020/04/deepin-calculator-24x24.png"></a></li>
    				<li class="lis lisHover"><a href="" data-toggle="tooltip" title="Deepin Drive Manager"><img src="https://www.deepin.org/wp-content/uploads/2020/04/deepin-graphics-driver-manager-24x24.png"></a></li>
    				<li class="lis lisHover"><a href="" data-toggle="tooltip" title="Deepin Editor"><img src="https://www.deepin.org/wp-content/uploads/2020/04/deepin-editor-24x24.png"></a></li>
    			
    				<script>
						$(document).ready(function(){
						  $('[data-toggle="tooltip"]').tooltip();   
						});
					</script>

    			</div>
    			</center>
    			<br>
    		</div>
    	
    	</div>

    	<div class="col-sm-1"></div>

    </div>

    <br>
    <br>
    <br>

    <footer>
      <br>
      <center class="seccion-final">
      <div style="display: flex">      
        <a class="nav-link" href="">Sobre nosotros</a>
        <a class="nav-link" href="">Contáctanos</a>
        <a class="nav-link" href="mapa.html">Mapa del sitio</a>
        <a class="nav-link" href="">Acuerdo de política y privacidad</a>
    </div>
    </center>
    <br>
    <br>
    <center><p style="font-size: 13px;">© 2022 (Empresa)</p></center>
    <br>
    </footer>


</body>
</html>
