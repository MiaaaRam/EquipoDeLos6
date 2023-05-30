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

     <h2 class="legend">         
     Introduce el nombre 
</h2>         
                          <form  method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                                <input type="text" name="name"><br>
                                <input type="submit" name="submit" value="Submit Form"><br>
                                <!-- otro formulario para pedir el nombre (se podría hacer en otra página o en la de crear, solo direccionando)
                                pero ya así funciona -->
                            </form>
  
              
  
<body id="bodytres">
    <?php 

        $arch=(isset($_POST['name']) && $_POST["name"] != "")? $_POST['name'] : "Falta Valor"; 
        echo ('Hola '.$_SESSION["nombre"]);     
        $fp = fopen('../newArch/'.$arch,"x"); //lo crea
        if($fp == false) { 
            echo "No se ha podido crear el archivo.";  //verifica
        }
        else  echo "Archivo  <strong>" .$arch. "</strong> Creado <br>"; 

  ?>
  <a href="./login.php">volver</a>
</body>
</html> 