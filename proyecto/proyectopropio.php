<?php 
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>PROYECTO</title>
	<link href="estilos.css" rel="stylesheet" type="text/css">

</head>
<body> 
	<div class="group">
  <form action="proyectopropio.php" method="GET">
  <h2> Group trip </h2>  
   <a href="#"><img src="grupoviaje.jpg"
          width="300"
          height="250" ></a>
     <br>
      <center> <input class="form-btn" name="submit" type="submit" value="Suscribirse" /></center>
      <br>
      <label for="nombre">Nombre <span><em>(requerido)</em></span></label>
      <input type="text" name="nombre" class="form-input" required/>   
      <br>
      <label for="apellido">Apellido <span><em>(requerido)</em></span></label>
      <input type="text" name="apellido" class="form-input" required/>         
      <br>
      <label for="nombre">Nombre de usuario <span><em>(requerido)</em></span></label>
      <input type="text" name="nombre_usuario" class="form-input" required/> 
      <br>
      <label for="email">Email <span><em>(requerido)</em></span></label>
      <input type="email" name="email" class="form-input" /> 
      <br>
      <div class='container' style='height:80px;'>
                    <label for='password' >Contaseña:</label><br/>
                    <div class='pwdwidgetdiv' id='thepwddiv' ></div>
                    <input type='password' name='password' id='password' maxlength="50" />
                    <div id='register_password_errorloc' class='error' style='clear:both'></div>
                </div>
                  <div class='container' style='height:80px;'>
                    <label for='repassword' >Repetir Contaseña:</label><br/>
                    <div class='pwdwidgetdiv' id='thepwddiv' ></div>
                    <input type='repassword' name='repassword' id='repassword' maxlength="50" />
                <div class='container'>
                    <input type='submit' name='Submit' value='Enviar' />
                </div>

    </p>
  </form>
</body>
</html>