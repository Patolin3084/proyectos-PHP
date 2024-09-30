<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>Sesion</h1>
        <main>
<?php
    require_once("menu.php");

    $usuario = "administrador";
    $password = "Administrador1";
    if((!$_POST) || ((isset($_POST["Uss"])) && ($_POST["Uss"] != $usuario) && (isset($_POST["Pwd"])) && ($_POST["Pwd"] != $password))){   
?>
    <div>
        <h2>Competa Uss y Pass</h2>
        <form action="sesion.php" method="post">
        <label for="Uss">Uss:</label>
        <input type="text" id="Uss" name="Uss"><br><br>

        <label for="pwd">Password:</label>
        <input type="password" id="pwd" name="Pwd" minlength="8"><br><br>

        <input type="submit" value="validar datos">
        </form>
    </div>

<?php
        if((isset($_POST["Uss"])) && ($_POST["Uss"] != $usuario) && (isset($_POST["Pwd"])) && ($_POST["Pwd"] != $password))
            echo "<h3>Datos Incorrectos!</h3>";
        
    }else{  
            $_SESSION['nombre']=$_POST['Uss'];
            $_SESSION['pass']=$_POST['Pwd'];
            echo "Sesion Iniciada con Exito!";
            var_dump ($_SESSION);
    }
?>

        </main>
    </div>  
</body>
</html>