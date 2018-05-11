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

2. Generar un archivo llamado superficie.php​:
a. Definir una función triangulo() que retorne su superficie.
b. Definir una función rectangulo() que retorne su superficie.
c. Definir una función cuadrado() que retorne su superficie.
d. Utilizando la función pi(), definir una función circulo() que retorne su
superficie.

3. Generar un archivo llamado incluir.php​ que retorne un echo con el siguiente string
“Soy incluir.php”.
a. Incluir en el archivo, saludo.php​. ¿Qué sucede?
b. Reemplazar include por require. ¿Qué sucede?
c. Generar en la misma carpeta un archivo saludo.php​ que solamente haga
echo “Hola mundo”. ¿Qué sucede ahora con el punto a​ y el punto b​?
d. En el archivo incluir.php​ reemplazar el require por include, e incluir 3 veces
el mismo archivo. ¿Qué sucede?
e. En el archivo incluir.php​ reemplazar todos los include por include_once.
¿Qué sucede?

4. Crear un archivo todoJunto.php​ que incluya el archivo funciones.php​ y
superficie.php​ en donde se definirá una función que reciba los radios de 3 círculos
y retorna la mayor superficie entre ambos. Para este ejercicio se deberá reutilizar las
funciones ya definidas.

5. Modificar todoJunto.php​ para que en su primer línea diga $funcionesEjecutadas =
0. Luego, modificar cada función de funciones.php​ y superficie.php​ para que al
comenzar hagan $funcionesEjecutadas++. Probar llamar a varias funciones y ver
cuanto vale $funcionesEjecutadas en cada momento. ¿Esto esta permitido? ¿Qué
sucede?

6. En caso de que el ejercicio anterior haya sido fallido, modificar la variable con la
palabra reservada global para que sí funcione.
Curso Desarrollo Web Full Stack
Clase 04 (PHP)

7. Utilizando strpos(), encontrar la posición de la primera aparición de "php" dentro de
la cadena: "Me encanta php, A Mi tambien me encanta php!"
8. Realizar un proceso a correr desde la consola que:
a. Salude al usuario diciendole “Hola Mundo”.
b. Le pida que ingrese su nombre y a continuación le diga “Bienvenido nombre​”
donde nombre debe ser reemplazado por lo que se haya ingresado.
c. Le pida al usuario que ingrese su edad. Si es menor de 18 años le diremos
“Usted no esta autorizado en el sistema” y el programa termina. Si es mayor
de 18 le diremos “Autorización exitosa”.
d. Crear una función hobbyValido​. Esta función recibe un string y devolverá
verdadero si este string tiene menos de 15 caracteres y más de 3 caracteres.
e. Le pediremos al usuario que ingrese sus hobbies separados por coma​.
f. Por cada hobby que sea válido

g. le diremos “Usted confirma que le gusta HOBBY?​” (donde la palabra
HOBBY​ se ira reemplazando con cada uno de los valores ingresados).
h. Al terminar imprimiremos:
Nombre: Juan
Edad: 25
Hobbies: Fútbol, Netflix, Helado
Solamente se deben imprimir los hobbies confirmados.
<?php 
echo "<br>";

function sumar ($num , $num1 , $num2 = "") {
	if ($num > $num1 &&  $num1 > $num2)
	return  $num;
}
   if {
   	else ($num > $num2) {
    return $num2;
   }  
    }
    
   

echo sumar (33,55,77)
	
 
?>

<?php 

function tabla ($base,$limite){
	$array = [];

	for ($i = $base; $i <= $limite; $i ++){
		$array [] ;
	}
}
?>