<!DOCTYPE HTML>  
<html>
<head>
  <meta charset="UTF-8">
  <title>PROYECTO seg</title>
  <link href="estilos.css" rel="stylesheet" type="text/css">
</head>
<body>  

<?php

$name = $apellido = $email = $nombre1 =   "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nombre = test_input($_POST["nombre"]);
  $apellido = test_input($_POST["apellido"]); 
  $email = test_input($_POST["email"]);
  $nombre1 = test_input($_POST["usuario"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>


<h1>Group trip</h1>
<img src="grupoviaje.jpg"
          width="200"
          height="120">
          <br>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
   <input type="text" placeholder="ingrese su usuario"/>
   <input type="text" placeholder="ingrese su contraseña"/>
   <br><br>
   <button type="button">Registrate</button>
   <button type="button">Iniciar Secion</button>
   <br><br><br><br><br>
  
  Nombre: <input type="text" name="nombre">
  Apellido: <input type="text" name="apellido"> 
  <br><br>

  Agregar perfil <button type="boby">Seleccionar Archivo</button>
  <br><br>
  Cuidad <input type="texto" name="cuidad">
  <br><br>
  Sexo
  <input type="radio" name="gender" value="female">femenino
  <input type="radio" name="gender" value="male">Masculino
  <br><br>
  Nombre de usuario <input type="text" name="usuario">
  <br><br>
  E-mail: <input type="text" name="email">
  <br><br> 
  Comentario sobre ti: <textarea name="comment" rows="5" cols="40"></textarea>
 <br><br>
  <div class='container' style='height:80px;'>
    <label for='password' >Contaseña:</label><br/>
      <div class='pwdwidgetdiv' id='thepwddiv' ></div>
       <input type='password' name='password' id='password' maxlength="50" />
       <div id='register_password_errorloc' class='error' style='clear:both'></div>
       <div class='container' style='height:80px;'>
       <label for='repassword' >Repetir Contaseña:</label><br/>
       <div class='pwdwidgetdiv' id='thepwddiv' ></div>
       <input type='repassword' name='repassword' id='repassword' maxlength="50" />
        <div id='register_password_errorloc' class='error' style='clear:both'></div>
  <br>
   <input type='submit' name='Submit' value='Enviar' />
                </div> 
<br><br><br><br><br>
<h1>Usuarios</h1>

<img src="img.jpg"
     width="120"
     height="60">
     <p>Vanessa Garro 
      <br> 22 años
       <br> Buenos aires
        <br> Palermo 
        <br>Viaja a Chile</p> 
      <input type='submit' name='privado' value='chat' />
<br><br>
<img src="img1.jpg"
     width="120"
     height="60">
     <p>Hernan Compiano
      <br>34 años
      <br>Mendoza
      <br>Chacras
      <br>Viaja a Chile</p>
      <input type='submit' name='privado' value='chat' />

<br><br><br><br><br>

<h1>Chat Group trip</h1>
<? session_start();
include "enviarchat.php" ;
if (isset($_SESSION['user']))
{
  ?>   
  <table width="800" height="500">
  <tr> 
    <td><iframe name="iframe" width="700" height="400"></iframe></td></tr>
    <tr>
    <td><input type="text" name="mensaje"/> <button type="submit" name="Enviar">Enviar Mensaje</button></td>
  </tr>
</table>

</form>
</body>
</html>