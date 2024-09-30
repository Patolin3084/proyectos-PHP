<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>session</title>
</head>
<body>
    <?php
    $usuario = "administrador";
    $password = "Administrador1";
    if((!$_POST) || ((isset($_POST["uss"])) && (isset($_POST["pass"])) && ($_POST["uss"] != $usuario) && ($_POST["pass"] != $password))){
    ?>
    <h3>Validación de sesión.</h3><br>
    <div class="container">
        <form action="session.php" method="post">
        <label for="uss">Usuario</label>
        <input type="text" name="uss" id="uss"><br><br>
        <label for="pass">Pass</label>
        <input type="password" name="pass" id="pass" minlength="8"><br><br>

        <input type="submit" value="Validar Datos"><br><br>
        </form>
    </div>
<?php
        if((isset($_POST["uss"])) && (isset($_POST["pass"])) && ($_POST["uss"] != $usuario) && ($_POST["pass"] != $password)){
            echo "DATOS INCORRECTOS!<br>Vuelve a intentarlo.";  
        }
?>
    <?php
    }else{
        $_SESSION["uss"] = $_POST["uss"];
        $_SESSION["pass"] = $_POST["pass"];
        echo "LA SESIÓN A INICIADO CON ÉXITO!<br><br>";
        var_dump ("Usuario: " . $_SESSION["uss"] . "<br>");
        var_dump ("Password: " . $_SESSION["pass"]);    
    }
    ?>
</body>

</html>