<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../statics/styles/crear.css">
</head>
<body id="bodytres">
    <?php 
        //$nombre = (isset($_POST['nombre']) && $_POST["nombre"] !="")? $_POST['nombre'] : "No especifico";//para recibir el nombre del usuario pero sale no especifico pipipi
        $arch=(isset($_POST['name']) && $_POST["name"] != "")? $_POST['name'] : "Falta Valor"; //recibe nombre del archivo
        echo "Hola <br>"; //mensaje de entrada
        echo "Archivo  <strong>" .$arch. "</strong> creado <br>"; //te dice que se creo
        //echo $arch."<br>"; //te dice q puso el usuario

        
        $fp = fopen($arch,"w+"); //lo crea
        if($fp == false) { 
            echo "No se ha podido crear el archivo.";  //verifica
        }
        // INTETNO DE CAMBIAR LA RUTA DE GUARDADO, NO NECESARIO, PERO QUERÍA INTENTAR
        // $origen="/".$arch;
        // $destino="'/archivos/'".$arch;
        // $cambia_ruta = rename($origen, $destino);
    ?>
</body>
</html>