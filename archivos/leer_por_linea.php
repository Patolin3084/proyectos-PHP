<?php

//escritura por lineas.
try{
    $file = fopen('por_linea.txt', 'w');
    for($i = 1; $i <= 16; $i++){
        $texto = "Esto es la linea numero " . $i . " que estoy añadiendo." . PHP_EOL;
        fwrite($file, $texto);
    }
    fclose($file);
}catch(Exeption $e){
    echo "ERROR!";
    echo $e;
    file_put_contents("error.log", date() . $e);
}

//lectura por lineas.
try{
    $file = fopen('por_linea.txt', 'r');
    while(!feof($file)){
        $linea = fgets($file);
        echo $linea . "<br>";
    }
}catch(Exeption $e){
    echo "ERROR!";
    echo $e;
    file_put_contents("error.log", date() . $e);
}

//ejercicio linea divisible por 4

try{
    $file = fopen('por_linea.txt', 'r');
    $counter = 1;
    $file_copia = fopen('por_linea_copia.txt', 'w');
    while(!feof($file)){
        $linea = fgets($file);
        if($counter % 4 == 0){
            $linea = trim($linea);
            $linea = $linea . " Esta linea es divisible por 4." . PHP_EOL;
        }
        fwrite($file_copia, $linea);
        echo nl2br($linea);
        $counter++;
    }
    fclose($file_copia);
    fclose($file);
}catch(Exeption $e){
    echo "ERROR!";
    echo $e;
    file_put_contents("error.log", date() . $e);
}

?>