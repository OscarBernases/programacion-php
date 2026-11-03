<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Mostrar datos del fichero</h3>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
    Fichero (ruta / nombre): 
    <input type="text" name="fichero"><br>

    <input type="submit" value="Ejecutar">
    <input type="reset" value="Borrar">
    </form>

    <?php
    include "funciones.php";

    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $fichero = trim(($_POST["fichero"]));

        visualizarDatosFichero($fichero);
    }
    ?>
</body>
</html>