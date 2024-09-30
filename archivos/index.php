<?php
//funcion que devuelve true si existe el archivo o false si no.  
if(file_exists("mi.txt"))
    echo "si, mi archivo existe";
else
    echo "no existe";

/* fopen($var1, $var2)
abre un archivo y nos lo devuelve
 si el archivo no existe lo creara
$var1 es la ruta del archivo. 
$var2 es un char que puede ser: 
'r': abrir archivo para su lectura.(read)
'w': es para escribir en el archivo.(write)
'a': es para añadir al archivo.(append) */

$archivo = fopen('mi.txt', 'w');

/* vamos a escribir en el archivo que hemos abierto.
fwrite($var1, $var2, [$var3])
$var1 es el archivo en si.
$var2 son los datos que queremos meter en el archivo.
[$var3] la longitud del contenido que queremosa añadir, si es nula o no la ponemos es indefinida.
los corchetes quieren decir que es opcional. */

fwrite($archivo, "esta va a ser la primera linea en el archivo");
fwrite($archivo, "\n");
fwrite($archivo, "esta va a ser la segunda linea en el archivo, que va detras de un salto de linea.");

/* fclose($archivo) cierra el archivo
recibe un solo parametro, el archivo */

fclose($archivo);
echo "<br>hemos escrito en el archivo<br>";

/* file_put_contents($var1, $var2) 
esta funcion hace un fopen, un fwrite y un fclose 
$var1 se le envia la ruta del archivo.
$var2 los datos que queremos meter en el archivo. */

$texto_archivo2 = "esta es la primera linea del segundo archivo. \n\t Y apartir de aqui estoy escribiendo la segunda linea.";
file_put_contents("mi2.txt", $texto_archivo2);

/* fread($var1, $var2)
lee el fichero hasta que se alcanza la longitud elegida (en numero de bytes)
y nos devuelve el contenido en un string
$var1 es el archivo en si.
$var2 la longitud del archivo en bytes */

/* filesize($var1)
nos devuelve la longitud en bytes del fichero seleccionado.
$var1 la ruta del archivo */

//empezamos a leer del archivo

$archivo_leido = fopen('mi.txt', 'r');
$lectura = fread($archivo_leido, filesize('mi.txt'));
fclose($archivo_leido);

echo ($lectura);

/* file_get_contents($var1)
nos abre, lee y cierra el archivo devolviendonos su contenido en un string
$var1 la ruta del archivo */

$lectura2 = file_get_contents("mi2.txt");
echo "<br>" . $lectura2 . "<br>";

/* unlink($var1)
esta funcion elimina un archivo y nos devuelve un booleano con respuesta si puedo eliminarlo o no.
$var1 la ruta de un archivo */

if(unlink("mi2.txt"))
    echo "mi2.txt ha sido eliminado";
else
    echo "no fue eliminado";
?>
