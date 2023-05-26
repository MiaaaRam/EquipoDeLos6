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
        </fieldset>
    </form>
    ";

?>