<?php

    $nombre = (isset($_POST["nombre"]) && $_POST["nombre"] !="")? $_POST["nombre"] : "No especifico";

    echo "<br>Hola " .$_POST["nombre"]. " elige el movimiento que deseas realizar:";

    echo "<br>";
    echo "<br>";
    // echo "<form action='' method='post'>";
    // action="" method="post" target="_blank" autocomplete="on"
    echo "<form>
        <fieldset>
        <legend>Movimientos</legend>
        <label for='mov' >Movimiento:<br>
                <input type='radio' name='mov' value='Crear archivo' checked>Crear archivo<br>
                <input type='radio' name='mov' value='Renombrar archivo'>Renombrar archivo<br>
                <input type='radio' name='mov' value='Eliminar archivo'>Eliminar archivo<br>
            </label>
            <br>
        </fieldset>
    </form>
    ";

?>