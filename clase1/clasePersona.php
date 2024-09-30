<?php

include_once("contador.php");
require_once("menu.php");

class clasePersona{
    public $nombre;
    public $apellido;
    private $nacimiento;
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

?>