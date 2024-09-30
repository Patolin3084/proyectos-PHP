<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
<?php
if (!$_POST){
?>
<h1>RELLENA ESTE FORMULARIO</h1>
    <div>
        <h2>Formulario de Contacto</h2>
        <form action="formulario.php" method="post">

        <label for="">Nombre</label>
        <input type="text" name="nombre" placeholder="nombre"><br>
        <label for="">Apellido</label>
        <input type="text" name="apellido" placeholder="apellido"><br><br>
        <label for="">Fecha de nacimiento</label>
        <input type="date" name="nacimiento" placeholder="fecha de nacimiento"><br><br>
        <label for="">Asunto</label><br><br>
        <textarea name="asunto" id="faltante" rows="10" cols="50" placeholder="Asunto"></textarea><br><br><br>

        <input type="submit" value="enviar todos los datos"><br>
    </form>
    </div>
<?php
}else{
    if (isset($_POST["nombre"]) && !empty($_POST["nombre"]))
        $nombre = $_POST["nombre"];
    if (isset($_POST["apellido"]) && !empty($_POST["apellido"]))
        $apellido = $_POST["apellido"];    
    if (isset($_POST["nacimiento"]) && !empty($_POST["nacimiento"]))
        $nacimiento = $_POST["nacimiento"];
    if (isset($_POST["asunto"]) && !empty($_POST["asunto"]))
        $asunto = $_POST["asunto"];
    
        $cumple = date("d-m-Y", strtotime($nacimiento));

        $formulario_data = "Este log fue creado el: " . date("d-m-Y H:i:s") . "-->" . PHP_EOL . PHP_EOL . 
                                "Nombre: " . $nombre . PHP_EOL . 
                                    "Apellido: " . $apellido . PHP_EOL . 
                                        "Fecha de nacimiento: " . $cumple . 
                                            "\nAsunto: " . str_replace(".", "." . PHP_EOL, $asunto) . PHP_EOL .
                                                "------------------------------------------------------------------------------" . PHP_EOL . PHP_EOL;
        

    try{
        $contenido_actual = file_get_contents("form.txt", 'r');
        $txt = fopen("form.txt", 'w');
        fwrite($txt, $formulario_data . $contenido_actual) ;

        fclose($txt);

        $lectura = file_get_contents("form.txt");
        echo nl2br($lectura);
    
    }catch(Exception $e){
        echo "ERROR!";
        echo $e;
        file_put_contents("error.log", date() . $e);
    }     
}
?>

</body>
</html>
