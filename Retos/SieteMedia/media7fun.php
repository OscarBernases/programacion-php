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
    }
}

function calcularPuntuacion($mano) {
    $total = 0;

    foreach ($mano as $carta) {
        $total = $total + obtenerPuntuacionCarta($carta);
    }

    return $total;
}

function mostrarTablaResultados($jugadores) {
    echo '<table class="score">';
    echo '<thead><tr><th>Jugador</th><th>Cartas obtenidas</th><th>Puntos</th></tr></thead>';
    echo '<tbody>';

    foreach ($jugadores as $nombre => $datos) {
        echo '<tr>';
        echo '<td>' . htmlspecialchars($nombre) . '</td>';
        echo '<td>' . mostrarCartasJugador($datos['mano']) . '</td>';
        echo '<td>' . calcularPuntuacion($datos['mano']) . '</td>';
        echo '</tr>';
    }

    echo '</tbody>';
    echo '</table>';
}

function mostrarCartasJugador($mano) {
    $html = '';
    
    foreach ($mano as $carta) {
        $html = $html . '<img src="images/' . $carta . '.png" style="width: 60px; height: auto; margin-right: 5px;">';
    }

    return $html;
}
?>