<?php
include_once("contador.php");

?>
<!DOCTYPE html>
<?php
    if(isset($_POST["name"]) && isset($_POST["surname"])){
        $cookie_value = (($_POST["name"]) . " " . ($_POST["surname"]));
        setcookie("user", $cookie_value, time() + 3600);
        header('Location: cookie.php');
    }
    if(isset($_POST["borrar"])){
        setcookie("user", "", time() - 3600);
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie</title>
</head>
<body>

<?php
    require_once("menu.php");

    if (isset($_POST["borrar"])) {
?>
        <h2>¡La cookie ha sido borrada!</h2>
<?php
    }elseif(isset($_COOKIE["user"])){
?>
        <h3>La cookie creada contiene: </h1><br>
<?php    
            echo $_COOKIE["user"]; 
?>
        <form action="cookie.php" method= "post">   
        <br><br><input type="submit" name="borrar"value="borrar cookie">
        </form><br>
<?php
    }else{ 
?> 
    <div class="container">
        <nav>COOKIE</nav><br>
        <h1>Configura tu Cookie</h1>
        <br>
        <form action="cookie.php" method="post">
        <label for="">Nombre y Apellido</label>
        <input type="text" name="name" placeholder="ingrese su nombre">
        <input type="text" name="surname" placeholder="ingrese su apellido">
        <input type="submit" value="configurar cookie">
        </form>
        <br>
    </div>
<?php    
    }
?>  
    
</body>
</html>