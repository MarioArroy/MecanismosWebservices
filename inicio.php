<?php

    session_start();
    require_once("process/procesos.php");

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
	<link rel="stylesheet" type="text/css" href="bootstrap-5.0.0/css/bootstrap.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	 <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> 
  	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
	<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
	<link rel="stylesheet" type="text/css" href="CSS/fluent.css">
	<title>Deepin MX | Inicio</title>
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
				      <a class="nav-link active">Inicio</a>
				    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link navhov" href="#" id="navbardrop" data-toggle="dropdown">Proyecto</a>
                      <div class="dropdown-menu dropdown_menu--animated dropdown_menu-7">
                        <a class="dropdown-item dropdown-item_Hover" href="project/enviroment.php">Entorno de escritorio</a>
                        <a class="dropdown-item dropdown-item_Hover" href="project/applications.php">Aplicaciones originales</a>
                        <a class="dropdown-item dropdown-item_Hover" href="project/transplate.php">Transplante de escritorio</a>
                        <a class="dropdown-item dropdown-item_Hover" href="project/projectUpdate.php">Actualización del proyecto</a>
                      </div>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link navhov" href="#" id="navbardrop" data-toggle="dropdown">Descargas</a>
                      <div class="dropdown-menu dropdown_menu--animated dropdown_menu-7">
                        <a class="dropdown-item dropdown-item_Hover" href="downloads/newRelease.php">Nueva versión</a>
                        <a class="dropdown-item dropdown-item_Hover" href="downloads/video.php">Video oficial</a>
                        <a class="dropdown-item dropdown-item_Hover" href="downloads/notes.php">Notas</a>
                        <a class="dropdown-item dropdown-item_Hover" href="downloads/systemUpdate.php">Actualización del sistema</a>
                        <a class="dropdown-item dropdown-item_Hover" href="downloads/mirrors.php">Espejos</a>
                      </div>
                    <li class="nav-item dropdown">
                      <a class="nav-link navhov" href="#" id="navbardrop" data-toggle="dropdown">Documentación</a>
                      <div class="dropdown-menu dropdown_menu--animated dropdown_menu-7">
                        <a class="dropdown-item dropdown-item_Hover" href="https://wiki.deepin.org/?language=en_US" target="_blank">Wiki</a>
                        <a class="dropdown-item dropdown-item_Hover" href="documents/installation.php">Instalación</a>
                      </div>
                    <li class="nav-item">
                      <a class="nav-link navhov" onclick="alerta()">Comunidad</a>
                    </li>
				 </ul>

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
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item dropdown-item_Hover" href="account/myacount.php"><span class="fas" style="margin-right: 7px">&#xf406;</span>Mi cuenta</a>
                        <a class="dropdown-item dropdown-item_Hover" href="account/myhome.php"><span class="fas" style="margin-right: 7px">&#xf015;</span>Mi página</a>
                        <a class="dropdown-item dropdown-item_Hover" href="account/messages.php"><span class="fas" style="margin-right: 7px">&#xf0f3;</span>Mensajes</a>
                 
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
    	
    	<div class="col-sm-2"></div>

    	<div class="col-sm-8">

            <div id="demo" class="carousel slide" data-ride="carousel" data-interval="6000">
              <div class="carousel-inner">

                <div class="carousel-item active carruselHover">
                  <a href="downloads/newRelease.php">
                  <img src="http://www.deepin.org/wp-content/uploads/2022/03/pc_banner_en_desk.jpg" alt="Download Deepin" width="1100" height="500">
                  </a>
                </div>

                <div class="carousel-item  carruselHover">
                  <a href="https://distrowatch.com/table.php?distribution=deepin" target="_blank">
                  <img src="http://www.deepin.org/wp-content/uploads/2022/03/%E7%A4%BE%E5%8C%BA%E5%AE%98%E7%BD%91%E9%A6%96%E9%A1%B5BANNER%EF%BC%88PC%EF%BC%89-1.jpg" alt="Deepin Rank International" width="1100" height="500">
                  </a>
                </div>
              </div>
            </div>

            <br>
            <br>

    		<h3><b><i class="fa">&#xf1ea;</i> Noticias de la comunidad</b></h3>
    		<hr>
    		
    		<div class="card cardEdit cardHover">
                <center><img class='imgs' style="float: left;" src="http://www.deepin.org/wp-content/uploads/2022/03/en_s.jpg">
                    <div class="card-body">
                        <h4 class="card-title">Deepin 20.5 - Hermoso y maravilloso</h4>
                        <p class="card-text">Esta versión ofrece el primer Face to Unlock de linux, fácil y seguro de usar...</p>
                        <a href="" class="btn-primary stretched-link"></a>
                    </div>
                </center>
            </div>
            <p></p>
            <div class="card cardEdit cardHover">
                <center><img class='imgs' style="float: left;" src="http://www.deepin.org/wp-content/uploads/2022/01/en_s.jpg">
                    <div class="card-body">
                        <h4 class="card-title">Deepin 20.4 - Inteligente y potente</h4>
                        <p class="card-text">Deepin es la principal distribución Linux de China, dedicada a ser fácil de usar...</p>
                        <a href="" class="btn-primary stretched-link"></a>
                    </div>
                </center>
            </div>
            <p></p>
            <div class="card cardEdit cardHover">
                <center><img class='imgs' style="float: left;" src="http://www.deepin.org/wp-content/uploads/2022/01/12%E6%9C%88%E8%8B%B1%E6%96%87_s.jpg">
                    <div class="card-body">
                        <h4 class="card-title">Actualización de aplicaciones en Deepin Store (2021-12)</h4>
                        <p class="card-text">Registro de aplicaciones agregadas y actualizadas de la tienda de Deepin...</p>
                        <a href="" class="btn-primary stretched-link"></a>
                    </div>
                </center>
            </div>

            <br>

            <span class="navhov" style="float: right; font-size: 18px; padding: 7px;"><a style="color: black;" href="">Ver más</a></span>

    	</div>

    	<div class="col-sm-2"></div>

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





    <script>
      function alerta() {
        alert('La sección Comunidad aún no está disponible!');
      }

      function redirect(){
        window.location.assign('https://deepin.org/en');
      }
    </script>








</body>
</html>