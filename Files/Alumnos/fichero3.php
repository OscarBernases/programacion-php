<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Mostrar datos alumnos</h3>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
    <input type="submit" value="Mostrar datos del fichero alumnos1.txt">
    </form>

    <?php
    include "funciones.php";

    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $fichero = fopen("alumnos1.txt", "r");
        $contador = 0;

        echo "<table>";
        echo "<tr><th>Nombre</th><th>Apellido 1</th><th>Apellido 2</th><th>Fecha nacimiento</th><th>Localidad</th></tr>";

        while (($linea = fgets($fichero)) !== false) {
            mostrarAlumno($linea);
            $contador++;
        }

        echo "</table>";
        echo "Existen {$contador} lineas en el fichero."; 

        fclose($fichero);
    }
    ?>
</body>
</html>