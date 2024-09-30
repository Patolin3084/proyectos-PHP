<!DOCTYPE html>
<?php
include_once("contador.php");
require_once("menu.php");
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paso de datos por Get</title>
</head>
<body>
    <a href="paso_de_datos_por_Get.php?">enlace1</a>
    <?php
    if (isset($_GET['var1']) && !empty($_GET['var1'])){
        echo "la variable 1 es " . $_GET['var1'];
        echo "<br>";
    }
    if (isset($_GET['var2']) && !empty($_GET['var2'])){
        echo "la variable 2 es " . $_GET['var2'];
        echo "<br>";
    }
    if (isset($_GET['var3']) && !empty($_GET['var3'])){
        echo "la variable 3 es " . $_GET['var3'];
        echo "<br>";
    }

    ?>
    <br>
    <br>
    <form action="paso_de_datos_por_Get.php" method="get">
        <label for="">escriba su nombre</label>
        <input type="text" name="nombre" placeholder="nombresito">
        <br>
        <br>
        <label for="">escriba un numero</label>
        <input type="number" name="numero" placeholder="numerito">
        <br>
        <br>
        <input type="radio" id="html" name="fav_language" value="HTML">
        <label for="html">HTML</label><br>
        <input type="radio" id="css" name="fav_language" value="CSS">
        <label for="css">CSS</label><br>
        <input type="radio" id="javascript" name="fav_language" value="JavaScript">
        <label for="javascript">JavaScript</label>
        <br>
        <br>
        <input type="checkbox" id="vehicle1" name="vehicle[]" value="Bike">
        <label for="vehicle1"> I have a bike</label><br>
        <input type="checkbox" id="vehicle2" name="vehicle[]" value="Car">
        <label for="vehicle2"> I have a car</label><br>
        <input type="checkbox" id="vehicle3" name="vehicle[]" value="Boat">
        <label for="vehicle3"> I have a boat</label>
        <br>
        <br>
        <input type="color" id="favcolor" name="favcolor"><br><br>
        <br>
        <input type="submit" value="enviar todos los datos">
        <br>
        <br>

    </form>
    <?php
        if (isset($_GET["nombre"]) && !empty($_GET["nombre"])){
            echo "El nombre es: " . $_GET["nombre"];
            echo "<br>";
        }       
        if (isset($_GET["numero"]) && !empty($_GET["numero"])){
        echo "La edad es: " . $_GET["numero"];
        echo "<br>";
        }
        if (isset($_GET["fav_language"]) && !empty($_GET["fav_language"])){
        echo "El lenguaje favorito es: " . $_GET["fav_language"];
        echo "<br>";
        }
        if (isset($_GET["vehicle"]) && !empty($_GET["vehicle"])){
            echo "El/los vehiculo/s que tiene es/son: ";
            foreach ($_GET["vehicle"] as $key => $value) {
                echo $value . " ";
            } 
        }
        if (isset($_GET["favcolor"]) && !empty($_GET["favcolor"])){

            echo "El color favorito es: <span style=\"color:" . $_GET["favcolor"] . "\">COLOR</span>" ;
            echo "<br>";
            }
    ?>

  
</body>
</html>