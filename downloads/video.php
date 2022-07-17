<?php

    session_start();
    require_once("../process/procesos.php");

    if (isset($_SESSION["USUARIO_LOGEADO"])) 
      {
        $usuarioLogeado = $_SESSION["USUARIO_LOGEADO"];  
        $pp = new procesos();
        $user = $pp->verUsuario($usuarioLogeado);
        $cuenta = $user->idCuenta;
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
	<title>Deepin MX | Descargas</title>
</head>
<body class="no-select contentScroll">
	<header>

        <nav class="navbar navbar-expand-md navDesign fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <li class="logo lis navbar-brand"><img src="https://www.deepin.org/wp-content/uploads/2017/04/logo_2017.png" height="auto"></li>
                </div>

                <ul class="navbar-nav">
				    <li class="nav-item">
				      <a class="nav-link navhov" href="../inicio.php">Inicio</a>
				    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link navhov" href="#" id="navbardrop" data-toggle="dropdown">Proyecto</a>
                      <div class="dropdown-menu dropdown_menu--animated dropdown_menu-7">
                        <a class="dropdown-item dropdown-item_Hover" href="../project/enviroment.php">Entorno de escritorio</a>
                        <a class="dropdown-item dropdown-item_Hover" href="../project/applications.php">Aplicaciones originales</a>
                        <a class="dropdown-item dropdown-item_Hover" href="../project/transplate.php">Transplante de escritorio</a>
                        <a class="dropdown-item dropdown-item_Hover" href="../project/projectUpdate.php">Actualización del proyecto</a>
                      </div>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link active navhov" href="#" id="navbardrop" data-toggle="dropdown">Descargas</a>
                      <div class="dropdown-menu dropdown_menu--animated dropdown_menu-7">
                        <a class="dropdown-item dropdown-item_Hover" href="newRelease.php">Nueva versión</a>
                        <a class="dropdown-item activeDrop">Video oficial</a>
                        <a class="dropdown-item dropdown-item_Hover" href="notes.php">Notas</a>
                        <a class="dropdown-item dropdown-item_Hover" href="systemUpdate.php">Actualización del sistema</a>
                        <a class="dropdown-item dropdown-item_Hover" href="mirrors.php">Espejos</a>
                      </div>
                    <li class="nav-item dropdown">
                      <a class="nav-link navhov" href="#" id="navbardrop" data-toggle="dropdown">Documentación</a>
                      <div class="dropdown-menu dropdown_menu--animated dropdown_menu-7">
                        <a class="dropdown-item dropdown-item_Hover" href="https://wiki.deepin.org/?language=en_US" target="_blank">Wiki</a>
                        <a class="dropdown-item dropdown-item_Hover" href="#">Instalación</a>
                      </div>
                    <li class="nav-item">
                      <a class="nav-link navhov" href="">Comunidad</a>
                    </li>
				 </ul>

                <ul class="nav nav-pills">

                    <?php
                    if (isset($_SESSION["USUARIO_LOGEADO"])) 
                    {
                    ?>

                    <li class="nav-item dropdown">
                        <a href="#" class="button btn btns navhov"><img src="../process/vista.php?id=<?=$user->id?>" style="width: 25px; height: 25px; border-radius: 50%"></a>
                        <div class="dropdown-menu submenu dropdown_menu--animated dropdown_menu-7">
                        <center>
                            <h2 class="dropdown-header" style="color: black;">
                                <span><img src="../process/vista.php?id=<?=$user->id?>" style="width: 55px; height: 55px; border-radius: 50%;">
                                    <p></p>
                                    <p style="font-size: 16xpx"><b><?=$user->nombre?> <?=$user->apellido?></b></p>
                                    <p style="font-size: 11px;line-height: 100%;"><?=$user->cuenta?></p>
                                </span>
                            </h2>
                        </center>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item dropdown-item_Hover" href="../account/myacount.php"><span class="fas" style="margin-right: 7px">&#xf406;</span>Mi cuenta</a>
                        <a class="dropdown-item dropdown-item_Hover" href="../account/myhome.php"><span class="fas" style="margin-right: 7px">&#xf015;</span>Mi página</a>
                        <a class="dropdown-item dropdown-item_Hover" href="../account/messages.php"><span class="fas" style="margin-right: 7px">&#xf0f3;</span>Mensajes</a>
                        <?php
                        if ($cuenta == 3) 
                        {
                        ?>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item dropdown-item_Hover" href="#"><span class="fas" style="margin-right: 7px">&#xf013;</span>Config. del sitio</a>
                        <a class="dropdown-item dropdown-item_Hover" href="#"><span class="fas" style="margin-right: 7px">&#xf044;</span>Admin. del foro</a>
                        <?php
                        }
                        ?>
                        <?php
                        if ($cuenta == 2) 
                        {
                        ?>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item dropdown-item_Hover" href="#"><span class="fas" style="margin-right: 7px">&#xf044;</span>Admin. del foro</a>
                        <?php
                        }
                        ?>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item dropdown-item_Hover" href="../process/logout.php"><span class="fas" style="margin-right: 7px">&#xf2f5;</span>Cerrar sesión</a>
                      </div>
                    </li>

                    <?php
                    }
                    else
                    {
                    ?>
                    <li class="nav-item"><a href="../login.php" class="fas button btn btns navhov" style='font-size:25px'>&#xf2bd;</a></li>
                    <?php
                    }
                    ?>
                </ul> 
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
          <header class="hs-main-header" style="background-image: url(https://www.deepin.org/wp-content/uploads/2016/12/banner_1project.jpg);background-size:cover;border-radius: 20px;">
        <div class="hs-container">
          <h1 class="hs-main-title" _msthash="784914" _msttexthash="528970">Video oficial</h1>    
          
          <div class="hs-breadcrumbs" _msthash="837278" _msttexthash="2207725"><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb" _istranslated="1"><a href="../inicio.php" itemprop="url" _istranslated="1"><span itemprop="title" _istranslated="1">Inicio</span></a></span> <span class="sep" _istranslated="1">›</span> <span class="current" _istranslated="1">Video oficial</span></div>

      </header>
        </div>
            
      </div>

      <div class="col-sm-1"></div>

    </div>

    <div class="row">
      
      <div class="col-sm-1"></div>
        
      <div class="col-sm-10"> 

        <iframe style="border-radius: 20px;" width="100%" height="600" src="https://www.youtube.com/embed/OQF8WHbOFQU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="allowfullscreen"><span data-mce-type="bookmark" style="display: inline-block; width: 0px; overflow: hidden; line-height: 0;" class="mce_SELRES_start">﻿</span><span data-mce-type="bookmark" style="display: inline-block; width: 0px; overflow: hidden; line-height: 0;" class="mce_SELRES_start">﻿</span></iframe>
      
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
        <a class="nav-link" href="">Objetivo</a>
        <a class="nav-link" href="mapa.html">Mapa del sitio</a>
        <a class="nav-link" href="">Acuerdo de política y privacidad</a>
    </div>
    </center>
    <br>
    <br>
    <center><p style="font-size: 13px;">© 2020-2022 Deepin Technology México Co., Ltd.  |  鄂ICP备14003693号-3</p></center>
    <br>
    </footer>


</body>
</html>
