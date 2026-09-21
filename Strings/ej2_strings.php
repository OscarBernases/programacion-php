<HTML>
<HEAD><TITLE> EJ2 Strings - Analizador de nombre de usuario </TITLE></HEAD>
<BODY>
<?php
    $nombre = " aLBeRTo gaRCia loPEz ";

    $nombreLimpio = trim($nombre);
    $nombreNormalizado = ucwords(strtolower($nombreLimpio));
    $caracteres = strlen($nombreLimpio);
    $partes = explode(" ", $nombreNormalizado);
    $iniciales = substr($partes[0], 0, 1) . "." . substr($partes[1], 0, 1) . "." . substr($partes[2], 0, 1);
    $nombreUsuario = strtolower($partes[0]) . "." . strtolower($partes[1]);

    echo "Cadena original: {$nombre}<br>";
    echo "Nombre normalizado: {$nombreNormalizado}<br>";
    echo "Número de caracteres: {$caracteres}<br>";
    echo "Nombre: {$partes[0]}<br>";
    echo "Primer apellido: {$partes[1]}<br>";
    echo "Segundo apellido: {$partes[2]}<br>";
    echo "Iniciales: {$iniciales}<br>";
    echo "Nombre de usuario: {$nombreUsuario}";
?>
</BODY>
</HTML>
