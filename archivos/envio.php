<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envio</title>
</head>
<body>

    <div><h1>Rellena el formulario</h1><br>
        <form action="reception.php" method="post">

        <label for="">Nombre</label><br>
        <input type="text" name="nombre"><br><br>

        <label for="">Apellido</label><br>
        <input type="text" name="apellido"><br><br>

        <label for="">Nacimiento</label><br>
        <input type="date" name="nacimiento"><br><br>

        <label for="">Asunto</label><br>
        <input type="text" name="asunto"><br><br>

        <textarea name="contenido" id="" rows="20" cols="50" placeholder="contenido del mensaje"></textarea>

        <input type="submit" value="ENVIAR">
        </form>
    </div>   
    
</body>
</html>