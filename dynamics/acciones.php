<?php
session_start();
if($_SESSION["var"] == 0)
{
    $nombre = (isset($_POST['nombre']) && $_POST["nombre"] !="")? $_POST['nombre'] : ". . .   Quien eres?";
    $_SESSION["nombre"] = $nombre;
    $cas = (isset($_POST['casa']) && $_POST["casa"] !="")? $_POST['casa'] : "movimientos";
    $_SESSION["casa"] = $cas;
    $_SESSION["var"] = 1;
    header("Location: ./login.php");
    
}
else{
$accion = (isset($_POST['accion']) && $_POST["accion"] !="")? $_POST['accion'] : false;
header("Location: ./$accion.php");
}
?>