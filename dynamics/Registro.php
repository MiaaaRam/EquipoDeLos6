<?php
session_start();
if($_SESSION["var"] != 1) header("Location: ./inicio.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href='../statics/styles/<?=$_SESSION["casa"]?>.css'>
</head>
<span id="bodytwo" align="center">
        <br>
        <h1>Hola <?=$_SESSION["nombre"]?> </h1>
        <br>
        <br>
</span>
<h2>         
     Acciones que has hecho: 
</h2>  
<span id="bodyfour">
    <?=$_SESSION["nombre"]?> de <?=$_SESSION["casa"]?> ha <?$_SESSION["accion"]?>
</span>  
    
    <a href="./login.php">volver</a>
</body>
</html>