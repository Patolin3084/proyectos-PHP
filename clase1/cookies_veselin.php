<!DOCTYPE html>
<?php
if (isset($_POST['nombre']) && !empty($_POST['nombre']) && isset($_POST['apellido']) && !empty($_POST['apellido'])) {
    $cookie_name = "user";
    $cookie_value = $_POST['nombre']." ".$_POST['apellido'];
    setcookie($cookie_name, $cookie_value, time() + (30), "/"); // 86400 = 1 day
    //es lo mismo como lo de arriba    
    //setcookie("user",($_POST['nombre']." ".$_POST['apellido']), time() + (30), "/" );
}elseif (isset($_POST['borrarcookie'])) {
    setcookie("user", "", time() - 1);
    //var_dump($_COOKIE);
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Setear Cookies</title>
    <style>
        #contenedor{
            display: grid;
            align: center;
            place-items: center;
            height: 600px;
            width: 600px;
            border: 2px solid blue;
            border-radius: 15px 50px;
        }
    </style>
</head>
<body>
    <div id="contenedor"><!--Inicio contenedor -->
    <?php
        if (isset($_COOKIE['user']) && !empty($_COOKIE['user'])) {
            echo("<h2>La COOKIE tiene guardado este valor: \" <br>".$_COOKIE['user']." \"<br></h2><br>");
            var_dump($_COOKIE['user']);
            ?>
                <br><br>
                <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
                <input type="submit" name="borrarcookie" value="Borrar Cookie">
                </form>
                <?php
                if (isset($_COOKIE['user']) && empty($_COOKIE['user'])) {
                echo("Las cookies han sido borradas");
                }
                ?>  
            <?php
        }else {  
        ?>    
            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
                <label for="nombre">Escribe un nombre</label><br>
                <input type="text" id="nombre" name="nombre" placeholder="Nombre"><br><br>
                <label for="apellido">Escribe un apellido</label><br>
                <input type="text" id="apellido" name="apellido" placeholder="Apellido"><br><br>
                <input type="submit" id="enviar" value="Enviar"><br><br>
            </form>
        <?php
        }   
    ?>

    </div><!--Fin contenedor -->
    
</body>
</html>