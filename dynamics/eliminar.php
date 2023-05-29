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

</head>
<span id="bodytwo" align="center">
        <br>
        <h1>Hola <?=$_SESSION["nombre"]?> </h1>
        <br>
        <br>

     <h2>         
     Introduce el nombre y ruta del archivo a eliminar
</h2>         
<?php  
if(isset($_POST['Submit'])) ?>
                         <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                            <input type="text" name="name"><br>
                            <input type="submit" name="submit" value="Submit Form"><br>
                        </form>
  <?php ?>
              
  
<body id="bodytres">
    <?php 

        $arch=(isset($_POST['name']) && $_POST["name"] != "")? $_POST['name'] : "Falta Valor"; 
        echo ('Hola '.$_SESSION["nombre"]);     
        $fp = unlink('../newArch/'.$arch,);
        if($fp == false) { 
            echo "No se ha podido ELIMINAR el archivo."; 
        }
        else  echo "Archivo  <strong>" .$arch. "</strong> Eliminado <br>"; 

  ?>
  <a href="./login.php">volver</a>
</html>