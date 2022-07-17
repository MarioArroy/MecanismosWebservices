<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap-5.0.0/css/bootstrap.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	 <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> 
  	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
	<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
	<link rel="stylesheet" type="text/css" href="CSS/fluent.css">
	<title>Deepin MX | Iniciar Sesión</title>
</head>
<body class="no-select contentScroll" style="background-image: url(https://login.deepin.org/assets/image/deepin_login_bg3.png); background-size: cover;">

	<div class="row">

		<div class="col-sm-3"></div>

		<div class="col-sm-6 container">
			
			<center>
			<div class="loginDialogCont" style="align-items: center;">
				<br>
				<h3>Iniciar sesión</h3>	
				<!--    -->

				<form action="process/login.php" method="post" class="needs-validation" novalidate>
				    <div class="form-group mb-3 mt-3">
				    <center>
				      <input type="text" class="form-control inputFocus" style="width: 75%; text-align: center;" placeholder="Correo electrónico" name="user" required>
				      <div class="invalid-feedback">Debe llenar este campo.</div>
				      <p></p>
				      <input type="password" class="form-control inputFocus" style="width: 75%; text-align: center;" placeholder="Contraseña" name="pass" required minlength="8" maxlength="64">
				      <div class="invalid-feedback">Debe llenar este campo. Mínimo 8 caracteres.</div>
				 	</center>
				 	</div>
				 	<button type="submit" class="btn-RedondoLogin btn fa" style='font-size:30px; color: white;'>&#xf061;</button>
				</form>
			<div>
				<a href="" data-target="#forgot" data-toggle="modal" style="padding: 10px; float: left;">¿Olvidó su contraseña?</a>
				<a href="" style="padding: 10px; float: right;">¿Aún no tienes cuenta? Únete.</a></p>
			</div>

			<br>
			<br>
			<br>
			<hr>
			
			<div>
				<p>Lea y acepte el <a href="#">Acuerdo y servicio de Deepin ID MX</a> y las <a href="#">Políticas de privacidad</a>.</p>
				<hr>
				<br>
				<a style="font-size: 12px; color: black;" href="#" target="_blank">Copyright © 2022 Deepin Technology México Co., Ltd.</a>
			</div>				

			</div>		
			</center>
			<br>

			<script>
			// Disable form submissions if there are invalid fields
			(function() {
			  'use strict';
			  window.addEventListener('load', function() {
			    // Get the forms we want to add validation styles to
			    var forms = document.getElementsByClassName('needs-validation');
			    // Loop over them and prevent submission
			    var validation = Array.prototype.filter.call(forms, function(form) {
			      form.addEventListener('submit', function(event) {
			        if (form.checkValidity() === false) {
			          event.preventDefault();
			          event.stopPropagation();
			        }
			        form.classList.add('was-validated');
			      }, false);
			    });
			  }, false);
			})();
			</script>
			<script type="text/javascript">
			// Initialize our function when the document is ready for events.
			jQuery(document).ready(function(){
				// Listen for the input event.
				jQuery("#number").on('input', function (evt) {
					// Allow only numbers.
					jQuery(this).val(jQuery(this).val().replace(/[^0-9]/g, ''));
				});
			});
			</script>
		</div>

		<div class="col-sm-3"></div>

	</div>

	<!-- Modal de forgot -->
        <div class="modal fade" id="forgot">
            <div class="modal-dialog modal-md modal-dialog-centered">
                <div class="modal-content">
                    
                <div class="modal-header">
                    <h4 class="modal-title"><i class='fas fa-info-circle' style='font-size:25px; margin-right: 10px;'></i>Recuperación de contraseña</h4>
                        <button type="button" class="btn-close" data-dismiss="modal"></button>
                </div>
                        
                <div class="modal-body">
                    <form action="process/forgot.php" method="post" class="needs-validation" novalidate>
                        <center>
   	                        <p>Por favor, ingrese el código de verificación que se envió a su correo (br****@hotmail.com).</p>
   	                        <input type="text" class="form-control inputFocus" style="width: 90%; text-align: center;" placeholder="Código a 6 caracteres" name="verify" autocomplete="off" maxlength="6" required>
				      		<div class="invalid-feedback">Debe llenar este campo.</div>
				      		<p></p>
				      		<p>No recibí un código, <a href="javascript:void(0)">volver a envíar.</a></p>
				      <p></p>
				      <button type="submit" class="btn btns btns-hover btns-save" style="width: 90%">Verificar</button>
                    </form>
                        </center>
                    </div>             
                </div>
            </div>
        </div>

<!--Up8T5y-->


</body>
</html>