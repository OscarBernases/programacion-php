<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Datos del alumno</h3>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">

    Nombre: 
    <input type="text" name="nombre"><br>

    Apellido 1: 
    <input type="text" name="ape1"><br>

    Apellido 2: 
    <input type="text" name="ape2"><br>

    Fecha de Nacimiento:
    <input type="date" name="fecha"><br>

    Localidad: 
    <input type="text" name="localidad"><br>

    <input type="submit" value="Guardar Alumno">
    <input type="reset" value="Limpiar">
    </form>

    <?php
    include "funciones.php";

    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $nombre = limpiarCampos($_POST["nombre"]);
        $apellido1 = limpiarCampos($_POST["ape1"]);
        $apellido2 = limpiarCampos($_POST["ape2"]);
        $fechaNacimiento = limpiarCampos($_POST["fecha"]);
        $localidad = limpiarCampos($_POST["localidad"]);

        guardarAlumno($nombre, $apellido1, $apellido2, $fechaNacimiento, $localidad);
    }
    ?>
</body>
</html>