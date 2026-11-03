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

  $nombre = trim(substr($linea, 0, 40)); 
  $apellido1 = trim(substr($linea, 40, 41));
  $apellido2 = trim(substr($linea, 81, 42));
  $fecha = trim(substr($linea, 123, 10));
  $localidad = trim(substr($linea, 133, 27));

  echo "<tr>";
  echo "<td>{$nombre}</td>";
  echo "<td>{$apellido1}</td>";
  echo "<td>{$apellido2}</td>";
  echo "<td>{$fecha}</td>";
  echo "<td>{$localidad}</td>";
  echo "</tr>";
}

function comprobarFichero($fichero) {

  if(!file_exists($fichero)){
    
    echo "Error el fichero {$fichero} no existe";
    return false;
  } else {
    return true;
  }

}

function visualizarFicheroOperacion($fichero, $operacion, $numLinea, $numPrimeras) {

  if (comprobarFichero($fichero) === true) {
    $lineas = file($fichero);
    $totalLineas = count($lineas);

    // Visualizar
    echo "<h3>Contenido del fichero:</h3>";

    switch ($operacion) {

      case "todo":
        for ($i=0; $i < $totalLineas; $i++) { 
          echo "Linea {$i}: {$lineas[$i]}<br>";
        }
        break;

      case "linea":
        if($numLinea >= 1 && $numLinea <= $totalLineas){
          echo "{$lineas[$numLinea-1]}";
        } else {
          echo "Error: El fichero solamente tiene {$totalLineas} lineas";
        }
        break;

      case "primeras":
        for ($i=0; $i < $numPrimeras && $i < $totalLineas; $i++) { 
            echo "{$lineas[$i]}<br>";
        }
        break;
    }
  }
}

function visualizarDatosFichero($fichero) {

  if (comprobarFichero($fichero) === true) {
    $nombre = pathinfo($fichero, PATHINFO_BASENAME);
    $ruta = realpath($fichero);
    $tamaño = filesize($fichero);
    $ultimoAcceso = date("d/m/y", fileatime($fichero));
    $ultimaModificacion =  date("d/m/y", filectime($fichero));
    $tipo = pathinfo($fichero, PATHINFO_EXTENSION);

    echo "<h3>Datos del fichero:</h3>";
    echo "Nombre: {$nombre}<br>";
    echo "Ruta: {$ruta}<br>";
    echo "Tamaño: {$tamaño} bytes<br>";
    echo "Ultimo Acceso: {$ultimoAcceso}<br>";
    echo "Ultima Modificación: {$ultimaModificacion}<br>";
    echo "Tipo: {$tipo}";
  }
  
}

?>