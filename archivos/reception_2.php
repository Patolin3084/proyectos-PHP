<?php
    $json_data_decode = json_decode($_COOKIE["json"]);
    //echo ("--------------- JSON ---------------<br><br>");
    //var_dump ($json_data_decode);

    //echo ("<br><br>--------------- foreach ---------------<br><br>");

    $fecha = "----------------->Decodificado fecha: " . date("d-m-Y H:i:s") . PHP_EOL; 
    $txt_open = fopen("datos.txt", 'a');
    fwrite($txt_open, $fecha);
    $linea;
    foreach ($json_data_decode as $key => $value){
        //echo $key . ": " . $value . "<br>";

        if($key == "contenido")
            $linea = $key . ": " . str_replace(".", "." . PHP_EOL, $value) . PHP_EOL . PHP_EOL . PHP_EOL;
        else
            $linea = $key . ": " . $value . PHP_EOL;

        fwrite($txt_open, $linea);      
    }
    fclose($txt_open);
    $lectura = file_get_contents("datos.txt");
    echo nl2br($lectura);

    /* $data = "fecha de creación: " . $json_data_decode -> fecha . PHP_EOL . PHP_EOL .
                "nombre: " . $json_data_decode -> nombre . PHP_EOL . PHP_EOL .
                    "apellido: " . $json_data_decode -> apellido . PHP_EOL . PHP_EOL .
                        "nacimiento: " . $json_data_decode -> nacimiento . PHP_EOL . PHP_EOL .
                            "asunto: " . $json_data_decode -> asunto . PHP_EOL . PHP_EOL .
                                "contenido: " . str_replace(".", "." . PHP_EOL, $json_data_decode -> contenido); */

                               
    //$file = file_put_contents("datos.txt", $fecha . $data . PHP_EOL . PHP_EOL);
    
    //echo nl2br($fecha . $data);

    //$unserilize_data = unserialize($_COOKIE["serialize"]);
    //echo ("<br><br>--------------- SERIALIZE ---------------<br><br>");
    //var_dump ($unserilize_data);

?>