<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

    include "funciones.php";

    $nombreError = $emailError = $sexoError = "";
    $nombre = $apellido1 = $apellido2 = $email = $sexo = "";

    if (empty($_POST["nombre"])) {
        $nombreError = "Campo obligatorio.";
    } else {
        $nombre = limpiarCampos($_POST["nombre"]);
    }

    if (empty($_POST["ape1"])) {
        $apellido1 = "";
    } else {
        $apellido1 = limpiarCampos($_POST["ape1"]);
    }

    if (empty($_POST["ape2"])) {
        $apellido2 = "";
    } else {
        $apellido2 = limpiarCampos($_POST["ape2"]);
    }

    if (empty($_POST["email"])) {
        $emailError = "Campo obligatorio.";
    } else {
        $email = limpiarCampos($_POST["email"]);
    }

    if (empty($_POST["sexo"])) {
        $sexoError = "Campo obligatorio.";
    } else {
        $sexo = ucfirst(limpiarCampos($_POST["sexo"]));
    }

?>

    <h1>DATOS ALUMNOS</h1>
    <p>* Campo obligatorio.</p>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
    Nombre: 
    <input type="text" name="nombre"> * <?php echo $nombreError;?><br>

    Apellido 1: 
    <input type="text" name="ape1"><br>

    Apellido 2: 
    <input type="text" name="ape2"><br>

    Email: 
    <input type="email" name="email"> * <?php echo $emailError;?><br>

    Sexo: 
    <input type="radio" name="sexo" value="hombre" >Hombre
    <input type="radio" name="sexo" value="mujer">Mujer * <?php echo $sexoError;?><br>
    <input type="submit" value="Enviar">
    <input type="reset" value="Borrar">
    </form>

<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        visualizar($nombre, $apellido1, $apellido2, $email, $sexo);
    }
?>
</body>
</html>