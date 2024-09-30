<?php
try{
    $file = fopen('datos.csv', 'r');
    while(($fila = fgetcsv($file)) !== false){
        foreach ($fila as $key => $value) {
            echo $value . "    ";
        }
        echo "<br>"; 
        //var_dump($fila);
    }
    fclose($file);
}catch(Exeption $e){
    echo "ERROR!";
    echo $e;
    file_put_contents("error.log", date() . $e);
}

//crear con 2 bucles anidados 5 filas de 10 columnas cada una.
$mi_array;
for($fila = 1; $fila <= 5; $fila++){
    for($columna = 1; $columna <= 10; $columna++){
        $mi_array[$fila][$columna] = "dato " . $fila . " - " . $columna;
    }
}
try{
    $file = fopen('nuevo_csv.csv', 'w');
    foreach ($mi_array as $fila) {
        fputcsv($file, $fila);
    }
}catch(Exeption $e){
    echo "ERROR!";
    echo $e;
    file_put_contents("error.log", date() . $e);
}
?>

