1.   Definir dos variable con números y compararlos con un if para decidir cuál número
  	es mayor e imprimir “El número mayor es N” donde N sea el valor de la variable que resultó ser mayor, y un else para cubrir el caso inverso.
<?php
echo "<br><br>"; 
$variable=30;
$otravariable=38;
if ($variable >  $otravariable) { 
	echo "cual es el numero mayor $variable";

} else {
	echo "el numero mayor es $otravariable";
}
echo "<br><br>";
 
?>
2.   Utilizando la función propia de PHP rand(x,y), donde “x” es el número mínimo e “y” el número máximo, generar un número aleatorio entre 1 y 5, asignarlo a una variable e imprimir la variable si y sólo si el número generado es 3 o 5.

<?php 
echo "<br><br>";
$variable=rand(1,5);
if ( $variable == 5 || $variable == 3  ) {
echo "$variable";
}
else {
	echo "no salio los numero pedidos";
}

echo "<br><br>";
?>

3.    Utilizando la variable del ejercicio anterior, imprimir “El número NO es 3” en el caso que sea verdad esa premisa. En el caso que sí lo sea que simplemente se imprima el número 3.

<?php 

echo "<br><br>";
$variable= 3;
	if ( $variable == 3  ) {
echo "$variable";
}

echo "<br><br>"; ?>



4.    En otra variable, generar un número entre 1 y 100, controlar si es mayor que 50. En el caso que sea verdadero, imprimir “El número es mayor a 50”, en el caso que sea falso: “El número es menor a 50”.
1.	¿Qué pasa si el número es 50?
 



9. Definir una variable $numero con un número. Imprimir “El número es par” si lo es o “El número es impar” si no lo es. Se pide resolver este ejercicio con un if ternario: 
pregunta ? respuestaPositiva : respuestaNegativa;


<?php 
echo "<br><br>";
$numero = 30; 
$n = $numero % 2 == 0 ? "par" : "impar";
echo $n;
echo "<br><br>";
?>



10. Crear una variable tipo string que guarde un nombre (Ej: "Pedro"). Utilizando switch, hacer 5  casos (para 5 nombres diferentes) e imprimir "Hola nombre_persona". Tener en cuenta que si no se coincide con ningún nombre de la variable, imprimir “No hay a quien saludar”.


<?php 

echo "<br><br>";
$variable = "gabriela";

switch ($variable) {
	case 'pedro': 
	    echo "hola pedro";
		break;
	case 'ana': 
	    echo "hola ana";
		break;
		case 'agustin': 
	    echo "hola agustin";
		break;
		case 'hector': 
	    echo "hola hector";
		break;
		case 'romina': 
	    echo "hola romina";
		break;
	default:
		echo "no hay a quien saludar";
}
echo "<br><br>";
 ?>



 11.  Crear una variable colorRemera que tenga un valor tipo string, con un color primario. Utilizando switch, dejar los casos necesarios usando un solo echo y además el default. En el caso que el color sea "amarillo", "rojo" o "verde" debe entrar en el caso correspondiente e imprimir "El color de la remera es un color primario", si es otro color, deberá imprimir "La remera es de color desconocido".

 <?php 
 echo "<br><br>";
 $colorRemera = "azul"; 
 switch ($colorRemera) {
 	case 'amarillo':
 	case 'rojo':
 	case 'verde':
    echo "el color de la remera es primario";
    break; 
    default:
    echo "la remera es de color desconocido";

    echo "<br><br>";
 
 }



 ?>

fecha 26/4

 1. Utilizando un for​ imprimir los números del 1 al 100

<?php 
echo "<br>";
 
for ($i = 0; $i < 100; $i ++){
	echo $i . "<br>";
}

echo "<br>"
 ?>

 2. Modificar el ejercicio anterior para que en vez de frenar en el número 100 frene en un número generado
aleatoriamente entre 0 y 100. (Utilizar funcion rand($x,$y)

<?php 
echo "<br>";

 $numero = rand(0,100);
 //echo $numero;
for ($i = 0; $i < 100; $i ++){
	if ($i == $numero){
		break;
	}
	echo $i . "<br>";
}
 ?>

3. Mostrar la tabla de multiplicar del 2 (hasta 2 x 10) utilizando un for

<?php 
echo "<br>";

 for ($i=0; $i < 10 ; $i++) { 
 	echo "2* " . $i . " =" . $i *2 ; 
 
	echo "<br>";  
}
 ?>

4. Un bucle while que cuente desde 100 hasta 85 (fíjate que en este caso es decreciente).


<?php 

$cien = 100;

while ($cien > 85) {
	--$cien;
	echo $cien ."<br>";
}

 ?>


 11. Definir una variable $mascota​ que sea un array asociativo
a. En el índice animal​ debe decir qué animal es.
b. En el índice edad​ debe decir la edad.
c. En el índice altura​ debe decir la altura.
d. En el índice nombre​ debe decir el nombre

<?php 
echo "<br>";
$mascota​ = [
	"animal" => "perro",
	"edad" => "30",
	"altura" => "1,68",
	"nombre" => "agustin"

];
var_dump($mascota​);
echo "<br> <br>"
?>

12. Recorrer los valores del array con un foreach​ imprimiendo (como ejemplo):
animal: perro
edad: 5
altura: 0,60
nombre: Sonic
 
<?php 
echo "<br>";

	$mascota​ = [
	    "animal" => "perro",
		"edad" => "5",
		"altura" => "0,60",
		"nombre" => "Sonic"
];
foreach ($mascota​ as $clave => $valor) {
	echo " $clave : $valor <br>";
}
echo "<br> <br>"

 ?>

 13. Partiendo de un archivo con la siguiente variable definida:
$ceu = array( "Italia"=>"Roma", "Luxembourg"=>"Luxembourg", "Bélgica"=> "Bruselas",
"Dinamarca"=>"Copenhagen", "Finlandia"=>"Helsinki", "Francia" => "Paris",
"Slovakia"=>"Bratislava", "Eslovenia"=>"Ljubljana", "Alemania" => "Berlin", "Grecia" => "Athenas",
"Irlanda"=>"Dublin", "Holanda"=>"Amsterdam", "Portugal"=>"Lisbon", "España"=>"Madrid",
"Suecia"=>"Stockholm", "Reino Unido"=>"London", "Chipre"=>"Nicosia", "Lithuania"=>"Vilnius",
"Republica Checa"=>"Prague", "Estonia"=>"Tallin", "Hungría"=>"Budapest", "Latvia"=>"Riga",
"Malta"=>"Valletta", "Austria" => "Vienna", "Polonia"=>"Warsaw") ;
Crear un script que muestre el nombre de la capital y el país desde la variable $ceu​.
Opcional​: Ordenar la lista por el nombre del país.
Ejemplo de output:
La capital de Holanda es Amsterdam.
La capital de Grecia es Atenas.
La capital de Alemania es Berlín.

<?php 


$variable =[

	"Italia"=>"Roma",
	"Luxembourg"=>"Luxembourg",
	"Bélgica"=> "Bruselas",
	"Dinamarca"=>"Copenhagen",
	"Finlandia"=>"Helsinki",
	"Francia" => "Paris",
	"Slovakia"=>"Bratislava",
	"Eslovenia"=>"Ljubljana", 
	"Alemania" => "Berlin",
	"Grecia" => "Athenas",
	"Irlanda"=>"Dublin", 
	"Holanda"=>"Amsterdam",
	"Portugal"=>"Lisbon",
	"España"=>"Madrid",
	"Suecia"=>"Stockholm",
	"Reino Unido"=>"London", 
	"Chipre"=>"Nicosia", 
	"Lithuania"=>"Vilnius",
	"Republica Checa"=>"Prague", 
	"Estonia"=>"Tallin", 
	"Hungría"=>"Budapest",
	"Latvia"=>"Riga",
	"Malta"=>"Valletta", 
	"Austria" => "Vienna",
	"Polonia"=>"Warsaw"
];
foreach ($variable as $key => $valor) {
	echo " $key : $valor <br>";
	# code...
}
 ?>


 14. Partiendo de un archivo con la siguiente variable definida:
$ceu = [
"Argentina" => ["Buenos Aires", "Córdoba", "Santa Fé"],
"Brasil" => ["Brasilia", "Rio de Janeiro", "Sao Pablo"],
"Colombia" => ["Cartagena", "Bogota", "Barranquilla"],
"Francia" => ["Paris", "Nantes", "Lyon"],
"Italia" => ["Roma", "Milan", "Venecia"],
"Alemania" => ["Munich", "Berlin", "Frankfurt"]
];
Crear un script que muestre el nombre de cada país y sus ciudades desde la variable $ceu​ con el siguiente
formato:
Las ciudades de Argentina son:
● Buenos Aires
● Córdoba
● Santa Fé
● Brasilia
● Rio de Janeiro
● Sao Pablo

<?php 

$variable = [
"Argentina" => ["Buenos Aires", "Córdoba", "Santa Fé"],
"Brasil" => ["Brasilia", "Rio de Janeiro", "Sao Pablo"],
"Colombia" => ["Cartagena", "Bogota", "Barranquilla"],
"Francia" => ["Paris", "Nantes", "Lyon"],
"Italia" => ["Roma", "Milan", "Venecia"],
"Alemania" => ["Munich", "Berlin", "Frankfurt"]
];
foreach ($variable as $clave => $valor) {
	foreach ($valor as $key => $prov) {
		echo "$clave : $prov <br>";
		# code...
	}
}



 ?>



 15. A partir del ejercicio anterior:
● Agregarle a cada país un dato extra además de sus ciudades llamado esAmericano​. Este valor
debe ser true ​o false.
● Hacer que la impresión anterior no muestre países que no sean Americanos.
IMPORTANTE: ​Para que esto funcione de manera prolija deberán crear un array asociativo por cada país
en donde cada país tendrá los en la posición ciudades, sus ciudades y en la posición esAmericano un
booleano conforme a si es o no americano

<?php 
echo"<br>"
$variable = [
	"Argentina" => [
		"esAmericano" => true, 
		"ciudades" => [
			"Buenos Aires", 
			"Córdoba", 
			"Santa Fé"
		]
	],
	"Brasil" => [
		"esAmericano" => true,
		"ciudades" => [
			"Brasilia", 
			"Rio de Janeiro", 
			"Sao Pablo"
		]
	],
	"Colombia" => ["Cartagena", "Bogota", "Barranquilla"],
	"Francia" => ["Paris", "Nantes", "Lyon"],
	"Italia" => ["Roma", "Milan", "Venecia"],
	"Alemania" => ["Munich", "Berlin", "Frankfurt"]
];
foreach ($variable as $clave => $valor) {
	if ($valor["esAmericano"] === true) {	
		foreach ($valor["ciudades"] as $key => $prov) {
			echo "$clave : $prov <br>";
			# code...
		}
	}
}



 ?>

1. Generar un archivo llamado funciones.php​:
a. Definir una función mayor() que reciba 3 números y devuelva el mayor.
b. Definir una función tabla() que reciba un parámetro base, un parámetro límite,
y devuelve un array con la secuencia de números desde el numero base
hasta el numero limite.
c. Definir una variable llamada numeroMagico, que contenga un número, dicha
variable deberá estar en la 1er línea de nuestro código PHP.
d. Modificar mayor() para que si recibe sólo 2 parámetros, compare a esos dos
números con numeroMagico.
e. Modificar tabla para que si recibe un sólo parámetro utilice numeroMagico
como límite



<?php 


 ?>