<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="es">  
<head>
  <title>Vitromex | Cerrar sesión</title>    
  <meta charset="UTF-8">
  <link rel="shortcut icon" href="" type="image/x-icon">
  <link href="../bootstrap-5.0.0/css/bootstrap.css" rel="stylesheet" type="text/css"/>
  <link href="../CSS/fluent.css" rel="stylesheet" type="text/css"/>
  <meta http-equiv=refresh content=2;URL=../inicio.php>
</head> 
<body class="no-select contentScroll" style="background-image: url(https://login.deepin.org/assets/image/deepin_login_bg3.png); background-size: cover;">

<div class="container p-3 my-3 text-white">
 <center> <h1 style="margin-top: 240px; font-size: 50px"><b>Cerrando sesión...</b></h1>
<br>
    <div class="spinner-border text-white"></div>

  </center>
</p>
</div>

</body>  
</html>

<?php
  if((isset($_SESSION["USUARIO_LOGEADO"])))
  {
    
    unset($_SESSION["USUARIO_LOGEADO"]);
    
  }
    else
    {
        echo "La sesión ha expirado";
    }
?>