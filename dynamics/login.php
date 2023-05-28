<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movimientos</title>
    <link rel="stylesheet" href="./statics/styles/movimientos.css">
</head>
<body>
    <?php
    $nombre = (isset($_POST["nombre"]) && $_POST["nombre"] !="")? $_POST["nombre"] : "No especifico";


    echo /*"<br>Hola " .$_POST["nombre"].*/ " elige el movimiento que deseas realizar:";

    echo "<br>";
    echo "<br>";
    // echo "<form action='' method='post'>";
    // action="" method="post" target="_blank" autocomplete="on"
    echo "<form>
        <fieldset>
            <label for='mov' >Movimiento:<br>
                    <input type='radio' name='mov' value='Crear archivo' checked>Crear archivo<br>
                    <input type='radio' name='mov' value='Renombrar archivo'>Renombrar archivo<br>
                    <input type='radio' name='mov' value='Eliminar archivo'>Eliminar archivo<br>
            </label>
            <br>
            <label>
                <input type='submit' value='Aplicar'>
            </label>
        </fieldset>
        </form>
        <form>
            <label>
                <input type='submit' value='Registro'>
            </label>
            <br>
            <br>
            <label>
                <input type='submit' value='Salir'>
            </label>
        </form>
    ";

?>
</body>
</html>


