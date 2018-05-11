<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400" rel="stylesheet">
	<link rel="stylesheet" href="css/estilos2.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
</head>
<body>
	<div class="contenedor">
		<header>
			<div class="logo">
				<a href="paginaprincipal.php"><img src="img/logo.jpeg" width="150"></a>
				<a href="paginaprincipal.php">Group Trip</a>
				<a href="#" class="btn-menu"><i class="fas fa-bars"></i></a> 
			</div>
			<div class="enlaces">
				<a href="#"><i class="fas fa-address-card"></i>Editar Información</a>
				<a href="#"><i class="fas fa-camera-retro"></i>Fotos</a>
				<a href="#"><i class="fas fa-users"></i>Amigos</a>
				
				
				
			</div>
			
		</header>
		
		<main>
			<article>
				<h1>Usuario</h1>
				<h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde deserunt aut eligendi perspiciatis magni quasi ad harum blanditiis doloribus enim facere excepturi, laborum voluptatibus suscipit, beatae nostrum consequuntur. Voluptas, praesentium.
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum libero harum provident natus cupiditate optio, rerum expedita itaque, nulla, aliquid sequi! Dolor facere voluptas soluta mollitia similique qui quaerat harum!
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia blanditiis, molestias optio dolores nobis cum totam, animi repellendus quos provident porro quod deserunt doloremque incidunt veniam earum quia. Consequatur, ex!
				</p>
			</article>	
		</main>
		
		<aside>
			<div class="registrado">
				<form class="" method="post" action="paginaprincipal.php">
			        <h2 >Login</h2>
			        <label for="inputEmail" >Usuario</label>
			        <input type="text" id="inputEmail" name="usuario" placeholder="Usuario" pattern="[A-Za-z_-0-9]{1,20}"  autofocus>
			        
			        <button type="submit" name="loguear" class="btn">Log Out</button>
			    </form>
	        </div>
		</aside>
		<?php require_once 'footer.php'; ?>
	</div>
	
	

</body>
</html>