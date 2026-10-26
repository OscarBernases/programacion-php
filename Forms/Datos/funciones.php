<?php

function limpiarCampos($campo) {
  $campo = trim($campo);
  $campo = stripslashes($campo);
  $campo = htmlspecialchars($campo);
  return $campo;
}


function visualizar($nombre, $apellido1, $apellido2, $email, $sexo) {
  
  echo "<h1>DATOS ALUMNOS</h1>";
  echo "<h3>Datos guardados correctamente.</h3>";
  echo "Nombre: {$nombre}<br>";
  echo "Apellido 1: {$apellido1}<br>";
  echo "Apellido 2: {$apellido2}<br>";
  echo "Email: {$email}<br>";
  echo "Sexo: {$sexo}<br>";
}

?>