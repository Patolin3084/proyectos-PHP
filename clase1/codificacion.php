<?php
include_once("contador.php");
require_once("menu.php");

//Ejercicio de codificacion de Array Asociativo
echo "<h1>Ejercicio de Codificacion de Array Asociativo</h1>";

echo "<h2>Var_dump del array 'dato'.</h2>";

$dato = ["clave1"=>"dato1", 2=>2, "clave3"=>true, "clave4"=>["Marcos" . " " . "Romero"], "numero phi"=>3.141516,
             "clave6"=>NULL, "clave7"=>"dato7", -10=>'-10'];
var_dump ($dato);
echo("<br>");
echo("<br>");

echo "<h3>Codificacion con 'Json_encode'</h3>";
$dato_json = json_encode($dato);
var_dump ($dato_json);
echo("<br>");
echo("<br>");
echo "<h3>Decodificacion con 'Json_decode'</h3>";
$dato_decode = json_decode($dato_json);
var_dump ($dato_decode);
echo("<br>");
echo("<br>");
echo "<h3>Codificacion con 'Serialize'</h3>";
$dato_serialize = serialize($dato);
var_dump ($dato_serialize);
echo("<br>");
echo("<br>");
echo "<h3>Codificacion con 'Unserialize'</h3>";
$dato_unserialize = unserialize($dato_serialize);
var_dump ($dato_unserialize);
echo("<br>");
echo("<br>");

?>

