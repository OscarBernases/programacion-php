<?php

include "funciones.php";



$nombre = limpiarCampos($_POST["nombre"]);
$apellido1 = limpiarCampos($_POST["ape1"] ?? "");
$apellido2 = limpiarCampos($_POST["ape2"] ?? "");
$email = limpiarCampos($_POST["email"]);
$sexo = ucfirst(limpiarCampos($_POST["sexo"]));

visualizar($nombre, $apellido1, $apellido2, $email, $sexo);
?>