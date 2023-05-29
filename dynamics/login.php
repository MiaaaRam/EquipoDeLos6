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
    <title>Movimientos</title>
    <link rel="stylesheet" href="../statics/styles/movimientos.css">
</head>
<body>

    <span id="bodytwo" align="center">
        <br>
        <h1>Hola <?=$_SESSION["nombre"]?> </h1>
        <br>
        <br>
   
    </span>
    
        <form method="post" action="./acciones.php">
            <span id="bodyfour">
                <br>
                <br>
                <label for='accion' >Movimiento:<br>
                            <input type='radio' name='accion' value='Crear' checked>Crear archivo<br>
                            <input type='radio' name='accion' value='Renombrar'>Renombrar archivo<br>
                            <input type='radio' name='accion' value='Eliminar'>Eliminar archivo<br>
                </label>

                <input type="Submit" name="Submit" value="Submit"><br> 
                <br>
                <br>
            </span>
        </form>
        <br>
        <br>
        <br>
    
    <br>
    <br>
    <br>
    <!--<a href="../dynamics/viewregistro.php">Ver los registros </a>
    intento de registros que no funciono pipipi-->
</body>
</html>


<!-- ANTERIOR A ESTEEEE PARA NO PERDERLO -->
<!-- 
// $nombre = (isset($_POST["nombre"]) && $_POST["nombre"] !="")? $_POST["nombre"] : "No especifico";


    // echo "<br>Hola " .$_POST["nombre"]. " elige el movimiento que deseas realizar:";

    // echo "<br>";
    // echo "<br>";
    // // echo "<form action='' method='post'>";
    // // action="" method="post" target="_blank" autocomplete="on"
    // echo "<form action='/login.php'  method='post'>
    //     <fieldset>
    //         <label for='mov' >Movimiento:<br>
    //                 <input type='radio' name='mov' value='Crear archivo' checked>Crear archivo<br>
    //                 <input type='radio' name='mov' value='Renombrar archivo'>Renombrar archivo<br>
    //                 <input type='radio' name='mov' value='Eliminar archivo'>Eliminar archivo<br>
    //         </label>
    //         <br>
    //         <label>
    //             <input type='submit' value='Aplicar'>
    //         </label>
    //     </fieldset>
    //     </form>
    //     <form>
    //         <label>
    //             <input type='submit' value='Registro'>
    //         </label>
    //         <br>
    //         <br>
    //         <label>
    //             <input type='submit' value='Salir'>
    //         </label>
    //     </form>
    // ";
    // $accion = (isset($_POST["mov"]) && $_POST["mov"] !="")? $_POST["mov"] : "No especifico";
    // echo $accion;
    //para verificar cada caso
    // switch -->


