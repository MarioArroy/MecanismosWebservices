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
                        <a class="dropdown-item activeDrop">Nueva versión</a>
                        <a class="dropdown-item dropdown-item_Hover" href="video.php">Video oficial</a>
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
          <h1 class="hs-main-title" _msthash="784914" _msttexthash="528970">Nueva versión</h1>    
          
          <div class="hs-breadcrumbs" _msthash="837278" _msttexthash="2207725"><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb" _istranslated="1"><a href="../inicio.php" itemprop="url" _istranslated="1"><span itemprop="title" _istranslated="1">Inicio</span></a></span> <span class="sep" _istranslated="1">›</span> <span class="current" _istranslated="1">Nueva versión</span></div>

      </header>
        </div>
            
      </div>

      <div class="col-sm-1"></div>

    </div>

    <div class="row">
      
      <div class="col-sm-1"></div>
        
      <div class="col-sm-10"> 

        <div class="fluentContaint p-4">
            <h2 style="text-align:center;"><strong>Deepin 20.5</strong></h2>
            <p></p>
            <p style="text-align: center;"><strong _msthash="320879" _msttexthash="158691">Descarga ISO</strong></p>
            <p style="text-align: center;"><a href="http://cdimage.deepin.com/releases/20.4/deepin-desktop-community-20.4-amd64.iso"><img class="alignnone wp-image-28714 size-full" src="http://www.deepin.org/wp-content/uploads/2018/12/1_en-1.png" alt="" width="200" height="50" srcset="https://www.deepin.org/wp-content/uploads/2018/12/1_en-1.png 200w, https://www.deepin.org/wp-content/uploads/2018/12/1_en-1-150x38.png 150w, https://www.deepin.org/wp-content/uploads/2018/12/1_en-1-24x6.png 24w, https://www.deepin.org/wp-content/uploads/2018/12/1_en-1-36x9.png 36w, https://www.deepin.org/wp-content/uploads/2018/12/1_en-1-48x12.png 48w" sizes="(max-width: 200px) 100vw, 200px"></a>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<a href="https://drive.google.com/drive/folders/1Ql5y7g3RMFO7GMAZJR7kGjMlxHlQxo43"><img class="alignnone wp-image-28719 size-full" src="http://www.deepin.org/wp-content/uploads/2018/12/6_en.png" alt="" width="200" height="48" srcset="https://www.deepin.org/wp-content/uploads/2018/12/6_en.png 200w, https://www.deepin.org/wp-content/uploads/2018/12/6_en-150x36.png 150w, https://www.deepin.org/wp-content/uploads/2018/12/6_en-24x6.png 24w, https://www.deepin.org/wp-content/uploads/2018/12/6_en-36x9.png 36w, https://www.deepin.org/wp-content/uploads/2018/12/6_en-48x12.png 48w" sizes="(max-width: 200px) 100vw, 200px"></a></p>
            <p style="text-align: center;"><a href="https://sourceforge.net/projects/deepin/files/20.2.2/deepin-desktop-community-20.2.2-amd64.iso"><img class="alignnone wp-image-28708 size-full" src="http://www.deepin.org/wp-content/uploads/2018/12/4-1.png" alt="" width="200" height="48" srcset="https://www.deepin.org/wp-content/uploads/2018/12/4-1.png 200w, https://www.deepin.org/wp-content/uploads/2018/12/4-1-150x36.png 150w, https://www.deepin.org/wp-content/uploads/2018/12/4-1-24x6.png 24w, https://www.deepin.org/wp-content/uploads/2018/12/4-1-36x9.png 36w, https://www.deepin.org/wp-content/uploads/2018/12/4-1-48x12.png 48w" sizes="(max-width: 200px) 100vw, 200px"></a>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<a href="https://www.mediafire.com/folder/b4y8qct4fz89j/deepin_20.4"><img class="alignnone wp-image-29865 size-full" src="http://www.deepin.org/wp-content/uploads/2020/04/BitTorrent.jpg" alt="" width="200" height="50" srcset="https://www.deepin.org/wp-content/uploads/2020/04/BitTorrent.jpg 200w, https://www.deepin.org/wp-content/uploads/2020/04/BitTorrent-150x38.jpg 150w, https://www.deepin.org/wp-content/uploads/2020/04/BitTorrent-24x6.jpg 24w, https://www.deepin.org/wp-content/uploads/2020/04/BitTorrent-36x9.jpg 36w, https://www.deepin.org/wp-content/uploads/2020/04/BitTorrent-48x12.jpg 48w" sizes="(max-width: 200px) 100vw, 200px"></a></p>
            <p style="text-align: center;"><a href="https://osdn.net/projects/deepin/storage/20.4"><img class="alignnone wp-image-29229 size-full" src="http://www.deepin.org/wp-content/uploads/2019/04/osdn.png" alt="" width="200" height="48" srcset="https://www.deepin.org/wp-content/uploads/2019/04/osdn.png 200w, https://www.deepin.org/wp-content/uploads/2019/04/osdn-150x36.png 150w, https://www.deepin.org/wp-content/uploads/2019/04/osdn-24x6.png 24w, https://www.deepin.org/wp-content/uploads/2019/04/osdn-36x9.png 36w, https://www.deepin.org/wp-content/uploads/2019/04/osdn-48x12.png 48w" sizes="(max-width: 200px) 100vw, 200px"></a> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <a href="https://www.deepin.org/mirrors/releases/"><img class="alignnone size-full wp-image-28720" src="https://www.deepin.org/wp-content/uploads/2018/12/7_en.png" alt="" width="200" height="48" srcset="https://www.deepin.org/wp-content/uploads/2018/12/7_en.png 200w, https://www.deepin.org/wp-content/uploads/2018/12/7_en-150x36.png 150w, https://www.deepin.org/wp-content/uploads/2018/12/7_en-24x6.png 24w, https://www.deepin.org/wp-content/uploads/2018/12/7_en-36x9.png 36w, https://www.deepin.org/wp-content/uploads/2018/12/7_en-48x12.png 48w" sizes="(max-width: 200px) 100vw, 200px"></a></p>
            <p style="text-align: center;" _msthash="321347" _msttexthash="240344"><a href="http://cdimage.deepin.com/releases/20.4/MD5SUMS" target="_blank" rel="noopener noreferrer">MD5SUMS</a>&nbsp; &nbsp;<a href="http://cdimage.deepin.com/releases/20.4/SHA256SUMS" target="_blank" rel="noopener noreferrer">SHA256SUMS</a></p>
            <p>&nbsp;</p>
            <h2 style="text-align:center;"><strong>Deepin v23 Nightly</strong></h2>
            <p></p>
            <p style="text-align: center;"><a href="https://cdimage.deepin.com/releases/23/deepin-desktop-community-23-nightly-amd64.iso"><img class="aligncenter wp-image-28714 size-full" src="http://www.deepin.org/wp-content/uploads/2018/12/1_en-1.png" alt="" width="200" height="50" srcset="https://www.deepin.org/wp-content/uploads/2018/12/1_en-1.png 200w, https://www.deepin.org/wp-content/uploads/2018/12/1_en-1-150x38.png 150w, https://www.deepin.org/wp-content/uploads/2018/12/1_en-1-24x6.png 24w, https://www.deepin.org/wp-content/uploads/2018/12/1_en-1-36x9.png 36w, https://www.deepin.org/wp-content/uploads/2018/12/1_en-1-48x12.png 48w" sizes="(max-width: 200px) 100vw, 200px"></a></p>
            <p style="text-align: center;" _msthash="344643" _msttexthash="240344"><a href="http://cdimage.deepin.com/releases/23/MD5SUMS" target="_blank" rel="noopener noreferrer">MD5SUMS</a>&nbsp; &nbsp;<a href="http://cdimage.deepin.com/releases/23/SHA256SUMS">SHA256SUMS</a></p>
            <p style="text-align: center;"><span style="color: #ff0000;" _msthash="344773" _msttexthash="5544617">Atención: La versión Nightly puede ser inestable, por favor no la use en un entorno de producción. </span></p>
            <p>&nbsp;</p>
            <p style="text-align: center;"><strong><span style="font-size: 12pt;" _msthash="345293" _msttexthash="440973">Descargar Deepin Boot Maker</span></strong></p>
            <p style="text-align: center;"><a href="https://cdimage.deepin.com/applications/deepin-boot-maker/windows/deepin-boot-maker.exe"><img class="alignnone wp-image-30397 size-full" src="http://www.deepin.org/wp-content/uploads/2020/06/Boot-maker-en.png" alt="" width="200" height="50" srcset="https://www.deepin.org/wp-content/uploads/2020/06/Boot-maker-en.png 200w, https://www.deepin.org/wp-content/uploads/2020/06/Boot-maker-en-150x38.png 150w, https://www.deepin.org/wp-content/uploads/2020/06/Boot-maker-en-24x6.png 24w, https://www.deepin.org/wp-content/uploads/2020/06/Boot-maker-en-36x9.png 36w, https://www.deepin.org/wp-content/uploads/2020/06/Boot-maker-en-48x12.png 48w" sizes="(max-width: 200px) 100vw, 200px"></a>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<a href="https://pan.baidu.com/s/1Pv8lGYjn1EhE4rfIDRJBtw"><img class="alignnone wp-image-28716 size-full" title="code: uqbu " src="http://www.deepin.org/wp-content/uploads/2018/12/3_en-1.png" alt="" width="200" height="48" srcset="https://www.deepin.org/wp-content/uploads/2018/12/3_en-1.png 200w, https://www.deepin.org/wp-content/uploads/2018/12/3_en-1-150x36.png 150w, https://www.deepin.org/wp-content/uploads/2018/12/3_en-1-24x6.png 24w, https://www.deepin.org/wp-content/uploads/2018/12/3_en-1-36x9.png 36w, https://www.deepin.org/wp-content/uploads/2018/12/3_en-1-48x12.png 48w" sizes="(max-width: 200px) 100vw, 200px"></a></p>
            <p style="text-align: center;"><strong _msthash="345553" _msttexthash="333528">Live Care Descargar</strong></p>
            <p style="text-align: center;"><a href="https://cdimage.deepin.com/live-system/deepin-live-system-2.0-amd64.iso"><img class="alignnone wp-image-28715 size-full" src="http://www.deepin.org/wp-content/uploads/2018/12/2_en.png" alt="" width="200" height="50" srcset="https://www.deepin.org/wp-content/uploads/2018/12/2_en.png 200w, https://www.deepin.org/wp-content/uploads/2018/12/2_en-150x38.png 150w, https://www.deepin.org/wp-content/uploads/2018/12/2_en-24x6.png 24w, https://www.deepin.org/wp-content/uploads/2018/12/2_en-36x9.png 36w, https://www.deepin.org/wp-content/uploads/2018/12/2_en-48x12.png 48w" sizes="(max-width: 200px) 100vw, 200px"></a></p>
            <p style="text-align: center;"><a href="http://cdimage.deepin.com/live-system/MD5SUMS" target="_blank" rel="noopener noreferrer" _msthash="344630" _msttexthash="173043">MD5SUMS(Live)</a></p>
            <br>
            <center><div class="alert alert-warning" style="text-align: center; width: 60%;">Lo sentimos, debido al límite humano y de recursos, la versión de 32 bits no ha estado disponible desde deepin 15.4. Si desea una compra masiva o una versión personalizada de 32 bits, póngase en contacto con support@deepin.com para obtener soporte comercial de pago.</div></center>
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
