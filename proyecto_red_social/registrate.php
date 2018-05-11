<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400" rel="stylesheet">
	<link rel="stylesheet" href="css/estilos2.css">
	<!--<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous"> -->
</head>
<body>
	<div class="contenedor">
		<header>
			<div class="logo">
				<a href="paginaprincipal.php"><img src="img/logo.jpeg"></a>
				<a href="paginaprincipal.php">Group Trip</a>
				<a href="#" class="btn-menu"><i class="fas fa-bars"></i></a> 
			</div>
			
		</header>
		
		<main>
			<article>
				<h1>Formulario de Registro</h1>
				<form class="registro" method="post" action="usuario.php">
			        <h2 >Registrarse en Group Trip</h2>
			        <label for="nombrecompleto">Nombre Completo</label>
			        <input type="text" id="nombrecompleto" name="nombre" placeholder="Nombre Completo" required autofocus>
			        <label for="usuario">Usuario</label>
			        <input type="text" id="usuario" name="usuario"  placeholder="Usuario"  required autofocus>
			        <label for="inputEmail">Dirección de EMail</label>
			        <input type="email" id="inputEmail" name="email"  placeholder="Dirección de Mail" required autofocus>
			        <label for="inputPassword">Contraseña</label>
			        <input type="password" id="inputPassword" name="contrasena" placeholder="Contraseña" required>
			        <label for="inputPassword">Repita Contraseña</label>
			        <input type="password" id="inputPassword" name="repcontrasena" placeholder="Repita Contraseña" required>
			        <div class="checkbox">
			          <label for="check">Acepto los <a href="#">términos y condicionnes</a>
			            <input type="checkbox" name="check"> 
			          </label>
			        </div>
			        <button class="btn" type="submit" name="registrar">Registrarse</button>
	    
			    </form>
				
        	</article>
        </main>
	
		<?php require_once 'footer.php'; ?>
	</div>
	
	

</body>
</html>