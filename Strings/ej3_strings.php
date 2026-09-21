<HTML>
<HEAD><TITLE> EJ3 Strings - Analizador de correo electrónico </TITLE></HEAD>
<BODY>
<?php
    $email = "alberto.garcia@educa.madrid.org";

    $partesEmail = explode("@", $email);
    $usuario = $partesEmail[0];
    $dominio = $partesEmail[1];

    $partesDominio = explode(".", $dominio);
    $organizacion = $partesDominio[0];
    $extension = $partesDominio[2];

    $carUser = strlen($usuario);
    $carDom = strlen($dominio);

    echo "Email: {$email}<br><br>";
    echo "Usuario: {$usuario}<br>";
    echo "Dominio: {$dominio}<br>";
    echo "Organización: {$organizacion}<br>";
    echo "Extensión: {$extension}<br><br>";
    echo "El usuario contiene {$carUser} caracteres.<br>";
    echo "El dominio contiene {$carDom} caracteres.<br>";
?>
</BODY>
</HTML>