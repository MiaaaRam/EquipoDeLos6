<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php 
        $nviejo = $_POST['nombreviejo'];
        $nnuevo = $_POST['nombrenuevo'];
        if(isset($nnuevo)) 
        {
            rename ("$nviejo", "$nnuevo");
            echo "Listo, vuelve pronto :)";
        }
        else
        {
            echo "Algo a salido mal, intentalo de nuevo y recuerda llenar correctamente el formulario";
        }
    ?>
</body>
</html>