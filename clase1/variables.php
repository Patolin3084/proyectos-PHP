<?php
include_once("contador.php");
require_once("menu.php");

//Vamos a enlazar nuestra clase persona
include_once 'clasePersona.php';
include_once 'Usuario.php';

//string
echo "<h3>var_dump de variable tipo string</h3>";
$variableTipoString = "Esto es una cadena";
var_dump($variableTipoString );
echo("<br>");

echo "<h3>var_dump de variable tipo integer entre comillas</h3>";
$variableTipoInteger1 = "123456789";
var_dump($variableTipoInteger1);
echo("<br>");

echo "<h3>var_dump de variable tipo string</h3>";
$variableTipoInteger2 = 123456789;
var_dump($variableTipoInteger2);
echo("<br>");

echo "<h3>var_dump de variable tipo booleano</h3>";
$variableTipoBooleano = true;
var_dump($variableTipoBooleano);
echo("<br>");

echo "<h3>var_dump de variable tipo null</h3>";
$variableTipoNull = NULL;
var_dump($variableTipoNull);
echo("<br>");

echo "<h3>var_dump de variable tipo float</h3>";
$variableTipoFloat = 3.141516;
var_dump($variableTipoFloat);
echo("<br>");

//Array Clave Numerica
echo "<h3>var_dump de variable tipo string</h3>";
$variableTipoArrayClaveNumerica = array("ballena", "mono", "jirafa", "leon", "perro");
var_dump($variableTipoArrayClaveNumerica);
echo("<br>");
echo "Este es el valor numero 3: " . $variableTipoArrayClaveNumerica[3];
echo("<br>");
echo("<br>");

//Array Asociativo
echo "<h3>var_dump de variable tipo asociativo</h3>";
$variableTipoArrayAsociativo = ["clave1"=>"valor1", "clave2"=>2, 3=>"3", true=>4];
var_dump($variableTipoArrayAsociativo);
echo("<br>");
echo "Este es el valor numero 1 que corresponde a la clave 1: " . $variableTipoArrayAsociativo["clave1"];
echo("<br>");
echo("<br>");

//Array Multidimencional
echo "<h3>var_dump de array multidimencional</h3>";
$arrayMultidimencionalPais = array(
    "Espana" => array(
        "nombre" => "España",
        "lengua" => "Castellano",
        "moneda" => "Peseta"
    ), 
    "Francia" => array(
        "nombre" => "Francia",
        "lengua" => "Frances",
        "moneda" => "Franco"
    )
    );

var_dump($arrayMultidimencionalPais);
echo "Viva " . $arrayMultidimencionalPais["Espana"]["nombre"] . " !!!";
echo("<br>");
echo("<br>");

//Copia por valor
echo "<h3>Copia de valor</h3>";
$variable1 = "hola";
echo "la variable 1 vale: " . $variable1;
echo("<br>");
$variable2 = $variable1;
echo "la variable 2 vale: " . $variable2;
echo("<br>");
$variable1 = "chau";
echo "la variable 1 ahora vale: " . $variable1;
echo("<br>");
echo "la variable 2 ahora vale: " . $variable2;
echo("<br>");
echo("<br>");

//Copia por referencia (punteros)
echo "<h3>Copia por referencia</h3>";
$variable3 = "cobayos";
echo "la variable 3 vale: " . $variable3;
echo("<br>");
$variable4 = &$variable3;
echo "la variable 4 vale: " . $variable4;
echo("<br>");
$variable3 = "el valor a cambiado";
echo "la variable 3 ahora vale: " . $variable3;
echo("<br>");
echo "la variable 4 ahora vale: " . $variable4;
echo("<br>");
echo("<br>");

//Ejercicio con Array Asociativo
echo "<h3>Array Asociativo</h3>";
$variablePersona1 = new clasePersona("Marco", "Aurelio");
var_dump ($variablePersona1);
echo("<br>");
echo("<br>");

echo "Nombre y Apellido: " . $variablePersona1->getNombre() . " ". $variablePersona1->getApellido() . "<br>";

$arrayAsociativoClientes = ["nacimiento"=>"01/12/1506", "telefono"=>"555555555", "genero"=>"masculino",
"domicilio"=>"Europa 52", "altura"=>1.89, "peso"=>"87.5 kl", "estado civil"=>"soltero", "nacionalidad"=>"romano"];

$variablePersona1->setNacimiento($arrayAsociativoClientes["nacimiento"]);
$variablePersona1->setTelefono($arrayAsociativoClientes["telefono"]);
$variablePersona1->setGenero($arrayAsociativoClientes["genero"]);
$variablePersona1->setDomicilio($arrayAsociativoClientes["domicilio"]);
$variablePersona1->setAltura($arrayAsociativoClientes["altura"]);
$variablePersona1->setPeso($arrayAsociativoClientes["peso"]);
$variablePersona1->setEstadoCivil($arrayAsociativoClientes["estado civil"]);
$variablePersona1->setNacionalidad($arrayAsociativoClientes["nacionalidad"]);
echo("<br>");
var_dump ($variablePersona1);
echo("<br>");
echo("<br>");
echo "Nombre y Apellido: " . $variablePersona1->getNombre() . " ". $variablePersona1->getApellido() . "<br>";
echo "Fecha de Nacimiento: " . $variablePersona1->getNacimiento() . "<br>";
echo "Telefono: " . $variablePersona1->getTelefono() . "<br>";
echo "Genero: " . $variablePersona1->getGenero() . "<br>";
echo "Domicilio: " . $variablePersona1->getDomicilio() . "<br>";
echo "Altura: " . $variablePersona1->getAltura() . "<br>";
echo "Peso: " . $variablePersona1->getPeso() . "<br>";
echo "Estado Civil: " . $variablePersona1->getEstadoCivil() . "<br>";
echo "Nacionalidad: " . $variablePersona1->getNacionalidad() . "<br>";
echo("<br>");
echo("<br>");

//Ejercicio con Array Multidimencional
echo "<h3>Array Multidimencional</h3>";
$arrayMultidimencionalPersonas = array(
    "Persona2" => array(
            "nombre" => "Ron",
            "apellido" => "Damon",
            "nacimiento" => "12/10/1950",
            "telefono" => 4445556666,
            "genero" => "Masculino",
            "domicilio" => "La vecindad del Chavo 7", 
            "altura" => "1.80",
            "peso" => "45kl",
            "estado civil" => "Viudo",
            "nacionalidad" => "Mexico"
    ),
    "Persona3" => array(
            "nombre" => "Doña",
            "apellido" => "Florinda",
            "nacimiento" => "25/7/1956",
            "telefono" => 3335557777,
            "genero" => "Femenino",
            "domicilio" => "La vecindad del Chavo 3", 
            "altura" => "1.72",
            "peso" => "52kl",
            "estado civil" => "Viuda",
            "nacionalidad" => "Mexico"
    )
    );
var_dump($arrayMultidimencionalPersonas);
$variablePersona2 = new clasePersona();
$variablePersona3 = new clasePersona();


$variablePersona2->setNombre($arrayMultidimencionalPersonas["Persona2"]["nombre"]);
$variablePersona2->setApellido($arrayMultidimencionalPersonas["Persona2"]["apellido"]);
$variablePersona2->setNacimiento($arrayMultidimencionalPersonas["Persona2"]["nacimiento"]);
$variablePersona2->setTelefono($arrayMultidimencionalPersonas["Persona2"]["telefono"]);
$variablePersona2->setGenero($arrayMultidimencionalPersonas["Persona2"]["genero"]);
$variablePersona2->setDomicilio($arrayMultidimencionalPersonas["Persona2"]["domicilio"]);
$variablePersona2->setAltura($arrayMultidimencionalPersonas["Persona2"]["altura"]);
$variablePersona2->setPeso($arrayMultidimencionalPersonas["Persona2"]["peso"]);
$variablePersona2->setEstadoCivil($arrayMultidimencionalPersonas["Persona2"]["estado civil"]);
$variablePersona2->setNacionalidad($arrayMultidimencionalPersonas["Persona2"]["nacionalidad"]);

$variablePersona3->setNombre($arrayMultidimencionalPersonas["Persona3"]["nombre"]);
$variablePersona3->setApellido($arrayMultidimencionalPersonas["Persona3"]["apellido"]);
$variablePersona3->setNacimiento($arrayMultidimencionalPersonas["Persona3"]["nacimiento"]);
$variablePersona3->setTelefono($arrayMultidimencionalPersonas["Persona3"]["telefono"]);
$variablePersona3->setGenero($arrayMultidimencionalPersonas["Persona3"]["genero"]);
$variablePersona3->setDomicilio($arrayMultidimencionalPersonas["Persona3"]["domicilio"]);
$variablePersona3->setAltura($arrayMultidimencionalPersonas["Persona3"]["altura"]);
$variablePersona3->setPeso($arrayMultidimencionalPersonas["Persona3"]["peso"]);
$variablePersona3->setEstadoCivil($arrayMultidimencionalPersonas["Persona3"]["estado civil"]);
$variablePersona3->setNacionalidad($arrayMultidimencionalPersonas["Persona3"]["nacionalidad"]);

echo "<br>" . "Persona2" . "<br>" . "<br>";
echo "Nombre y Apellido: " . $variablePersona2->getNombre() . " " . $variablePersona2->getApellido() . "<br>" . "Nacimiento: " . $variablePersona2->getNacimiento() . "<br>" . "Telefono: " . $variablePersona2->getTelefono() . "<br>"
. "Género: " . $variablePersona2->getGenero() . "<br>" . "Domicilio: " . $variablePersona2->getDomicilio() . "<br>" . "Altura: " . $variablePersona2->getAltura() . "<br>" . "Peso. " . $variablePersona2->getPeso() . "<br>"
 . "Estado Civil: " . $variablePersona2->getEstadoCivil() . "<br>" . "Nacionalidad: " . $variablePersona2->getNacionalidad() . "<br>";

 echo "<br>" . "Persona3" . "<br>" . "<br>";
 echo "Nombre y Apellido: " . $variablePersona3->getNombre() . " " . $variablePersona3->getApellido() . " // " . "Nacimiento: " . $variablePersona3->getNacimiento() . " // " . "Telefono: " . $variablePersona3->getTelefono() . " // "
. "Género: " . $variablePersona3->getGenero() . " // " . "Domicilio: " . $variablePersona3->getDomicilio() . " // " . "Altura: " . $variablePersona3->getAltura() . " // " . "Peso. " . $variablePersona3->getPeso() . " // "
 . "Estado Civil: " . $variablePersona3->getEstadoCivil() . " // " . "Nacionalidad: " . $variablePersona3->getNacionalidad() . "<br>";

echo("<br>");
echo("<br>");
echo "La fecha y hora actuales son: " . date("Y-M-d H:i s");
echo("<br>");
echo("<br>");

$usuario1 = new Usuario();
if ($usuario1->getisActive()){
    echo "El usuario 1 esta activo";
}
else
    echo "El usuario 1 NO esta activo";
echo("<br>");
echo("<br>");
if ($usuario1->getisAdmin()){
    echo "El usuario 1 es Admin";
}
else
    echo "El usuario 1 NO es Admin";
echo("<br>");
echo("<br>");
echo "La fecha y hora actuales son: " . $usuario1->getRegisterDate();

echo("<br>");
echo("<br>");
$usuario1->setSurname("Romero");
echo "Surname: " . $usuario1->getSurname();
?>
