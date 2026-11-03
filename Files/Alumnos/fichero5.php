<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Operaciones ficheros</h3>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
    Fichero (ruta / nombre): 
    <input type="text" name="fichero"><br>

    Operaciones:<br>
    <input type="radio" name="operacion" value="todo" checked>Mostrar todo el fichero<br>
    <input type="radio" name="operacion" value="linea">Mostrar linea <input type="number" name="numLinea" value="1" min="1"><br>
    <input type="radio" name="operacion" value="primeras"> Mostrar N primeras líneas <input type="number" name="numPrimeras" value="5" min="1"><br>

    <input type="submit" value="Ejecutar">
    <input type="reset" value="Borrar">
    </form>

    <?php
    include "funciones.php";

    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $fichero = trim(($_POST["fichero"]));
        $operacion = limpiarCampos($_POST["operacion"]);
        $numLinea = limpiarCampos($_POST["numLinea"]);
        $numPrimeras = limpiarCampos($_POST["numPrimeras"]);

        visualizarFicheroOperacion($fichero, $operacion, $numLinea, $numPrimeras);
    }

    ?>
</body>
</html>