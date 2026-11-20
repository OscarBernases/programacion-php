<?php

function limpiarCampos($campo) {
    $campo = trim($campo ?? '');
    $campo = stripslashes($campo);
    $campo = htmlspecialchars($campo);
    return $campo;
}

// 1-10 CORAZONES || 11-20 PICAS || 21-30 DIAMANTES || 31-40 TREBOLES
function crearBaraja() {
    $baraja = array();
    for ($i = 1; $i <= 40; $i++) {
        $baraja[] = $i;
    }
    return $baraja;
}

function removerBaraja($baraja) {
    shuffle($baraja);
    return array_values($baraja); // Para reindexar valores, daba error
}

function restarNumero($num) {
    if ($num > 30) {
        $num = $num - 30;
    } elseif ($num > 20) {
        $num = $num - 20;
    } elseif ($num > 10) {
        $num = $num - 10;
    }
    return $num;
}

function obtenerPuntuacionCarta($num) {
    $valor = restarNumero($num);

    if ($valor >= 8) {
        return 0.5;
    } else {
        return (float) $valor;
    }
}

function sacarCartas(&$baraja, $numCartas, &$jugadores) {
    foreach ($jugadores as $jugador => &$datos) {
        $manoJugador = [];
        for ($j = 0; $j < $numCartas; $j++) {
            $manoJugador[] = array_pop($baraja);
        }
        $datos['mano'] = $manoJugador;
        $datos['puntos'] = calcularPuntuacion($manoJugador);
    }
}

function calcularPuntuacion($mano) {
    $total = 0;

    foreach ($mano as $carta) {
        $total = $total + obtenerPuntuacionCarta($carta);
    }

    return $total;
}

function jugar(&$jugadores) {

    $boteTotal = 0;
    $mejorPuntuacion = 0;
    $ganadores = [];

    foreach ($jugadores as $nombre => &$datos) {
        $puntos = $datos['puntos'];
        $datos['puntos'] = $puntos;
        $datos['ganador'] = false;
        $datos['premio'] = 0;

        $apuesta = $datos['apuesta'];
        $datos['apuesta'] = $apuesta;
        $boteTotal = $boteTotal + $apuesta;

        if ($puntos > $mejorPuntuacion) {
            $mejorPuntuacion = $puntos;
            $ganadores = [$nombre];
        } elseif ($puntos === $mejorPuntuacion && $mejorPuntuacion > 0) {
            $ganadores[] = $nombre;
        }
    }

    // Reparto proporcional a la apuesta entre los ganadores (o a partes iguales si todos apostaron 0)

    $sumaApuestasGanadores = 0;

    foreach ($ganadores as $nombreGanador) {
        $sumaApuestasGanadores = $sumaApuestasGanadores + $jugadores[$nombreGanador]['apuesta'];
    }

    foreach ($ganadores as $nombreGanador) {
        $jugadores[$nombreGanador]['ganador'] = true;

        if ($sumaApuestasGanadores > 0) {
            $proporcion = $jugadores[$nombreGanador]['apuesta'] / $sumaApuestasGanadores;
            $jugadores[$nombreGanador]['premio'] = round($boteTotal * $proporcion, 2);
        } else {
            $jugadores[$nombreGanador]['premio'] = round($boteTotal / count($ganadores), 2);
        }
    }

    $premioPorGanador = !empty($ganadores) ? $jugadores[$ganadores[0]]['premio']: 0;

    return [
        'bote' => $boteTotal,
        'ganadores' => $ganadores,
        'mejorPuntuacion' => $mejorPuntuacion,
        'premioPorGanador' => $premioPorGanador,
    ];
}

function mostrarTablaResultados($jugadores) {
    echo '<div class="tablewrap">';
    echo '<table class="score">';
    echo '<thead><tr><th>Jugador</th><th>Cartas obtenidas</th><th>Puntuación</th><th>Premio</th></tr></thead>';
    echo '<tbody>';

    foreach ($jugadores as $nombre => $datos) {
        $puntos = $datos['puntos'];
        $esGanador = !empty($datos['ganador']);
        $claseFila = $esGanador ? ' class="win"' : '';
        $premioFormateado = formatearEuros($datos['premio'] ?? 0);

        echo '<tr' . $claseFila . '>';
        echo '<td>' . htmlspecialchars($nombre) . '</td>';
        echo '<td>' . mostrarCartasJugador($datos['mano']) . '</td>';
        echo '<td>' . $puntos . '</td>';
        echo '<td>' . $premioFormateado . '</td>';
        echo '</tr>';
    }

    echo '</tbody>';
    echo '</table>';
    echo '</div>';
}

function formatearEuros($cantidad) {
    return number_format((float) $cantidad, 2, ',', '.') . ' €';
}

function mostrarCartasJugador($mano) {
    $html = '';
    
    foreach ($mano as $carta) {
        $html = $html . '<img src="images/' . $carta . '.png" style="width: 60px; height: auto; margin-right: 5px;">';
    }

    return $html;
}
?>