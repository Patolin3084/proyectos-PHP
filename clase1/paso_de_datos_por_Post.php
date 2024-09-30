<!DOCTYPE html>
<?php
include_once("contador.php");
require_once("menu.php");
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paso de datos por Post</title>
</head>
<body>
    <div class="container">
        <nav>Este es el menu</nav>
        <main>
<?php
    if (!$_POST){
?>
    <h1>RELLENA NUESTRO FORMULARIO DE CONTACTO</h1>
    <div>
        <h2>Formulario de Contacto</h2>
        <form action="<?php $_SERVER ['PHP_SELF']?>" method="post">
        <label for="">escriba su nombre</label>
        <input type="text" name="nombre" placeholder="nombresito">
        <br>
        <br>
        <label for="">escriba su edad</label>
        <input type="number" name="numero" placeholder="edad">
        <br>
        <br>
        <label for="">eliga su lenguaje favorito: </label><br>
        <input type="radio" id="html" name="fav_language" value="HTML">
        <label for="html">HTML</label><br>
        <input type="radio" id="css" name="fav_language" value="CSS">
        <label for="css">CSS</label><br>
        <input type="radio" id="javascript" name="fav_language" value="JavaScript">
        <label for="javascript">JavaScript</label>
        <br>
        <br>
        <label for="">que vehículo posee: </label><br>
        <input type="checkbox" id="vehicle1" name="vehicle[]" value="Bike">
        <label for="vehicle1"> I have a bike</label><br>
        <input type="checkbox" id="vehicle2" name="vehicle[]" value="Car">
        <label for="vehicle2"> I have a car</label><br>
        <input type="checkbox" id="vehicle3" name="vehicle[]" value="Boat">
        <label for="vehicle3"> I have a boat</label>
        <br>
        <br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email"><br><br>
        <label for="pwd">Password:</label>
        <input type="password" id="pwd" name="pwd" minlength="8"><br><br>
        <br>
        <label for="">elija su color favorito: </label><br>
        <input type="color" id="favcolor" name="favcolor"><br><br>
        <br>
        <input type="submit" value="enviar todos los datos">
        <br>
        <br>
    </form>
    </div>
<?php
    }elseif(isset($_POST["leidoPor"])){
?>
    <div>
    <h1>Formulario recibido</h1>
    </div>
    <?php
    if (isset($_POST["leidoPor"]) && !empty($_POST["leidoPor"])){
        echo "El formulario fue firmado por: " . $_POST["leidoPor"];
    }       
    ?>

<?php
    }elseif(isset($_POST["comentario"])){
?>
    <div>
        <h1>Error de formulario</h1>
    </div>
    <?php
    if (){
        echo "El comentario del error es: " . $_POST["coment"];
    }       
    ?>

<?php
    }else{
?>
    <div>
    <h1>GRACIAS POR HABER RELLENADO NUESTRO FORMULARIO DE CONTACTO</h1>
    <h2>Los datos introducidos son los siguientes:</h2>
    <br>
    </div>
<?php
        if (isset($_POST["nombre"]) && !empty($_POST["nombre"])){
            echo "El nombre es: " . $_POST["nombre"];
            echo "<br>";
        }       
        if (isset($_POST["numero"]) && !empty($_POST["numero"])){
        echo "La edad es: " . $_POST["numero"];
        echo "<br>";
        }
        if (isset($_POST["fav_language"]) && !empty($_POST["fav_language"])){
        echo "El lenguaje favorito es: " . $_POST["fav_language"];
        echo "<br>";
        }
        if (isset($_POST["vehicle"]) && !empty($_POST["vehicle"])){
            echo "El/los vehiculo/s que tiene es/son: ";
            foreach ($_POST["vehicle"] as $key => $value) {
                echo $value . " ";
            } 
            echo "<br>";
        }
        if (isset($_POST["email"]) && !empty($_POST["email"])){
            echo "El mail es: " . $_POST["email"];
            echo "<br>";
        }
        if (isset($_POST["pwd"]) && !empty($_POST["pwd"])){
            echo "El password es: " . $_POST["pwd"];
            echo "<br>";
        }
        if (isset($_POST["favcolor"]) && !empty($_POST["favcolor"])){
            echo "El color favorito es: <span style=\"color:" . $_POST["favcolor"] . "\">COLOR</span>" ;
            echo "<br>";
            }
        echo "<br>";
        echo "<br>";
        echo "<br>";
?>
    <div>
    <br>
        <form action="<?php $_SERVER ['PHP_SELF']?>" method="post">
                <label for="">Firmado por</label>
                <input type="text" name="leidoPor" placeholder="leido por">
                <br>
                <br>
                <input type="submit" value="enviar firma">
        </form>
        <br>
        <form action="<?php $_SERVER ['PHP_SELF']?>" method="post">
                <input type="submit" name="comentario" value="formulario con errores">
                <br>
                <textarea name="coment" id="faltante" rows="4" cols="50" placeholder="comente aquí el error"></textarea>
        </form>
    </div>

<?php
}
?>
        </main>
    </div>
</body>
</html>
