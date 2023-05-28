<?php

$accion = (isset($_POST['accion']) && $_POST["accion"] !="")? $_POST['accion'] : false;
header("Location: ./$accion.php");

?>