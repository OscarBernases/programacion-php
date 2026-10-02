<HTML>
<HEAD><TITLE> EJ1 - Arrays Asociativos</TITLE></HEAD>
<BODY>
<?php
    $alumnos = array(
        "Óscar" => 23,
        "Mario" => 23,
        "Kenneth" => 22,
        "Alfonso" => 20,
        "Ayman" => 19
    );

    echo "<h3>Contenido del array</h3>";
    foreach ($alumnos as $nombre => $edad) {
        echo "{$nombre} tiene {$edad} años.<br>";
    }

    echo "<h3>Segunda posición</h3>";
    reset($alumnos);
    next($alumnos);

    $nombre = key($alumnos);
    $edad = current($alumnos);

    echo "{$nombre} tiene {$edad} años.<br>";

    echo "<h3>Array ordenado por edad</h3>";

    asort($alumnos);

    foreach ($alumnos as $nombre => $edad) {
        echo "{$nombre} tiene {$edad} años.<br>";
    }

    echo "<h3>Primero y Ultimo</h3>";
    // Primera posición
    reset($alumnos);
    $nombrePrimero = key($alumnos);
    $edadPrimero = current($alumnos);

    echo "<br>Primera posición:<br>";
    echo "{$nombrePrimero} tiene {$edadPrimero} años.<br>";

    // Última posición
    end($alumnos);
    $nombreUltimo = key($alumnos);
    $edadUltimo = current($alumnos);

    echo "<br>Última posición:<br>";
    echo "{$nombreUltimo} tiene {$edadUltimo} años.<br>";
?>
</BODY>
</HTML>