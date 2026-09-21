<HTML>
<HEAD><TITLE> EJ4 Strings - Generador de URL amigable (slug) </TITLE></HEAD>
<BODY>
<?php
    $titulo = "Introducción a la Programación Web con PHP";

    $tituloGuiones = str_replace(" ", "-", $titulo);
    $tituloMinusculas = strtolower($tituloGuiones);

    echo "FORMA 1: http://" . strtolower($tituloGuiones) . "/<br>";
    echo "FORMA 2: http://" . $tituloMinusculas . "/";
?>
</BODY>
</HTML>
