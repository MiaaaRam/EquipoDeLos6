<?php



session_start();
if($_SESSION["var"] == 0)
{
    $nombre = (isset($_POST['nombre']) && $_POST["nombre"] !="")? $_POST['nombre'] : ". . .   Quien eres?";
    $_SESSION["nombre"] = $nombre;
    header("Location: ./login.php");
    $_SESSION["var"] = 1;
}
else{
$accion = (isset($_POST['accion']) && $_POST["accion"] !="")? $_POST['accion'] : false;
header("Location: ./$accion.php");
}
?>