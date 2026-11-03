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
    Nombre del valor: 
    <input type="text" name="valor"><br><br>

    <input type="submit" value="Buscar Valor">
    <input type="reset" value="Borrar">
    </form>

    <?php
    include "funciones.php";

    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $fichero = "ibex35.txt";
        $buscado = strtoupper(limpiarCampos($_POST["valor"]));
        buscarValor($fichero, $buscado);
    }
    ?>
</body>
</html>