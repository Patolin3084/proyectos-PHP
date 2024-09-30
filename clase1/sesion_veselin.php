<?php
session_start();
if (!isset($_SESSION['count'])) {
    $_SESSION['count'] = 0;
} else {
    $_SESSION['count']++;
    //echo("<h2>Has iniciado sesion ".$_SESSION['count']." veces. </h2>");
}

if (isset($_POST['nombre']) && !empty($_POST['nombre'])) {
    $_SESSION['nombre']=$_POST['nombre'];
    //echo("<h2 style=\"color:green\">Has iniciado sesion como ".$_SESSION['nombre']."</h2>");
}else {
    //echo("<h2 style=\"color:red\">Hola debes iniciar sesion </h2>");
}   

if (isset($_POST['borra'])) {
    unset($_SESSION['nombre']);
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesiones</title>
    <style>
        #container{
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
    <div id="container">
        <h1>Sesiones</h1>
        <p> </p>
    <?php
        if (isset($_SESSION['nombre']) && !empty($_SESSION['nombre'])) {
            echo("<h2>Hola ".$_SESSION['nombre']."</h2>");
            ?>
            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
                <input type="submit" id="enviar" name="borra" value="Borrar sesion">
            </form>
            <?php
        }else {
    ?>
        <h2>Inisia sesion para acceder</h2>
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
            <label for="nombre">Escribe tu nombre</label><br>
            <input type="text" id="nombre" name="nombre" placeholder="Nombre" require><br><br>
            <input type="submit" id="enviar" value="Enviar"><br><br>
        </form>
    <?php
        }
    ?>
    <br>
    <?php
    function getVisitorIp()
    {
      // Recogemos la IP de la cabecera de la conexión
      if (!empty($_SERVER['HTTP_CLIENT_IP']))   
      {
        $ipAdress = $_SERVER['HTTP_CLIENT_IP'];
      }
      // Caso en que la IP llega a través de un Proxy
      elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))  
      {
        $ipAdress = $_SERVER['HTTP_X_FORWARDED_FOR'];
      }
      // Caso en que la IP lleva a través de la cabecera de conexión remota
      else
      {
        $ipAdress = $_SERVER['REMOTE_ADDR'];
      }
      return $ipAdress;
    }
    
    echo("Tu IP es: ".getVisitorIp());

    ?>

    </div>
    
</body>
</html>