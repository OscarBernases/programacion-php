<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>CONVERSOR</h1>
    <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="post">
    Número: 
    <input type="number" name="num"><br>

    Convertir a:<br>
    <input type="radio" name="operacion" value="binario">Binario<br>
    <input type="radio" name="operacion" value="octal">Octal<br>
    <input type="radio" name="operacion" value="hexa">Hexadecimal<br>
    <input type="radio" name="operacion" value="todos" checked>Todos los sistemas<br>
    <input type="submit" value="Enviar">
    <input type="reset" value="Borrar">
    </form>

    <?php
    // Solo ejecutar si se pulsa submit
    include "funciones.php";

    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $numero = limpiarCampos($_POST["num"]);
        $operacion = limpiarCampos($_POST["operacion"]);

        echo "<h1>CONVERSOR</h1>";
        echo "Número decimal: {$numero}<br>";

        switch ($operacion) {
            case 'binario':
                $binario = obtenerBinario($numero);
                echo "Número en binario: {$binario}";
                break;
            case 'octal':
                $octal = obtenerOctal($numero);
                echo "Número en octal: {$octal}";
                break;
            case 'hexa':
                $hexadecimal = obtenerHexadecimal($numero);
                echo "Número en hexadecimal: {$hexadecimal}";
                break;
            case 'todos':
                $binario = obtenerBinario($numero);
                $octal = obtenerOctal($numero);
                $hexadecimal = obtenerHexadecimal($numero);
                echo "Número en binario: {$binario}<br>";
                echo "Número en octal: {$octal}<br>";
                echo "Número en hexadecimal: {$hexadecimal}";
                break;
        }
    }
    ?>
</body>
</html>