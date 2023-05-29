<?php



session_start();
if($_SESSION["var"] == 0)
{
    $nombre = (isset($_POST['nombre']) && $_POST["nombre"] !="")? $_POST['nombre'] : ". . .   Quien eres?";
    $_SESSION["nombre"] = $nombre;
    $_SESSION["var"] = 1;
    header("Location: ./login.php");
    
}
else{
$accion = (isset($_POST['accion']) && $_POST["accion"] !="")? $_POST['accion'] : false;
header("Location: ./$accion.php");
}
?>