<!DOCTYPE html>
<?php
include_once("contador.php");

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bucle Post</title>
    
</head>
<body>
<?php
    require_once("menu.php");
    
    if((!$_POST) || (isset($_POST["cant"]) && !empty($_POST["cant"]) && intval($_POST["cant"])<=3)){
?>        
        <div class="container">
            <nav>BUCLE POR POST</nav>
            <main>
            <h1>PEDIDO DE FRUTAS</h1>
            <br>
    <?php
        if(isset($_POST["cant"]) && intval($_POST["cant"])<=3){
    ?>        
            <h2>LA CANTIDAD DEBE SER MAYOR QUE 3!!!</h2>
    <?php
        }
    ?>
            <br>
            <form action="<?php $_SERVER ['PHP_SELF']?>" method="post">
            <label for="">Debe pedir mas de 3 frutas: </label>
            <input type="number" name="cant" placeholder="cantida de frutas a pedir">
            <input type="submit" value="solicitar cantidad">
            </form>
            <br>
        </div>
<?php   
    }elseif(isset($_POST["cant"]) && !empty($_POST["cant"]) && intval($_POST["cant"])>3){
?>   
        <div>
            <h1>SELECCIONE LAS FRUTAS QUE DESEE:</h1>
            <br>
        </div>
        <form action="<?php $_SERVER ['PHP_SELF']?>" method="post">
<?php
        $cant = intval($_POST["cant"]);
        $ArrayAsociativoFrutas;
        for($i = 0; $i < $cant; $i++){
?>
        <label for="">Fruta pedida: </label>
        <input type="text" name="fruta[]" placeholder="fruta">
        <br>
<?php
        }
?>
        <br>
        <input type="submit" value="Solicitar Frutas">
<?php
    }elseif(isset($_POST["fruta"]) && !empty($_POST["fruta"])){
?>
        <div>
            <h1>Las frutas que usted solicito son: </h1>
            <br>
        </div>
<?php
        foreach ($_POST["fruta"] as $key => $value) {
            echo $value . " / ";
        } 
    }
?>
        </main>
    </div>  
</body>
</html>