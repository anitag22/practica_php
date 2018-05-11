<?php 
var_dump($_GET);
if (strlen($_GET['nombre'])>2){
	echo "Nombre OK";
} else {
	echo "Nombre muy corto";
}
$nombre = $_GET['nombre'];
$apellido = $_GET['apellido'];
$email = $_GET['email'];

 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
 </head>
 <body>
 	<p>Muchas Gracias por registrarte
<?php echo $_GET["nombre"]; ?>
<?php echo $_GET["apellido"]; ?>
</p>
 	
 </body>
 </html>