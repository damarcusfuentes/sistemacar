<!DOCTYPE html>


<html lang="es">
	<head>
		<title>SISTEMA CAR</title>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/estilo.css">

  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

		<script>
			$(document).ready(function(){ // OCULTAR LA CAJA DE REGISTRO
				$("#caja_registro").hide();

			    $("#registrarse").click(function(){ // DESAPARECER CAJA DE LOGIN Y APARECER LA DE REGISTRO
			        $("#caja_login").slideToggle();
			        $("#caja_registro").slideToggle();
			    });

			    $("#loguearse").click(function(){// DESAPARECER CAJA DE REGISTRO Y APARECER LA DE LOGIN
			        $("#caja_login").slideToggle();
			        $("#caja_registro").slideToggle();
			    });

			});
		</script>
	</head>

	<body>
		<header>
			<div class="alert alert-info" >
			<h3 style="color:Black;" face="Arial Black" >SISTEMA INTERNO DEL CAR BC</h3>
			</div>
		</header>


		<? echo $mensaje; ?>
		<div id="caja_login">
		
		<div class="bg-primary grupo-box col-md-3 col-md-offset-4 text-center conticon">
			<img class="col-md-6 col-md-offset-3 col-xs-3 col-xs-offset-4 iconlog" src="img/login.png">
		</div>
		<section class="bg-primary col-md-3 col-md-offset-4 text-center">
			<form class="form formitic" action="Login.php" method="post">
			
				<input class="form-control" placeholder="Ingresar Correo" type="text" name="email" pattern="[A-Za-z0-9_-@]{1,15}" maxlength="88" required>
				<input class="form-control" placeholder="Contraseña" type="password" name="password" pattern="[A-Za-z0-9_-]{1,15}" maxlength="18"required>
				<input class="btn btn-info form-control inpbtm" type="submit" name="submit" value="INICIAR SESIÓN">
				<a id="registrarse" href="#">REGISTRARSE</a>
			</form>	
		</section>
		</div>



		<div id="caja_registro">
		<div class="bg-primary grupo-box col-md-3 col-md-offset-4 text-center conticon">
			<img class="col-md-6 col-md-offset-3 col-xs-3 col-xs-offset-4 iconlog" src="img/user.png">
		</div>
		<section class="bg-primary col-md-3 col-md-offset-4 text-center">
			<br>
			<form class="form formitic" method="post" action="registro.php">
				 <label for="state_id" class="control-label">Nombre de usuario</label>
				<input class="form-control" type="text" name="realname" placeholder="..."  pattern="[A-Za-z0-9_-@] maxlength="12" required>
				
				 <label for="state_id" class="control-label">Contraseña</label>
				<input class="form-control"  type="password" name="password" placeholder="password" maxlength="18" required>
				
				
				 <label for="state_id" class="control-label">Confirmar Contraseña</label>
				<input class="form-control"  type="password" name="password2" placeholder="repetir password" maxlength="18" required>
				
				
				 <label for="state_id" class="control-label">Correo Electronico</label>
				<input class="form-control"  type="email"  value="@" name="nick" maxlength="88"required>
			
				
				 <label for="state_id" class="control-label">Perfil</label>
				<select class="form-control"  type="text" name="perfil" required>
				<option value="Atleta">Atleta</option>
				<option value="Entrenador">Entrenador</option>
				<option value="Preparador Fisico">Preparador Fisico</option>
				<option value="Medico">Medico</option>
				<option value="Nutriologo">Nutriologo</option>
				<option value="Laboratorio">Laboratorista</option>
				<option value="Fisiologo">Fisiologo</option>
				<option value="Psicologo">Psicologo</option>
			
				
				<input class="btn btn-info form-control inpbtm" name="submit" type="submit" value="REGISTRARSE">
				<br>
				<a id="loguearse" href="#">INICIAR SESIÓN</a>
				<br>
				<br>
				<br>
				
				
			</form>	
		</section>
		</div>

	</body>
</html>


