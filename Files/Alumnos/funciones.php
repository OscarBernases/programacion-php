<?php

function limpiarCampos($campo) {
  $campo = trim($campo);
  $campo = stripslashes($campo);
  $campo = htmlspecialchars($campo);
  return $campo;
}

function guardarAlumno($nombre, $apellido1, $apellido2, $fecha, $localidad) {

  $nombre = str_pad($nombre, 40, " "); // Hasta pos 40
  $apellido1 = str_pad($apellido1, 41, " "); // Desde pos 41 hasta pos 40 + 41 = 81
  $apellido2 = str_pad($apellido2, 42, " "); // Desde pos 82 hasta pos 81 + 42 = 123
  $fecha = str_pad($fecha, 10, " "); // Desde pos 124 hasta pos 123 + 10 = 133
  $localidad = str_pad($localidad, 27, " "); // Desde pos 134 hasta pos 133 + 27 = 160

  $linea = $nombre . $apellido1 . $apellido2 . $fecha . $localidad . "\n";

  $fichero = fopen("alumnos1.txt", "a");
  fwrite($fichero, $linea);
  fclose($fichero);

  echo "Alumno añadido correctamente.";

}

function mostrarAlumno($linea) {

  $nombre    = trim(substr($linea, 0, 40)); 
  $apellido1 = trim(substr($linea, 40, 41));
  $apellido2 = trim(substr($linea, 81, 42));
  $fecha     = trim(substr($linea, 123, 10));
  $localidad = trim(substr($linea, 133, 27));

  echo "<tr>";
  echo "<td>{$nombre}</td>";
  echo "<td>{$apellido1}</td>";
  echo "<td>{$apellido2}</td>";
  echo "<td>{$fecha}</td>";
  echo "<td>{$localidad}</td>";
  echo "</tr>";
}

?>