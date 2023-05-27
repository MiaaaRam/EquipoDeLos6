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
    <?php

        if(isset($_POST['Submit']))

        {
            $accion = $_POST['accion'];
            echo "El usuario ha elegido: <b> $accion </b>";
            switch ($accion){
                case "Crear";
                        echo "<br> <br> <br> Introduce el nombre y ruta del archivo"; //mensaje de entrada
                        ?>
                            <form method="post" action="crear.php">
                                <input type="text" name="name"><br>
                                <input type="submit" name="submit" value="Submit Form"><br>
                                <!-- otro formulario para pedir el nombre (se podría hacer en otra página o en la de crear, solo direccionando)
                                pero ya así funciona -->
                            </form>
                        <?php
                        echo "<br> <br> <br>";
                        break;
                        // espacio para las otras coniciones
                case "Renombrar";
                        echo "entró renombre";
                        break;
                case "Eliminar";
                        echo "entró eliminar";
                        break;
            }
        }

    ?>

        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

        <label for='accion' >Movimiento:<br>
                    <input type='radio' name='accion' value='Crear' checked>Crear archivo<br>
                    <input type='radio' name='accion' value='Renombrar'>Renombrar archivo<br>
                    <input type='radio' name='accion' value='Eliminar'>Eliminar archivo<br>
        </label>

        <input type="Submit" name="Submit" value="Submit"><br> 

        </form>
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


