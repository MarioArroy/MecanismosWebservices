<?php

    session_start();
    require_once("../process/procesos.php");

    if (isset($_SESSION["USUARIO_LOGEADO"])) 
      {
        $usuarioLogeado = $_SESSION["USUARIO_LOGEADO"];  
        $pp = new procesos();
        $user = $pp->verUsuario($usuarioLogeado);
        $fechaSinFormato = $user->fechaCreacion;
        $fecha = $pp->fechaEspanol($fechaSinFormato);
      }
      else
      {
        header("Location: ../inicio.php");
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
	<title>Deepin MX | Mi cuenta</title>
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
                      <a class="nav-link navhov" href="#" id="navbardrop" data-toggle="dropdown">Descargas</a>
                      <div class="dropdown-menu dropdown_menu--animated dropdown_menu-7">
                        <a class="dropdown-item dropdown-item_Hover" href="">Nueva versión</a>
                        <a class="dropdown-item dropdown-item_Hover" href="../downloads/video.php">Video oficial</a>
                        <a class="dropdown-item dropdown-item_Hover" href="../downloads/notes.php">Notas</a>
                        <a class="dropdown-item dropdown-item_Hover" href="../downloads/systemUpdate.php">Actualización del sistema</a>
                        <a class="dropdown-item dropdown-item_Hover" href="../downloads/mirrors.php">Espejos</a>
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
                        <a href="#" class="button btn btns navhov active"><img src="../process/vista.php?id=<?=$user->id?>" style="width: 25px; height: 25px; border-radius: 50%"></a>
                        <div class="dropdown-menu submenu dropdown_menu--animated dropdown_menu-7">
                        <center>
                            <h2 class="dropdown-header" style="color: black;">
                                <span><img src="../process/vista.php?id=<?=$user->id?>" style="width: 55px; height: 55px; border-radius: 50%;">
                                    <p></p>
                                    <p style="font-size: 16xpx"><b><?=$user->nombre?> <?=$user->apellido?></b></p>
                                </span>
                            </h2>
                        </center>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item activeDrop"><span class="fas" style="margin-right: 7px">&#xf406;</span>Mi cuenta</a>
                        <a class="dropdown-item dropdown-item_Hover" href="../account/myhome.php"><span class="fas" style="margin-right: 7px">&#xf015;</span>Mi página</a>
                        <a class="dropdown-item dropdown-item_Hover" href="../account/messages.php"><span class="fas" style="margin-right: 7px">&#xf0f3;</span>Mensajes</a>
                       
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item dropdown-item_Hover" href="../process/logout.php"><span class="fas" style="margin-right: 7px">&#xf2f5;</span>Cerrar sesión</a>
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

    <div class="row">
      
      <div class="col-sm-1"></div>

      <div class="col-sm-10">
        <h2><b>Centro de usuarios | Mi cuenta</b></h2>
        <hr style="height: 4px; color: black;">
      </div>
            
      </div>

      <div class="col-sm-1"></div>

    </div>

    <div class="row">
      
      <div class="col-sm-1"></div>
        
      <div class="col-sm-2"> 
        <center>
        <div class="card cardEdit2" style="width:100%; padding:10px">
          <center><img src="../process/vista.php?id=<?=$user->id?>" class="imgPerfil">
            <p></p>
            <button class="btn btns btns-hover btns-normal" data-target="#imagen" data-toggle="modal">Editar</button>
          </center>
        </div>

        <br>

        <div class="container-fluid fluentContaint p-3">
          <center>
            <button class="btn btns-menuLateral-hover btns-Lateral-active" id="showInformación" style="width: 100%;">Información básica</button>
            <p></p>
            <button class="btn btns-menuLateral-hover" id="showActividad" onclick="activar();" style="width: 100%;">Seguridad</button>
          </center>
        </div>

        <br>

      </div>

      <div class="col-sm-8"> 
        <div class="container-fluid fluentContaint p-3" id="informaciónBásica">
          <h5>Información de la cuenta</h5>
          <hr style="height: 3px;">

          <p class="cuenta">Nombre: &nbsp;<span id="nombreActual"><?=$user->nombre?></span> 
            <input value="<?=$user->nombre?>" type="search" name="nombre" id="nombre" style="display:none; width: 150px;">
            <button class="btn btns btns-hover btns-normal" style="float: right;" id="showNombre" onclick="txtNombre();">Editar</button>
            <button class="btn btns btns-hover btns-save" style="float: right; margin-right: 10px; display: none;" id="saveNombre">Guardar</button>
          </p>

          <hr>

          <p class="cuenta">Apellido: &nbsp;<span id="apellidoActual"><?=$user->apellido?></span>
            <input value="<?=$user->apellido?>" type="search" name="apellido" id="apellido" style="display:none; width: 150px;">
            <button class="btn btns btns-hover btns-normal" style="float: right;" id="showApellido" onclick="txtApellido();">Editar</button>
            <button class="btn btns btns-hover btns-save" style="float: right; margin-right: 10px; display: none;" id="saveApellido">Guardar</button>
          </p>

          <hr>

          <p class="cuenta">Región: &nbsp;<span>Esta opción aún no está disponible.</span>
            <button class="btn btns btns-hover btns-normal" style="float: right;" disabled>Editar</button>
          </p>

          <hr>

          <p class="cuenta">Correo electrónico: &nbsp;<span><?=$user->correo?></span> | Se utiliza para iniciar sesión, no se puede cambiar. <a href="" data-target="#información" data-toggle="modal">Más información.</a>
          </p>

          <hr>

          <p class="cuenta">Contraseña: &nbsp;<span>Consta de 8 a 64 caracteres. Cámbielo regularmente para mantener la cuenta segura.</span>
            <button class="btn btns btns-hover btns-normal" style="float: right;">Editar</button>
          </p>
        </div>

        <!-- div Actividad de foro -->

        <div class="container-fluid fluentContaint p-3" id="actividadForo" style="display: none;">
          <h5>Seguridad de la cuenta</h5>
          <hr style="height: 3px;">
            
          <p class="cuenta">Fecha de creación: &nbsp;<span><?=$fecha?></span></p>

          <hr>

          <p class="cuenta">Redes sociales enlazadas: &nbsp;<i class="far fa-question-circle" data-toggle="tooltip" title="Esta opción aún no está disponible, se encuentra en desarrollo."></i>&nbsp;
            <span>
              <a class="btn btns btn-outline lisHover" data-toggle="tooltip" title="Enlazar con Google"><img class="icon" src="../imagenes/icons/icons8-google.svg"></a>
              <a class="btn btns btn-outline lisHover" data-toggle="tooltip" title="Enlazar con Facebook"><img class="icon" src="../imagenes/icons/icons8-facebook.svg"></a>
              <a class="btn btns btn-outline lisHover" data-toggle="tooltip" title="Enlazar con Github"><img class="icon" src="../imagenes/icons/icons8-github.svg"></a>
            </span>
          </p>

          <hr>

        </div>

      </div>

      <div class="col-sm-1"></div>

    </div>

    <!-- scripts de input y buttons -->

    <script>
      $(function(){
        $('#showNombre').click(function(){
          $('#nombre').toggle();
          $('#nombreActual').toggle();
          $('#saveNombre').toggle();
        });
      })

      $(function(){
        $('#showApellido').click(function(){
          $('#apellido').toggle();
          $('#apellidoActual').toggle();
          $('#saveApellido').toggle();
        });
      })
    </script>

    <script>
      function txtNombre() {
        var uno = document.getElementById('showNombre');
        if (uno.textContent == 'Editar') 
            uno.textContent = 'Cancelar';
        else uno.textContent = 'Editar'; 
      }

      function txtApellido() {
        var uno = document.getElementById('showApellido');
        if (uno.textContent == 'Editar') 
            uno.textContent = 'Cancelar';
        else uno.textContent = 'Editar'; 
      }

    </script>

    <!-- script de divs -->

    <script>
      $(function(){
        $('#showInformación').click(function(){
          $('#informaciónBásica').toggle();
          $('#actividadForo').toggle();
        });
      })

      $(function(){
        $('#showActividad').click(function(){
          $('#actividadForo').toggle();
          $('#informaciónBásica').toggle();
        });
      })
    </script>

    <script>
      var x = document.getElementById('showInformación');
      var y = document.getElementById('showActividad');

      y.addEventListener("click", activar1);
      x.addEventListener("click", activar2);

      function activar1()
      {
        document.getElementById('showActividad').classList='btn btn-outline btns-menuLateral-hover btns-Lateral-active';
        document.getElementById('showInformación').classList='btn btns-menuLateral-hover';
      }

      function activar2()
      {
        document.getElementById('showActividad').classList='btn btn-outline btns-menuLateral-hover';
        document.getElementById('showInformación').classList='btn btns-menuLateral-hover btns-Lateral-active';
      }
    </script>


    <!-- Modal de imagen -->
        <div class="modal fade" id="imagen">
            <div class="modal-dialog modal-md modal-dialog-centered">
                <div class="modal-content">
                    
                <div class="modal-header">
                    <h4 class="modal-title"><i class='fas fa-image' style='font-size:25px; margin-right: 10px;'></i>Cambiar imagen de perfil</h4>
                        <button type="button" class="btn-close" data-dismiss="modal"></button>
                </div>
                        
                <div class="modal-body">

                  <p><i class='fas fa-info-circle'></i> Seleccione una imagen 1000 x 1000 máximo jpg o png.</p>

                    <form method="POST" action="../process/cargar.php?id=<?=$user->id?>" enctype="multipart/form-data">
                        <center>
                            <span class="mi-archivo">
                                <input type="file" class="inputFocus" name="mi-archivo" id="mi-archivo" required hidden multiple>
                            </span>
                            <label for="mi-archivo" style="width: 100%;">
                                <span><i class="fas fa-image"></i> Seleccionar archivo de imagen</span>
                            </label>
                            <br>
                            <div class="modal-footer">
                                <button type="button" class="btn btns btns-hover btns-normal" data-dismiss="modal">Cancelar</button> | 
                                <button type="submit" class="btn btns btns-hover btns-save">Subir imagen</button>
                            </div>
                          </center>
                        </form>
                    </div>             
                </div>
            </div>
        </div>


        <!-- Modal de información -->
        <div class="modal fade" id="información">
            <div class="modal-dialog modal-md modal-dialog-centered">
                <div class="modal-content">  
                  <div class="modal-header">
                      <h4 class="modal-title"><i class='fas fa-info-circle' style='font-size:25px; margin-right: 10px;'></i>Cambiar correo electrónico</h4>
                          <button type="button" class="btn-close" data-dismiss="modal"></button>
                  </div>
                          
                  <div class="modal-body">

                    <p style="text-align: justify;"><i class='fas fa-info-circle'></i> El correo electrónico que usted nos proporciona es su método de recuperación de la cuenta en caso de perder la contraseña y/o problemas que tenga con la misma. Usted no puede cambiar el correo manualmente para mayor seguridad; si necesita un cambio, solicítelo al soporte de Deepin México mediante nuestro correo electrónico (soporteDMX@deepin.com). Nos comprometemos con la seguridad de nuestros usuarios, puede leer más acerca de en el <a href="">acuerdo de políticas y privacidad</a>.</p>

                  </div>          
                  <div class="modal-footer">
                    <button type="button" class="btn btns btns-hover btns-normal" data-dismiss="modal">Aceptar</button> 
                  </div>
                </div>             
            </div>
        </div>

        <!-- scripts de modales -->

        <script type="application/javascript">
          jQuery('input[type=file]').change(function()
          {
            var filename = jQuery(this).val().split('\\').pop();
            var idname = jQuery(this).attr('id');
            console.log(jQuery(this));
            console.log(filename);
            console.log(idname);
            jQuery('span.'+idname).next().find('span').html(filename);
          });
        </script>    

    <br>
    <br>
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
