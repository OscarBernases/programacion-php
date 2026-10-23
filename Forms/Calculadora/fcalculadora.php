<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>CALCULADORA</h1>
    <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="post">
    Operando 1: 
    <input type="number" name="num1"><br>

    Operando 2: 
    <input type="number" name="num2"><br>

    Seleccione operación:<br>
    <input type="radio" name="operacion" value="suma">Suma<br>
    <input type="radio" name="operacion" value="resta">Resta<br>
    <input type="radio" name="operacion" value="multi">Multiplicación<br>
    <input type="radio" name="operacion" value="division">División<br>
    <input type="submit" value="Enviar">
    <input type="reset" value="Borrar">
    </form>

    <?php
    // Solo ejecutar si se pulsa submit
    include "funciones.php";

    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {

        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $operacion = $_POST["operacion"];

        echo "<h2>RESULTADO</h2>";

        switch ($operacion) {
            case 'suma':
                sumar($num1, $num2);
                break;

            case 'resta':
                restar($num1, $num2);
                break;
            case 'multiplicacion':
                multiplicar($num1, $num2);
                break;
            case 'division':
                dividir($num1, $num2);
                break;
        }
    }
    ?>
</body>
</html>