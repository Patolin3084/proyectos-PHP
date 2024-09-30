<?php
include_once("contador.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
class persona{
public $nombre;
public $apellido;
private $nacimineto;
private $telefono;
private $genero;
private $domicilio;
private $altura;
private $peso;
private $estadoCivil;
private $nacionalidad;

function __destruc(){
}

function __construct($nombre = "", $apellido = ""){
    $this->nombre = $nombre;
    $this->apellido = $apellido;
    echo "El objeto se ha generado <br>";
}

function setNombre($nombre){
    $this->nombre = $nombre;
}

function getNombre(){
    return $this->nombre;
}

function setApellido($apellido){
    $this->apellido = $apellido;
}

function getApellido(){
    return $this->apellido;
}

function setNacimiento($nacimiento){
    $this->nacimiento = $nacimiento;
}

function getNacimiento(){
    return $this->nacimiento;
}

function setTelefono($telefono){
    $this->telefono = $telefono;
}

function getTelefono(){
    return $this->telefono;
}

function setGenero($genero){
    $this->genero = $genero;
}

function getGenero(){
    return $this->genero;
}

function setDomicilio($domicilio){
    $this->domicilio = $domicilio;
}

function getDomicilio(){
    return $this->domicilio;
}

function setAltura($altura){
    $this->altura = $altura;
}

function getAltura(){
    return $this->altura;
}

function setPeso($peso){
    $this->peso = $peso;
}

function getPeso(){
    return $this->peso;
}

function setEstadoCivil($estadoCivil){
    $this->estadoCivil = $estadoCivil;
}

function getEstadoCivil(){
    return $this->estadoCivil;
}

function setNacionalidad($nacionalidad){
    $this->nacionalidad = $nacionalidad;
}

function getNacionalidad(){
    return $this->nacionalidad;
}
}

echo "palabra <br>" ;

$persona1 = new Persona("Marcos", "Romero");
$persona2 = new Persona("Manolo", "Galvan");

echo "Nombre y Apellido: " . $persona1->getNombre() . " ". $persona1->getApellido() . "<br>";

$persona1->setNacimiento("02/11/1980");
$persona1->setTelefono(664142689);
$persona1->setGenero("Masculino");

echo "Fecha de Nacimiento: " . $persona1->getNacimiento() . "<br>";
echo "Telefono: " . $persona1->getTelefono() . "<br>";
echo "Genero: " . $persona1->getGenero() . "<br>";

echo "Nombre y Apellido: " . $persona2->getNombre(). " " . $persona2->getApellido() . "<br>" . "<br>";

?>
    
</body>
</html>



