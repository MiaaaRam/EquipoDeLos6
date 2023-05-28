<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form TARGET="_blank" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <fieldset>
            <legend>Ingresa los siguientes datos para renombrar a tu archivo</legend>
            <label>Nombre actual del txt (ruta completa con el .txt):
                <input type="text" name="nombreviejo" id="nombreviejo">
            </label>
            <br>
            <label>Nombre nuevo para el txt(solo nombre con el .txt):
                <input type="text" name="nombrenuevo" id="nombrenuevo">
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
        if(isset($_POST['nombre'])) 
        {
            rename ("$nviejo", "$nnuevo");
            echo "Listo, vuelve pronto :)"
        }
        else
        {
            echo "Algo a salido mal, intentalo de nuevo y recuerda llenar correctamente el formulario"
        }
    ?>
</body>
</html>