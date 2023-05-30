<?php
session_start();
if($_SESSION["var"] != 1) header("Location: ./inicio.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>hola</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
         <link rel="stylesheet" href='../statics/styles/<?=$_SESSION["casa"]?>.css'>
    </head>
    <body>
    
<form  TARGET='_blank' method='post' action="<?php echo $_SERVER['PHP_SELF']; ?>">
             <fieldset class="form">
            <legend class="legend">Ingresa los siguientes datos para renombrar a tu archivo</legend>
                    <label>Nombre actual del txt :
                        <input type='text' name='nombreviejo' id='nombreviejo'>
                   </label>
                    <br>
                    <label>Nombre nuevo para el txt(ruta completa con el .txt):
                        <input type='text' name='nombrenuevo' id='nombrenuevo'>
                    </label>
                      <br>
                    <br>
                    <label>
                        <input type='submit' value='Enviar'>
                    </label>
               </fieldset>
</form>
<?php 
        $nviejo = $_POST['nombreviejo'];
        $nnuevo = $_POST['nombrenuevo'];
        if(isset($nnuevo)) 
        {
            rename ("../newArch/$nviejo", "../newArch/$nnuevo");
            echo "Listo, vuelve pronto :)";
        }
        else
        {
            echo "Algo a salido mal, intentalo de nuevo y recuerda llenar correctamente el formulario";
        }
    ?>
        <h1> renombrar</h1>
        <a href="./login.php">volver</a>
    </body>

</html>