<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>carpeta</title>
</head>
<body>
<?php
if (!$_POST){
?>
    <h1>Formulario</h1>
    <h3>Llene el formulario con sus datos</h3><br>
    <div><form action="carpeta_prueba.php" method="post">

    <label for="">nombre</label>
    <input type="text" name="nombre" placeholder="nombre"><br><br>
    <label for="">apellido</label>
    <input type="text" name="apellido" placeholder="apellido"><br><br>
    <label for="nacimiento"">fecha de nacimiento</label>
    <input type="date" name="nacimiento" id="nacimiento""><br><br>
    <label for="comentario">comentario</label>
    <textarea name="comentario" id="comentario" rows="20" cols="50" placeholder="aqui su comentario"></textarea><br><br>
    
    <input type="submit" value="enviar formulario">
    </form></div>
<?php
}else{
    
    if (isset($_POST["nombre"]) && !empty($_POST["nombre"]))
        $nombre = $_POST["nombre"];
    if (isset($_POST["apellido"]) && !empty($_POST["apellido"]))
        $apellido = $_POST["apellido"];
    if (isset($_POST["nacimiento"]) && !empty($_POST["nacimiento"]))
        $nacimiento = $_POST["nacimiento"];
    if (isset($_POST["comentario"]) && !empty($_POST["comentario"]))
        $comentario = $_POST["comentario"];

    $fecha = date("Y-m-d H:i:s");
    $formulario = "Fecha de creacion: " . $fecha . PHP_EOL . PHP_EOL . 
                    "Nombre: " . $nombre . PHP_EOL . PHP_EOL . 
                        "Apellido: " . $apellido . PHP_EOL . PHP_EOL .
                            "Fecha de nacimiento: " . $nacimiento . PHP_EOL . PHP_EOL . 
                                "Comentario: " . $comentario . PHP_EOL . PHP_EOL . 
                                    "-------------------------------------------------------------------------------------------------------------";
    try{
        
        /* $file = file_put_contents("formulario.txt", $formulario);
        $txt = fopen('formprueba.txt', 'r'); 
        echo "<br>" . nl2br($txt) . "<br>" . nl2br($file);
        fclose($file); */

        file_put_contents("formulario.txt", $formulario . PHP_EOL, FILE_APPEND);
        
        // Leemos y mostramos el contenido del archivo
        $contenido = file_get_contents("formulario.txt");
        echo nl2br($contenido);

    }catch(Exeption $e){
        echo "ERROR!";
        echo $e;
        file_put_contents("error.log", date() . $e);
    }
}
?> 
</body>
</html>