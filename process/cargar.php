<?php
    session_start();
    require_once("../process/procesos.php");

    if (isset($_SESSION["USUARIO_LOGEADO"])) 
      {
        $usuarioLogeado = $_SESSION["USUARIO_LOGEADO"];  
        $pp = new procesos();
        $cargar = $pp->cargarImagen();
      }
      else
      {
        header("Location: ../inicio.php");
      }

?>

<!DOCTYPE html>
<html lang="es">  
<head>
  <title>Vitromex | Actualizar imagen</title>    
  <meta charset="UTF-8">
  <link rel="shortcut icon" href="" type="image/x-icon">
  <link href="../bootstrap-5.0.0/css/bootstrap.css" rel="stylesheet" type="text/css"/>
  <link href="../CSS/fluent.css" rel="stylesheet" type="text/css"/>
  <meta http-equiv=refresh content=1.5;URL=../account/myacount.php>
</head> 
<body class="no-select contentScroll">

  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>

    <div class="container p-3 my-3 text-white">
        <center> 
            <div class="container p-0 my-1">
                <div class="alert <?=$pp->clase?>">
                  <center><?=$pp->msgOper?></center>
                </div>
            <div class="spinner-grow text-info"></div>
        </center>
    </div>

</body>  
</html>