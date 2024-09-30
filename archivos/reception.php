
<!DOCTYPE html>
<?php
    if($_POST){    
        if (isset($_POST["nombre"]) && !empty($_POST["nombre"]))
            $nombre = $_POST["nombre"];
        if (isset($_POST["apellido"]) && !empty($_POST["apellido"]))
            $apellido = $_POST["apellido"];
        if (isset($_POST["nacimiento"]) && !empty($_POST["nacimiento"]))
            $nacimiento = $_POST["nacimiento"];
        if (isset($_POST["asunto"]) && !empty($_POST["asunto"]))
            $asunto = $_POST["asunto"];
        if (isset($_POST["contenido"]) && !empty($_POST["contenido"]))
            $contenido = $_POST["contenido"];
    
            $fecha = date("d-m-Y H:i:s");
            $cumple = date("d-m-Y", strtotime($nacimiento));
            $formulario = ["fecha de creación" => $fecha, "nombre" => $nombre, 
                                "apellido" => $apellido, "nacimiento" => $cumple, 
                                    "asunto" => $asunto, "contenido" => $contenido];
    
        try{                               
        $file = file_put_contents("envio.txt", $formulario);
        $data = file_get_contents('envio.txt');
        echo "<h3>Este es el var_dump del formulario creado (envio.txt)</h3><br>";
        var_dump ($formulario);
        $json_data_encode = json_encode($formulario);
        $serialize_data = serialize($formulario);
    
        setcookie("json", $json_data_encode, time() + 3600);
        setcookie("serialize", $serialize_data, time() + 3600);
        //header('Location: reception.php'); solo si queremos enviar a otra pagina.
    
        }catch(Exeption $e){
            echo "ERROR!";
            echo $e;
            file_put_contents("error.log", date() . $e);
        }
    }

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reception</title>
</head>
<body>
<?php

?>

    <div>
        <br><h4><a href="reception_2.php">Ir a reception_2.php</a></h4>
        
    </div>

</body>
</html>
