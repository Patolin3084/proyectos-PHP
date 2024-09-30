<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email</title>
</head>
<body>
<?php
    if(!$_POST){
?> 
    <div><h1>Rellena el formulario</h1><br>
        <form action="mail.php" method="post">

        <label for="">Nombre</label><br>
        <input type="text" name="nombre"><br><br>        
        <label for="">Apellido</label><br>
        <input type="text" name="apellido"><br><br>
        <label for="">Email</label><br>
        <input type="email" name="email"><br><br>        
        <label for="">Asunto</label><br>
        <input type="text" name="asunto"><br><br>
        <textarea name="contenido" id="" rows="20" cols="50" placeholder="contenido del mensaje"></textarea>

        <input type="submit" value="enviar formulario">
        </form>
    </div>   
<?php

    }else{    
        if (isset($_POST["nombre"]) && !empty($_POST["nombre"]))
            $nombre = $_POST["nombre"];
        if (isset($_POST["apellido"]) && !empty($_POST["apellido"]))
            $apellido = $_POST["apellido"];
        if (isset($_POST["email"]) && !empty($_POST["email"]))
            $email = $_POST["email"];
        if (isset($_POST["asunto"]) && !empty($_POST["asunto"]))
            $asunto = $_POST["asunto"];
        if (isset($_POST["contenido"]) && !empty($_POST["contenido"]))
            $contenido = $_POST["contenido"];

        $formulario = "Nombre: " . $nombre . PHP_EOL . PHP_EOL . 
                        "Apellido: " . $apellido . PHP_EOL . PHP_EOL .
                            "Email: " . $email . PHP_EOL . PHP_EOL . 
                                "Asunto: " . $asunto . PHP_EOL . PHP_EOL .
                                    "contenido: " . str_replace(".", "." . PHP_EOL, $contenido) . PHP_EOL . PHP_EOL;
        
        $mi_mail = array($nombre, $apellido, $email, $asunto, $contenido);
    
    $file = file_put_contents('mail.txt', $formulario);
    $envio = mail($mi_mail[2], $mi_mail[3], $mi_mail[4]);


/* funcion mail($var1, $var2, $var3)
$var1: destinatario
$var2: asunto
$var3: mensaje */

}
?>
</body>
</html>





