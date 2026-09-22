<HTML>
<HEAD><TITLE> EJ4 Strings - Generador de URL amigable (slug) </TITLE></HEAD>
<BODY>
<?php
    $titulo = "Introducción a la Programación Web con PHP";

    $tituloGuiones = str_replace(" ", "-", $titulo);
    $tituloMinusculas = strtolower($tituloGuiones);

    $tituloSinTilde = str_replace("ó", "o", $tituloGuiones);
    $tituloSinTilde = str_replace("ó", "o", $tituloMinusculas);
    echo "FORMA 1: http://" . strtolower($tituloSinTilde) . "/<br>";
    echo "FORMA 2: http://" . $tituloSinTilde . "/";
?>
</BODY>
</HTML>
